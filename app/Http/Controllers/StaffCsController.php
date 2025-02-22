<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan;

class StaffCsController extends Controller
{
    public function index()
    {
        $todayPelayanan = Pelayanan::whereDate('tanggal', now()->toDateString())->get();
        return view('cs.dashboard', compact('todayPelayanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_pelayanan' => 'required|string|max:255',
        ]);

        Pelayanan::create([
            'jenis_pelayanan' => $request->jenis_pelayanan,
            'tanggal' => now()->toDateString(),
            'jam' => now()->toTimeString(),
        ]);

        return redirect()->route('cs.dashboard')->with('success', 'Data berhasil disimpan!');
    }
}
