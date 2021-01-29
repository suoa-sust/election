<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function uploadPhoto()
    {
        return view('admin.gallery.create');
    }
}
