@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Create Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST" class="w-50">
        
        <div class="mb-2">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        
        <div class="mb-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        
        <div class="mb-2">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" id="phone" name="phone" class="form-control">
        </div>
        
        <div class="mb-2">
            <label for="address" class="form-label">Address</label>
            <input type="text" id="address" name="address" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>


@endsection
