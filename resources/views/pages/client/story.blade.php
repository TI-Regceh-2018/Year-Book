@extends('layouts.app')
@section('title', 'Input Story')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/pages/client/story.css') }}">
@endsection

@section('content')
{{-- CONTENT GOES HERE --}}
<div class="header">
    <h1 class="text-center title m-0">Ngomongin Cerita Kocak</h1>
    <h3 class="text-center sub-title">Masukin Aja Yang Sekiranya Lucu, Kalo Gak Lucu Yamaap</h3>
</div>

<div class="px-3 container my-5">
    <div class="card w-100 p-5">
        <form action="#">
            <div class="row g-3 align-items-center">
                <div class="col-3">
                    <label class="col-form-label fw-bold">Judul</label>
                </div>
                <div class="col-9">
                    <input type="text" id="judul" name="judul" class="form-control">
                </div>
            </div>
            <div class="row g-3 align-items-center my-2">
                <div class="col-3">
                    <label class="col-form-label fw-bold">Tanggal Kejadian</label>
                </div>
                <div class="col-9">
                    <input type="text" id="tanggal_kejadian" name="tanggal_kejadian" class="form-control">
                </div>
            </div>
            <div class="row g-3 my-2">
                <div class="col-3">
                    <label class="col-form-label fw-bold">Deskripsi</label>
                </div>
                <div class="col-9">
                    <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="7"></textarea>
                </div>
            </div>
            <div class="row g-3 align-items-center my-2">
                <div class="col-3">
                    <label class="col-form-label fw-bold">Foto Cerita 1</label>
                </div>
                <div class="col-9">
                    <input type="file" id="photo_1" name="photo_1" class="form-control">
                </div>
            </div>
            <div class="row g-3 align-items-center my-2">
                <div class="col-12">
                    <label class="col-form-label fw-bold">* Kalau Mau Masukin Multiple Foto, Sekalian 4 Yaa Biar
                        Bagus!</label>
                </div>
            </div>
            <div class="row g-3 align-items-center my-2">
                <div class="col-3">
                    <label class="col-form-label fw-bold">Foto Cerita 2</label>
                </div>
                <div class="col-9">
                    <input type="file" id="photo_2" name="photo_2" class="form-control">
                </div>
            </div>
            <div class="row g-3 align-items-center my-2">
                <div class="col-3">
                    <label class="col-form-label fw-bold">Foto Cerita 3</label>
                </div>
                <div class="col-9">
                    <input type="file" id="photo_3" name="photo_3" class="form-control">
                </div>
            </div>
            <div class="row g-3 align-items-center my-2">
                <div class="col-3">
                    <label class="col-form-label fw-bold">Foto Cerita 4</label>
                </div>
                <div class="col-9">
                    <input type="file" id="photo_4" name="photo_4" class="form-control">
                </div>
            </div>
            <div class="row g-3 align-items-center mt-4 mb-2">
                <div class="col-12 text-center">
                    <button class="btn btn-secondary gajadi">Gajadi Deh!</button>
                    <button class="btn btn-warning kepoin-yuk">Masukin!</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
{{-- CONTENT GOES HERE --}}