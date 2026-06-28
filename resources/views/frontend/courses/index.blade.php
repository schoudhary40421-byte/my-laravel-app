@extends('layouts.frontend')

@section('title', 'Courses')
@section('description', 'Explore all courses at Ract Technologies — School, Data Science, Programming, Web Development and more.')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/frontend/courses.css') }}">
@endsection

@section('content')
<div class="courses-page">

    {{-- ═══════════════════════════════════════════════════════
         SECTION 1: HERO
    ═══════════════════════════════════════════════════════════ --}}
    <section class="courses-hero">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">

                <div class="hero-badge">
                    <i class="fa-solid fa-sparkles"></i>
                    {{ $categories->count() }} Categories · {{ $categories->sum(fn($c) => $c->courses->count()) }}+ Courses
                </div>

                <h1>
                    Learn Skills That<br>
                    <span class="gold">Actually Get You Hired</span>
                </h1>

                <p class="text-gray-400 text-lg mt-6 mb-10 max-w-xl mx-auto leading-relaxed">
                    From CBSE board prep to Data Science and Web Development —
                    expert-led programs designed for real outcomes.
                </p>

                {{-- Quick Stats Row --}}
                <div class="flex flex-wrap items-center justify-center gap-x-8 gap-y-3 mt-2">
                    <div class="hero-stat">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Industry-relevant curriculum</span>
                    </div>
                    <div class="hero-stat">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Hands-on projects</span>
                    </div>
                    <div class="hero-stat">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Expert mentorship</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         SECTION 2: FEATURED COURSES STRIP
    ═══════════════════════════════════════════════════════════ --}}
    @if($featured->isNotEmpty())
    <section class="featured-strip">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
                <div>
                    <p class="section-label">⭐ Handpicked for You</p>
                    <h2 class="section-title">Featured Courses</h2>
                </div>
                <a href="#all-courses" class="text-sm font-semibold text-[#d4af37] hover:text-[#f0d060] flex items-center gap-2 transition-colors">
                    View all courses <i class="fa-solid fa-arrow-down"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                @foreach($featured as $fc)
                <div class="featured-card animate-in" style="animation-delay: {{ $loop->index * 80 }}ms">

                    @if($fc->badge)
                        <div class="fc-badge">{{ $fc->badge }}</div>
                    @endif

                    <div class="fc-name">{{ $fc->name }}</div>
                    @if($fc->tagline)
                        <div class="fc-tagline">{{ $fc->tagline }}</div>
                    @endif

                    <div class="fc-meta">
                        <div class="fc-fee">{{ $fc->formatted_fee }}</div>
                        <div class="fc-duration">
                            <i class="fa-regular fa-clock text-xs"></i>
                            {{ $fc->formatted_duration }}
                        </div>
                    </div>

                    <a href="{{ route('frontend.courses.show', $fc->slug) }}" class="fc-link">
                        View Details <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    @endif

    {{-- ═══════════════════════════════════════════════════════
         SECTION 3: ALL COURSES (Filterable by Category)
    ═══════════════════════════════════════════════════════════ --}}
    <section class="courses-section" id="all-courses">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Header --}}
            <div class="mb-12 text-center">
                <p class="section-label">Explore Everything</p>
                <h2 class="section-title">All Courses</h2>
                <p class="text-gray-500 mt-3 text-sm">Filter by category or browse all at once</p>
            </div>

            {{-- Filter Buttons --}}
            <div class="filter-nav" id="filterNav">
                <button class="filter-btn active" data-target="all">
                    <i class="fa-solid fa-grip"></i> All Categories
                </button>
                @foreach($categories as $cat)
                    @if($cat->courses->isNotEmpty())
                    <button class="filter-btn" data-target="cat-{{ $cat->id }}">
                        <i class="{{ $cat->icon ?? 'fa-solid fa-circle' }}"></i>
                        {{ $cat->name }}
                    </button>
                    @endif
                @endforeach
            </div>

            {{-- Category Blocks --}}
            @foreach($categories as $cat)
                @if($cat->courses->isNotEmpty())
                <div class="category-block visible" id="cat-{{ $cat->id }}">

                    {{-- Category Heading --}}
                    <div class="category-heading">
                        <div class="cat-icon-wrap" style="color: {{ $cat->color ?? '#d4af37' }}; border-color: {{ $cat->color ?? '#d4af37' }}22;">
                            <i class="{{ $cat->icon ?? 'fa-solid fa-book' }}"></i>
                        </div>
                        <h2>{{ $cat->name }}</h2>
                        <span class="cat-count">{{ $cat->courses->count() }} {{ Str::plural('course', $cat->courses->count()) }}</span>
                    </div>

                    {{-- Course Cards Grid --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                        @foreach($cat->courses as $course)
                        <div class="course-card animate-in" style="animation-delay: {{ $loop->index * 60 }}ms">

                            {{-- Top row: badge --}}
                            <div class="cc-top">
                                @if($course->badge)
                                    @php
                                        $badgeMap = [
                                            'Most Popular'   => 'badge-popular',
                                            'Trending'       => 'badge-trending',
                                            'Job Ready'      => 'badge-new',
                                            'AI Focused'     => 'badge-ai',
                                            'Placement Key'  => 'badge-ai',
                                            'Full Stack Intro'=> 'badge-trending',
                                        ];
                                        $badgeClass = $badgeMap[$course->badge] ?? 'badge-default';
                                    @endphp
                                    <span class="cc-badge {{ $badgeClass }}">{{ $course->badge }}</span>
                                @else
                                    <span></span>
                                @endif
                            </div>

                            {{-- Name & Tagline --}}
                            <div class="cc-name">{{ $course->name }}</div>
                            @if($course->tagline)
                                <div class="cc-tagline">{{ $course->tagline }}</div>
                            @endif

                            {{-- Modules / Syllabus Preview --}}
                            @if($course->modules->isNotEmpty())
                            <ul class="cc-modules">
                                @foreach($course->modules->take(3) as $module)
                                    <li>{{ $module->title }}</li>
                                @endforeach
                            </ul>
                            @if($course->modules->count() > 3)
                                <p class="cc-more-modules">+ {{ $course->modules->count() - 3 }} more topics</p>
                            @endif
                            @endif

                            {{-- Bottom: Fee + Duration + CTA --}}
                            <div class="cc-bottom">
                                <div class="cc-fee">
                                    {{ $course->formatted_fee }}
                                    @if($course->fee_label && $course->fee > 0)
                                        <small>{{ $course->fee_label }}</small>
                                    @endif
                                </div>
                                <div class="cc-info">
                                    <div class="cc-duration">
                                        <i class="fa-regular fa-clock text-xs"></i>
                                        {{ $course->formatted_duration }}
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('frontend.courses.show', $course->slug) }}" class="cc-enroll-btn">
                                Enquire Now <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>

                        </div>
                        @endforeach
                    </div>

                </div>
                @endif
            @endforeach

        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         SECTION 4: CTA BANNER
    ═══════════════════════════════════════════════════════════ --}}
    <section class="courses-cta">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <p class="section-label mb-4">Still Confused?</p>
            <h2 class="cta-title">Let's Find the Right<br>Course for You</h2>
            <p class="cta-sub">
                Our counsellors will help you pick the perfect program based on
                your goals, background and budget — completely free of charge.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="https://wa.me/91{{ setting('whatsapp') }}?text=Hi, I want to know more about your courses"
                   target="_blank" rel="noopener"
                   class="cta-btn-primary">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    Chat on WhatsApp
                </a>
                <a href="{{ route('frontend.contact') }}" class="cta-btn-secondary">
                    <i class="fa-solid fa-envelope"></i>
                    Send an Enquiry
                </a>
            </div>
        </div>
    </section>

</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    // ── Category Filter Logic ─────────────────────────────────
    const filterBtns  = document.querySelectorAll('.filter-btn');
    const catBlocks   = document.querySelectorAll('.category-block');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const target = this.dataset.target;

            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            if (target === 'all') {
                catBlocks.forEach(b => b.classList.add('visible'));
            } else {
                catBlocks.forEach(b => {
                    if (b.id === target) {
                        b.classList.add('visible');
                        b.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    } else {
                        b.classList.remove('visible');
                    }
                });
            }
        });
    });

    // ── Scroll Reveal ─────────────────────────────────────────
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.animate-in').forEach(el => {
        el.style.animationPlayState = 'paused';
        observer.observe(el);
    });

});
</script>
@endsection
