@extends('layouts.app')
@section('title', __('site.contact_page_title'))
@section('content')
<section class="page-heading">
    <div class="container">
        <p class="eyebrow">{{ __('site.contact_label') }}</p>
        <h1>{{ __('site.contact_heading') }}</h1>
        <p>{{ __('site.contact_intro') }}</p>
    </div>
</section>

<section class="container contact-detail">
    <div class="contact-panel">
        <div class="contact-copy">
            <p class="eyebrow">{{ __('site.freelance_label') }}</p>
            <h2>{{ __('site.contact_panel_heading') }}</h2>
            <p>{{ __('site.contact_copy') }}</p>
            <a href="{{ route('aktivitas') }}" class="text-link">{{ __('site.contact_skills_link') }} <span aria-hidden="true">→</span></a>
        </div>
        <aside class="contact-info">
            <span class="contact-monogram" aria-hidden="true">FL</span>
            <p class="eyebrow">FANI LESTARI</p>
            <h3>{{ __('site.role_student') }}</h3>
            <p>{{ __('site.university') }}<br>{{ __('site.semester_five') }}</p>
            <div class="contact-info-divider"></div>
            <p class="contact-email-label">{{ __('site.email_label') }}</p>
            <a class="contact-email" href="mailto:digitalfny@gmail.com">digitalfny@gmail.com</a>
            <p class="contact-email-label contact-social-label">LinkedIn</p>
            <a class="contact-email" href="https://www.linkedin.com/in/fani-lestari-6471a53bb/" target="_blank" rel="noopener noreferrer">{{ __('site.linkedin_profile') }} <span aria-hidden="true">↗</span></a>
        </aside>
    </div>
    <p class="contact-footnote">{{ __('site.contact_footnote') }}</p>
</section>
@endsection
