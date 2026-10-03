@extends('layouts.app')
@section('title', __('site.about_title'))
@section('content')
<section class="page-heading">
    <div class="container">
        <p class="eyebrow">{{ __('site.about_label') }}</p>
        <h1>{{ __('site.about_heading') }}</h1>
        <p>{{ __('site.about_intro') }}</p>
    </div>
</section>

<section class="container detail-section">
    <div class="detail-layout">
        <aside class="detail-sidebar">
            <div class="profile-monogram profile-monogram-large" aria-hidden="true">FL</div>
            <h2>Fani Lestari</h2>
            <p>{{ __('site.role_student') }}</p>
            <span class="status-pill"><span></span> {{ __('site.open_freelance') }}</span>
        </aside>
        <div class="detail-content">
            <section class="detail-block">
                <p class="eyebrow">{{ __('site.about_introduction_label') }}</p>
                <h2>{{ __('site.about_hello') }}</h2>
                <p>{{ __('site.about_intro_copy') }}</p>
            </section>
            <section class="detail-block">
                <p class="eyebrow">{{ __('site.education_label') }}</p>
                <div class="education-item">
                    <span class="education-dot"></span>
                    <div><h3>{{ __('site.education_degree') }}</h3><p>Universitas Sains Al-Qur’an</p><span>{{ __('site.semester_five') }}</span></div>
                </div>
            </section>
            <section class="detail-block">
                <p class="eyebrow">{{ __('site.interests_technology_label') }}</p>
                <p>{{ __('site.skills_intro') }}</p>
                <div class="skill-list"><span>HTML</span><span>CSS</span><span>JavaScript</span><span>React</span><span>MySQL</span><span>Git</span><span>GitHub</span></div>
            </section>
            <section class="detail-block">
                <p class="eyebrow">{{ __('site.work_style_label') }}</p>
                <p>{{ __('site.work_style_copy') }}</p>
            </section>
        </div>
    </div>
</section>
@endsection
