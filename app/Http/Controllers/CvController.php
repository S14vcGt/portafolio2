<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    public function downloadFile()
    {
        $path=Storage::path('public/Sebastian_Mata_CV.pdf');
        return response()->download($path,'Sebastian_Mata_CV.pdf');
    }
}
