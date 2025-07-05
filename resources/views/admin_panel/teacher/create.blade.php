@extends('components.admin_layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h3>{{ __('messages.create_teacher') }}</h3>
    <form action="{{ route('teacher.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('messages.name') }}</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <x-input-error for="name" />
        </div>
        <div class="mb-3">
            <label for="bio" class="form-label">{{ __('messages.bio') }}</label>
            <textarea class="form-control" id="bio" name="bio" rows="5"></textarea>
            <x-input-error for="bio" />
        </div>
        <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
        <a href="{{ route('teacher.index') }}" class="btn btn-secondary">{{ __('messages.cancel') }}</a>
    </form>
</div>
@endsection
