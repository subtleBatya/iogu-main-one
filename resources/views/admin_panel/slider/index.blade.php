@extends('components.admin_layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h3>{{ __('messages.slider_list') }}</h3>
        <a href="{{ route('slider.create') }}" class="btn btn-primary my-2">{{ __('messages.create_slider') }}</a>
        <table class="table table-hover text-center align-middle">
            <thead>
                <tr>
                    <th>{{ __('messages.title') }}</th>
                    <th>{{ __('messages.image') }}</th>
                    <th>{{ __('messages.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>
                            @if ($item->image)
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" style="max-height: 50px;">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('slider.edit', $item->id) }}"
                                class="btn btn-sm btn-warning">{{ __('messages.edit') }}</a>
                            <form action="{{ route('slider.delete', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('{{ __('messages.confirm_delete') }}')">{{ __('messages.delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
@endsection
