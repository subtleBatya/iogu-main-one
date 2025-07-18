@extends('components.admin_layout')

@section('content')
<div class="container">
    <h1>Edit Uchurumlar</h1>
    <form action="{{ route('uchurumlar.update', $item->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $item->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('uchurumlar.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
