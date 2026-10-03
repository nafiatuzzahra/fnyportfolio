<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="{{ __('site.meta_description') }}">
    <title>@yield('title', __('site.portfolio')) — Fani Lestari</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <a class="skip-link" href="#main-content">{{ __('site.skip_content') }}</a>
    <header class="navbar">
        <div class="container nav-inner">
            <a href="{{ route('beranda') }}" class="brand" aria-label="{{ __('site.brand_home') }}">
                <span class="brand-symbol" aria-hidden="true">f<span>.</span></span>
                <span class="brand-name">Fani Lestari</span>
            </a>
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
            <label for="nav-toggle" class="burger" aria-label="{{ __('site.menu_toggle') }}"><span></span></label>
            <nav class="nav-links" aria-label="Navigasi utama">
                <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">{{ __('site.nav_home') }}</a>
                <a href="{{ route('data-diri') }}" class="{{ request()->routeIs('data-diri') ? 'active' : '' }}">{{ __('site.nav_about') }}</a>
                <a href="{{ route('aktivitas') }}" class="{{ request()->routeIs('aktivitas') ? 'active' : '' }}">{{ __('site.nav_activities') }}</a>
                <a href="{{ route('kontak') }}" class="nav-contact {{ request()->routeIs('kontak') ? 'active' : '' }}">{{ __('site.nav_contact') }} <span aria-hidden="true">↗</span></a>
            </nav>
            <a class="language-switch" href="{{ route('language.switch', ['locale' => app()->getLocale() === 'id' ? 'en' : 'id', 'page' => request()->route()?->getName()]) }}" lang="{{ app()->getLocale() === 'id' ? 'en' : 'id' }}" aria-label="{{ __('site.switch_language') }}">{{ app()->getLocale() === 'id' ? 'EN' : 'ID' }}</a>
        </div>
    </header>

    <main id="main-content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container footer-main">
            <div class="footer-about">
                <a href="{{ route('beranda') }}" class="footer-brand">Fani Lestari<span>.</span></a>
                <p>{{ __('site.footer_bio') }}</p>
            </div>
            <nav class="footer-nav" aria-label="Navigasi footer">
                <h2>{{ __('site.footer_explore') }}</h2>
                <a href="{{ route('beranda') }}">{{ __('site.nav_home') }}</a>
                <a href="{{ route('data-diri') }}">{{ __('site.nav_about') }}</a>
                <a href="{{ route('aktivitas') }}">{{ __('site.nav_activities') }}</a>
            </nav>
            <div class="footer-contact">
                <h2>{{ __('site.footer_work') }}</h2>
                <p>{{ __('site.footer_contact_copy') }}</p>
                <a href="{{ route('kontak') }}">{{ __('site.footer_contact_link') }} <span aria-hidden="true">↗</span></a>
                <a href="https://www.linkedin.com/in/fani-lestari-6471a53bb/" target="_blank" rel="noopener noreferrer">{{ __('site.linkedin') }} <span aria-hidden="true">↗</span></a>
            </div>
        </div>
        <div class="container footer-bottom">
            <span>&copy; {{ date('Y') }} Fani Lestari</span>
            <span>{{ __('site.footer_note') }}</span>
        </div>
    </footer>
</body>
</html>
