@extends('components.admin_layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h3>{{ __('messages.edit_slider') }}</h3>
    <form action="{{ route('slider.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('messages.title') }}</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $item->title }}" required>
            <x-input-error for="title" />
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">{{ __('messages.image') }}</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($item->image)
            <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" style="max-height: 100px; margin-top: 10px;">
            @endif
            <x-input-error for="image" />
        </div>
        <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
        <a href="{{ route('slider.index') }}" class="btn btn-secondary">{{ __('messages.cancel') }}</a>
    </form>
</div>
@endsection
