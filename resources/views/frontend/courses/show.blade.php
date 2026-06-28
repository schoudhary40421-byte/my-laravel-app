@extends('layouts.frontend')

@section('title', $course->name)
@section('description', $course->tagline ?? $course->name . ' — Expert-led course at Ract Technologies, Delhi.')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/frontend/course-detail.css') }}">
@endsection

@section('content')
    <div class="course-detail-page">

        {{-- ═══════════════════════════════════════════════════════
         SECTION 1: HERO
    ═══════════════════════════════════════════════════════════ --}}
        <section class="cd-hero">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 cd-hero-content">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

                    {{-- ── Left: Content ──────────────────────────────── --}}
                    <div class="lg:col-span-7 xl:col-span-8 cd-animate" style="animation-delay: 0ms">

                        {{-- Breadcrumb --}}
                        <nav class="cd-breadcrumb">
                            <a href="{{ route('frontend.home') }}">Home</a>
                            <i class="fa-solid fa-chevron-right"></i>
                            <a href="{{ route('frontend.courses.index') }}">Courses</a>
                            <i class="fa-solid fa-chevron-right"></i>
                            <span>{{ $course->name }}</span>
                        </nav>

                        {{-- Category Pill --}}
                        <div class="cd-cat-pill">
                            <i class="{{ $course->category->icon ?? 'fa-solid fa-book' }}"></i>
                            {{ $course->category->name }}
                        </div>

                        {{-- Title --}}
                        <h1 class="cd-hero-title">{{ $course->name }}</h1>

                        {{-- Tagline --}}
                        @if ($course->tagline)
                            <p class="cd-hero-tagline">{{ $course->tagline }}</p>
                        @endif

                        {{-- Quick Meta Pills --}}
                        <div class="cd-meta-row">
                            {{-- Duration --}}
                            @if ($course->duration_value)
                                <div class="cd-meta-pill">
                                    <i class="fa-regular fa-clock"></i>
                                    {{ $course->formatted_duration }}
                                </div>
                            @else
                                <div class="cd-meta-pill">
                                    <i class="fa-regular fa-clock"></i>
                                    Duration: Flexible
                                </div>
                            @endif

                            {{-- Fee --}}
                            <div class="cd-meta-pill">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                {{ $course->formatted_fee }}
                            </div>

                            {{-- Modules count --}}
                            @if ($course->modules->isNotEmpty())
                                <div class="cd-meta-pill">
                                    <i class="fa-solid fa-list-check"></i>
                                    {{ $course->modules->count() }} {{ Str::plural('Module', $course->modules->count()) }}
                                </div>
                            @endif

                            {{-- Badge --}}
                            @if ($course->badge)
                                <div class="cd-meta-pill" style="color: var(--gold); border-color: rgba(212,175,55,0.35);">
                                    <i class="fa-solid fa-sparkles"></i>
                                    {{ $course->badge }}
                                </div>
                            @endif
                        </div>

                        {{-- CTAs --}}
                        <div class="cd-hero-actions">
                            <a href="https://wa.me/91{{ setting('whatsapp') }}?text=Hi, I want to enquire about {{ urlencode($course->name) }} course"
                                target="_blank" rel="noopener" class="cd-btn-primary">
                                <i class="fa-brands fa-whatsapp text-lg"></i>
                                Enquire on WhatsApp
                            </a>
                            <a href="{{ route('frontend.contact') }}" class="cd-btn-secondary">
                                <i class="fa-solid fa-envelope"></i>
                                Send an Enquiry
                            </a>
                        </div>

                    </div>

                    {{-- ── Right: Sticky Price Card ────────────────────── --}}
                    <div class="lg:col-span-5 xl:col-span-4 cd-animate" style="animation-delay: 150ms">
                        <div class="cd-sticky-wrap">
                            <div class="cd-price-card">

                                {{-- Top: Price --}}
                                <div class="cd-price-card-top">
                                    <p class="cd-price-label">Course Fee</p>
                                    @if ($course->fee > 0)
                                        <div class="cd-price">{{ $course->formatted_fee }}</div>
                                        @if ($course->fee_label)
                                            <p class="cd-price-sub">{{ $course->fee_label }}</p>
                                        @endif
                                    @else
                                        <div class="cd-price" style="font-size: 1.6rem;">Contact for Pricing</div>
                                        <p class="cd-price-sub">Subject-wise charges apply</p>
                                    @endif
                                </div>

                                {{-- Body: Meta items --}}
                                <div class="cd-price-card-body">
                                    @if ($course->duration_value)
                                        <div class="cd-card-meta-item">
                                            <span class="label"><i class="fa-regular fa-clock"></i> Duration</span>
                                            <span class="value">{{ $course->formatted_duration }}</span>
                                        </div>
                                    @endif

                                    @if ($course->modules->isNotEmpty())
                                        <div class="cd-card-meta-item">
                                            <span class="label"><i class="fa-solid fa-list-check"></i> Modules</span>
                                            <span class="value">{{ $course->modules->count() }}</span>
                                        </div>
                                    @endif

                                    <div class="cd-card-meta-item">
                                        <span class="label"><i class="fa-solid fa-location-dot"></i> Mode</span>
                                        <span class="value">Classroom + Online</span>
                                    </div>

                                    <div class="cd-card-meta-item">
                                        <span class="label"><i class="fa-solid fa-certificate"></i> Certificate</span>
                                        <span class="value">Yes, on completion</span>
                                    </div>

                                    <div class="cd-card-meta-item">
                                        <span class="label"><i class="fa-solid fa-users"></i> Batch Size</span>
                                        <span class="value">Small Batches</span>
                                    </div>
                                </div>

                                {{-- CTA Buttons --}}
                                <div class="cd-card-cta">
                                    <a href="https://wa.me/91{{ setting('whatsapp') }}?text=Hi, I want to enquire about {{ urlencode($course->name) }} course"
                                        target="_blank" rel="noopener" class="cd-card-btn-primary">
                                        <i class="fa-brands fa-whatsapp text-lg"></i>
                                        Enquire Now — It's Free
                                    </a>
                                    <a href="tel:{{ setting('phone') }}" class="cd-card-btn-wa">
                                        <i class="fa-solid fa-phone"></i>
                                        Call: {{ setting('phone') }}
                                    </a>
                                    <p class="cd-card-note">
                                        <i class="fa-solid fa-shield-check text-xs" style="color: var(--gold)"></i>
                                        No spam. We'll respond within a few hours.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- ═══════════════════════════════════════════════════════
         SECTION 2: WHAT YOU'LL LEARN
    ═══════════════════════════════════════════════════════════ --}}
        <section class="cd-learn">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <p class="cd-section-label">Learning Outcomes</p>
                <h2 class="cd-section-title">What You'll Learn</h2>

                @php
                    /* Generic learning outcomes — can be extended to a DB column later */
                    $learningPoints = [
                        'Core concepts from scratch to advanced level',
                        'Hands-on projects and real-world problem solving',
                        'Industry-standard tools and workflows',
                        'Exam & placement-focused practice',
                        'Regular doubt-clearing sessions',
                        'Certificate of completion from RACT Technologies',
                    ];
                    /* If course has modules, use them as learning points too */
                    if ($course->modules->isNotEmpty()) {
                        $learningPoints = $course->modules->map(fn($m) => $m->title)->toArray();
                    }
                @endphp

                <div class="cd-learn-grid">
                    @foreach ($learningPoints as $point)
                        <div class="cd-learn-item">
                            <i class="fa-solid fa-circle-check"></i>
                            {{ $point }}
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

        {{-- ═══════════════════════════════════════════════════════
         SECTION 3: SYLLABUS (Accordion) — only if modules exist
    ═══════════════════════════════════════════════════════════ --}}
        @if ($course->modules->isNotEmpty())
            <section class="cd-syllabus">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                        <div class="lg:col-span-8">

                            <p class="cd-section-label">Full Curriculum</p>
                            <h2 class="cd-section-title">Course Syllabus</h2>

                            <div id="cdAccordion">
                                @foreach ($course->modules as $module)
                                    <div class="cd-accordion-item {{ $loop->first ? 'open' : '' }}"
                                        data-index="{{ $loop->index }}">

                                        <button class="cd-accordion-btn" type="button"
                                            onclick="toggleAccordion({{ $loop->index }})">
                                            <span
                                                class="cd-acc-num">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                            <span class="cd-acc-title">{{ $module->title }}</span>
                                            <i class="fa-solid fa-chevron-down cd-acc-icon"></i>
                                        </button>

                                        <div class="cd-accordion-body">
                                            <div class="cd-accordion-body-inner">
                                                {{--
                                        Future: Add module_description column to course_modules table
                                        and show it here. For now we show a placeholder.
                                    --}}
                                                This module covers all essential concepts of <strong
                                                    style="color:#fff">{{ $module->title }}</strong>
                                                with live coding sessions, practicals and assessments. Each topic is
                                                explained
                                                from fundamentals and built up step-by-step under expert guidance.
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>

                        </div>

                        {{-- Sidebar summary --}}
                        <div class="lg:col-span-4">
                            <div
                                style="position: sticky; top: 96px; padding: 28px; background: var(--bg-card); border: 1px solid var(--border); border-radius: 16px;">

                                <p
                                    style="font-size: 0.75rem; color: var(--text-muted); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 18px;">
                                    Quick Summary
                                </p>

                                <div style="display: flex; flex-direction: column; gap: 14px;">
                                    <div
                                        style="display: flex; align-items: center; gap: 10px; font-size: 0.85rem; color: var(--text-light);">
                                        <i class="fa-solid fa-book-open" style="color: var(--gold); width: 16px;"></i>
                                        <span><strong>{{ $course->modules->count() }}</strong> detailed modules</span>
                                    </div>
                                    @if ($course->duration_value)
                                        <div
                                            style="display: flex; align-items: center; gap: 10px; font-size: 0.85rem; color: var(--text-light);">
                                            <i class="fa-regular fa-clock" style="color: var(--gold); width: 16px;"></i>
                                            <span><strong>{{ $course->formatted_duration }}</strong> total duration</span>
                                        </div>
                                    @endif
                                    <div
                                        style="display: flex; align-items: center; gap: 10px; font-size: 0.85rem; color: var(--text-light);">
                                        <i class="fa-solid fa-laptop-code" style="color: var(--gold); width: 16px;"></i>
                                        <span>Live coding + practicals</span>
                                    </div>
                                    <div
                                        style="display: flex; align-items: center; gap: 10px; font-size: 0.85rem; color: var(--text-light);">
                                        <i class="fa-solid fa-certificate" style="color: var(--gold); width: 16px;"></i>
                                        <span>Certificate on completion</span>
                                    </div>
                                </div>

                                <div style="margin-top: 28px; padding-top: 20px; border-top: 1px solid var(--border);">
                                    <p style="font-size: 0.78rem; color: var(--text-muted); margin-bottom: 12px;">
                                        Interested in this course?
                                    </p>
                                    <a href="https://wa.me/91{{ setting('whatsapp') }}?text=Hi, I want to know more about {{ urlencode($course->name) }}"
                                        target="_blank" rel="noopener" class="cd-card-btn-primary"
                                        style="display: flex; align-items: center; justify-content: center; gap: 8px; padding: 12px; border-radius: 10px; background: linear-gradient(135deg, var(--gold), var(--gold-dark)); color: #000; font-weight: 800; font-size: 0.85rem; text-decoration: none;">
                                        <i class="fa-brands fa-whatsapp"></i>
                                        Ask About This Course
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        @endif

        {{-- ═══════════════════════════════════════════════════════
         SECTION 4: COURSE HIGHLIGHTS
    ═══════════════════════════════════════════════════════════ --}}
        <section class="cd-highlights">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <p class="cd-section-label">Why This Course</p>
                <h2 class="cd-section-title">Why Choose RACT for<br>{{ $course->name }}?</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                    <div class="cd-highlight-card">
                        <div class="cd-hl-icon"><i class="fa-solid fa-user-tie"></i></div>
                        <div class="cd-hl-title">Expert-Led Classes</div>
                        <p class="cd-hl-desc">Learn directly from Dinesh Sir — 10+ years of teaching experience. No junior
                            faculty, no pre-recorded lectures.</p>
                    </div>

                    <div class="cd-highlight-card">
                        <div class="cd-hl-icon"><i class="fa-solid fa-laptop-code"></i></div>
                        <div class="cd-hl-title">100% Practical</div>
                        <p class="cd-hl-desc">Every concept is reinforced with live coding, assignments and real projects.
                            Theory without practice is incomplete.</p>
                    </div>

                    <div class="cd-highlight-card">
                        <div class="cd-hl-icon"><i class="fa-solid fa-people-group"></i></div>
                        <div class="cd-hl-title">Small Batch Size</div>
                        <p class="cd-hl-desc">Limited seats per batch ensures every student gets personal attention and
                            doubt-clearing time from the mentor.</p>
                    </div>

                    <div class="cd-highlight-card">
                        <div class="cd-hl-icon"><i class="fa-solid fa-certificate"></i></div>
                        <div class="cd-hl-title">Certificate Awarded</div>
                        <p class="cd-hl-desc">On successful completion you receive an ISO 9001:2015 certified RACT
                            Technologies certificate.</p>
                    </div>

                </div>
            </div>
        </section>

        {{-- ═══════════════════════════════════════════════════════
         SECTION 5: FULL DESCRIPTION (if available)
    ═══════════════════════════════════════════════════════════ --}}
        @if ($course->description)
            <section class="cd-about">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                        <div class="lg:col-span-8">
                            <p class="cd-section-label">About the Program</p>
                            <h2 class="cd-section-title">Course Overview</h2>
                            <p class="cd-description">{{ $course->description }}</p>
                        </div>
                        <div class="lg:col-span-4">
                            {{-- Info box --}}
                            <div
                                style="background: var(--bg-card); border: 1px solid var(--border); border-radius: 16px; padding: 28px; margin-top: 70px;">
                                <p
                                    style="font-size: 0.72rem; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; color: var(--gold); margin-bottom: 18px;">
                                    Course Details
                                </p>
                                <div
                                    style="display: flex; flex-direction: column; gap: 12px; font-size: 0.85rem; color: var(--text-light);">
                                    <div style="display: flex; justify-content: space-between;">
                                        <span style="color: var(--text-muted);">Category</span>
                                        <span style="font-weight: 600;">{{ $course->category->name }}</span>
                                    </div>
                                    @if ($course->duration_value)
                                        <div style="display: flex; justify-content: space-between;">
                                            <span style="color: var(--text-muted);">Duration</span>
                                            <span style="font-weight: 600;">{{ $course->formatted_duration }}</span>
                                        </div>
                                    @endif
                                    <div style="display: flex; justify-content: space-between;">
                                        <span style="color: var(--text-muted);">Fee</span>
                                        <span
                                            style="font-weight: 700; color: var(--gold);">{{ $course->formatted_fee }}</span>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;">
                                        <span style="color: var(--text-muted);">Language</span>
                                        <span style="font-weight: 600;">Hindi + English</span>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;">
                                        <span style="color: var(--text-muted);">Mode</span>
                                        <span style="font-weight: 600;">Offline + Online</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        {{-- ═══════════════════════════════════════════════════════
         SECTION 6: RELATED COURSES
    ═══════════════════════════════════════════════════════════ --}}
        @if ($related->isNotEmpty())
            <section class="cd-related">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
                        <div>
                            <p class="cd-section-label">More from {{ $course->category->name }}</p>
                            <h2 class="cd-section-title" style="margin-bottom: 0;">Related Courses</h2>
                        </div>
                        <a href="{{ route('frontend.courses.index') }}"
                            style="font-size: 0.85rem; font-weight: 600; color: var(--gold); text-decoration: none; display: inline-flex; align-items: center; gap: 6px; white-space: nowrap;"
                            onmouseover="this.style.color='#f0d060'" onmouseout="this.style.color='#d4af37'">
                            All Courses <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                        @foreach ($related as $rel)
                            <a href="{{ route('frontend.courses.show', $rel->slug) }}" class="cd-related-card">
                                <div class="cd-rel-name">{{ $rel->name }}</div>
                                @if ($rel->tagline)
                                    <div class="cd-rel-tag">{{ $rel->tagline }}</div>
                                @endif
                                <div class="cd-rel-footer">
                                    <span class="cd-rel-fee">{{ $rel->formatted_fee }}</span>
                                    <i class="fa-solid fa-arrow-right cd-rel-arrow"></i>
                                </div>
                            </a>
                        @endforeach
                    </div>

                </div>
            </section>
        @endif

        {{-- ═══════════════════════════════════════════════════════
         SECTION 7: ENQUIRY CTA BANNER
    ═══════════════════════════════════════════════════════════ --}}
        <section class="cd-cta-banner">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 text-center">

                <p class="cd-section-label mb-4">Ready to Begin?</p>
                <h2 class="cd-cta-title">
                    Start Your Journey in<br>
                    <span
                        style="background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 60%, var(--gold-dark) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">{{ $course->name }}</span>
                </h2>
                <p class="cd-cta-sub">
                    Speak to our counsellor today. Free demo class available.
                    No commitment required.
                </p>

                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="https://wa.me/91{{ setting('whatsapp') }}?text=Hi, I want to join {{ urlencode($course->name) }} course. Please guide me."
                        target="_blank" rel="noopener" class="cd-btn-primary">
                        <i class="fa-brands fa-whatsapp text-lg"></i>
                        Chat on WhatsApp
                    </a>
                    <a href="tel:{{ setting('phone') }}" class="cd-btn-secondary">
                        <i class="fa-solid fa-phone"></i>
                        Call {{ setting('phone') }}
                    </a>
                </div>

                {{-- Address note --}}
                <p
                    style="margin-top: 28px; font-size: 0.78rem; color: var(--text-muted); display: flex; align-items: center; justify-content: center; gap: 7px;">
                    <i class="fa-solid fa-location-dot" style="color: var(--gold);"></i>
                    {{ setting('address') }}
                </p>

            </div>
        </section>

    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // ── Accordion Logic ───────────────────────────────────────
            window.toggleAccordion = function(index) {
                const items = document.querySelectorAll('.cd-accordion-item');
                items.forEach((item, i) => {
                    if (parseInt(item.dataset.index) === index) {
                        item.classList.toggle('open');
                    } else {
                        item.classList.remove('open');
                    }
                });
            };

            // ── Scroll Reveal ─────────────────────────────────────────
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.cd-animate').forEach(el => {
                el.style.animationPlayState = 'paused';
                observer.observe(el);
            });

            // ── Reveal sections on scroll ─────────────────────────────
            const sections = document.querySelectorAll(
                '.cd-learn, .cd-syllabus, .cd-highlights, .cd-about, .cd-related');
            const secObserver = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.querySelectorAll(
                            '.cd-learn-item, .cd-accordion-item, .cd-highlight-card, .cd-related-card'
                            ).forEach((el, i) => {
                            el.style.opacity = '0';
                            el.style.transform = 'translateY(20px)';
                            el.style.transition =
                                `opacity 0.5s ease ${i * 60}ms, transform 0.5s ease ${i * 60}ms`;
                            requestAnimationFrame(() => {
                                el.style.opacity = '1';
                                el.style.transform = 'translateY(0)';
                            });
                        });
                        secObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            sections.forEach(s => secObserver.observe(s));

        });
    </script>
@endsection
