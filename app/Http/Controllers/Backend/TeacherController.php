<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Yolbashcylar;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = Yolbashcylar::paginate($numOfDataOnPage);
        return view('admin_panel.teacher.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = Yolbashcylar::where('name', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.teacher.index', compact('data', 'numOfDataOnPage'));
    }

    public function create()
    {
        return view('admin_panel.teacher.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
        ]);

        Yolbashcylar::create($request->only('name', 'bio'));

        return redirect()->route('teacher.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = Yolbashcylar::findOrFail($id);
        return view('admin_panel.teacher.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
        ]);

        $item = Yolbashcylar::findOrFail($id);
        $item->update($request->only('name', 'bio'));

        return redirect()->route('teacher.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = Yolbashcylar::findOrFail($id);
        $item->delete();

        return redirect()->route('teacher.index')->with('success', __('messages.success'));
    }
}
