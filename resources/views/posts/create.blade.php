@extends('layouts.app')

@section('content')
    <div>
        <div>
            <h1>Create Post</h1>
        </div>
    </div>
    <div>
        <form action="/posts" method="POST">
            @csrf
            <div>
                <input
                    type="text"
                    name="title"
                    placeholder="Title..."
                />
                <input
                    type="text"
                    name="paragraph"
                    placeholder="Paragraph..."
                />
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection