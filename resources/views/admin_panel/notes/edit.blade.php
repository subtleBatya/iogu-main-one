@extends('components.admin_layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-6">
                <div class="card-body pt-4">
                    <div class="d-flex justify-content-between">
                        <h3>{{ __('messages.edit_note') }}</h3>
                    </div>
                    <form id="note_form" action="{{route('notes.update', $item->id)}}" method="POST">
                        @csrf
                        @method("PATCH")
                        <div class="row g-6">
                            <div class="col-md-6">
                                <label for="title" class="form-label">{{ __('messages.note_title') }}</label>
                                <input class="form-control" type="text" id="title" name="title"
                                    placeholder="{{ __('messages.note_title_placeholder') }}" value="{{ $item->title }}" autofocus />
                                <x-input-error for="title" />
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="content" class="form-label">{{ __('messages.note_content') }}</label>
                                <textarea class="form-control" id="content" name="content" rows="5" placeholder="{{ __('messages.note_content_placeholder') }}">{{ $item->content }}</textarea>
                                <x-input-error for="content" />
                            </div>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="btn btn-primary me-3">{{ __('messages.save_changes') }}</button>
                            <a href="{{route('notes.index')}}" class="btn btn-outline-secondary">{{ __('messages.cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
