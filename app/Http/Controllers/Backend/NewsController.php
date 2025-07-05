<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $numOfDataOnPage = $request->input('entries', 5);
        $data = News::paginate($numOfDataOnPage);
        return view('admin_panel.news.index', compact('data', 'numOfDataOnPage'));
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = $request->input('numOfDataOnPage', 5);
        $search = $request->input('search', '');
        $data = News::where('title', 'like', '%' . $search . '%')->paginate($numOfDataOnPage);
        return view('admin_panel.news.index', compact('data', 'numOfDataOnPage'));
    }

    public function show($id)
    {
        $item = News::findOrFail($id);
        return view('admin_panel.news.show', compact('item'));
    }

    public function create()
    {
        return view('admin_panel.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        News::create($request->only('title', 'content'));

        return redirect()->route('news.index')->with('success', __('messages.success'));
    }

    public function edit($id)
    {
        $item = News::findOrFail($id);
        return view('admin_panel.news.edit', compact('item'));
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        $item = News::findOrFail($id);
        $item->update($request->only('title', 'content'));

        return redirect()->route('news.index')->with('success', __('messages.success'));
    }

    public function delete($id)
    {
        $item = News::findOrFail($id);
        $item->delete();

        return redirect()->route('news.index')->with('success', __('messages.success'));
    }
}
