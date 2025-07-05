<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Notes;
use Illuminate\Http\Request;

class FrontendNotesController extends Controller
{
    public function index()
    {
        $notes = Notes::all();
        return view('front.notes', compact('notes'));
    }
}
