<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Dalahgar;
use Illuminate\Http\Request;

class DalahgarController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = Dalahgar::paginate($numOfDataOnPage);
        return view('admin_panel.dalahgar.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = Dalahgar::where('name', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.dalahgar.index', compact('data', 'numOfDataOnPage'));
    }

    public function create()
    {
        return view('admin_panel.dalahgar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Dalahgar::create($request->only('name', 'description'));

        return redirect()->route('dalashgar.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = Dalahgar::findOrFail($id);
        return view('admin_panel.dalahgar.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $item = Dalahgar::findOrFail($id);
        $item->update($request->only('name', 'description'));

        return redirect()->route('dalashgar.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = Dalahgar::findOrFail($id);
        $item->delete();

        return redirect()->route('dalashgar.index')->with('success', __('messages.success'));
    }
}
