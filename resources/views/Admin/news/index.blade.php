@extends('layouts.admin')
@section('content')
    {{-- <h2 class="mb-4 fs-3"><?=  ?></h2> --}}
    <a href="{{ route('News.create') }}" class="btn btn-sm btn-primary mb-3">+ Create Product</a>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>text</th>
                <th>images</th>
                <th>Operations</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $new)
                <tr>
                    {{-- <td>
                        <a href="{{ $new->image_url }}">
                            <img src="{{ $product->image_url }}" whidth="60" alt="">
                        </a>
                    </td> --}}
                    <td>{{ $new->id }}</td>
                    <td>{{ $new->title }}</td>
                    <td>{{ $new->text }}</td>
                    <td>{{ $new->image }}</td>
                    <td><a href="{{ route('News.edit', $new->id) }}" class="btn btn-sm btn-outline-dark">Edit <i
                                class="far fa-edit"></i></a>
                        <form action="{{ route('News.destroy', $new->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>
                                Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
