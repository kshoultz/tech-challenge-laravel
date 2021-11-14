@extends('layouts.app')

@section('content')
    <div>
        <div>
            <h1>
                <img src="images/{{ $post->image_url }}" alt="{{ $post->image_url }} Image" />
                {{ $post->title }}
            </h1>
        </div>
    </div>
    <div>
        <div>
            <p>
                {{  $post->paragraph }}
            </p>

            <hr />
        </div>
    </div>
@endsection