<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    private $rules = [
        'name' => ['required', 'min:3'],
        'email' => ['required'], //  'unique:categories,name_tm',
        'role_id' => ['required'],
        'teachingPlan' => ['required', 'min:3'],
        // // Ask about image max size
        // 'image_file' => ['image', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:16384'],
    ];

    public function index()
    {
        $numOfDataOnPage = 5;
        $data = User::paginate($numOfDataOnPage);
        return view("admin_panel.users.index", [
            'data' => $data,
            // 'typeOfTranslations' => $typeOfTranslations,
            'numOfDataOnPage' => $numOfDataOnPage
        ]);
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin_panel.users.create', ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $updatedRules['password'] = ['required', 'confirmed', Password::min(6)];
        $validated = $request->validate($updatedRules);
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return redirect()->route('users.index')->with('creation-success', 'User was created successfully');
    }

    public function search(Request $request)
    {
        // Get the search input from the user
        $numOfDataOnPage = 7;
        $searchableColumns = ['name_tm', 'email', 'teachingPlan'];

        $search = $request->input('search');

        // Create a query for the User model
        $query = User::query();
        foreach ($searchableColumns as $column) {
            $query->orWhere($column, 'LIKE', '%' . $search . '%');
        }

        // Execute the query and get the results
        $data = $query->paginate($numOfDataOnPage);

        return view('admin_panel.users.index', compact('data', 'numOfDataOnPage'));
    }

    public function show(int $userId)
    {
        $item = User::findOrFail($userId);
        // $category->viewed = 1;
        // $category->save();
        return view('admin_panel.user.show', [
            'item' => $item,
        ]);
    }

    public function edit($id)
    {
        $roles = Role::all();
        $item = User::findOrFail($id);
        // dd($category);
        return view('admin_panel.users.edit', ['roles' => $roles, 'item' => $item]);
    }

    public function patch(int $userId)
    {
        // dd(request()->all());
        $item = User::findOrFail($userId);
        $updatedRules = $this->rules;
        $updatedRules['name'] = ['required', Rule::unique('users', 'name')->ignore($userId)];
        if (request("password") !== "") {
            $updatedRules['password'] = ['password', 'confirmed', Password::min(6)];
        }
        // dd($updatedRules);
        $validated = request()->validate($updatedRules);
        $item->update($validated);
        // dd($updatedData);
        // dd($category);
        return redirect()->route('users.index')->with('edition-success', "User was updated successfully");
    }

    public function delete(int $itemId)
    {
        $item = User::findOrFail($itemId);
        $item->delete();
        return redirect()->route('users.index')->with('deletion-success', "User was deleted successfully");
    }
}
