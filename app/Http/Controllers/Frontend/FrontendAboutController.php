<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class FrontendAboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('front.bilim_edarasy', compact('abouts'));
    }
}
