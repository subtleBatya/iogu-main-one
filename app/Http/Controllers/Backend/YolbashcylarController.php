<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Yolbashcylar;
use Illuminate\Http\Request;

class YolbashcylarController extends Controller
{
    private $rules = [
        'name' => ['required', 'min:3'],
        'bio' => ['nullable', 'string'],
        // Add other validation rules as needed
    ];

    public function index()
    {
        $numOfDataOnPage = 5;
        $data = Yolbashcylar::paginate($numOfDataOnPage);
        return view("admin_panel.teacher.index", [
            'data' => $data,
            'numOfDataOnPage' => $numOfDataOnPage
        ]);
    }

    public function create()
    {
        return view('admin_panel.teacher.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules);
        Yolbashcylar::create($validated);
        return redirect()->route('teacher.index')->with('creation-success', 'Yolbashcylar was created successfully');
    }

    public function edit($id)
    {
        $item = Yolbashcylar::findOrFail($id);
        return view('admin_panel.teacher.edit', ['item' => $item]);
    }

    public function patch(Request $request, $id)
    {
        $item = Yolbashcylar::findOrFail($id);
        $validated = $request->validate($this->rules);
        $item->update($validated);
        return redirect()->route('teacher.index')->with('edition-success', "Yolbashcylar was updated successfully");
    }

    public function delete($id)
    {
        $item = Yolbashcylar::findOrFail($id);
        $item->delete();
        return redirect()->route('teacher.index')->with('deletion-success', "Yolbashcylar was deleted successfully");
    }
}
