<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Olympaid;
use Illuminate\Http\Request;

class OlympaidController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = Olympaid::paginate($numOfDataOnPage);
        return view('admin_panel.olympaid.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = Olympaid::where('name', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.olympaid.index', compact('data', 'numOfDataOnPage'));
    }

    public function create()
    {
        return view('admin_panel.olympaid.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Olympaid::create($request->only('name'));

        return redirect()->route('olympaid.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = Olympaid::findOrFail($id);
        return view('admin_panel.olympaid.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $item = Olympaid::findOrFail($id);
        $item->update($request->only('name'));

        return redirect()->route('olympaid.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = Olympaid::findOrFail($id);
        $item->delete();

        return redirect()->route('olympaid.index')->with('success', __('messages.success'));
    }
}
