@extends('components.admin_layout')

@section('content')
<h1>Create News</h1>

<form action="{{ route('news.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>

    <label for="content">Content:</label>
    <textarea name="content" id="content"></textarea>

    <button type="submit">Create</button>
</form>
@endsection
