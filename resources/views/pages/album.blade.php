@extends('layouts.app')
@section('title', 'Dashboard')

@section('css')
{{-- ADDITIONAL CSS GOES HERE --}}
<link rel="stylesheet" href="{{ asset('assets/css/pages/album.css') }}">
{{-- ADDITIONAL CSS GOES HERE --}}
@endsection

@section('content')
{{-- CONTENT GOES HERE --}}
<div class="header">
    <h1 class="text-center title m-0">Moments Of Memories</h1>
    <h3 class="text-center sub-title">Foto foto gaje banget</h3>
</div>
<div class="album-wrapper row">

    @for ($i=0; $i<10; $i++)

    @include('components.album-photo')

    @endfor

</div>


{{-- CONTENT GOES HERE --}}
@endsection
