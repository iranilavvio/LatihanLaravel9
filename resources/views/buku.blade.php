@extends('layouts.app')
@section('content')

<div class="row mt-5">
  <div class="col-sm-3">
    <div class="card" style="width: 16rem;">
    <img src="{{ asset('assets/img/cover.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <p><b>Judul Buku 1</b></p>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content...</p>
    </div>
  </div>
  </div>
  <div class="col-sm-3">
    <div class="card" style="width: 16rem;">
      <img src="{{ asset('assets/img/cover.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <p><b>Judul Buku 2</b></p>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content...</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card" style="width: 16rem;">
      <img src="{{ asset('assets/img/cover.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <p><b>Judul Buku 3</b></p>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content...</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card" style="width: 16rem;">
      <img src="{{ asset('assets/img/cover.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <p><b>Judul Buku 4</b></p>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content...</p>
      </div>
    </div>
  </div>
</div>


@endsection