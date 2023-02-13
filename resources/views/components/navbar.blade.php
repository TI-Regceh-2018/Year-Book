<header>
    <nav class="navbar navbar-expand-lg navbar-light top-navbar px-3" data-toggle="sticky-onscroll">
        <div class="container">
            <a class="navbar-brand text-uppercase nav-brand" href="{{ route('dashboard') }}">REGCEH 18</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav pull-right">
                    <a href="{{ route('love') }}" class="nav-item {{ Request::is('love') ? 'active' : '' }}">
                        <li class="nav-link text-dark p-0">
                            <label>Love</label>
                        </li>
                    </a>
                    <a href="{{ route('story') }}" class="nav-item {{ Request::is('story') ? 'active' : '' }}">
                        <li class="nav-link text-dark p-0">
                            <label>Cerita Kocak</label>
                        </li>
                    </a>
                    <a href="{{ route('album') }}" class="nav-item {{ Request::is('album') ? 'active' : '' }}">
                        <li class="nav-link text-dark p-0">
                            <label>Album</label>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <div class="underline">
</header>