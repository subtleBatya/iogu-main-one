<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FrontendFacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculty::all();
        return view('front.fakulteti_kafedri', compact('faculties'));
    }
}
