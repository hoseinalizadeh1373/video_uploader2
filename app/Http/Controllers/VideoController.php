<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function list()
    {
        $videos = Video::latest()->paginate(3);
        return view('list_video', compact('videos'));
    }


    public function upload()
    {
        return view('upload');
    }

    public function store(Request $request, Video $video)
    {
        // $validator = $request->validate([
        //     'title' =>'required',
        //     'desc' => ' required',
        //     'video'=>'required'
        // ]);
        // $request->validate([
        //     'title' => 'required',
        //     'video' => 'required|file|mimetypes:video/mp4'
        // ]);
        $this->validate($request,[
            'title' => 'required',
            'file' => 'required|file|mimetypes:video/mp4'
        ]);

        // phpinfo();
        // exit;

        //   dd($request->file());

        //     $this->validate($request,[
        //         "file"=>"required"
        //     ]);
        $video = Video::Create($request->all());
        $video->addMediaFromRequest("file")->toMediaCollection("video");



        return redirect()->route('list_video');
    }
}
