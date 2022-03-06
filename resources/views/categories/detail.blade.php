@extends('layouts.app')
@section('content')
    <h6>{{ $category->name }}</h6>

    <p>Daftar Buku: </p>

    @if ($category->book->count() > 0)
        <div class="row">
            @foreach ($category->book as $book)
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <img src="{{ $book->image }}" class="img-fluid rounded mb-2" alt="">
                            <h6 class="mt-1">
                                <p class="text-dark text-decoration-none">{{ $book->name }}</p>
                            </h6>
                            <p class="text-muted">{{ str()->limit($book->slug, 20) }}</p>
                            <p class="text-muted">Kategori : <b>{{ $book->category->name }}</b> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-muted">-Buku tidak tersedia-</p>
    @endif
@endsection
