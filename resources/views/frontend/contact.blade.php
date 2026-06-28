@extends('layouts.frontend')
@section('title', 'Contact Us | Admissions, Courses and Support')
@section('description', '')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/frontend/contact.css') }}">
@endsection

@section('content')

    {{-- HERO --}}
    <section
        class="contact-hero-bg min-h-[60vh] lg:min-h-[70vh] flex flex-col justify-center items-center pt-24 pb-16 relative">

        <!-- Holographic 3D Rings Background Effect -->
        <div class="hologram-ring-container hidden md:block">
            <div class="holo-ring holo-ring-1"></div>
            <div class="holo-ring holo-ring-2"></div>
            <div class="holo-ring holo-ring-3"></div>
        </div>

        <!-- Center Ambient Glow -->
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-[#d4af37]/20 rounded-full blur-[100px] z-0">
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center flex flex-col items-center">

            <!-- Live Status "Accepting Admissions" Badge -->
            <div class="live-status-badge inline-flex items-center gap-3 px-5 py-2 rounded-full mb-8">
                <span class="relative flex h-3 w-3">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500 shadow-[0_0_10px_#10b981]"></span>
                </span>
                <span class="text-green-400 text-xs font-bold tracking-widest uppercase">Admissions Open for 2026
                    Batch</span>
            </div>

            <!-- Main Headline -->
            <h1 class="text-5xl sm:text-6xl lg:text-[5rem] font-black text-white leading-[1.1] tracking-tight mb-6">
                Let's Build Your <br>
                <span class="title-contact-glow">Tech Career Together.</span>
            </h1>

            <!-- Subtitle -->
            <p class="text-lg sm:text-xl text-gray-400 font-medium max-w-2xl mx-auto leading-relaxed mb-10">
                Have questions about our programs, fees, or batches? Or just want to talk to <strong
                    class="text-white">Dinesh Sir</strong>? Our counseling team is available to guide you.
            </p>

            <!-- Scroll down indicator -->
            <a href="#quick-contact" class="scroll-arrow-btn">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                    </path>
                </svg>
            </a>

        </div>
    </section>

    {{-- Contact Cards --}}
    <section class="luxe-contact-bg pt-10 pb-24 lg:pb-32" id="quick-contact">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10">

                <!-- Luxe Card 1: WhatsApp / Call -->
                <a href="tel:+919582433463" class="luxe-card-wrapper luxe-wrap-phone group">
                    <div class="luxe-card">
                        <div class="luxe-icon-container">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="luxe-title">Direct Contact</h3>
                        <p class="luxe-value">+91 95824 33463</p>
                        <p class="luxe-desc">Speak directly with our counseling team or Diinesh Sir for immediate guidance.
                        </p>
                        <div class="luxe-arrow">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Luxe Card 2: Email -->
                <a href="mailto:dineshvohra4@gmail.com" class="luxe-card-wrapper luxe-wrap-email group">
                    <div class="luxe-card">
                        <div class="luxe-icon-container">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="luxe-title">Write To Us</h3>
                        <!-- Made font slightly smaller for email to fit beautifully without breaking -->
                        <p class="luxe-value text-[1.2rem] lg:text-[1.2rem] xl:text-[1.4rem]">dineshvohra4@gmail.com</p>
                        <p class="luxe-desc">Request detailed fee structures, syllabus PDFs, or batch schedules via email.
                        </p>
                        <div class="luxe-arrow">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Luxe Card 3: Location -->
                <a href="#map-section" class="luxe-card-wrapper luxe-wrap-location group">
                    <div class="luxe-card">
                        <div class="luxe-icon-container">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="luxe-title">Our Centers</h3>
                        <p class="luxe-value">GTB Nagar & Rohini</p>
                        <p class="luxe-desc">Mon - Sat: 9:00 AM to 7:00 PM. <br><span
                                class="text-[#d4af37] font-bold text-xs uppercase tracking-wide mt-2 inline-block">Online
                                Batches Available</span></p>
                        <div class="luxe-arrow">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 14l-7 7m0 0l-7 7m7 7V3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>

    {{-- MAPS --}}
    <section class="illuminated-section-bg py-24 lg:py-32" id="locations">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Elegant Header -->
            <div class="text-center max-w-3xl mx-auto mb-20">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 mb-6">
                    <svg class="w-4 h-4 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    </svg>
                    <span class="text-gray-300 text-xs font-bold uppercase tracking-widest">Visit Our Centers</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-light text-white leading-tight tracking-tight mb-6">
                    Step into our <br>
                    <strong
                        class="font-black text-transparent bg-clip-text bg-gradient-to-r from-[#ffffff] to-[#9ca3af]">Premium
                        Tech Hubs.</strong>
                </h2>
            </div>

            <!-- The Display Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">

                <!-- Card 1: GTB Nagar -->
                <div class="display-card">

                    <!-- The Illuminated Map Bezel -->
                    <div class="map-bezel">
                        <div class="map-tag">
                            <div class="map-tag-dot"></div>
                            Headquarters
                        </div>
                        <!-- Original Light Map -->
                        <iframe class="light-map-iframe"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14000.12345678!2d77.1990123!3d28.7001234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDQyJzAwLjQiTiA3N8KwMTEnNTYuNCJF!5e0!3m2!1sen!2sin!4v1234567890"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="card-content">
                        <h3 class="campus-title">GTB <strong>Nagar.</strong></h3>

                        <div class="info-list">
                            <div class="info-item">
                                <div class="info-icon">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                        </path>
                                    </svg>
                                </div>
                                <div class="info-text-group">
                                    <span class="info-label">Full Address</span>
                                    <span class="info-value">123, Tech Plaza, Near GTB Nagar Metro Station, Gate No. 2,
                                        Kingsway Camp, New Delhi - 110009</span>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="info-text-group">
                                    <span class="info-label">Working Hours</span>
                                    <span class="info-value">Mon - Sat: 09:00 AM — 07:00 PM<br>Sunday: Special Batches
                                        Only</span>
                                </div>
                            </div>
                        </div>

                        <a href="https://maps.google.com" target="_blank" class="btn-nav-premium z-10">
                            Get Directions
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7-7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Rohini -->
                <div class="display-card">

                    <!-- The Illuminated Map Bezel -->
                    <div class="map-bezel">
                        <div class="map-tag">
                            <div class="map-tag-dot" style="background: #3b82f6; box-shadow: 0 0 8px #3b82f6;"></div>
                            Tech Branch
                        </div>
                        <!-- Original Light Map -->
                        <iframe class="light-map-iframe"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14000.12345678!2d77.1001234!3d28.7501234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDQ1JzAwLjQiTiA3N8KwMDYnMDAuNCJF!5e0!3m2!1sen!2sin!4v1234567890"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="card-content">
                        <h3 class="campus-title">Rohini <strong>Sector.</strong></h3>

                        <div class="info-list">
                            <div class="info-item">
                                <div class="info-icon">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                        </path>
                                    </svg>
                                </div>
                                <div class="info-text-group">
                                    <span class="info-label">Full Address</span>
                                    <span class="info-value">Sector 8/9 Dividing Road, Near Rohini East Metro Station,
                                        Outer Ring Road, New Delhi - 110085</span>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="info-text-group">
                                    <span class="info-label">Working Hours</span>
                                    <span class="info-value">Mon - Sat: 09:00 AM — 07:00 PM<br>Sunday: Special Batches
                                        Only</span>
                                </div>
                            </div>
                        </div>

                        <a href="https://maps.google.com" target="_blank" class="btn-nav-premium z-10">
                            Get Directions
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7-7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="faq-light-bg py-24 lg:py-32" id="faq-section">
        <div class="faq-ambient-glow"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-start">

                <!-- LEFT COLUMN: Sticky Intro -->
                <div class="lg:col-span-5 sticky-sidebar">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-gray-200 shadow-sm mb-6">
                        <svg class="w-4 h-4 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        <span class="text-[#0a192f] text-xs font-bold uppercase tracking-widest">Clear Your Doubts</span>
                    </div>

                    <h2 class="text-4xl md:text-5xl font-black text-[#0a192f] leading-tight tracking-tight mb-6">
                        Frequently Asked <br>
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-[#d4af37] to-[#aa8416]">Questions.</span>
                    </h2>

                    <p class="text-lg text-gray-500 font-medium mb-10 leading-relaxed">
                        Everything you need to know about RACT Technologies Institute, our teaching methodology, batches,
                        and enrollment process.
                    </p>

                    <!-- Small Trust Indicator -->
                    <div
                        class="flex items-center gap-4 p-5 mb-10 bg-white border border-gray-100 rounded-2xl shadow-[0_10px_30px_-15px_rgba(0,0,0,0.05)]">
                        <div
                            class="w-12 h-12 rounded-full bg-[#f1f5f9] flex items-center justify-center flex-shrink-0 text-[#0a192f]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[#0a192f] font-bold">Still have questions?</p>
                            <a href="#quick-contact"
                                class="text-[#d4af37] text-sm font-bold uppercase tracking-wide hover:underline mt-1 inline-block">Contact
                                our support</a>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN: The Interactive Accordion -->
                <div class="lg:col-span-7 faq-accordion-wrapper">

                    <!-- FAQ Item 1 -->
                    <div class="faq-card active"> <!-- Added 'active' to keep first one open by default -->
                        <button class="faq-question-btn" onclick="toggleFaq(this)">
                            <span class="faq-question-text">Do you provide free demo classes before enrollment?</span>
                            <div class="faq-icon-wrap">
                                <div class="faq-icon-line horizontal"></div>
                                <div class="faq-icon-line vertical"></div>
                            </div>
                        </button>
                        <div class="faq-answer-container">
                            <div class="faq-answer-content">
                                <div class="faq-answer-inner">
                                    Yes, absolutely. We believe in complete transparency. Every student is entitled to
                                    attend a free live demo session (online or offline) with Diinesh Sir to understand our
                                    logic-first teaching methodology before making any financial commitment.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-card">
                        <button class="faq-question-btn" onclick="toggleFaq(this)">
                            <span class="faq-question-text">Is the curriculum updated for 2026 tech standards?</span>
                            <div class="faq-icon-wrap">
                                <div class="faq-icon-line horizontal"></div>
                                <div class="faq-icon-line vertical"></div>
                            </div>
                        </button>
                        <div class="faq-answer-container">
                            <div class="faq-answer-content">
                                <div class="faq-answer-inner">
                                    Yes. Whether it is our Data Science Mastery program, Python with Machine Learning, or
                                    Full Stack Web Development, our syllabus is strictly aligned with current IT industry
                                    demands, ensuring you learn skills that are actually hirable.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-card">
                        <button class="faq-question-btn" onclick="toggleFaq(this)">
                            <span class="faq-question-text">Are the classes conducted online or offline?</span>
                            <div class="faq-icon-wrap">
                                <div class="faq-icon-line horizontal"></div>
                                <div class="faq-icon-line vertical"></div>
                            </div>
                        </button>
                        <div class="faq-answer-container">
                            <div class="faq-answer-content">
                                <div class="faq-answer-inner">
                                    We offer a Hybrid model. You can join our fully equipped physical tech labs at our GTB
                                    Nagar or Rohini centers for an immersive offline experience, or you can opt for our
                                    seamless live-interactive online batches from anywhere in India.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-card">
                        <button class="faq-question-btn" onclick="toggleFaq(this)">
                            <span class="faq-question-text">What if I miss a class or need extra doubt clearing?</span>
                            <div class="faq-icon-wrap">
                                <div class="faq-icon-line horizontal"></div>
                                <div class="faq-icon-line vertical"></div>
                            </div>
                        </button>
                        <div class="faq-answer-container">
                            <div class="faq-answer-content">
                                <div class="faq-answer-inner">
                                    No student is left behind at RACT. If you miss a class, you will be provided with backup
                                    sessions and recorded lectures. Furthermore, we host dedicated doubt-clearing sessions
                                    every weekend to ensure your core concepts remain crystal clear.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="faq-card">
                        <button class="faq-question-btn" onclick="toggleFaq(this)">
                            <span class="faq-question-text">Do I receive a certificate upon course completion?</span>
                            <div class="faq-icon-wrap">
                                <div class="faq-icon-line horizontal"></div>
                                <div class="faq-icon-line vertical"></div>
                            </div>
                        </button>
                        <div class="faq-answer-container">
                            <div class="faq-answer-content">
                                <div class="faq-answer-inner">
                                    Yes. Upon successful completion of your professional modules and passing the final
                                    assessment, you will receive a verified certificate from RACT Technologies Institute,
                                    which is recognized due to our ISO 9001:2015 certification.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- trust --}}
    <section class="trust-banner-bg" id="trust-banner">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full flex justify-center">

            <!-- The Floating Pearl Pill -->
            <div class="pearl-trust-pill w-full max-w-full">

                <!-- Metric 1: ISO Certification -->
                <div class="trust-metric">
                    <div class="metric-icon">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                            </path>
                        </svg>
                    </div>
                    <div class="metric-data">
                        <span class="metric-value">ISO 9001:2015</span>
                        <span class="metric-label">Certified Quality</span>
                    </div>
                </div>

                <div class="trust-divider"></div>
                <div class="trust-divider-mobile lg:hidden"></div>

                <!-- Metric 2: Google Rating -->
                <div class="trust-metric">
                    <div class="metric-icon" style="color: #3b82f6;">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 10a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"></path>
                        </svg>
                    </div>
                    <div class="metric-data">
                        <span class="metric-value">4.9 / 5.0</span>
                        <div class="star-rating">
                            <svg viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="trust-divider"></div>
                <div class="trust-divider-mobile lg:hidden"></div>

                <!-- Metric 3: Legacy -->
                <div class="trust-metric">
                    <div class="metric-icon" style="color: #10b981;">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="metric-data">
                        <span class="metric-value">19+ Years</span>
                        <span class="metric-label">Of Excellence</span>
                    </div>
                </div>

                <div class="trust-divider"></div>
                <div class="trust-divider-mobile lg:hidden"></div>

                <!-- Metric 4: Success -->
                <div class="trust-metric">
                    <div class="metric-icon" style="color: #8b5cf6;">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="metric-data">
                        <span class="metric-value">50,000+</span>
                        <span class="metric-label">Students Mentored</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

@section('scripts')
    <script>
        function toggleFaq(button) {
            // Get the parent card of the clicked button
            const clickedCard = button.parentElement;

            // Find all faq cards
            const allCards = document.querySelectorAll('.faq-card');

            // Check if the clicked card is already active
            const isActive = clickedCard.classList.contains('active');

            // Close all cards first (creates the exclusive accordion effect)
            allCards.forEach(card => {
                card.classList.remove('active');
            });

            // If it wasn't active before, open it now
            if (!isActive) {
                clickedCard.classList.add('active');
            }
        }
    </script>
@endsection
@endsection
