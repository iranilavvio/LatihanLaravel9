@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">

            <h1>Halo! </h1>
            <p>Selamat Datang di Perpustakaan GIBS</p>
            <hr>
            <p><b> Ingin baca apa hari ini ?</b></p>
            <div>
                <a type="submit" class="btn btn-md btn-primary" href="{{ route('book') }}"> Jelajahi Buku</a>
            </div>
        </div>
    </div>
@endsection
