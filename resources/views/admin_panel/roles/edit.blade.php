@extends('components.admin_layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-6">
                <!-- Account -->
                <div class="card-body pt-4">
                    <div class="d-flex justify-content-between">
                        <h3>Edit Role</h3>
                        {{-- <button type="button" class="btn btn-primary">Button</button> --}}
                    </div>
                    <form id="role_form" action="{{route('roles.update', $item->id)}}" method="POST">
                        @csrf
                        @method("PATCH")
                        <div class="row g-6">
                            <div class="col-md-4">
                                <label for="name" class="form-label">Name</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    placeholder="Administrator" value="{{{$item->name}}}" autofocus />
                                <x-input-error for="name" />
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