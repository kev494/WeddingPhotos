<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CamerasController extends Controller
{
    public function index() {
        return view('cameras');
    }
}
