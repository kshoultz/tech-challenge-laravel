@extends('layouts.app')

@section('content')
    <div>
        <div>
            <h1>Update Post</h1>
        </div>
    </div>
    <div>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <input
                    type="text"
                    name="title"
                    placeholder="Title..."
                    value="{{ $post->title }}"
                />
                <input
                    type="text"
                    name="paragraph"
                    placeholder="Paragraph..."
                    value="{{ $post->paragraph }}"
                />
                <input
                    type="text"
                    name="image_url"
                    placeholder="Image Name..."
                    value="{{ $post->image_url }}"
                />
                <input
                    type="text"
                    name="active"
                    placeholder="Y / N"
                    value="{{ $post->active }}"
                />
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection