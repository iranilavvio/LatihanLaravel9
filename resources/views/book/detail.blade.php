@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card mb-3">
                <div class="card-body">
                    <h6>{{ $book->name }}</h6>
                    <img src="{{ $book->image }}" class="img-fluid rounded mb-2" alt="">
                    <p class="fs-6 text-decoration-none">Kategori: {{ $book->category->name }}</p>
                    <p class="mt-1">{{ $book->slug }}</p>
                    <p class="text-muted">Total Buku : {{ $book->qty }}</p>
                </div>
            </div>

            <h6 class="mb-3">Review ({{ $book->reviews_count }})</h6>

            <textarea name="body" class="form-control mb-3" cols="30" rows="4" placeholder="Tulis review Anda?"></textarea>
            <div class="text-end mb-3">
                <button class="btn btn-primary">Kirim</button>
            </div>

            <div class="card">
                <div class="card-body">

                    @foreach ($reviews as $review)
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/img/avatar.png') }}" height="40" class="rounded-circle"
                                    alt="User Avatar">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p class="mb-1 fw-semibold">{{ $review->user->name }}
                                    <span
                                        class="text-muted fw-normal text-sm">{{ $review->created_at->diffForHumans() }}</span>
                                </p>
                                <p>
                                    {{ $review->body }}
                                </p>
                            </div>
                        </div>
                    @endforeach

                    {{ $reviews->links() }}

                </div>
            </div>
        </div>
    </div>
@endsection
