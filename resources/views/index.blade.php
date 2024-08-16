@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column justify-content-center" style="min-height: 100vh !important;" >
    <h1 class="my-5 text-center">Contact List</h1>

    <div class="d-flex align-items-center mb-3">
        
        <form action="{{ route('contacts.index') }}" method="GET" class="d-flex me-3">
            <input type="text" class="form-control me-2" name="search" value="{{ request()->get('search') }}" placeholder="Search by name or email">
            <button type="submit" class="btn btn-secondary">Search</button>
        </form>
        <a href="http://127.0.0.1:8000/contacts/create" class="btn btn-primary me-3">Create Contact</a>
    </div>
    

    <table class="table">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th><a href="{{ route('contacts.index', ['sort_by' => 'name', 'order' => request()->get('order') === 'asc' ? 'desc' : 'asc']) }}">Name</a></th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th><a href="{{ route('contacts.index', ['sort_by' => 'created_at', 'order' => request()->get('order') === 'asc' ? 'desc' : 'asc']) }}">Created At</a></th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr class="table-success">
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->created_at->format('d M Y H:i') }}</td>
                    <td>
                        <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info btn-sm me-2">View</a>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </table>

    {{-- {{ $contacts->links() }} --}}
</div>
@endsection
