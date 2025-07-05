<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = Faculty::paginate($numOfDataOnPage);
        return view('admin_panel.faculty.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = Faculty::where('name', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.faculty.index', compact('data', 'numOfDataOnPage'));
    }

    public function create()
    {
        return view('admin_panel.faculty.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Faculty::create($request->only('name', 'description'));

        return redirect()->route('faculty.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = Faculty::findOrFail($id);
        return view('admin_panel.faculty.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $item = Faculty::findOrFail($id);
        $item->update($request->only('name', 'description'));

        return redirect()->route('faculty.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = Faculty::findOrFail($id);
        $item->delete();

        return redirect()->route('faculty.index')->with('success', __('messages.success'));
    }
}
