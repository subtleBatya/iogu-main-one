@extends('components.admin_layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-6">
                <!-- Account -->
                <div class="card-body pt-4">
                    <div class="d-flex justify-content-between">
                        <h3>Create Role</h3>
                        {{-- <button type="button" class="btn btn-primary">Button</button> --}}
                    </div>
                    <form id="role_form" action="{{route('roles.store')}}" method="POST">
                        @csrf
                        <div class="row g-6">
                            <div class="col-md-4">
                                <label for="name" class="form-label">Name</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    placeholder="Administrator" autofocus />
                                <x-input-error for="name" />
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="form-label">email</label>
                                <input class="form-control" type="text" id="email" name="email"
                                    placeholder="trainy123@yahoo.com" autofocus />
                                <x-input-error for="email" />
                            </div>
                            <div class="col-md-4">
                                <label for="role_id" class="form-label">Role</label>
                                <select name="role_id" class="form-select" id="selection-box-create"
                                    data-bs-toggle="custom-selection-box">
                                    <option value="">Select Role</option>
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="role_id" />
                            </div>
                            <div class="col-md-4">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" type="password" id="password" name="password" autofocus />
                                <x-input-error for="password" />
                            </div>
                            <div class="col-md-4">
                                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                                <input class="form-control" type="password" id="password_confirmation"
                                    name="password_confirmation" autofocus />
                                <x-input-error for="password_confirmation" />
                            </div>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="btn btn-primary me-3">Save changes</button>
                            <a href="{{route('roles.index')}}" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
        </div>
    </div>
</div>
@endsection