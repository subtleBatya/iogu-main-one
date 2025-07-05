<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Structure;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = Structure::paginate($numOfDataOnPage);
        return view('admin_panel.slider.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = Structure::where('title', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.slider.index', compact('data', 'numOfDataOnPage'));
    }

    public function create()
    {
        return view('admin_panel.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|string',
        ]);

        Structure::create($request->only('title', 'image'));

        return redirect()->route('slider.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = Structure::findOrFail($id);
        return view('admin_panel.slider.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|string',
        ]);

        $item = Structure::findOrFail($id);
        $item->update($request->only('title', 'image'));

        return redirect()->route('slider.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = Structure::findOrFail($id);
        $item->delete();

        return redirect()->route('slider.index')->with('success', __('messages.success'));
    }
}
