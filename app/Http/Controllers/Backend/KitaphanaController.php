<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Kitaphana;
use Illuminate\Http\Request;

class KitaphanaController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = Kitaphana::paginate($numOfDataOnPage);
        return view('admin_panel.kitaphana.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = Kitaphana::where('name', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.kitaphana.index', compact('data', 'numOfDataOnPage'));
    }

    public function create()
    {
        return view('admin_panel.kitaphana.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Kitaphana::create($request->only('name', 'description'));

        return redirect()->route('kitaphana.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = Kitaphana::findOrFail($id);
        return view('admin_panel.kitaphana.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $item = Kitaphana::findOrFail($id);
        $item->update($request->only('name', 'description'));

        return redirect()->route('kitaphana.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = Kitaphana::findOrFail($id);
        $item->delete();

        return redirect()->route('kitaphana.index')->with('success', __('messages.success'));
    }
}
