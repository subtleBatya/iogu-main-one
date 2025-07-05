<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = Sport::paginate($numOfDataOnPage);
        return view('admin_panel.sport.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = Sport::where('name', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.sport.index', compact('data', 'numOfDataOnPage'));
    }

    public function create()
    {
        return view('admin_panel.sport.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Sport::create($request->only('name'));

        return redirect()->route('sport.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = Sport::findOrFail($id);
        return view('admin_panel.sport.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $item = Sport::findOrFail($id);
        $item->update($request->only('name'));

        return redirect()->route('sport.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = Sport::findOrFail($id);
        $item->delete();

        return redirect()->route('sport.index')->with('success', __('messages.success'));
    }
}
