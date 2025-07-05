<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class FrontendPageController extends Controller
{
    public function index()
    {
        $pages = About::all();
        return view('front.bilim_edarasy', compact('pages'));
    }
}
