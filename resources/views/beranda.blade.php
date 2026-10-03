@extends('layouts.app')
@section('title', __('site.home_title'))
@section('content')
<section class="home-hero">
    <div class="container">
        <div class="hero-copy">
            <p class="hero-greeting">{{ __('site.home_greeting') }} <span aria-hidden="true">👋</span></p>
            <h1>{{ __('site.home_headline') }} <em>{{ __('site.home_headline_emphasis') }}</em></h1>
            <p class="hero-intro">{{ __('site.home_intro') }}</p>
            <div class="hero-actions">
                <a href="{{ route('kontak') }}" class="button button-dark">{{ __('site.home_discuss') }} <span aria-hidden="true">↗</span></a>
                <a href="{{ asset(app()->getLocale() === 'en' ? 'files/cv-fani-lestari-en.pdf' : 'files/cv-fani-lestari.pdf') }}" class="button button-outline" download>{{ __('site.download_cv') }} <span aria-hidden="true">↓</span></a>
                <a href="{{ route('aktivitas') }}" class="button button-text">{{ __('site.home_skills_link') }} <span aria-hidden="true">→</span></a>
            </div>
        </div>

        <figure class="hero-illustration">
            <div class="illustration-surface" role="img" aria-label="{{ __('site.home_illustration_alt') }}">
                <span class="illustration-orbit orbit-one" aria-hidden="true"></span>
                <span class="illustration-orbit orbit-two" aria-hidden="true"></span>
                <span class="illustration-star star-one" aria-hidden="true">✳</span>
                <span class="illustration-star star-two" aria-hidden="true">✦</span>
                <div class="browser-card browser-card-back" aria-hidden="true">
                    <div class="browser-bar"><i></i><i></i><i></i></div>
                    <div class="browser-back-content"><span></span><span></span><span></span></div>
                </div>
                <div class="browser-card browser-card-front" aria-hidden="true">
                    <div class="browser-bar"><i></i><i></i><i></i><b>my little website</b></div>
                    <div class="browser-content">
                        <div class="browser-copy"><span></span><span></span><span></span><i></i></div>
                        <div class="browser-art"><span></span><i></i></div>
                    </div>
                    <div class="browser-footer"><span></span><span></span><span></span></div>
                </div>
                <div class="floating-note note-code" aria-hidden="true">&lt;hello world /&gt;</div>
                <div class="floating-note note-name" aria-hidden="true"><span>FL</span> dibuat pelan-pelan</div>
            </div>
            <figcaption>{{ __('site.home_illustration_caption') }}</figcaption>
        </figure>
    </div>
</section>

<section class="container work-section">
    <div class="section-heading">
        <div>
            <p class="section-eyebrow">{{ __('site.home_projects_label') }}</p>
            <h2>{{ __('site.home_projects_title') }}</h2>
            <p class="section-intro">{{ __('site.home_projects_intro') }}</p>
        </div>
        <a class="section-link" href="{{ route('aktivitas') }}">{{ __('site.home_skills_activities') }} <span aria-hidden="true">↗</span></a>
    </div>
    <div class="project-grid">
        <article class="project-card">
            <a class="project-cover" href="https://nurul-hidayah-sooty.vercel.app/" target="_blank" rel="noopener noreferrer" aria-label="{{ __('site.project_open_school') }}">
                <img src="{{ asset('images/projects/nurul-hidayah.jpg') }}" alt="{{ __('site.project_school_alt') }}">
            </a>
            <div class="project-card-copy"><p>01 / {{ __('site.project_practice') }}</p><h3>{{ __('site.project_school_name') }}</h3><a href="https://nurul-hidayah-sooty.vercel.app/" target="_blank" rel="noopener noreferrer">{{ __('site.visit_website') }} <span aria-hidden="true">↗</span></a></div>
        </article>
        <article class="project-card">
            <a class="project-cover" href="https://hot-f-i.vercel.app/" target="_blank" rel="noopener noreferrer" aria-label="{{ __('site.project_open_food') }}">
                <img src="{{ asset('images/projects/hot-f-i.jpg') }}" alt="{{ __('site.project_food_alt') }}">
            </a>
            <div class="project-card-copy"><p>02 / {{ __('site.project_practice') }}</p><h3>{{ __('site.project_food_name') }}</h3><a href="https://hot-f-i.vercel.app/" target="_blank" rel="noopener noreferrer">{{ __('site.visit_website') }} <span aria-hidden="true">↗</span></a></div>
        </article>
        <article class="project-card">
            <a class="project-cover" href="https://addclassgua.vercel.app/" target="_blank" rel="noopener noreferrer" aria-label="{{ __('site.project_open_profile') }}">
                <img src="{{ asset('images/projects/addclassgua.jpg') }}" alt="{{ __('site.project_profile_alt') }}">
            </a>
            <div class="project-card-copy"><p>03 / {{ __('site.project_practice') }}</p><h3>{{ __('site.project_profile_name') }}</h3><a href="https://addclassgua.vercel.app/" target="_blank" rel="noopener noreferrer">{{ __('site.visit_website') }} <span aria-hidden="true">↗</span></a></div>
        </article>
        <article class="project-card project-card-client">
            <div class="project-cover project-cover-client">
                <img src="{{ asset('images/projects/kedai-kotaku.jpg') }}" alt="{{ __('site.client_project_alt') }}">
                <span class="client-project-badge">{{ __('site.client_project_badge') }}</span>
            </div>
            <div class="project-card-copy"><p>{{ __('site.client_project_label') }}</p><h3>{{ __('site.client_project_title') }}</h3><p class="client-project-note">{{ __('site.client_project_note') }}</p></div>
        </article>
    </div>
    <p class="work-disclaimer">{{ __('site.home_projects_disclaimer') }}</p>
</section>

<section class="about-preview">
    <div class="container about-preview-inner">
        <p class="section-eyebrow">{{ __('site.home_about_label') }}</p>
        <h2>{{ __('site.home_about_title') }}</h2>
        <p>{{ __('site.home_about_copy') }}</p>
        <a class="section-link" href="{{ route('data-diri') }}">{{ __('site.home_about_link') }} <span aria-hidden="true">↗</span></a>
    </div>
</section>

<section class="container activity-preview">
    <div class="section-heading">
        <div>
            <p class="section-eyebrow">{{ __('site.home_activity_label') }}</p>
            <h2>{{ __('site.home_activity_title') }}</h2>
        </div>
        <a class="section-link" href="{{ route('aktivitas') }}">{{ __('site.home_activity_link') }} <span aria-hidden="true">↗</span></a>
    </div>
    <div class="activity-tags">
        <span>HTML</span><span>CSS</span><span>JavaScript</span><span>React</span><span>MySQL</span><span>Git &amp; GitHub</span>
    </div>
    <p class="activity-summary">{{ __('site.home_activity_summary') }}</p>
</section>

<section class="contact-cta">
    <div class="container contact-cta-inner">
        <div>
            <p class="section-eyebrow">{{ __('site.home_cta_label') }}</p>
            <h2>{{ __('site.home_cta_title') }}</h2>
            <p>{{ __('site.home_cta_copy') }}</p>
        </div>
        <a href="{{ route('kontak') }}" class="button button-dark">{{ __('site.home_contact_link') }} <span aria-hidden="true">↗</span></a>
    </div>
</section>
@endsection
