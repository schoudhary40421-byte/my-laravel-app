@extends('layouts.frontend')
@section('title', 'HomePage')
@section('description', '')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/frontend/home.css') }}">
@endsection

@section('content')
    {{-- Hero --}}
    <section class="hero-slider-bg h-[calc(100vh-80px)] lg:h-[85vh] relative" id="premiumSlider">

        <!-- Slide 1: The Mentor (Dinesh Sir) -->
        <div class="slide-item active">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="slide-text space-y-6 lg:pr-10 text-center lg:text-left">
                        <div
                            class="inline-block px-4 py-1.5 rounded-full border border-[#d4af37]/30 bg-[#d4af37]/10 text-[#d4af37] text-xs font-bold tracking-widest uppercase">
                            Founder & Lead Mentor
                        </div>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight">
                            Master Coding with <br>
                            <span class="text-gold-gradient">Dinesh Sir.</span>
                        </h1>
                        <p class="text-gray-300 text-lg border-l-4 border-[#d4af37] pl-4 max-w-xl mx-auto lg:mx-0">
                            10+ Years of Excellence. Get personal mentorship in CS/IP (XI-XII) from Delhi's most trusted
                            faculty.
                        </p>
                        <div class="pt-4">
                            <a href="#contact"
                                class="btn-slider-primary inline-flex items-center text-[#0a192f] px-8 py-3.5 rounded-xl font-extrabold text-lg tracking-wide">
                                Book Free Demo <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="slide-image hidden lg:flex justify-center relative">
                        <!-- Glowing Background -->
                        <div class="absolute w-72 h-72 bg-[#d4af37]/20 rounded-full blur-[80px]"></div>
                        <!-- Frame -->
                        <div class="glass-frame p-4 rounded-3xl w-80 h-[450px] relative z-10">
                            <img src="https://ui-avatars.com/api/?name=Dinesh+Sir&background=0D8ABC&color=fff&size=500"
                                class="w-full h-full object-cover rounded-2xl grayscale hover:grayscale-0 transition-all duration-500"
                                alt="Dinesh Sir">
                            <div
                                class="absolute -bottom-6 -left-6 bg-[#0a192f] border border-[#d4af37]/50 p-4 rounded-xl shadow-xl">
                                <p class="text-white font-bold text-xl">10+ Years</p>
                                <p class="text-gray-400 text-xs font-semibold uppercase">Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: The Results (Toppers) -->
        <div class="slide-item">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="slide-text space-y-6 lg:pr-10 text-center lg:text-left">
                        <div
                            class="inline-block px-4 py-1.5 rounded-full border border-blue-500/30 bg-blue-500/10 text-blue-400 text-xs font-bold tracking-widest uppercase">
                            Unbeatable Results
                        </div>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight">
                            Producing CBSE <br>
                            <span class="text-blue-400">Board Toppers.</span>
                        </h1>
                        <p class="text-gray-300 text-lg border-l-4 border-blue-500 pl-4 max-w-xl mx-auto lg:mx-0">
                            Join the league of RACT Rising Stars. Our students consistently score 95+ in Computer Science
                            and IP.
                        </p>
                        <div class="pt-4">
                            <a href="#achievers"
                                class="inline-flex items-center text-white px-8 py-3.5 rounded-xl font-bold text-lg tracking-wide border border-white/20 bg-white/5 hover:bg-white/10 transition-all">
                                View All Achievers <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="slide-image hidden lg:flex justify-center relative">
                        <div class="absolute w-72 h-72 bg-blue-600/20 rounded-full blur-[80px]"></div>
                        <div class="glass-frame p-8 rounded-3xl w-full max-w-md relative z-10 space-y-4">
                            <!-- Topper Card 1 -->
                            <div class="bg-white/5 border border-white/10 p-4 rounded-xl flex items-center space-x-4">
                                <div
                                    class="w-14 h-14 rounded-full bg-blue-500/20 flex items-center justify-center text-xl font-bold text-white">
                                    R</div>
                                <div>
                                    <p class="text-white font-black text-xl">Raghvendra P S</p>
                                    <p class="text-[#d4af37] font-bold">99 Marks in IP</p>
                                </div>
                            </div>
                            <!-- Topper Card 2 -->
                            <div class="bg-white/5 border border-white/10 p-4 rounded-xl flex items-center space-x-4">
                                <div
                                    class="w-14 h-14 rounded-full bg-purple-500/20 flex items-center justify-center text-xl font-bold text-white">
                                    K</div>
                                <div>
                                    <p class="text-white font-black text-xl">Kriti Aggarwal</p>
                                    <p class="text-[#d4af37] font-bold">98 Marks in IP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3: Technologies (Courses) -->
        <div class="slide-item">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="slide-text space-y-6 lg:pr-10 text-center lg:text-left">
                        <div
                            class="inline-block px-4 py-1.5 rounded-full border border-green-500/30 bg-green-500/10 text-green-400 text-xs font-bold tracking-widest uppercase">
                            Professional Tech Courses
                        </div>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight">
                            Learn <span class="text-green-400">Python, AI</span> & <br> Data Science.
                        </h1>
                        <p class="text-gray-300 text-lg border-l-4 border-green-500 pl-4 max-w-xl mx-auto lg:mx-0">
                            Advanced coding classes for BCA/MCA/B.Tech students. Master Web Designing, Java, C++, and
                            PowerBI.
                        </p>
                        <div class="pt-4">
                            <a href="#courses"
                                class="inline-flex items-center text-white px-8 py-3.5 rounded-xl font-bold text-lg tracking-wide border border-white/20 bg-white/5 hover:bg-white/10 transition-all">
                                Explore All Courses <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="slide-image hidden lg:flex justify-center relative">
                        <div class="absolute w-72 h-72 bg-green-600/20 rounded-full blur-[80px]"></div>
                        <div class="glass-frame p-6 rounded-3xl w-full max-w-sm relative z-10 grid grid-cols-2 gap-4">
                            <div
                                class="bg-[#030712]/50 border border-white/5 p-4 rounded-2xl text-center hover:border-green-500/50 transition-colors">
                                <p class="text-3xl mb-2">🐍</p>
                                <p class="text-white font-bold text-sm">Python + ML</p>
                            </div>
                            <div
                                class="bg-[#030712]/50 border border-white/5 p-4 rounded-2xl text-center hover:border-blue-500/50 transition-colors">
                                <p class="text-3xl mb-2">📊</p>
                                <p class="text-white font-bold text-sm">Data Science</p>
                            </div>
                            <div
                                class="bg-[#030712]/50 border border-white/5 p-4 rounded-2xl text-center hover:border-yellow-500/50 transition-colors">
                                <p class="text-3xl mb-2">💻</p>
                                <p class="text-white font-bold text-sm">Web Design</p>
                            </div>
                            <div
                                class="bg-[#030712]/50 border border-white/5 p-4 rounded-2xl text-center hover:border-red-500/50 transition-colors">
                                <p class="text-3xl mb-2">☕</p>
                                <p class="text-white font-bold text-sm">Core Java</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Progress Navigation -->
        <div class="slider-progress-container">
            <div class="progress-bar active" onclick="goToSlide(0)">
                <div class="progress-fill"></div>
            </div>
            <div class="progress-bar" onclick="goToSlide(1)">
                <div class="progress-fill"></div>
            </div>
            <div class="progress-bar" onclick="goToSlide(2)">
                <div class="progress-fill"></div>
            </div>
        </div>

    </section>

    <!-- ================= STATS STRIP ================= -->
    <div class="stats-strip py-8 relative z-20 -mt-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-0 md:justify-between">

                <!-- Stat 1 -->
                <div class="text-center px-4">
                    <p
                        class="text-3xl md:text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-400">
                        10+</p>
                    <p class="text-[#d4af37] text-xs font-bold uppercase tracking-widest mt-1">Years Experience</p>
                </div>

                <div class="hidden md:block stat-divider"></div>

                <!-- Stat 2 -->
                <div class="text-center px-4">
                    <p
                        class="text-3xl md:text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-400">
                        99<span class="text-xl">/100</span></p>
                    <p class="text-[#d4af37] text-xs font-bold uppercase tracking-widest mt-1">Highest Score</p>
                </div>

                <div class="hidden md:block stat-divider"></div>

                <!-- Stat 3 -->
                <div class="text-center px-4">
                    <p
                        class="text-3xl md:text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-400">
                        16+</p>
                    <p class="text-[#d4af37] text-xs font-bold uppercase tracking-widest mt-1">Tech Courses</p>
                </div>

                <div class="hidden md:block stat-divider"></div>

                <!-- Stat 4 -->
                <div class="text-center px-4">
                    <div class="flex justify-center items-center mb-1">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <p class="text-[#d4af37] text-xs font-bold uppercase tracking-widest">ISO 9001:2015</p>
                </div>

            </div>
        </div>
    </div>

    <!-- ================= ABOUT THE MENTOR SECTION ================= -->
    <section class="about-pattern-bg py-20 lg:py-28 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- Left: Visuals -->
                <div class="relative order-2 lg:order-1">
                    <!-- Decorative Elements -->
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-blue-100 rounded-full blur-[40px]"></div>
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-amber-100 rounded-full blur-[40px]"></div>

                    <div class="about-image-wrapper p-2 bg-white shadow-2xl">
                        <!-- Replace with a high-quality classroom or Dinesh Sir's professional photo -->
                        <img src="{{ asset('images/home/classroom.webp') }}" alt="RACT Institute Classroom"
                            class="w-full h-auto rounded-[20px] object-cover filter contrast-125">

                        <!-- Floating Badge on Image -->
                        <div
                            class="absolute -right-6 bottom-10 bg-[#0a192f] text-white p-5 rounded-2xl shadow-[0_20px_40px_rgba(0,0,0,0.3)] border border-[#d4af37]/30 max-w-[200px]">
                            <p class="text-[#d4af37] text-sm font-bold uppercase tracking-wider mb-1">Established</p>
                            <p class="text-3xl font-black">2007</p>
                            <p class="text-gray-400 text-xs mt-2">Shaping tech careers for over a decade.</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="order-1 lg:order-2 space-y-8">
                    <div>
                        <span class="text-[#d4af37] font-bold tracking-widest uppercase text-sm">Welcome to RACT
                            Institute</span>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#0a192f] mt-2 leading-[1.2]">
                            We Don't Just Teach Code, <br>
                            <span class="text-blue-600">We Build Careers.</span>
                        </h2>
                    </div>

                    <div class="space-y-4 text-gray-600 text-lg leading-relaxed">
                        <p>
                            Led by <strong class="text-[#0a192f]">Diinesh Sir</strong>, RACT Technologies Institute has
                            been the cornerstone of quality computer science education since 2007. We specialize in
                            transforming complex programming concepts into easily understandable logic.
                        </p>
                        <p>
                            Whether you are a school student aiming for <strong class="text-[#0a192f]">95+ in CBSE XI-XII
                                (CS/IP)</strong>, or a college student mastering <strong class="text-blue-600">Python, Data
                                Science, and Web Development</strong>, our ISO 9001:2015 certified curriculum is designed to
                            make your dreams come true.
                        </p>
                    </div>

                    <!-- Feature Bullets -->
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                        <li class="flex items-center text-[#0a192f] font-semibold">
                            <svg class="w-6 h-6 text-[#d4af37] mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Personalized Mentorship
                        </li>
                        <li class="flex items-center text-[#0a192f] font-semibold">
                            <svg class="w-6 h-6 text-[#d4af37] mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Practical Lab Sessions
                        </li>
                        <li class="flex items-center text-[#0a192f] font-semibold">
                            <svg class="w-6 h-6 text-[#d4af37] mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Up-to-date Curriculum
                        </li>
                        <li class="flex items-center text-[#0a192f] font-semibold">
                            <svg class="w-6 h-6 text-[#d4af37] mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Consistent Top Results
                        </li>
                    </ul>

                    <div class="pt-4">
                        <a href="#"
                            class="group relative inline-flex items-center justify-center px-8 py-3.5 text-base font-bold text-white bg-[#0a192f] rounded-xl overflow-hidden transition-all hover:bg-blue-900">
                            <span
                                class="absolute w-0 h-0 transition-all duration-500 ease-out bg-[#d4af37] rounded-full group-hover:w-56 group-hover:h-56"></span>
                            <span class="relative flex items-center">
                                Know More About Us
                                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- Courses --}}
    <section class="bento-section py-24 lg:py-32 relative" id="programs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-20">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#d4af37]/10 border border-[#d4af37]/20 mb-6">
                    <span class="w-2 h-2 rounded-full bg-[#d4af37] animate-pulse"></span>
                    <span class="text-[#d4af37] text-xs font-bold uppercase tracking-widest">Premium Curriculum</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight mb-6">
                    Programs Built for <br>
                    <span class="text-glow-gold">Industry Excellence.</span>
                </h2>
                <p class="text-lg text-gray-400 font-medium max-w-2xl mx-auto">
                    Carefully crafted courses ranging from CBSE Board mastery to advanced Professional Technology skills.
                </p>
            </div>

            <!-- Ultra Premium Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 lg:gap-8">

                <!-- Card 1: Flagship (Data Science) - SPANS 8 COLUMNS (WIDE) -->
                <div class="bento-card md:col-span-12 lg:col-span-8 group">
                    <div
                        class="absolute top-0 right-0 w-64 h-64 bg-blue-600/10 rounded-full blur-[80px] -mr-20 -mt-20 transition-all group-hover:bg-blue-600/20">
                    </div>

                    <div class="flex flex-col md:flex-row justify-between gap-8 h-full relative z-10">
                        <div class="flex-1 space-y-6">
                            <span
                                class="inline-block px-3 py-1 bg-blue-500/20 text-blue-400 text-xs font-bold rounded-lg uppercase tracking-wide border border-blue-500/30">
                                Flagship Program
                            </span>
                            <h3
                                class="text-3xl md:text-4xl font-black text-white group-hover:text-blue-400 transition-colors">
                                Master in Data Science</h3>
                            <p class="text-gray-400 text-base leading-relaxed max-w-md">
                                A complete 6-month intensive journey. Master Python, Pandas, Matplotlib, Machine Learning
                                algorithms, and data visualization from scratch to advanced level.
                            </p>

                            <div class="flex flex-wrap gap-4 pt-4">
                                <div class="info-pill">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-white font-semibold text-sm">6 Months</span>
                                </div>
                                <div class="info-pill">
                                    <span class="text-[#d4af37] font-black text-lg">₹35,000/-</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col justify-end w-full md:w-auto mt-6 md:mt-0">
                            <a href="#"
                                class="bento-btn w-full md:w-48 group-hover:shadow-[0_10px_20px_rgba(212,175,55,0.3)]">
                                Enroll Now
                                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: XI & XII (Board Targets) - SPANS 4 COLUMNS (TALL) -->
                <div class="bento-card md:col-span-6 lg:col-span-4 group justify-between">
                    <div
                        class="absolute top-0 right-0 w-48 h-48 bg-amber-600/10 rounded-full blur-[60px] transition-all group-hover:bg-amber-600/20">
                    </div>

                    <div class="relative z-10 space-y-6">
                        <span
                            class="inline-block px-3 py-1 bg-[#d4af37]/20 text-[#d4af37] text-xs font-bold rounded-lg uppercase tracking-wide border border-[#d4af37]/30">
                            Board Excellence
                        </span>
                        <h3
                            class="text-2xl xl:text-3xl font-black text-white group-hover:text-[#d4af37] transition-colors">
                            XI & XII IP/CS</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Secure 95+ marks. Detailed syllabus coverage, practical programming, and strictly board-focused
                            strategies.
                        </p>

                        <div class="grid grid-cols-2 gap-3 pt-2">
                            <div class="info-pill justify-center flex-col items-start gap-1">
                                <span class="text-gray-500 text-xs font-medium uppercase">Duration</span>
                                <span class="text-white font-bold">1 Year</span>
                            </div>
                            <div class="info-pill justify-center flex-col items-start gap-1">
                                <span class="text-gray-500 text-xs font-medium uppercase">Fees</span>
                                <span class="text-[#d4af37] font-bold">₹30,000/-</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 relative z-10">
                        <a href="#" class="bento-btn w-full">View Details <svg class="w-4 h-4 ml-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></a>
                    </div>
                </div>

                <!-- Card 3: Web Designing - SPANS 4 COLUMNS -->
                <div class="bento-card md:col-span-6 lg:col-span-4 group">
                    <div class="relative z-10 space-y-5">
                        <div
                            class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center text-purple-400 mb-2 border border-purple-500/20">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white group-hover:text-purple-400 transition-colors">Full Stack
                            Web Design</h3>
                        <p class="text-gray-400 text-sm">HTML, CSS, JS, PHP & WordPress. Build modern, responsive websites.
                        </p>

                        <div class="flex items-center justify-between pt-4 border-t border-white/10">
                            <div>
                                <p class="text-white font-bold">₹25,000/-</p>
                                <p class="text-gray-500 text-xs">4 Months</p>
                            </div>
                            <a href="#"
                                class="text-[#d4af37] font-semibold text-sm hover:text-white transition-colors flex items-center">Explore
                                <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Python with ML - SPANS 4 COLUMNS -->
                <div class="bento-card md:col-span-6 lg:col-span-4 group">
                    <div class="relative z-10 space-y-5">
                        <div
                            class="w-12 h-12 bg-yellow-500/20 rounded-xl flex items-center justify-center text-yellow-400 mb-2 border border-yellow-500/20">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white group-hover:text-yellow-400 transition-colors">Python with
                            ML</h3>
                        <p class="text-gray-400 text-sm">Learn advanced Python programming & core Machine Learning
                            algorithms.</p>

                        <div class="flex items-center justify-between pt-4 border-t border-white/10">
                            <div>
                                <p class="text-white font-bold">₹15,000/-</p>
                                <p class="text-gray-500 text-xs">2 Months</p>
                            </div>
                            <a href="#"
                                class="text-[#d4af37] font-semibold text-sm hover:text-white transition-colors flex items-center">Explore
                                <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Data Analyst - SPANS 4 COLUMNS -->
                <div class="bento-card md:col-span-6 lg:col-span-4 group">
                    <div class="relative z-10 space-y-5">
                        <div
                            class="w-12 h-12 bg-green-500/20 rounded-xl flex items-center justify-center text-green-400 mb-2 border border-green-500/20">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white group-hover:text-green-400 transition-colors">Data Analyst
                        </h3>
                        <p class="text-gray-400 text-sm">Clean, process, and analyze complex datasets for smart business
                            decisions.</p>

                        <div class="flex items-center justify-between pt-4 border-t border-white/10">
                            <div>
                                <p class="text-white font-bold">₹30,000/-</p>
                                <p class="text-gray-500 text-xs">5 Months</p>
                            </div>
                            <a href="#"
                                class="text-[#d4af37] font-semibold text-sm hover:text-white transition-colors flex items-center">Explore
                                <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>

                <!-- Bottom Master Card: For all modular & short courses - SPANS 12 COLUMNS -->
                <div class="bento-card md:col-span-12 group overflow-hidden mt-4">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-900/20 to-[#d4af37]/10 z-0 opacity-50 group-hover:opacity-100 transition-opacity">
                    </div>

                    <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-8">
                        <div class="lg:max-w-2xl text-center lg:text-left">
                            <h3 class="text-2xl font-bold text-white mb-3">Core Modules & College Academics</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Looking for specific skill upgrades? We offer dedicated modules in <strong
                                    class="text-white">C/C++ (₹8000), Core Java (₹8000), Data Structures, PowerBI (₹10000),
                                    SQL Server, Tally Prime, and Advanced Excel</strong>. Subject-wise classes for BCA, MCA,
                                B.Sc, and B.Tech are also available.
                            </p>
                        </div>
                        <div class="flex-shrink-0 w-full lg:w-auto">
                            <a href="#"
                                class="w-full flex items-center justify-center px-8 py-4 bg-white text-[#0a192f] font-extrabold rounded-xl hover:bg-[#d4af37] transition-colors duration-300 shadow-[0_0_20px_rgba(255,255,255,0.1)]">
                                Download Complete Fee Structure
                                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Hall of FAme --}}
    <section class="fame-section-light py-24 lg:py-32" id="achievers">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center mb-16">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#d4af37]/10 border border-[#d4af37]/20 mb-6">
                <svg class="w-4 h-4 text-[#d4af37]" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="text-[#b89025] text-xs font-bold uppercase tracking-widest">Rising Stars of RACT</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-[#0a192f] leading-tight tracking-tight mb-4">
                Our Legacy of <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-[#d4af37] to-[#aa8416]">Excellence.</span>
            </h2>
            <p class="text-lg text-gray-600 font-medium max-w-2xl mx-auto">
                Witness the brilliance of our students. Year after year, RACT Institute produces city toppers with unmatched
                scores in IP, CS, and Python.
            </p>
        </div>

        <div class="marquee-wrapper">

            <div class="marquee-track scroll-left">
                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Raghvendra+Tomar&background=0a192f&color=fff"
                            alt="Raghvendra P S Tomar">
                        <div class="score-badge">99</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Raghvendra P S</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Topper</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">GD Goenka (Rohini)</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Kriti+Aggarwal&background=0a192f&color=fff"
                            alt="Kriti Aggarwal">
                        <div class="score-badge">98</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Kriti Aggarwal</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Topper</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">DPS (Rohini)</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Pankhuri+Sharma&background=0a192f&color=fff"
                            alt="Pankhuri Sharma">
                        <div class="score-badge">96</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Pankhuri Sharma</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Topper</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">Bal Bharati</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Bhavya+Bhutani&background=0a192f&color=fff"
                            alt="Bhavya Bhutani">
                        <div class="score-badge">95</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Bhavya Bhutani</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Achiever</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">Aadharshila</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Yash+Goel&background=3b82f6&color=fff" alt="Yash Goel">
                        <div class="score-badge">95</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Yash Goel</h4>
                        <p class="text-blue-600 text-sm font-bold">CS Achiever</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">DL DAV</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Raghvendra+Tomar&background=0a192f&color=fff"
                            alt="Raghvendra P S Tomar">
                        <div class="score-badge">99</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Raghvendra P S</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Topper</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">GD Goenka (Rohini)</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Kriti+Aggarwal&background=0a192f&color=fff"
                            alt="Kriti Aggarwal">
                        <div class="score-badge">98</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Kriti Aggarwal</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Topper</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">DPS (Rohini)</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Pankhuri+Sharma&background=0a192f&color=fff"
                            alt="Pankhuri Sharma">
                        <div class="score-badge">96</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Pankhuri Sharma</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Topper</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">Bal Bharati</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Bhavya+Bhutani&background=0a192f&color=fff"
                            alt="Bhavya Bhutani">
                        <div class="score-badge">95</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Bhavya Bhutani</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Achiever</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">Aadharshila</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Yash+Goel&background=3b82f6&color=fff" alt="Yash Goel">
                        <div class="score-badge">95</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Yash Goel</h4>
                        <p class="text-blue-600 text-sm font-bold">CS Achiever</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">DL DAV</p>
                    </div>
                </div>
            </div>

            <div class="marquee-track scroll-right">
                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Archi+Kathuria&background=0a192f&color=fff"
                            alt="Archi Kathuria">
                        <div class="score-badge">97</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Archi Kathuria</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Achiever</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">Bal Bharati</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Kashish+Soni&background=0a192f&color=fff"
                            alt="Kashish Soni">
                        <div class="score-badge">97</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Kashish Soni</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Achiever</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">Darshan Academy</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Rishabh+Jindal&background=0a192f&color=fff"
                            alt="Rishabh Jindal">
                        <div class="score-badge">95</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Rishabh Jindal</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Achiever</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">Bal Bharati</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Urvi&background=0a192f&color=fff" alt="Urvi">
                        <div class="score-badge">95</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Urvi</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Achiever</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">NK Bagrodia</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Vatsal+Gupta&background=3b82f6&color=fff"
                            alt="Vatsal Gupta">
                        <div class="score-badge">94</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Vatsal Gupta</h4>
                        <p class="text-blue-600 text-sm font-bold">CS Achiever</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">Lancers Convent</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Archi+Kathuria&background=0a192f&color=fff"
                            alt="Archi Kathuria">
                        <div class="score-badge">97</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Archi Kathuria</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Achiever</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">Bal Bharati</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Kashish+Soni&background=0a192f&color=fff"
                            alt="Kashish Soni">
                        <div class="score-badge">97</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Kashish Soni</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Achiever</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">Darshan Academy</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Rishabh+Jindal&background=0a192f&color=fff"
                            alt="Rishabh Jindal">
                        <div class="score-badge">95</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Rishabh Jindal</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Achiever</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">Bal Bharati</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Urvi&background=0a192f&color=fff" alt="Urvi">
                        <div class="score-badge">95</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Urvi</h4>
                        <p class="text-[#b89025] text-sm font-bold">IP Achiever</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">NK Bagrodia</p>
                    </div>
                </div>

                <div class="topper-card-light">
                    <div class="topper-avatar">
                        <img src="https://ui-avatars.com/api/?name=Vatsal+Gupta&background=3b82f6&color=fff"
                            alt="Vatsal Gupta">
                        <div class="score-badge">94</div>
                    </div>
                    <div>
                        <h4 class="text-[#0a192f] font-extrabold text-lg leading-tight">Vatsal Gupta</h4>
                        <p class="text-blue-600 text-sm font-bold">CS Achiever</p>
                        <p class="text-gray-500 text-xs mt-0.5 font-medium">Lancers Convent</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12 relative z-10">
            <a href="#"
                class="btn-light-outline inline-flex items-center justify-center px-8 py-3.5 text-base font-bold rounded-xl">
                View All Past Results
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                    </path>
                </svg>
            </a>
        </div>

    </section>

    {{-- Why --}}
    <section class="usps-section-bg py-24 lg:py-32 relative" id="why-choose-us">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto mb-20">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#0a192f] border border-[#d4af37]/30 mb-6 shadow-[0_0_15px_rgba(212,175,55,0.15)]">
                    <svg class="w-4 h-4 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span class="text-[#d4af37] text-xs font-bold uppercase tracking-widest">The RACT Advantage</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-white leading-tight tracking-tight mb-6">
                    Why We Are Delhi's <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#d4af37] to-[#fdf0a6]">First
                        Choice.</span>
                </h2>
                <p class="text-lg text-gray-400 font-medium max-w-2xl mx-auto">
                    We don't just complete the syllabus; we build strong logical foundations. Here's why top-scoring
                    students trust RACT Technologies Institute.
                </p>
            </div>

            <!-- USPs Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">

                <!-- Card 1: Expert Mentorship -->
                <div class="usp-card group">
                    <!-- Background ambient glow -->
                    <div
                        class="absolute -top-10 -right-10 w-32 h-32 bg-[#d4af37]/10 rounded-full blur-[40px] opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div class="usp-icon-box">
                        <svg class="w-8 h-8 text-gray-400 icon-gold transition-colors duration-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3 text-glow-white">Expert Mentorship</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Learn directly from <strong class="text-white">Diinesh Sir</strong>. With over 10 years of teaching
                        experience, complex programming concepts are made simple and easy to digest.
                    </p>
                </div>

                <!-- Card 2: Proven Legacy -->
                <div class="usp-card group">
                    <div
                        class="absolute -top-10 -right-10 w-32 h-32 bg-blue-500/10 rounded-full blur-[40px] opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div class="usp-icon-box">
                        <svg class="w-8 h-8 text-gray-400 icon-blue transition-colors duration-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3 text-glow-white">Proven Legacy</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Producing highest scorers since <strong class="text-white">2007</strong>. Our students consistently
                        score 95+ in CBSE board exams (IP & CS) year after year.
                    </p>
                </div>

                <!-- Card 3: 100% Practical Focus -->
                <div class="usp-card group">
                    <div
                        class="absolute -top-10 -right-10 w-32 h-32 bg-green-500/10 rounded-full blur-[40px] opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div class="usp-icon-box">
                        <svg class="w-8 h-8 text-gray-400 icon-green transition-colors duration-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3 text-glow-white">100% Practical Focus</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        No boring textbook reading. We focus on <strong class="text-white">Live Coding Labs</strong> and
                        project-based learning to make you industry-ready in Data Science & Web Tech.
                    </p>
                </div>

                <!-- Card 4: Certified Quality -->
                <div class="usp-card group">
                    <div
                        class="absolute -top-10 -right-10 w-32 h-32 bg-purple-500/10 rounded-full blur-[40px] opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div class="usp-icon-box">
                        <svg class="w-8 h-8 text-gray-400 icon-purple transition-colors duration-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3 text-glow-white">Certified Quality</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        We are an <strong class="text-white">ISO 9001:2015 Certified</strong> institute. Available at two
                        premium locations (GTB Nagar & Rohini) with online class flexibility.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Review --}}
    <section class="premium-reviews-bg py-24 lg:py-36" id="testimonials">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Premium Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-20 lg:mb-24">
                <div
                    class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white border border-gray-100 shadow-sm mb-6">
                    <!-- Google Stars -->
                    <div class="flex text-[#FBBC05]">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <span class="text-[#0a192f] text-sm font-bold ml-1">4.9/5 Rating</span>
                </div>

                <h2 class="text-4xl md:text-5xl font-black text-[#0a192f] leading-tight tracking-tight">
                    Trusted by Top Scorers & <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#d4af37] to-[#aa8416]">Tech
                        Professionals.</span>
                </h2>
            </div>

            <!-- Staggered Reviews Grid (Hover anywhere inside .reviews-container to trigger focus effect) -->
            <div class="staggered-grid reviews-container">

                <!-- COLUMN 1 -->
                <div class="space-y-8 staggered-col-1">
                    <!-- Review 1 -->
                    <div class="review-glass-card">
                        <div class="flex justify-between items-start mb-6">
                            <div class="verified-badge">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Verified
                            </div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2sSeQqjaUTuZ3gRgkKjidpaipF_l6s72lBw&s"
                                class="google-icon-small" alt="Google">
                        </div>
                        <p class="text-gray-700 text-lg leading-relaxed font-medium mb-8">
                            "Diinesh Sir ki wajah se hi mera IP mein 98 score aaya. The way he clears concepts is amazing.
                            Bina kisi ratta-fication ke mujhe coding samajh aane lagi."
                        </p>
                        <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                            <div class="avatar-ring">
                                <img src="https://ui-avatars.com/api/?name=Kriti+Aggarwal&background=0a192f&color=fff"
                                    alt="Kriti Aggarwal">
                            </div>
                            <div>
                                <h4 class="text-[#0a192f] font-extrabold text-base">Kriti Aggarwal</h4>
                                <p class="text-[#d4af37] font-semibold text-xs uppercase tracking-wide">DPS (Rohini) - 98
                                    in IP</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="review-glass-card">
                        <div class="flex justify-between items-start mb-6">
                            <div class="verified-badge">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Verified
                            </div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2sSeQqjaUTuZ3gRgkKjidpaipF_l6s72lBw&s"
                                class="google-icon-small" alt="Google">
                        </div>
                        <p class="text-gray-700 text-lg leading-relaxed font-medium mb-8">
                            "Enrolled in the Web Designing and Python modules. Everything is 100% practical. Now I am
                            confidently building my own web applications. Best institute in GTB Nagar!"
                        </p>
                        <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                            <div class="avatar-ring">
                                <img src="https://ui-avatars.com/api/?name=Aman&background=0a192f&color=fff"
                                    alt="Aman">
                            </div>
                            <div>
                                <h4 class="text-[#0a192f] font-extrabold text-base">Aman</h4>
                                <p class="text-blue-600 font-semibold text-xs uppercase tracking-wide">Web Design & Python
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- COLUMN 2 (Pushed Down) -->
                <div class="space-y-8 staggered-col-2">
                    <!-- Review 3 -->
                    <div class="review-glass-card">
                        <div class="flex justify-between items-start mb-6">
                            <div class="verified-badge">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Verified
                            </div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2sSeQqjaUTuZ3gRgkKjidpaipF_l6s72lBw&s"
                                class="google-icon-small" alt="Google">
                        </div>
                        <p class="text-gray-700 text-lg leading-relaxed font-medium mb-8">
                            "Scored 94 in Computer Science purely because of RACT. The logic building sessions and doubt
                            clearing classes were top-notch. Thank you Diinesh Sir."
                        </p>
                        <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                            <div class="avatar-ring">
                                <img src="https://ui-avatars.com/api/?name=Vatsal+Gupta&background=0a192f&color=fff"
                                    alt="Vatsal Gupta">
                            </div>
                            <div>
                                <h4 class="text-[#0a192f] font-extrabold text-base">Vatsal Gupta</h4>
                                <p class="text-[#d4af37] font-semibold text-xs uppercase tracking-wide">Lancers Convent -
                                    94 in CS</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 4 -->
                    <div class="review-glass-card">
                        <div class="flex justify-between items-start mb-6">
                            <div class="verified-badge">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Verified
                            </div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2sSeQqjaUTuZ3gRgkKjidpaipF_l6s72lBw&s"
                                class="google-icon-small" alt="Google">
                        </div>
                        <p class="text-gray-700 text-lg leading-relaxed font-medium mb-8">
                            "Their Data Science program is very well structured. It took me from a total beginner in Python
                            to analyzing complex datasets with Pandas and Machine Learning."
                        </p>
                        <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                            <div class="avatar-ring">
                                <img src="https://ui-avatars.com/api/?name=Kashish+Soni&background=0a192f&color=fff"
                                    alt="Kashish Soni">
                            </div>
                            <div>
                                <h4 class="text-[#0a192f] font-extrabold text-base">Kashish Soni</h4>
                                <p class="text-green-600 font-semibold text-xs uppercase tracking-wide">Data Science
                                    Program</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- COLUMN 3 -->
                <div class="space-y-8 staggered-col-3">
                    <!-- Review 5 -->
                    <div class="review-glass-card">
                        <div class="flex justify-between items-start mb-6">
                            <div class="verified-badge">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Verified
                            </div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2sSeQqjaUTuZ3gRgkKjidpaipF_l6s72lBw&s"
                                class="google-icon-small" alt="Google">
                        </div>
                        <p class="text-gray-700 text-lg leading-relaxed font-medium mb-8">
                            "Got 95 in IP! The best part about RACT is the regular test series and practical execution of
                            every query. Strongly recommend it to all XI-XII students."
                        </p>
                        <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                            <div class="avatar-ring">
                                <img src="https://ui-avatars.com/api/?name=Rishabh+Jindal&background=0a192f&color=fff"
                                    alt="Rishabh Jindal">
                            </div>
                            <div>
                                <h4 class="text-[#0a192f] font-extrabold text-base">Rishabh Jindal</h4>
                                <p class="text-[#d4af37] font-semibold text-xs uppercase tracking-wide">Bal Bharati - 95 in
                                    IP</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 6 -->
                    <div class="review-glass-card">
                        <div class="flex justify-between items-start mb-6">
                            <div class="verified-badge">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Verified
                            </div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2sSeQqjaUTuZ3gRgkKjidpaipF_l6s72lBw&s"
                                class="google-icon-small" alt="Google">
                        </div>
                        <p class="text-gray-700 text-lg leading-relaxed font-medium mb-8">
                            "Took BCA classes for C++ and Java. The fees is totally worth the quality of education provided.
                            My college results improved drastically."
                        </p>
                        <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                            <div class="avatar-ring">
                                <img src="https://ui-avatars.com/api/?name=Pooja+Shadija&background=0a192f&color=fff"
                                    alt="Pooja Shadija">
                            </div>
                            <div>
                                <h4 class="text-[#0a192f] font-extrabold text-base">Pooja Shadija</h4>
                                <p class="text-blue-600 font-semibold text-xs uppercase tracking-wide">Core Java & C++</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Floating CTA at the bottom -->
            <div class="mt-20 text-center relative z-10 flex justify-center">
                <a href="https://g.page/r/YOUR_GOOGLE_REVIEW_LINK" target="_blank"
                    class="inline-flex items-center gap-3 bg-white border border-gray-200 text-[#0a192f] px-8 py-4 rounded-xl font-bold hover:border-[#d4af37] hover:shadow-[0_10px_30px_rgba(212,175,55,0.15)] transition-all">
                    Read all 500+ Reviews on Google
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>

        </div>
    </section>
@section('scripts')
    <!-- Vanilla JS for Slider Logic -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelectorAll('.slide-item');
            const progressBars = document.querySelectorAll('.progress-bar');
            let currentSlide = 0;
            const totalSlides = slides.length;
            let slideInterval;

            function updateSlider(index) {
                // Remove active classes
                slides.forEach(slide => slide.classList.remove('active'));
                progressBars.forEach(bar => {
                    bar.classList.remove('active');
                    // Force reflow to restart animation on progress fill
                    void bar.offsetWidth;
                });

                // Add active to current
                currentSlide = index;
                slides[currentSlide].classList.add('active');
                progressBars[currentSlide].classList.add('active');
            }

            function nextSlide() {
                let next = (currentSlide + 1) % totalSlides;
                updateSlider(next);
            }

            // Start Auto Play (5 seconds per slide to match CSS animation)
            function startSlider() {
                slideInterval = setInterval(nextSlide, 5000);
            }

            function resetSlider() {
                clearInterval(slideInterval);
                startSlider();
            }

            // Expose function to global scope for onclick attributes
            window.goToSlide = function(index) {
                if (index !== currentSlide) {
                    updateSlider(index);
                    resetSlider();
                }
            };

            // Initialize
            startSlider();
        });

        // This ensures labels stay up if a browser autofills the input
        document.addEventListener('DOMContentLoaded', () => {
            const inputs = document.querySelectorAll('.premium-input');
            inputs.forEach(input => {
                // Check initial state
                if (input.value !== '') {
                    input.classList.add('has-value');
                }
                // Add event listener
                input.addEventListener('input', () => {
                    if (input.value !== '') {
                        input.classList.add('has-value');
                    } else {
                        input.classList.remove('has-value');
                    }
                });
            });
        });
    </script>
@endsection
@endsection
