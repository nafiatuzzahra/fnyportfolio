@extends('layouts.app')
@section('title', __('site.activities_title'))
@section('content')
<section class="page-heading">
    <div class="container">
        <p class="eyebrow">{{ __('site.activities_label') }}</p>
        <h1>{{ __('site.activities_heading') }}</h1>
        <p>{{ __('site.activities_intro') }}</p>
    </div>
</section>

<section class="container detail-section activity-detail">
    <div class="section-heading">
        <div><p class="eyebrow">{{ __('site.technical_skills_label') }}</p><h2>{{ __('site.technology_heading') }}</h2></div>
        <p class="section-intro">{{ __('site.technology_intro') }}</p>
    </div>
    <div class="capability-grid">
        <article class="capability-card"><span class="capability-index">01</span><h3>HTML &amp; CSS</h3><p>{{ __('site.html_css_copy') }}</p><div class="skill-list"><span>HTML</span><span>CSS</span></div></article>
        <article class="capability-card"><span class="capability-index">02</span><h3>JavaScript</h3><p>{{ __('site.javascript_copy') }}</p><div class="skill-list"><span>JavaScript</span></div></article>
        <article class="capability-card"><span class="capability-index">03</span><h3>React</h3><p>{{ __('site.react_copy') }}</p><div class="skill-list"><span>React</span></div></article>
        <article class="capability-card"><span class="capability-index">04</span><h3>MySQL</h3><p>{{ __('site.mysql_copy') }}</p><div class="skill-list"><span>MySQL</span></div></article>
        <article class="capability-card"><span class="capability-index">05</span><h3>Git &amp; GitHub</h3><p>{{ __('site.git_github_copy') }}</p><div class="skill-list"><span>Git</span><span>GitHub</span></div></article>
    </div>
</section>

<section class="experience-band">
    <div class="container detail-section">
        <div class="section-heading"><div><p class="eyebrow">{{ __('site.activities_section_label') }}</p><h2>{{ __('site.activities_section_heading') }}</h2></div></div>
        <div class="experience-list">
            <article class="experience-item"><span class="experience-number">01</span><div><h3>{{ __('site.practice_project') }}</h3><p>{{ __('site.practice_project_copy') }}</p></div><span class="experience-type">{{ __('site.learning') }}</span></article>
            <article class="experience-item"><span class="experience-number">02</span><div><h3>{{ __('site.coding_camp') }}</h3><p>{{ __('site.coding_camp_copy') }}</p></div><span class="experience-type">{{ __('site.training') }}</span></article>
            <article class="experience-item"><span class="experience-number">03</span><div><h3>{{ __('site.campus_organization') }}</h3><p>{{ __('site.campus_organization_copy') }}</p></div><span class="experience-type">{{ __('site.campus') }}</span></article>
        </div>
    </div>
</section>

<section class="container detail-section projects-detail">
    <div class="section-heading">
        <div><p class="eyebrow">{{ __('site.projects_label') }}</p><h2>{{ __('site.projects_heading') }}</h2></div>
        <p class="section-intro">{{ __('site.projects_intro') }}</p>
    </div>
    <div class="project-list">
        <article><span>01</span><div><h3>{{ __('site.school_website') }}</h3><p>{{ __('site.school_website_copy') }}</p></div><a href="https://nurul-hidayah-sooty.vercel.app/" target="_blank" rel="noopener noreferrer">{{ __('site.open_website') }} <span aria-hidden="true">↗</span></a></article>
        <article><span>02</span><div><h3>{{ __('site.food_website') }}</h3><p>{{ __('site.food_website_copy') }}</p></div><a href="https://hot-f-i.vercel.app/" target="_blank" rel="noopener noreferrer">{{ __('site.open_website') }} <span aria-hidden="true">↗</span></a></article>
        <article><span>03</span><div><h3>{{ __('site.profile_website') }}</h3><p>{{ __('site.profile_website_copy') }}</p></div><a href="https://addclassgua.vercel.app/" target="_blank" rel="noopener noreferrer">{{ __('site.open_website') }} <span aria-hidden="true">↗</span></a></article>
        <article class="client-project-row"><span>04</span><div><h3>{{ __('site.client_project_title') }}</h3><p>{{ __('site.client_project_disclaimer') }}</p></div><span class="client-project-status">{{ __('site.client_project_status') }}</span></article>
    </div>
</section>

<section class="container work-note">
    <div><p class="eyebrow">{{ __('site.collaboration_label') }}</p><h2>{{ __('site.collaboration_heading') }}</h2><p>{{ __('site.collaboration_copy') }}</p></div>
    <a href="{{ route('kontak') }}" class="btn btn-primary">{{ __('site.nav_contact') }} <span aria-hidden="true">→</span></a>
</section>
@endsection
