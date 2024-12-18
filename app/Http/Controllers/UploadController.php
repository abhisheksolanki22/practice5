<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(Request $request){
        // return "Uploaded";
        $path = $request->file('file')->store('public');
        // return $path;

        $path = $request->file('file')->storeAs('public', 'dummy1.avif');

        $fileArray = explode('/', $path);
        $fileName = $fileArray[1];
        return view('display', ['path'=> $fileName]);
    }
}
