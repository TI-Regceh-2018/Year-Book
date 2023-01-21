<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body>
    @include('components.navbar')

    <div class="app">
        <main>
            @yield('content')
        </main>
    </div>

    @include('components.footer')
    @include('layouts.script')
</body>

</html>