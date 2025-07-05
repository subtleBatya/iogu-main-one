<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Facilities;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = Facilities::paginate($numOfDataOnPage);
        return view('admin_panel.facilities.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = Facilities::where('name', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.facilities.index', compact('data', 'numOfDataOnPage'));
    }

    public function create()
    {
        return view('admin_panel.facilities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Facilities::create($request->only('name', 'description'));

        return redirect()->route('facilities.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = Facilities::findOrFail($id);
        return view('admin_panel.facilities.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $item = Facilities::findOrFail($id);
        $item->update($request->only('name', 'description'));

        return redirect()->route('facilities.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = Facilities::findOrFail($id);
        $item->delete();

        return redirect()->route('facilities.index')->with('success', __('messages.success'));
    }
}
