<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class GuestsController extends Controller
{
    public function index() {
        $files = scandir(storage_path() . '/app/public/guest/') ;
        $file_paths = array();
        foreach ($files as $file) {
            if(strcmp($file, ".") != 0 && strcmp($file, "..") != 0){
                array_push($file_paths, asset(Storage::url('guest/'.$file)));
            }
        }
        return view('guests', compact('file_paths'));
    }

    public function upload(Request $request) {
        $img_height = 200;
        if ($request->hasFile('upload_new_file')) {
            $file = $request->file('upload_new_file'); 
            $timestamp = date("Y-m-d_H-i-s");
            $path = 'public/guest/' . $timestamp . '.png';
            $pathThumb = 'public/thumb/' . $timestamp . '_thumb.png';
            $img = Image::make($file)->encode('png');
            $img_PercHeight = $img_height / $img->height();
            $img_width = $img->width() * $img_PercHeight;
            Storage::put($path, $img);
            Storage::put($pathThumb, $img->resize($img_width, $img_height)->encode('png'));
        }
        flash('Das Bild wurde hochgeladen', 'success');
        return redirect()->back();
    }
}
