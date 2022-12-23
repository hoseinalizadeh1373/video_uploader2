<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function list()
    {
        
        $videos = Video::latest()->paginate(6);
        return view('list_video', compact('videos'));
    }


    public function upload()
    {
        return view('upload');
    }

    public function store(Request $request, Video $video)
    {
        
         $this->validate($request,[
            'title' => 'required|max:30',
            'desc' =>'max:120|required',
            'file' => 'required|file|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:200000'
        ]);
        

        $video = Video::Create($request->all());
        $video->addMediaFromRequest("file")->toMediaCollection("video");

        return redirect()->route('list_video');
    }
}
