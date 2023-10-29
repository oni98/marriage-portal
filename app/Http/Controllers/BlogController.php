<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function marriageMedia()
    {
        return view('frontend.blogs.marriage_media');
    }
}
