@extends('layouts.app')
@section('title', 'Input Album')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/pages/client/story.css') }}">
@endsection

@section('content')
{{-- CONTENT GOES HERE --}}
<div class="header">
    <h1 class="text-center title m-0">Masih Ada Album Kenangan Kita Ges?</h1>
    <h3 class="text-center sub-title">Masukin Aja Yaak Semuanya Sekalian Sama Ceritain Dikit Hihi:D</h3>
</div>

<div class="px-3 container my-5">
    <div class="card w-100 p-5">
        @if (\Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span>{!! \Session::get('success') !!}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (\Session::has('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span>{!! \Session::get('danger') !!}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (\Session::has('errors'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{ route('story.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3 align-items-center">
                <div class="col-3">
                    <label class="col-form-label fw-bold">Tentang Apa</label>
                </div>
                <div class="col-9">
                    <input type="text" id="judul" name="judul" class="form-control">
                </div>
            </div>
            <div class="row g-3 align-items-center my-2">
                <div class="col-3">
                    <label class="col-form-label fw-bold">Tanggalnya Kapan?</label>
                </div>
                <div class="col-9">
                    <input type="text" id="tanggal_kejadian" name="tanggal_kejadian" class="form-control">
                </div>
            </div>
            <div class="row g-3 align-items-center my-2">
                <div class="col-3">
                    <label class="col-form-label fw-bold">Fotonyaa Mananih</label>
                </div>
                <div class="col-9">
                    <input type="file" id="photo_url" name="photo_url" accept="image/*" class="form-control">
                </div>
            </div>
            <div class="row g-3 my-2">
                <div class="col-3">
                    <label class="col-form-label fw-bold">Ceritain Dikit Dong</label>
                </div>
                <div class="col-9">
                    <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="7"></textarea>
                </div>
            </div>

            <div class="row g-3 align-items-center mt-4 mb-2">
                <div class="col-12 text-center">
                    <button class="btn btn-secondary gajadi" type="reset">Gajadi Deh!</button>
                    <button class="btn btn-warning kepoin-yuk" type="submit">Masukin!</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
{{-- CONTENT GOES HERE --}}