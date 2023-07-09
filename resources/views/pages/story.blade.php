@extends('layouts.app')
@section('title', 'Dashboard')

@section('css')
{{-- ADDITIONAL CSS GOES HERE --}}

<link rel="stylesheet" href="{{ asset('assets/css/pages/story.css') }}">
{{-- ADDITIONAL CSS GOES HERE --}}
@endsection

@section('content')
{{-- CONTENT GOES HERE --}}
<div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
    <div class="row pt-5 pb-5 m-0 title">
        <div class="header">
            <h1 class="text-center title m-0">Some Funny Story From Us</h1>
            <h3 class="text-center sub-title">Kalo ga lucu ya maap</h3>
        </div>
    </div>
    <div class="container">
        <div class="row p-5">
            <div class="col-12 col-lg-12 col-xl-6 d-flex justify-content-center">
                @include('components.photo')
            </div>
            <div class="col-12 col-lg-12 col-xl-6 d-flex justify-content-center ">
                @include('components.story-text')
            </div>
        </div>

        <div class="row p-5 flex-row-reverse">
            <div class="col-12 col-lg-12 col-xl-6 d-flex justify-content-center">
                @include('components.photo-4pic')
            </div>
            <div class="col-12 col-lg-12 col-xl-6 d-flex justify-content-center">
                @include('components.story-text-2')
            </div>
        </div>
    </div>

</div>

{{-- CONTENT GOES HERE --}}
@endsection