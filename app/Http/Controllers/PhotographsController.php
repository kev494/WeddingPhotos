<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotographsController extends Controller
{
    public function index() {
        return view('photographs');
    }
}
