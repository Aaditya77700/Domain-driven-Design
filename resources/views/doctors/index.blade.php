@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Doctors</h1>
        <a href="{{ route('doctors.create') }}" class="btn btn-primary mb-3">Add Doctor</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th><th>Email</th><th>Phone</th><th>Specialization</th><th>Address</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->first_name }} {{ $doctor->last_name }}</td>
                        <td>{{ $doctor->email }}</td>
                        <td>{{ $doctor->phone }}</td>
                        <td>{{ $doctor->specialization }}</td>
                        <td>{{ $doctor->address }}</td>
                        <td>
                            <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-sm btn-info">Edit</a>
                            <form method="POST" action="{{ route('doctors.destroy', $doctor->id) }}" class="d-inline">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Delete this doctor?')" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
