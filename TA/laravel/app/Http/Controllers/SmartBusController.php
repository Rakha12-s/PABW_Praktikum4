<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rute;

class SmartBusController extends Controller
{
    public function index()
    {
        $rutes = Rute::with('buses')->get();

        return view('smartbus.index', compact('rutes'));
    }
}
