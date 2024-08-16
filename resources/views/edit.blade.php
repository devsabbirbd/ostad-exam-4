@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST" class="w-50">

        @method('PUT')

        <div class="mb-2">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $contact->name) }}" required>
        </div>

        <div class="mb-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $contact->email) }}" required>
        </div>

        <div class="mb-2">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', $contact->phone) }}">
        </div>

        <div class="mb-2">
            <label for="address" class="form-label">Address</label>
            <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $contact->address) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
