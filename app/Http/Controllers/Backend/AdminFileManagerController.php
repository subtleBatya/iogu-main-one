<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminFileManagerController extends Controller
{
    /**
     * Display the admin file manager page with elfinder.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin_panel.filemanager.index');
    }
}
