@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="mb-4">
                <a href="{{ route('students.index') }}">Kembali</a>
            </div>
            <div class="card mt-3">
                <div class="card-header text-center">
                    <h6>Edit Data Siswa</h6>
                </div>
                <div class="card-body">
                    <x-alert />
                    <form action="{{ route('students.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('students._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
