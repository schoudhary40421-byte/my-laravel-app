@extends('layouts.frontend')
@section('title', 'About Us')
@section('description', '')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/frontend/about.css') }}">
@endsection

@section('content')

    {{-- HERO --}}
    <section class="about-hero-bg min-h-[90vh] lg:min-h-[85vh] flex items-center pt-24 pb-20 relative">

        <!-- Ambient Background Elements -->
        <div class="orb-gold"></div>
        <div class="orb-blue"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

                <!-- LEFT COLUMN: The Story & Hook -->
                <div class="lg:col-span-6 space-y-8 text-center lg:text-left">

                    <!-- Premium Tag -->
                    <div
                        class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mx-auto lg:mx-0">
                        <span class="flex h-2 w-2 relative">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#d4af37] opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-[#d4af37]"></span>
                        </span>
                        <span class="text-gray-300 text-xs font-bold tracking-widest uppercase">
                            Our Story & Legacy
                        </span>
                    </div>

                    <!-- Main Hero Typography -->
                    <h1 class="text-4xl sm:text-5xl lg:text-[4rem] font-black text-white leading-[1.15] tracking-tight">
                        Shaping India's <br>
                        Tech Future <span class="text-legacy-gold">Since 2007.</span>
                    </h1>

                    <!-- Core Brand Message -->
                    <div class="relative pl-6 border-l-4 border-[#d4af37] max-w-2xl mx-auto lg:mx-0">
                        <p class="text-xl sm:text-2xl text-white font-semibold mb-3 leading-snug">
                            "...where dreams come true"
                        </p>
                        <p class="text-gray-400 text-base sm:text-lg font-medium leading-relaxed">
                            For nearly two decades, RACT Technologies Institute has been the cornerstone of quality computer
                            science education. Led by <strong class="text-white">Dinesh Sir</strong>, we transform complex
                            code into stepping stones for your success.
                        </p>
                    </div>

                    <!-- Quick Legacy Stats (Mini Bento) -->
                    <div class="grid grid-cols-3 gap-4 pt-4 max-w-lg mx-auto lg:mx-0">
                        <div
                            class="bg-white/5 border border-white/5 rounded-2xl p-4 text-center hover:bg-white/10 transition-colors">
                            <h3 class="text-2xl font-black text-white">19+</h3>
                            <p class="text-[#d4af37] text-xs font-bold uppercase tracking-wide mt-1">Years Legacy</p>
                        </div>
                        <div
                            class="bg-white/5 border border-white/5 rounded-2xl p-4 text-center hover:bg-white/10 transition-colors">
                            <h3 class="text-2xl font-black text-white">99</h3>
                            <p class="text-[#d4af37] text-xs font-bold uppercase tracking-wide mt-1">Highest Score</p>
                        </div>
                        <div
                            class="bg-white/5 border border-white/5 rounded-2xl p-4 text-center hover:bg-white/10 transition-colors">
                            <div class="flex justify-center items-center h-8">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="text-[#d4af37] text-xs font-bold uppercase tracking-wide mt-1">ISO Certified</p>
                        </div>
                    </div>

                </div>

                <!-- RIGHT COLUMN: Abstract CSS Legacy Monument (Visual Masterpiece) -->
                <div class="lg:col-span-6 hidden md:block">
                    <div class="legacy-visual-container w-full">

                        <!-- Faint Background Year Text -->
                        <div class="massive-year hidden lg:block">2007</div>

                        <!-- Main Glass Card -->
                        <div class="glass-monument w-[320px] lg:w-[380px] text-center">
                            <div
                                class="w-20 h-20 mx-auto bg-gradient-to-tr from-[#d4af37] to-[#aa8416] rounded-full flex items-center justify-center mb-6 shadow-[0_0_30px_rgba(212,175,55,0.4)]">
                                <!-- Star/Trophy Icon -->
                                <svg class="w-10 h-10 text-[#02040a]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <h2 class="text-4xl font-black text-white mb-2">Foundation</h2>
                            <p class="text-[#d4af37] font-bold tracking-widest uppercase text-sm mb-4">RACT Institute</p>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Established with a single vision: to build a robust logical foundation in coding, rather
                                than just completing the syllabus.
                            </p>
                        </div>

                        <!-- Floating Excellence Badge -->
                        <div class="floating-card-badge">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-[#02040a] border border-[#d4af37]/50 rounded-full flex items-center justify-center text-[#d4af37]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-black text-white leading-none">19+ Years</p>
                                <p class="text-gray-400 text-xs font-semibold uppercase mt-1">Of Unmatched Results</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <a href="#director-desk" class="scroll-indicator">
            <span class="text-[#d4af37] text-xs font-bold uppercase tracking-widest mb-1">Scroll to Explore</span>
            <div class="mouse-outline">
                <div class="mouse-wheel"></div>
            </div>
        </a>

    </section>

    {{-- vision --}}
    <section class="visionary-section-bg py-24 lg:py-32" id="visionary">

        <!-- Giant Watermark -->
        <div class="watermark-text hidden md:block">THE VISIONARY</div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-12 items-center">

                <!-- LEFT COLUMN: The Premium Portrait (Takes 5 Columns) -->
                <div class="lg:col-span-5 relative">
                    <!-- Dot Grid Decoration -->
                    <div class="dot-grid-decor"></div>

                    <!-- Main Portrait Frame -->
                    <div class="founder-frame h-[500px] lg:h-[650px] w-full max-w-md mx-auto lg:mx-0 relative">
                        <!-- Developer Note: Replace this Unsplash link with Dinesh Sir's actual high-quality portrait -->
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Dinesh Sir - Founder of RACT" class="founder-img">

                        <!-- Gradient overlay for premium feel at the bottom -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#0a192f]/80 via-transparent to-transparent pointer-events-none">
                        </div>
                    </div>

                    <!-- Floating Excellence Badge -->
                    <div class="exp-badge-float">
                        <p
                            class="text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-[#d4af37] to-[#fdf0a6]">
                            10+</p>
                        <p class="text-white text-xs font-bold uppercase tracking-widest mt-1">Years of<br>Mentorship</p>
                    </div>
                </div>

                <!-- RIGHT COLUMN: The Story & Vision (Takes 7 Columns) -->
                <div class="lg:col-span-7 lg:pl-10 relative z-10">

                    <!-- Tagline/Eyebrow -->
                    <div class="inline-flex items-center gap-2 mb-6">
                        <span class="w-8 h-[2px] bg-[#d4af37]"></span>
                        <span class="text-[#d4af37] text-sm font-bold uppercase tracking-widest">Meet The Founder</span>
                    </div>

                    <!-- Headline -->
                    <h2
                        class="text-4xl sm:text-5xl lg:text-[3.5rem] font-black text-[#0a192f] leading-[1.1] tracking-tight mb-6">
                        Behind every <br> successful coder is a <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#d4af37] to-[#aa8416]">great
                            mentor.</span>
                    </h2>

                    <!-- Main Introduction -->
                    <div class="space-y-5 text-gray-600 text-lg leading-relaxed font-medium">
                        <p>
                            With a profound passion for technology and an innate ability to simplify complex logic, <strong
                                class="text-[#0a192f]">Dinesh Sir</strong> established RACT Technologies Institute in 2007.
                            His vision was clear: to move away from traditional rote learning and create an ecosystem where
                            programming is learned by doing.
                        </p>
                        <p>
                            Over the past decade, he has personally mentored thousands of students. Whether it's a school
                            student aiming for <strong class="text-blue-600">95+ in CBSE Boards</strong> or a college grad
                            breaking into <strong class="text-blue-600">Data Science and Web Development</strong>, Diinesh
                            Sir’s practical and patient approach has been the catalyst for their success.
                        </p>
                    </div>

                    <!-- The Editorial Quote -->
                    <div class="editorial-quote">
                        <p class="text-xl sm:text-2xl text-[#0a192f] font-semibold italic leading-snug">
                            "Coding is not about memorizing syntax; it's about training your mind to think logically and
                            solve real-world problems efficiently."
                        </p>
                    </div>

                    <!-- Signature & Details -->
                    <div class="mt-10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
                        <div>
                            <div class="signature-font mb-2">Dinesh Vohra</div>
                            <p class="text-[#0a192f] font-extrabold text-lg uppercase tracking-wide">Dinesh Sir</p>
                            <p class="text-gray-500 text-sm font-medium">Founder & Lead Mentor, RACT Institute</p>
                        </div>

                        <!-- Connect Button -->
                        <a href="tel:+919582433463"
                            class="group relative inline-flex items-center justify-center px-8 py-3.5 text-base font-bold text-white bg-[#0a192f] rounded-xl overflow-hidden transition-all hover:bg-blue-900 shadow-[0_10px_20px_rgba(10,25,47,0.2)]">
                            <span
                                class="absolute w-0 h-0 transition-all duration-500 ease-out bg-[#d4af37] rounded-full group-hover:w-56 group-hover:h-56 z-0"></span>
                            <span class="relative z-10 flex items-center">
                                Talk to Dinesh Sir
                                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- mission --}}
    <section class="core-values-bg py-24 lg:py-32" id="mission-vision">
        <div class="spotlight-center"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-20">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 mb-6">
                    <span class="w-2 h-2 rounded-full bg-[#d4af37] animate-pulse"></span>
                    <span class="text-gray-300 text-xs font-bold uppercase tracking-widest">The Core of RACT</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight mb-6">
                    Our Mission, Vision <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#d4af37] to-[#aa8416]">&
                        Values.</span>
                </h2>
                <p class="text-lg text-gray-400 font-medium">
                    The driving forces that inspire us every day to deliver top-tier education and build the next generation
                    of tech leaders.
                </p>
            </div>

            <!-- 3D Core Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10 items-stretch">

                <!-- Card 1: The Mission -->
                <div class="core-card card-mission">
                    <div class="core-icon-3d">
                        <svg class="w-10 h-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-black mb-4 title-mission">Our Mission</h3>
                    <div class="w-12 h-1 bg-blue-500/30 rounded-full mb-6"></div>
                    <p class="text-gray-400 text-base leading-relaxed">
                        To eradicate rote learning in computer science. We strive to empower students by building an
                        unshakable foundation in logic and programming, transforming them from beginners into highly
                        skilled, industry-ready professionals.
                    </p>
                </div>

                <!-- Card 2: The Vision (Slightly elevated by default for a dynamic grid) -->
                <div class="core-card card-vision lg:-mt-6 lg:mb-6">
                    <div class="core-icon-3d">
                        <svg class="w-10 h-10 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-black mb-4 title-vision">Our Vision</h3>
                    <div class="w-12 h-1 bg-[#d4af37]/30 rounded-full mb-6"></div>
                    <p class="text-gray-400 text-base leading-relaxed">
                        To be India’s most trusted and premier educational institution for tech education. We envision a
                        future where every RACT student leads the IT industry with excellence, securing continuous 95+
                        scores and top-tier tech placements.
                    </p>
                </div>

                <!-- Card 3: Core Values -->
                <div class="core-card card-values">
                    <div class="core-icon-3d">
                        <svg class="w-10 h-10 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-black mb-4 title-values">Core Values</h3>
                    <div class="w-12 h-1 bg-green-500/30 rounded-full mb-6"></div>
                    <ul class="value-list w-full pl-2">
                        <li>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            100% Practical Focus
                        </li>
                        <li>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Student-First Mentorship
                        </li>
                        <li>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Uncompromised Quality (ISO)
                        </li>
                        <li>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Integrity & Transparency
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    {{-- The RACT Journey (Interactive Timeline) --}}
    <section class="timeline-light-bg py-24 lg:py-32" id="journey">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-20">
                <div
                    class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white border border-gray-200 shadow-sm mb-6">
                    <svg class="w-4 h-4 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-[#0a192f] text-xs font-bold uppercase tracking-widest">A Legacy Built Over
                        Time</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-[#0a192f] leading-tight tracking-tight mb-6">
                    The Journey of <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#d4af37] to-[#aa8416]">RACT
                        Institute.</span>
                </h2>
                <p class="text-lg text-gray-600 font-medium">
                    From a small classroom to becoming Delhi's premier ISO-certified IT coaching institute. Here is how we
                    evolved.
                </p>
            </div>

            <!-- The Interactive Timeline -->
            <div class="relative py-10">
                <!-- The Central Elegant Line -->
                <div class="timeline-line-light"></div>

                <!-- Milestone 1: Foundation -->
                <div class="timeline-row-light">
                    <div class="timeline-marker-light"></div>
                    <div class="timeline-card-light">
                        <div class="watermark-year">2007</div>
                        <div class="card-header-light flex items-center gap-4 mb-4 relative z-10">
                            <div class="timeline-icon-light">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-black text-[#0a192f]">The Inception</h3>
                        </div>
                        <div class="relative z-10">
                            <p class="text-[#d4af37] font-bold text-sm uppercase tracking-widest mb-3">Laying The
                                Foundation</p>
                            <p class="text-gray-600 text-base leading-relaxed font-medium">
                                Diinesh Sir established RACT Technologies Institute with a singular vision: to move beyond
                                textbook rote learning and build strong, logic-driven foundations for students in computer
                                science.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Milestone 2: Expansion -->
                <div class="timeline-row-light">
                    <div class="timeline-marker-light" style="border-color: #3b82f6;"></div>
                    <div class="timeline-card-light">
                        <div class="watermark-year">2015</div>
                        <div class="card-header-light flex items-center gap-4 mb-4 relative z-10">
                            <div class="timeline-icon-light"
                                style="color: #3b82f6; border-color: rgba(59, 130, 246, 0.2);">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-black text-[#0a192f]">Expanding Horizons</h3>
                        </div>
                        <div class="relative z-10">
                            <p class="text-blue-600 font-bold text-sm uppercase tracking-widest mb-3">Professional Modules
                            </p>
                            <p class="text-gray-600 text-base leading-relaxed font-medium">
                                Scaled our curriculum to include industry-ready professional courses like Full Stack Web
                                Designing, Core Java, and advanced C/C++ modules for BCA/MCA college students.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Milestone 3: Advanced Tech Era -->
                <div class="timeline-row-light">
                    <div class="timeline-marker-light" style="border-color: #10b981;"></div>
                    <div class="timeline-card-light">
                        <div class="watermark-year">2020</div>
                        <div class="card-header-light flex items-center gap-4 mb-4 relative z-10">
                            <div class="timeline-icon-light"
                                style="color: #10b981; border-color: rgba(16, 185, 129, 0.2);">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-black text-[#0a192f]">The Tech Leap</h3>
                        </div>
                        <div class="relative z-10">
                            <p class="text-green-600 font-bold text-sm uppercase tracking-widest mb-3">Data Science Era</p>
                            <p class="text-gray-600 text-base leading-relaxed font-medium">
                                Adapted to global tech trends by launching premium tracks in Data Science, Python with
                                Machine Learning, and Data Analytics, empowering students with the skills of the future.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Milestone 4: Record Breaking Results -->
                <div class="timeline-row-light">
                    <div class="timeline-marker-light"></div>
                    <div class="timeline-card-light">
                        <div class="watermark-year">2021</div>
                        <div class="card-header-light flex items-center gap-4 mb-4 relative z-10">
                            <div class="timeline-icon-light">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-black text-[#0a192f]">Era of Excellence</h3>
                        </div>
                        <div class="relative z-10">
                            <p class="text-[#d4af37] font-bold text-sm uppercase tracking-widest mb-3">Unbeatable Board
                                Scores</p>
                            <p class="text-gray-600 text-base leading-relaxed font-medium">
                                Solidified our position as Delhi's top institute as our 'Rising Stars' consistently secured
                                highest scores like 99, 98, and 97 in CBSE XI-XII (CS/IP) board examinations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Milestone 5: Today -->
                <div class="timeline-row-light">
                    <div class="timeline-marker-light" style="border-color: #8b5cf6;"></div>
                    <div class="timeline-card-light">
                        <div class="watermark-year">Today</div>
                        <div class="card-header-light flex items-center gap-4 mb-4 relative z-10">
                            <div class="timeline-icon-light"
                                style="color: #8b5cf6; border-color: rgba(139, 92, 246, 0.2);">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-black text-[#0a192f]">A Legacy Certified</h3>
                        </div>
                        <div class="relative z-10">
                            <p class="text-purple-600 font-bold text-sm uppercase tracking-widest mb-3">ISO 9001:2015
                                Certified</p>
                            <p class="text-gray-600 text-base leading-relaxed font-medium">
                                Today, RACT stands as an ISO 9001:2015 certified institution, successfully running premium
                                branches in GTB Nagar and Rohini, and continuing to turn tech dreams into reality.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Educational --}}
    <section class="methodology-bg py-24 lg:py-32" id="methodology">
        <div class="methodology-core-glow"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-20">
                <div
                    class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-[#0a192f] border border-[#d4af37]/30 shadow-[0_0_15px_rgba(212,175,55,0.1)] mb-6">
                    <svg class="w-4 h-4 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                        </path>
                    </svg>
                    <span class="text-[#d4af37] text-xs font-bold uppercase tracking-widest">Our Educational
                        Philosophy</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight mb-6">
                    The <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#d4af37] to-[#aa8416]">RACT
                        Methodology.</span>
                </h2>
                <p class="text-lg text-gray-400 font-medium">
                    We don't just complete the syllabus. We follow a proven 4-step blueprint that transforms complete
                    beginners into logic-driven, high-scoring tech professionals.
                </p>
            </div>

            <!-- 4-Step Process Grid -->
            <div class="relative">
                <!-- Desktop Animated Connecting Line -->
                <div class="flow-connector"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 relative z-10">

                    <!-- Step 1 -->
                    <div class="method-card">
                        <div class="step-watermark">01</div>
                        <div class="flex justify-between items-start mb-2">
                            <div class="step-badge">01</div>
                            <svg class="w-8 h-8 method-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 relative z-10">Logic Before Syntax</h3>
                        <p class="text-gray-400 text-sm leading-relaxed relative z-10 font-medium">
                            Programming isn't about memorizing code. We start by building your core logical thinking and
                            algorithm design before writing a single line of actual code.
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div class="method-card">
                        <div class="step-watermark">02</div>
                        <div class="flex justify-between items-start mb-2">
                            <div class="step-badge">02</div>
                            <svg class="w-8 h-8 method-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 relative z-10">Hands-on Execution</h3>
                        <p class="text-gray-400 text-sm leading-relaxed relative z-10 font-medium">
                            Concepts are immediately tested in practical lab sessions. Whether it's Python or C++, every
                            theory is backed by 100% live coding implementation.
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div class="method-card">
                        <div class="step-watermark">03</div>
                        <div class="flex justify-between items-start mb-2">
                            <div class="step-badge">03</div>
                            <svg class="w-8 h-8 method-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 relative z-10">Continuous Evaluation</h3>
                        <p class="text-gray-400 text-sm leading-relaxed relative z-10 font-medium">
                            To score 95+ in CBSE or crack college exams, regular mock tests, doubt-clearing sessions, and
                            performance tracking are strictly maintained.
                        </p>
                    </div>

                    <!-- Step 4 -->
                    <div class="method-card">
                        <div class="step-watermark">04</div>
                        <div class="flex justify-between items-start mb-2">
                            <div class="step-badge">04</div>
                            <svg class="w-8 h-8 method-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 relative z-10">Career-Ready Polish</h3>
                        <p class="text-gray-400 text-sm leading-relaxed relative z-10 font-medium">
                            We don't just prepare you for exams; we prepare you for the industry. Advanced tips, optimized
                            coding practices, and real-world problem solving.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- infrastructure --}}
    <section class="infrastructure-light-bg py-24 lg:py-32" id="centers">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Section Header (Left Aligned for Premium Editorial Look) -->
            <div class="flex flex-col lg:flex-row justify-between items-end gap-8 mb-16 lg:mb-24">
                <div class="max-w-2xl">
                    <div
                        class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white border border-gray-200 shadow-sm mb-6">
                        <svg class="w-4 h-4 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                        <span class="text-[#0a192f] text-xs font-bold uppercase tracking-widest">State-of-the-art
                            Infrastructure</span>
                    </div>
                    <h2
                        class="text-4xl md:text-5xl lg:text-6xl font-black text-[#0a192f] leading-tight tracking-tight mb-4">
                        Premium Learning <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#d4af37] to-[#aa8416]">Spaces &
                            Centers.</span>
                    </h2>
                </div>
                <div class="max-w-lg lg:pb-3">
                    <p class="text-lg text-gray-600 font-medium border-l-4 border-[#d4af37] pl-4">
                        Our ISO 9001:2015 certified centers are equipped with high-tech computer labs, high-speed internet,
                        and an environment designed strictly for focus, logic building, and hands-on execution.
                    </p>
                </div>
            </div>

            <!-- Centers Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">

                <!-- Center 1: GTB Nagar -->
                <div class="location-card-light">
                    <!-- Replace with actual high quality lab/building photo -->
                    <div class="loc-img-wrapper">
                        <div class="loc-badge">Center 01</div>
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="RACT GTB Nagar Center">
                    </div>

                    <h3 class="text-3xl font-black text-[#0a192f] mb-2">GTB Nagar</h3>
                    <p class="text-gray-500 font-medium text-sm leading-relaxed mb-4">
                        Located in the heart of Delhi's educational hub, this premium center offers the perfect ecosystem
                        for competitive tech preparation and professional courses.
                    </p>

                    <div class="facility-list">
                        <div class="facility-item">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            Modern PC Labs
                        </div>
                        <div class="facility-item">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.906 14.142 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0">
                                </path>
                            </svg>
                            High-Speed Wi-Fi
                        </div>
                        <div class="facility-item">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            Air Conditioned
                        </div>
                        <div class="facility-item">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm14 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z">
                                </path>
                            </svg>
                            Projector Classes
                        </div>
                    </div>

                    <a href="https://maps.app.goo.gl/zGooMpgGtXjxL24J9" target="_blank" class="btn-direction">
                        Get Directions
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </a>
                </div>

                <!-- Center 2: Rohini -->
                <div class="location-card-light">
                    <!-- Replace with actual high quality lab/building photo -->
                    <div class="loc-img-wrapper">
                        <div class="loc-badge">Center 02</div>
                        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="RACT Rohini Center">
                    </div>

                    <h3 class="text-3xl font-black text-[#0a192f] mb-2">Rohini</h3>
                    <p class="text-gray-500 font-medium text-sm leading-relaxed mb-4">
                        Easily accessible and fully equipped with top-tier technology. Designed to provide a
                        distraction-free environment for both school and college students.
                    </p>

                    <div class="facility-list">
                        <div class="facility-item">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            Modern PC Labs
                        </div>
                        <div class="facility-item">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z">
                                </path>
                            </svg>
                            Doubt Clearing Area
                        </div>
                        <div class="facility-item">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            Air Conditioned
                        </div>
                        <div class="facility-item">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4">
                                </path>
                            </svg>
                            ISO Certified Std.
                        </div>
                    </div>

                    <a href="#" class="btn-direction">
                        Get Directions
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>

@section('scripts')

@endsection
@endsection
