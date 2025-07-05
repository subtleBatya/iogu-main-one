<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = About::paginate($numOfDataOnPage);
        return view('admin_panel.about.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = About::where('title', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.about.index', compact('data', 'numOfDataOnPage'));
    }

    public function create()
    {
        return view('admin_panel.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        About::create($request->only('title', 'content'));

        return redirect()->route('about.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = About::findOrFail($id);
        return view('admin_panel.about.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        $item = About::findOrFail($id);
        $item->update($request->only('title', 'content'));

        return redirect()->route('about.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = About::findOrFail($id);
        $item->delete();

        return redirect()->route('about.index')->with('success', __('messages.success'));
    }
}
