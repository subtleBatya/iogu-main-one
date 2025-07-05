<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Dalahgar;
use Illuminate\Http\Request;

class FrontendDepartmentController extends Controller
{
    public function index()
    {
        $departments = Dalahgar::all();
        return view('front.fakulteti_kafedri', compact('departments'));
    }
}
