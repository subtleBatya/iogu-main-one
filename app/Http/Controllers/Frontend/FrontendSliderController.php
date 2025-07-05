<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Structure;
use Illuminate\Http\Request;

class FrontendSliderController extends Controller
{
    public function index()
    {
        $sliders = Structure::all();
        return view('front.structure', compact('sliders'));
    }
}
