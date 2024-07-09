<header class="homestyle-third">

    <nav class="navbar navbar-expand-lg header-fullpage">
        <div class="container text-nowrap">
            <div class="d-flex align-items-center w-100 col p-0 logo-brand">
                <a class="navbar-brand rounded-bottom light-bg" href="/">
                    <img src="assets/images/logo_dark.svg" alt>
                </a>
            </div>

            <div class="d-inline-flex request-btn order-lg-last col-auto p-0 align-items-center">
                <a class="nav-link btn btn-primary ms-3 donate-btn" href="{{ route('donations') }}">Donate</a>

                <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="navbar-collapse">

                <div class="offcanvas-header">
                    <a href="/" class="logo-small">
                        <img src="assets/images/logo_dark.svg" alt>
                    </a>
                </div>


                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutUs') }}">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="{{ route('causes') }}"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Causes </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Pages </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('becomeAVolunteer') }}">Become
                                        Volunteers</a></li>
                                <li><a class="dropdown-item" href="{{ route('donations') }}">Donation Page</a></li>
                                {{-- <li><a class="dropdown-item" href="{{route('faq')}}">Our Faq's</a></li> --}}
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="close-nav"></div>

            </div>
        </div>
    </nav>

</header>
