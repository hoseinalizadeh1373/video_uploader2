<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function upload()
    {
        return view('upload');
    }

    public function store(Request $request ,Video $video)
    {
        // $validator = $request->validate([
        //     'title' =>'required',
        //     'desc' => ' required',
        //     'video'=>'required'
        // ]);
        // phpinfo();
        // exit;

        //   dd($request->file());
       
        //     $this->validate($request,[
        //         "file"=>"required"
        //     ]);
        $video = Video::Create($request->all());
        $video->addMediaFromRequest("file")->toMediaCollection("video");
        
      

        return redirect()->route('wel');
    }
}
