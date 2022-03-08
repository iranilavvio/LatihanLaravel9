@extends('layouts.app')
@section('content')
    {{-- <x-alert>
        <span>Berhasil Menambahkan Buku</span>
    </x-alert> --}}

    <h6 class="mb-3">Total Buku: {{ $books->count() }}</h6>

    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-3">
                <x-card-book :book=$book />
            </div>
        @endforeach
    </div>
@endsection
