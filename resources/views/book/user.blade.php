@extends('layouts.app')
@section('content')
    <h6>{{ $user->name }}</h6>

    <p>Daftar Buku: </p>

    @if ($user->books->count() > 0)
        <div class="row">
            @foreach ($user->books as $book)
                <div class="col-md-3">
                    <x-card-book :book=$book />
                </div>
            @endforeach
        </div>
    @else
        <p class="text-muted">-Buku tidak tersedia-</p>
    @endif
@endsection
