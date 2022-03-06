@extends('layouts.app')
@section('content')
    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ $book->name }}</div>
                    <div class="card-body">
                        <p>{{ $book->slug }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
