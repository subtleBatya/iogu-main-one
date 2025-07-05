<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Yolbashcylar;
use Illuminate\Http\Request;

class FrontendTeacherController extends Controller
{
    public function index()
    {
        $teachers = Yolbashcylar::all();
        return view('front.yolbascylar', compact('teachers'));
    }
}

