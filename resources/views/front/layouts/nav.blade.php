<style>
    #mainNavbar {
        position: sticky;
        top: 0;
        width: 100%;
        z-index: 1020;
    }
</style>
<!-- Top Logos -->
<div class="company-logos z-2" style="background-color: #3a882f;">
    <img src="images/testimonials.png" alt="Company 1" />
    <img src="images/testimonials2.jpeg" alt="Company 2" />
    <img src="images/testimonials3.png" alt="Company 3" />
    <img src="images/testimonials4.jpeg" alt="Company 4" />
    <img src="images/testimonials5.png" alt="Company 1" />
    <img src="images/testimonials6.jpeg" alt="Company 2" />
    <img src="images/testimonials7.jpeg" alt="Company 3" />
    <img src="images/testimonials8.png" alt="Company 4" />
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" id="mainNavbar">
    <div class="container-fluid">
        <!-- Left Logo and Name -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img style="height: 6rem" src="images/logo.png" alt="University Logo" />
            <span style="color: #00ff00">IOGU <small style="color: rgb(168, 165, 165)">Official site</small> <br /><span class="text-white">
                    Yagshygeldi Kakayev <br> International <br> Oil and Gas University
                </span></span>
        </a>

        <!-- Navbar Toggler for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links Centered -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">{{ __('messages.homepage') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                        data-bs-toggle="dropdown">{{ __('messages.university') }}</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('front.about') }}">{{ __('messages.about_us') }}</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                                href="{{ route('front.faculty') }}">{{ __('messages.faculty') }}</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                                href="{{ route('front.department') }}">{{ __('messages.department') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                        data-bs-toggle="dropdown">{{ __('messages.science') }}</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('front.notes') }}">{{ __('messages.notes') }}</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                                href="{{ route('front.olympaid') }}">{{ __('messages.olympiada') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                        data-bs-toggle="dropdown">{{ __('messages.science2') }}</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('front.sport') }}">{{ __('messages.sport') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.news') }}">{{ __('messages.news') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('front.announcements') }}">{{ __('messages.announcements') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.contact') }}">{{ __('messages.contact_us') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item"
                                href="{{ route('locale.switch', ['locale' => 'en']) }}">English</a></li>
                        <li><a class="dropdown-item"
                                href="{{ route('locale.switch', ['locale' => 'ru']) }}">Русский</a></li>
                        <li><a class="dropdown-item"
                                href="{{ route('locale.switch', ['locale' => 'tm']) }}">Türkmen</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Right Logo -->
        <a class="right-logo" href="#">
            <img style="height: 5rem" src="images/right_logo.png" alt="Right Logo" />
        </a>
    </div>
</nav>
