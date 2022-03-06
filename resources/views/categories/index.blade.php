@extends('layouts.app')
@section('content')
    <div class="row">
        @foreach ($categories as $item)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <a href="{{ route('category.detail', $item->id) }}" class="mt-1">{{ $item->name }}</a>
                        <p>Total Buku : </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
