@extends('layouts.app')
@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/pages/story-view.css') }}">
@endsection

@section('content')
<div class="header">
    <h1 class="text-center title m-0">Some Funny Story from Us</h1>
    <h3 class="text-center sub-title">Kalo ga lucu ya maap</h3>
</div>

<div class="story-wrapper row">
    @include('components.story-image')
    @include('components.story-text')
    @foreach ($testi as $t)
        <span>
            {{ $t->id }}
        </span>
    @endforeach
    {{ $testi->links() }}
</div>
@endsection