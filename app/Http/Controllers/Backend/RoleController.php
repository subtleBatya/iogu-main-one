<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    private $rules = [
        'name' => ['required', 'unique:roles,name', 'min:3'],
    ];

    public function index()
    {
        $numOfDataOnPage = 5;
        $entries = request()->get('entries');
        if ($entries) {
            $numOfDataOnPage = $entries;
            // dd("Data" . $entries);
        }
        $data = Role::paginate($numOfDataOnPage);
        // dd($data);
        return view("admin_panel.roles.index", [
            'data' => $data,
            'numOfDataOnPage' => $numOfDataOnPage
        ]);
    }

    public function create()
    {
        // dd($data);
        return view("admin_panel.roles.create");
    }

    public function search(Request $request)
    {
        $numOfDataOnPage = request()->get('numOfDataOnPage');
        $searchableColumns = ['name'];
        $roles = Role::all();

        // Get the search input from the user
        $search = $request->input('search');

        // Create a query for the User model
        $query = Role::query();

        // Search through other columns like name, email, etc.
        foreach ($searchableColumns as $column) {
            $query->orWhere($column, 'LIKE', '%' . $search . '%');
        }
        // Execute the query and get the results
        $data = $query->paginate($numOfDataOnPage);

        return view('admin_panel.roles.index', compact('data', 'numOfDataOnPage'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules);
        // dd("test");
        try {
            // dd(request()->all());
            // $role = Role::create(['name' => request('title_en')]);
            Role::create($validated);
        } catch (\Throwable $th) {
            $error = request('name') . $th;
            return back()->withErrors(['data' => $error]);
        }
        return redirect()->route('roles.index')->with('creation-success', "Role was created successfully!");
    }

    public function edit(int $itemId)
    {
        $role = Role::findById($itemId);
        return view("admin_panel.roles.edit", ['item' => $role]);
    }

    public function patch(int $roleId)
    {
        $updatedRules = $this->rules;
        $updatedRules['name'] = ['required', Rule::unique('roles', 'name')->ignore($roleId)];
        $validator = Validator::make(request()->all(), $updatedRules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $role = Role::findById($roleId);
        $role['name'] = request('name');
        $role->save();
        return redirect()->route('roles.index')->with('edition-success', "Role was updated successfully!");
    }

    public function editPermission(int $itemId)
    {
        $role = Role::findById($itemId);
        return view("admin_panel.roles.editPermission", ['role' => $role]);
    }

    public function updatePermission(string $name, int $id)
    {
        $role = Role::findOrFail($id);
        $assigned = [];
        $revoked = [];
        $permissionNames = ['show', 'enable',  'edit', 'delete', 'create'];
        if ($name == "roles") {
            array_splice($permissionNames, 0, 1);
        }
        $result = [];
        foreach ($permissionNames as $value) {
            $permissionName = $name . '_' . $value;
            $item = request($value);
            // dd(request()->all());
            // dd($item);
            if ($item == null) {
                $result[$permissionName] = 'revoked';
                $role->revokePermissionTo($permissionName);
            } else {
                $result[$permissionName] = 'added';
                $role->givePermissionTo($permissionName);
            }
        }
        // $returnUrl = request('routeUrl', route('roles'));
        return redirect()->back()->with('edition-success', "Role was edited succefully");
    }

    // Function should be updated, user shouldn't be able to delete a role without unassigning this role from the users
    public function delete(int $roleId)
    {
        // dd($roleId);
        $role = Role::findOrFail($roleId);
        // dd($role->name);
        $usersWithCurrentRole = User::role($role->name)->get();
        // dd($usersWithCurrentRole);
        if ($usersWithCurrentRole->count() < 1) {
            // dd($usersWithCurrentRole->count());
            $role->delete();
            return redirect()->route('roles.index')->with('deletion-success', "Role was deleted succefully");
        }
        return redirect()->route('roles.index')->with('deletion-error', "System has users with current role, so deletion is rejected");
    }
}
