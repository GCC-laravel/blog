@extends('layouts.dashboard')

@section('content')
<div class="block">
    <h1>{{ $user->name }}</h1>
    <p>{{ $user->email }}</p>
    <p><h2>Posts</h2>
        <div class="block">
        @foreach ($user->posts as $post)
            <p><p>{{ $post->body }}</p></p>
            <a href="{{ $post->id }}">view post</a>
            <hr>
        @endforeach
        </div>
        </p>
</div>
@endsection