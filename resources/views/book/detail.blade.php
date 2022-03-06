@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h6>{{ $book->name }}</h6>
                    <img src="{{ $book->image }}" class="img-fluid rounded mb-2" alt="">
                    <p class="fs-6 text-decoration-none">Kategori: {{ $book->category->name }}</p>
                    <p class="mt-1">{{ $book->slug }}</p>
                    <p class="text-muted">Total Buku : {{ $book->qty }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
