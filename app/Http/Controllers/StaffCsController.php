<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffCsController extends Controller
{
    public function index()
    {
        return view('cs.dashboard');
    }
}
