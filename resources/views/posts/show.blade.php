@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: #f8f9fa; padding: 20px; border-radius: 8px;">
        <h2>Post Details</h2>
        <div class="card">
            <div class="card-header" >
                <h3>{{ $post->title }}</h3>
            </div>
            <div class="card-body">
                <p><strong>First Name:</strong> {{ $post->first_name }}</p>
                <p><strong>Last Name:</strong> {{ $post->last_name }}</p>
                <p><strong>Gender:</strong> {{ $post->gender }}</p>
                <p><strong>Phone Number:</strong> {{ $post->phone_number }}</p>
                <p><strong>Address:</strong> {{ $post->address }}</p>
                @if ($post->image)
                    <div>
                        <strong>Image:</strong><br>
                        <img src="{{ asset('images/' . $post->image) }}" alt="Post Image" width="200">
                    </div>
                @endif
                <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
