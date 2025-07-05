@extends('components.admin_layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-6">
                <div class="card-body pt-4">
                    <div class="d-flex justify-content-between">
                        <h3>{{ __('messages.edit_olympiad') }}</h3>
                    </div>
                    <form id="olympiad_form" action="{{route('olympaid.update', $item->id)}}" method="POST">
                        @csrf
                        @method("PATCH")
                        <div class="row g-6">
                            <div class="col-md-6">
                                <label for="name" class="form-label">{{ __('messages.olympiad_name') }}</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    placeholder="{{ __('messages.olympiad_name_placeholder') }}" value="{{ $item->name }}" autofocus />
                                <x-input-error for="name" />
                            </div>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="btn btn-primary me-3">{{ __('messages.save_changes') }}</button>
                            <a href="{{route('olympaid.index')}}" class="btn btn-outline-secondary">{{ __('messages.cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
