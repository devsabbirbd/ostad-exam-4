@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contact Details</h1>

    <div>
        <strong>ID:</strong> {{ $contact->id }}
    </div>
    <div>
        <strong>Name:</strong> {{ $contact->name }}
    </div>
    <div>
        <strong>Email:</strong> {{ $contact->email }}
    </div>
    <div>
        <strong>Phone:</strong> {{ $contact->phone }}
    </div>
    <div>
        <strong>Address:</strong> {{ $contact->address }}
    </div>
    <div>
        <strong>Created At:</strong> {{ $contact->created_at }}
    </div>
    <div>
        <strong>Updated At:</strong> {{ $contact->updated_at }}
    </div>
</div>
@endsection
