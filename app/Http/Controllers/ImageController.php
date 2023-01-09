<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Image;

class ImageController extends Controller
{
    public function imageWatermark(){

        $watermark =Image::make(public_path('images/watermark.png'))->resize(640, 427);
        
        $image = Image::make(public_path('images/pic.jpg'))->resize(640, 427);

        $image->insert($watermark, 'bottom-right', 5, 5);

        $image->save(public_path('images/pic-new.png'));

        dd('Yes, watermark added!');
    }
}
