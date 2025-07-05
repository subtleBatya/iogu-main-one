<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Structure;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = Structure::paginate($numOfDataOnPage);
        return view('admin_panel.structure.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = Structure::where('name', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.structure.index', compact('data', 'numOfDataOnPage'));
    }

    public function create()
    {
        return view('admin_panel.structure.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Structure::create($request->only('name', 'description'));

        return redirect()->route('structure.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = Structure::findOrFail($id);
        return view('admin_panel.structure.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $item = Structure::findOrFail($id);
        $item->update($request->only('name', 'description'));

        return redirect()->route('structure.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = Structure::findOrFail($id);
        $item->delete();

        return redirect()->route('structure.index')->with('success', __('messages.success'));
    }
}
