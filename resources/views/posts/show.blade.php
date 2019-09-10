@extends('layouts.app')

@section('content')
    <a href='/posts' class='btn btn-outline-dark'>Go back</a>
    <h1>{!!$post->title!!}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small><br>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Are You Sure?")', 'style' => 'display:inline']) !!}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection