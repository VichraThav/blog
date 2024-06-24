@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: #f8f9fa; padding: 20px; border-radius: 8px;">
        <h2>Edit Employee</h2>
        <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $post->first_name }}">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $post->last_name }}">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control" id="gender">
                    <option value="male" {{ $post->gender == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $post->gender == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ $post->gender == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number" class="form-control" id="phone_number" value="{{ $post->phone_number }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" value="{{ $post->address }}">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image">
                @if ($post->image)
                    <img src="{{ asset('images/' . $post->image) }}" alt="Post Image" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
