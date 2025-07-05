<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = Contact::paginate($numOfDataOnPage);
        return view('admin_panel.contact.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = Contact::where('name', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.contact.index', compact('data', 'numOfDataOnPage'));
    }

    public function create()
    {
        return view('admin_panel.contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string',
        ]);

        Contact::create($request->only('name', 'email', 'message'));

        return redirect()->route('contact.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = Contact::findOrFail($id);
        return view('admin_panel.contact.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string',
        ]);

        $item = Contact::findOrFail($id);
        $item->update($request->only('name', 'email', 'message'));

        return redirect()->route('contact.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = Contact::findOrFail($id);
        $item->delete();

        return redirect()->route('contact.index')->with('success', __('messages.success'));
    }
}
