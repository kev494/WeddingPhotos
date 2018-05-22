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
            try{
                $files = $request->file('upload_new_file'); 
                foreach($files as $file) {
                    $uid = uniqid();
                    $path = 'public/guest/' . $uid . '.png';
                    $pathThumb = 'public/thumb/' . $uid . '_thumb.png';
                    $img = Image::make($file)->encode('png');
                    $img_PercHeight = $img_height / $img->height();
                    $img_width = $img->width() * $img_PercHeight;
                    Storage::put($path, $img);
                    Storage::put($pathThumb, $img->resize($img_width, $img_height)->encode('png'));
                }
                flash('Bild/er wurde/n hochgeladen')->success()->important();
            } catch (\Exception $exception) {
                flash('Bild/er wurde/n nicht hochgeladen')->error()->important();
            }
        }
        
        return redirect()->back();
    }
}
