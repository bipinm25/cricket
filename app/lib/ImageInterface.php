<?php

namespace App\lib\ImageInterface;

interface ImageInterface{
    public function saveImage($request, $name, $path);
}