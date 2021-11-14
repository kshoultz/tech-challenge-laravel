@extends('layouts.app')

@section('content')
    <div>
        <div>
            <h1>Update Contact</h1>
        </div>
    </div>
    <div>
        <form action="/contacts/{{ $contact->id }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <input
                    type="text"
                    name="first_name"
                    placeholder="First Name..."
                    value="{{ $contact->first_name }}"
                />
                <input
                    type="text"
                    name="last_name"
                    placeholder="Last Name..."
                    value="{{ $contact->last_name }}"
                />
                <input
                    type="text"
                    name="email"
                    placeholder="Email..."
                    value="{{ $contact->email }}"
                />
                <input
                    type="text"
                    name="title"
                    placeholder="Title..."
                    value="{{ $contact->title }}"
                />
                <input
                    type="text"
                    name="message"
                    placeholder="Message..."
                    value="{{ $contact->message }}"
                />
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection