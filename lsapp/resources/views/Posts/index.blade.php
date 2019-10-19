@extends('layouts.app')

@section('content')

<h1> POSTS </h1>

@if (count($posts) > 0)
@foreach ($posts as $post)
<div class="well">
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <small>{{$post->created_at}} by {{ $post->user->name }}</small>
</div>
@endforeach
{{ $posts->links() }}
@else
<p>No posts Found</p>
@endif

@endsection
