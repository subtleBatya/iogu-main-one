@extends('components.admin_layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h3>{{ __('messages.edit_contact') }}</h3>
    <form action="{{ route('contact.update', $item->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('messages.name') }}</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" required>
            <x-input-error for="name" />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('messages.email') }}</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $item->email }}" required>
            <x-input-error for="email" />
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">{{ __('messages.phone') }}</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $item->phone }}">
            <x-input-error for="phone" />
        </div>
        <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
        <a href="{{ route('contact.index') }}" class="btn btn-secondary">{{ __('messages.cancel') }}</a>
    </form>
</div>
@endsection
