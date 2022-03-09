@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <a href="{{ route('students.index') }}">Kembali</a>
            <div class="card mt-3">
                <div class="card-header text-center">
                    <h6>Tambah Siswa</h6>
                </div>
                <div class="card-body">
                    <x-alert />
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        @include('students._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
