<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ustunlukler;
use Illuminate\Http\Request;

class UstunluklerController extends Controller
{
    private $rules = [
        'name' => ['required', 'min:3'],
        // Add other validation rules as needed
    ];

    public function index()
    {
        $numOfDataOnPage = 5;
        $data = Ustunlukler::paginate($numOfDataOnPage);
        return view("admin_panel.ustunlukler.index", [
            'data' => $data,
            'numOfDataOnPage' => $numOfDataOnPage
        ]);
    }

    public function create()
    {
        return view('admin_panel.ustunlukler.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules);
        Ustunlukler::create($validated);
        return redirect()->route('ustunlukler.index')->with('creation-success', 'Ustunlukler was created successfully');
    }

    public function edit($id)
    {
        $item = Ustunlukler::findOrFail($id);
        return view('admin_panel.ustunlukler.edit', ['item' => $item]);
    }

    public function patch(Request $request, $id)
    {
        $item = Ustunlukler::findOrFail($id);
        $validated = $request->validate($this->rules);
        $item->update($validated);
        return redirect()->route('ustunlukler.index')->with('edition-success', "Ustunlukler was updated successfully");
    }

    public function delete($id)
    {
        $item = Ustunlukler::findOrFail($id);
        $item->delete();
        return redirect()->route('ustunlukler.index')->with('deletion-success', "Ustunlukler was deleted successfully");
    }
}
