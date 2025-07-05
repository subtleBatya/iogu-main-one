<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Okuwbolumi;
use Illuminate\Http\Request;

class OkuwbolumiController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = Okuwbolumi::paginate($numOfDataOnPage);
        return view('admin_panel.okuwbolumi.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = Okuwbolumi::where('name', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.okuwbolumi.index', compact('data', 'numOfDataOnPage'));
    }

    public function create()
    {
        return view('admin_panel.okuwbolumi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Okuwbolumi::create($request->only('name', 'description'));

        return redirect()->route('okuwbolumi.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = Okuwbolumi::findOrFail($id);
        return view('admin_panel.okuwbolumi.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $item = Okuwbolumi::findOrFail($id);
        $item->update($request->only('name', 'description'));

        return redirect()->route('okuwbolumi.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = Okuwbolumi::findOrFail($id);
        $item->delete();

        return redirect()->route('okuwbolumi.index')->with('success', __('messages.success'));
    }
}
