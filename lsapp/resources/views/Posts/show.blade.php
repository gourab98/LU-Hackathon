@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<h1> {{ $post->title }} </h1>
<div>
    {{ $post->body }}
</div>
    <hr>
        <small>written on: {{$post->created_at}} by {{ $post->user->name }} </small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-dark">Edit Post</a>
            {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
            {!! Form::hidden('_method', 'DELETE') !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        @endif
    @endif

    {{-- Comment Logic --}}
            <div class="comment-list">
                @foreach ($post->comments as $comment)
                    <h4>{{ $comment->body }}</h4>
                    <lead>{{ $comment->user->name }}</lead>
                    <br>
                    <br>
                @endforeach
            </div>
            <div class="comment-from">
                <form action="{{ route('postcomment.store', $post->id) }}" method="post" role="form" >
                    {{ csrf_field() }}
                    {{-- <legend>Create Comment</legend> --}}

                    <div class="form-group">
                        <input type="text" class="form-control" name="body" id="" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Comment </button>
                </form>
            </div>

@endsection
