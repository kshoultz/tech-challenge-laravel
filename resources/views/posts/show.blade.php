@extends('layouts.app')

@section('content')
    <div>
        <div>
            <h1>
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