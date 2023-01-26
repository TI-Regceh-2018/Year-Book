@extends('layouts.app')
@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/pages/love.css') }}">
@endsection

@section('content')
{{-- CONTENT GOES HERE --}}
<div class="header">
    <h1 class="text-center title m-0">Members of Our Beloved Class</h1>
    <h3 class="text-center sub-title">Kepoin Dulu Nyangkut Nanti</h3>
</div>
<div class="love-wrapper row">
    @for($i = 0; $i < 10; $i++) @include('components.card-profile') @endfor </div>
        @endsection
        {{-- CONTENT GOES HERE --}}