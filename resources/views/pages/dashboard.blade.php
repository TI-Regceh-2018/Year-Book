@extends('layouts.app')
@section('title', 'Dashboard')

@section('css')
{{-- ADDITIONAL CSS GOES HERE --}}
<link rel="stylesheet" href="{{ asset('assets/css/pages/dashboard.css') }}">
{{-- ADDITIONAL CSS GOES HERE --}}
@endsection

@section('content')
{{-- CONTENT GOES HERE --}}
<div class="container mt-5 mb-5">
  <div class="d-row">
    <div class="col pe-5">
      <div class="container-border">
        <div class="border-div"></div>
        <img src="{{ asset('assets\images\vlcsnap-2021-01-26-07h28m14s396 1.png') }}" class="img-fluid" alt="...">
      </div>
    </div>
    <div class="col">
      <div class="d-flex flex-column justify-content-center h-100">
        <div class="title">
          <h1 class="display-1 hide-540">Our</h1>
          <h1 class="display-1 hide-540" style="margin-top: -2rem">Memories</h1>
          <h1 class="display-1 only-540">Our Memories</h1>
        </div>
        <p class="h5">It's been fun but now I've got to go
          Life it way too short to take it slow
          But before I go and hit the road
          I gotta know, 'til then,
          When can we do this again?</p>
      </div>
    </div>
  </div>
  <div class="card mt-5">
    <div class="card-body">
      <h5 class="card-title my-4">Stuff We Do Together</h5>
      <div class="row p-4 gx-5 gy-3">
        <div class="col-lg-4 col-12 p-3 align-items-stretch">
          <div class="container-border">
            <div class="border-div"></div>
            <div class="card border">
              <img src="assets\images\Mask group.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="{{ route('story') }}" class="btn btn-link">Check our Cerita Kocak</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12 p-3 align-items-stretch">
          <div class="container-border">
            <div class="border-div"></div>
            <div class="card border">
              <img src="assets\images\Mask group (1).svg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="{{ route('love') }}" class="btn btn-link">Check our Love</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12 p-3 align-items-stretch">
          <div class="container-border">
            <div class="border-div"></div>
            <div class="card border">
              <img src="assets\images\Mask group (2).svg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="{{ route('album') }}" class="btn btn-link">Check our Album</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- CONTENT GOES HERE --}}
@endsection