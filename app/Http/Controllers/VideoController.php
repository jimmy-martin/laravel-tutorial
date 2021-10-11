<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show()
    {
        return view('videos', [
            'videos' => Video::all()
        ]);
    }

    public function item($id)
    {
        return view('video', [
            'video' => Video::findOrFail($id)
        ]);
    }
}
