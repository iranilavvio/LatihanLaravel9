@extends('layouts.app')
@section('content')
    <h5>{{ $user->name }}</h5>
    <h6 class="text-muted mt-3">Buku Saya ({{ $user->books->count() }}) : </h6>

    <div class="row">
        @foreach ($user->books as $book)
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <img src="{{ $book->image }}" class="card-img-top" alt="...">
                        <a href="{{ route('book.detail', $book->slug) }}"
                            class="card-title text-primary">{{ $book->name }}</a>
                        <p class="card-text">Total : {{ $book->qty }}</p>
                        <a href="{{ route('category.detail', $book->category->id) }}"
                            class="card-text btn btn-primary btn-sm rounded-pill">{{ $book->category->name }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
