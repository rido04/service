<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan; // Pastikan model sudah ada

class StaffCsController extends Controller
{
    public function index()
    {
        return view('cs.dashboard');
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
