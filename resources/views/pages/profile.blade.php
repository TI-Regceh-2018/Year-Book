@extends('layouts.app')
@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/pages/profile.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/pages/dashboard.css') }}">
@endsection

{{-- CONTENT GOES HERE --}}
@section('content')
<div class="content">
    <div class="px-5 mt-4">
        @include('components.back-button')
    </div>
    <div class="row px-4 mt-5 wrapper">
        <div class="col-6 px-5 img-profile d-flex align-items-center justify-content-center">
            <div class="img-wrapper">
                <img class="img" src="{{ asset('assets/images/vlcsnap-2021-01-13-07h26m42s683 1.png') }}"
                    class="card-img-top">
            </div>
        </div>
        <div class="col-6 px-5 details pt-5">
            <div class="">
                <div class="">
                    <h1 class="name">Ahmad Pamungkas</h1>
                    <h2 class="panggilan">Mas Pam</h2>
                </div>
                <div class="row">
                    <div class="matkul">Mata Kuliah Favorit: Fisika dasar & Prostat</div>
                    <div class="my-1 makanan-fav">Makanan Favorit: Minas</div>
                    <div class="quotes">Quotes Hidup: <q>I want you to the bone</q></div>
                </div>
            </div>

        </div>
    </div>
    <div class="px-5 card-others mt-4">
        <div class="card mt-5">
            <div class="card-body">
                <h5 class="card-title my-4">Stuff We Do Together</h5>
                <div class="row p-4 gx-5 gy-3">
                    @include('components.kepoin-others')
                    @include('components.kepoin-others')
                    @include('components.kepoin-others')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- CONTENT GOES HERE --}}