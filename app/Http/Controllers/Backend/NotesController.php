<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = Notes::paginate($numOfDataOnPage);
        return view('admin_panel.notes.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = Notes::where('title', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.notes.index', compact('data', 'numOfDataOnPage'));
    }

    public function create()
    {
        return view('admin_panel.notes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        Notes::create($request->only('title', 'content'));

        return redirect()->route('notes.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = Notes::findOrFail($id);
        return view('admin_panel.notes.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        $item = Notes::findOrFail($id);
        $item->update($request->only('title', 'content'));

        return redirect()->route('notes.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = Notes::findOrFail($id);
        $item->delete();

        return redirect()->route('notes.index')->with('success', __('messages.success'));
    }
}
