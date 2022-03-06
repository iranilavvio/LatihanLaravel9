@extends('layouts.app')
@section('content')
    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <img src="{{ $book->image }}" class="img-fluid rounded mb-2" alt="">
                        <h6 class="mt-1">
                            <a href="{{ route('book.detail', $book->slug) }}"
                                class="text-dark text-decoration-none">{{ $book->name }}</a>
                        </h6>
                        <p class="text-muted">{{ str()->limit($book->slug, 20) }}</p>
                        <a href="{{ route('category.detail', $book->category_id) }}">Kategori :
                            {{ $book->category->name }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
