<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Olympaid;
use Illuminate\Http\Request;

class FrontendOlympaidController extends Controller
{
    public function index()
    {
        $olympaids = Olympaid::all();
        return view('front.olimpiadalar', compact('olympaids'));
    }
}
