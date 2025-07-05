<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ucurumlar;
use Illuminate\Http\Request;

class UcurumlarController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = Ucurumlar::paginate($numOfDataOnPage);
        return view('admin_panel.uchurumlar.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = Ucurumlar::where('name', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.uchurumlar.index', compact('data', 'numOfDataOnPage'));
    }

    public function create()
    {
        return view('admin_panel.uchurumlar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Ucurumlar::create($request->only('name', 'description'));

        return redirect()->route('uchurumlar.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = Ucurumlar::findOrFail($id);
        return view('admin_panel.uchurumlar.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $item = Ucurumlar::findOrFail($id);
        $item->update($request->only('name', 'description'));

        return redirect()->route('uchurumlar.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = Ucurumlar::findOrFail($id);
        $item->delete();

        return redirect()->route('uchurumlar.index')->with('success', __('messages.success'));
    }
}
