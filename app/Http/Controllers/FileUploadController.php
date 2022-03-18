<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function uploadProfileImage(Request $request)
    {
        $resizedImage = cloudinary()->upload($request->file('image')->getRealPath(), [
            'folder' => 'profile-images',
            'transformation' => [
                'width' => 100,
                'height' => 100
            ]
        ])->getSecurePath();

        dd($resizedImage);
    }

    public function uploadPostImage(Request $request)
    {
        $resizedImage = cloudinary()->upload($request->file('image')->getRealPath(), [
            'folder' => 'profile-images',
            'transformation' => [
                'width' => 100,
                'height' => 100
            ]
        ])->getSecurePath();

        dd($resizedImage);
    }
}
