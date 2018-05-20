<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotographsController extends Controller
{
    public function index() {
        //$testphoto = Storage::get('testphoto.jpeg');
        //dd($testphoto);
        return view('photographs');
    }
}
