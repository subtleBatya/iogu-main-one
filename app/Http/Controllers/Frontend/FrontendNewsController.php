<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class FrontendNewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('front.tazelikler', compact('news'));
    }
}
