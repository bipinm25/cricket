<?php
namespace App\lib\ImageSave;

use App\lib\ImageInterface\ImageInterface;

class ImageSave implements ImageInterface{
    public function saveImage($request, $name, $path) {
        $fileName = time().'.'.$request->$name->extension();         
        $request->$name->move(public_path($path), $fileName);
        return $fileName;        
    }
}