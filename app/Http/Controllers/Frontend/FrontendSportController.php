<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Sport;
use Illuminate\Http\Request;

class FrontendSportController extends Controller
{
    public function index()
    {
        $sports = Sport::all();
        return view('front.sport', compact('sports'));
    }
}
