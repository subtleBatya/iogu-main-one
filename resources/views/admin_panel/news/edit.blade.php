@extends('components.admin_layout')

@section('content')
<h1>Edit News</h1>

<form action="{{ route('news.update', $item->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $item->title }}" required>

    <label for="content">Content:</label>
    <textarea name="content" id="content">{{ $item->content }}</textarea>

    <button type="submit">Update</button>
</form>
@endsection
