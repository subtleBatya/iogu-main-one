@extends('components.admin_layout')

@section('content')
<h1>News Details</h1>

<h2>{{ $item->title }}</h2>
<p>{{ $item->content }}</p>

<a href="{{ route('news.index') }}">Back to News List</a>
@endsection
