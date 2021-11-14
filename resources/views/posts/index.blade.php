@extends('layouts.app')

@section('content')

    <div>
        <div>
            <h1>Posts</h1>
        </div>
        <div>
            <a href="posts/create">Add a new Post &rarr;</a>
        </div>
        <div >
            @foreach ($posts as $post)
                <div>
                    <div>
                        <a href="/posts/{{ $post->id }}/edit">Edit Post &rarr;</a>
                        <form action="/posts/{{ $post->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete Post &rarr;</button>
                        </form>
                    </div>
                    <h2>
                        <img src="images/{{ $post->image_url }}" alt="{{ $post->image_url }} Image" />
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p>
                        {{ $post->paragraph }}
                    </p>
                    <hr />
                </div>
            @endforeach
        </div>
    </div>

@endsection