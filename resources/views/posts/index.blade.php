@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: #f8f9fa; padding: 20px; border-radius: 8px;">
        <div class="row">
            <div class="col-md-12">
                <h1>Employee Form</h1>
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Employee</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success mt-2">
                        {{ $message }}
                    </div>
                @endif
                <table class="table table-bordered mt-2">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->first_name }}</td>
                        <td>{{ $post->last_name }}</td>
                        <td>{{ $post->gender }}</td>
                        <td>{{ $post->phone_number }}</td>
                        <td>{{ $post->address }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
