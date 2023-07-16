@extends('layouts.admin')
@section('content')
    <h2>Add News</h2>
    <form action="{{ route('News.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title">
            @error('title')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <label for="text">Text</label>
            <textarea class="form-control" id="text" name="text" placeholder="text"></textarea>
        </div>
        <div class="form-floating mb-3">
            <label for="image">News Image</label><br>
            <img src="" width="100" alt="">
            <input type="file" class="form-control" id="image" name="image" placeholder="News Image">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
