@extends('components.admin_layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h3>{{ __('messages.faculty_list') }}</h3>
    <a href="{{ route('faculty.create') }}" class="btn btn-primary my-2">{{ __('messages.create_faculty') }}</a>
    <table class="table table-hover text-center align-middle">
        <thead>
            <tr>
                <th>{{ __('messages.name') }}</th>
                <th>{{ __('messages.description') }}</th>
                <th>{{ __('messages.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ Str::limit($item->description, 50) }}</td>
                <td>
                    <a href="{{ route('faculty.edit', $item->id) }}" class="btn btn-sm btn-warning">{{ __('messages.edit') }}</a>
                    <form action="{{ route('faculty.delete', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('{{ __('messages.confirm_delete') }}')">{{ __('messages.delete') }}</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
@endsection
