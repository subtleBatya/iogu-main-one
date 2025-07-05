<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Notes;
use Illuminate\Http\Request;

class FrontendAnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Notes::all();
        return view('front.bildirishler', compact('announcements'));
    }
}
