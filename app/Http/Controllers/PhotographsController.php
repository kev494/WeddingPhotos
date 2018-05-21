<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotographsController extends Controller
{
    public function index() {
        $files = scandir(storage_path() . '/app/public/photograph/') ;
        $file_paths = array();
        foreach ($files as $file) {
            if(strcmp($file, ".") != 0 && strcmp($file, "..") != 0){
                array_push($file_paths, asset(Storage::url('photograph/'.$file)));
            }
        }
        return view('photographs', compact('file_paths'));
    }
}
