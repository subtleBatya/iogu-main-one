<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            {{-- <span class="app-brand-logo demo">
                IOGU
            </span> --}}
            {{-- <span class="app-brand-text demo menu-text fw-bold ms-2 text-center">IOGU</span> --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ request()->routeIs('main') ? 'active open' : '' }}">
            <a href="{{ route('main') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Dashboards">{{ __('messages.dashboards') }}</div>
            </a>
        </li>

        <!-- File Manager -->
        <li class="menu-item {{ request()->routeIs('filemanager.index') ? 'active open' : '' }}">
            <a href="{{ route('filemanager.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-folder"></i>
                <div class="text-truncate" data-i18n="File Manager">{{ __('messages.file_manager') }}</div>
            </a>
        </li>

        {{-- User and Role Management --}}
        <li class="menu-item {{ request()->routeIs('category*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div class="text-truncate" data-i18n="User and Role">{{ __('messages.user_and_role') }}</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('roles*') ? 'active' : '' }}">
                    <a href="{{ route('roles.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Roles">{{ __('messages.roles') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('users*') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Users">{{ __('messages.users') }}</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- News -->
        <li class="menu-item {{ request()->routeIs('news*') ? 'active open' : '' }}">
            <a href="{{ route('news.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div class="text-truncate" data-i18n="News">{{ __('messages.news') }}</div>
            </a>
        </li>

        <!-- Notes -->
        <li class="menu-item {{ request()->routeIs('notes*') ? 'active open' : '' }}">
            <a href="{{ route('notes.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-note"></i>
                <div class="text-truncate" data-i18n="Notes">{{ __('messages.notes') }}</div>
            </a>
        </li>

        <!-- Sport -->
        <li class="menu-item {{ request()->routeIs('sport*') ? 'active open' : '' }}">
            <a href="{{ route('sport.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-football"></i>
                <div class="text-truncate" data-i18n="Sport">{{ __('messages.sport') }}</div>
            </a>
        </li>

        <!-- Olympiad -->
        <li class="menu-item {{ request()->routeIs('olympaid*') ? 'active open' : '' }}">
            <a href="{{ route('olympaid.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx  bx-certification"></i>
                <div class="text-truncate" data-i18n="Olympiad">{{ __('messages.olympiada') }}</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('uchurumlar*') ? 'active open' : '' }}">
            <a href="{{ route('uchurumlar.index') }}" class="menu-link">
                <i class="menu-icon tf-icons fas fa-user-graduate"></i>
                <div class="text-truncate" data-i18n="Uchurumlar">{{ __('messages.uchurumlar') }}</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('ustunlukler*') ? 'active open' : '' }}">
            <a href="{{ route('ustunlukler.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-trophy"></i>
                <div class="text-truncate" data-i18n="Ustunlukler">{{ __('messages.ustunlukler') }}</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('yolbashcylar*') ? 'active open' : '' }}">
            <a href="{{ route('yolbashcylar.index') }}" class="menu-link">
                <i class="menu-icon tf-icons fas fa-user-tie"></i>
                <div class="text-truncate" data-i18n="Yolbashcylar">{{ __('messages.yolbashcylar') }}</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('about*') ? 'active open' : '' }}">
            <a href="{{ route('about.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-sitemap"></i>
                <div class="text-truncate" data-i18n="About Us">{{ __('messages.about_us') }}</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('contact*') ? 'active open' : '' }}">
            <a href="{{ route('contact.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-sitemap"></i>
                <div class="text-truncate" data-i18n="Contact Us">{{ __('messages.contact_us') }}</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('dalashgar*') ? 'active open' : '' }}">
            <a href="{{ route('dalashgar.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-sitemap"></i>
                <div class="text-truncate" data-i18n="Dalashgar">{{ __('messages.dalashgar') }}</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('facilities*') ? 'active open' : '' }}">
            <a href="{{ route('facilities.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-building"></i>
                <div class="text-truncate" data-i18n="Facilities">{{ __('messages.facilities') }}</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('kitaphana*') ? 'active open' : '' }}">
            <a href="{{ route('kitaphana.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-library"></i>
                <div class="text-truncate" data-i18n="Kitaphana">{{ __('messages.kitaphana') }}</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('okuwbolumi*') ? 'active open' : '' }}">
            <a href="{{ route('okuwbolumi.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-info-square"></i>
                <div class="text-truncate" data-i18n="Okuwbolumi">{{ __('messages.okuwbolumi') }}</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('structure*') ? 'active open' : '' }}">
            <a href="{{ route('structure.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-sitemap"></i>
                <div class="text-truncate" data-i18n="Structure">{{ __('messages.structure') }}</div>
            </a>
        </li>
    </ul>
</aside>
