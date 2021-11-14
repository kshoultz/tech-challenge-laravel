@extends('layouts.app')

@section('content')
    <div>
        <div>
            <h1>Create Contact</h1>
        </div>
    </div>
    <div>
        <form action="/contacts" method="POST">
            @csrf
            <div>
                <input
                    type="text"
                    name="first_name"
                    placeholder="First Name..."
                />
                <input
                    type="text"
                    name="last_name"
                    placeholder="Last Name..."
                />
                <input
                    type="text"
                    name="email"
                    placeholder="Email..."
                />
                <input
                    type="text"
                    name="title"
                    placeholder="Title..."
                />
                <input
                    type="text"
                    name="message"
                    placeholder="Message..."
                />
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection