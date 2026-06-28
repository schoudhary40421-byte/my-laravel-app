@extends('layouts.frontend')
@section('title', 'Frequently Asked Questions | Courses, Fees and Admissions Help')
@section('description', '')

@section('content')
    {{-- Hero Section --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-50 via-white to-sky-50 py-20 sm:py-32">

        <!-- Decorative Soft Background Blobs (For Premium Feel) -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full max-w-7xl pointer-events-none">
            <div
                class="absolute top-[-10%] left-[-5%] w-72 h-72 bg-blue-400/20 rounded-full mix-blend-multiply filter blur-[80px]">
            </div>
            <div
                class="absolute top-[20%] right-[-5%] w-96 h-96 bg-cyan-400/10 rounded-full mix-blend-multiply filter blur-[100px]">
            </div>
        </div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">

            <!-- Micro Element (Trust Badge) -->
            <div
                class="inline-flex items-center justify-center gap-2 px-4 py-1.5 mb-8 rounded-full bg-white/60 backdrop-blur-md border border-blue-100 shadow-sm transition-transform hover:scale-105 duration-300">
                <span class="flex h-2 w-2 relative">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                </span>
                <span class="text-sm font-semibold text-blue-800 tracking-wide">Helping students achieve 90%+ results</span>
            </div>

            <!-- Main Heading -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight mb-6">
                Frequently Asked
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 drop-shadow-sm">Questions</span>
            </h1>

            <!-- Subtext -->
            <p class="mx-auto max-w-2xl text-lg md:text-xl text-slate-500 mb-10 font-medium">
                Find answers about courses, results & admissions at RACT Institute
            </p>

            <!-- WOW Element: Search Bar -->
            <div class="mx-auto max-w-2xl relative group">
                <!-- Search Form -->
                <form class="relative flex items-center w-full" onsubmit="event.preventDefault();">

                    <!-- Search Icon (Left) -->
                    <div
                        class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none text-slate-400 group-focus-within:text-blue-500 transition-colors duration-300">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>

                    <!-- Large Rounded Input -->
                    <input type="text" placeholder="Search your question..."
                        class="w-full pl-14 pr-32 py-4 sm:py-5 bg-white/80 backdrop-blur-xl border border-slate-200/80 rounded-full shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all duration-300 text-slate-700 text-lg placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-400/50 focus:border-blue-400 focus:bg-white">

                    <!-- Submit Button (Right) -->
                    <div class="absolute inset-y-0 right-2 flex items-center">
                        <button type="submit"
                            class="px-6 py-2.5 sm:py-3 bg-slate-900 hover:bg-blue-600 text-white text-sm font-semibold rounded-full shadow-md transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
                            Search
                        </button>
                    </div>
                </form>

                <!-- Quick Tags (Optional micro-interaction below search) -->
                <div class="mt-4 flex flex-wrap justify-center gap-2 sm:gap-3 text-sm">
                    <span class="text-slate-400">Popular:</span>
                    <a href="#"
                        class="text-slate-500 hover:text-blue-600 font-medium transition-colors">Admissions</a>
                    <span class="text-slate-300">•</span>
                    <a href="#" class="text-slate-500 hover:text-blue-600 font-medium transition-colors">Fee
                        Structure</a>
                    <span class="text-slate-300">•</span>
                    <a href="#" class="text-slate-500 hover:text-blue-600 font-medium transition-colors">Class
                        Timing</a>
                </div>
            </div>

        </div>
    </section>

    {{-- Strip Bar --}}
    <!-- Premium Trust Strip Section -->
    <section
        class="relative py-12 sm:py-16 bg-gradient-to-r from-blue-50/40 via-slate-50/60 to-sky-50/40 border-y border-slate-200/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Grid Container: 2x2 on Mobile, 4 in a row on Desktop -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">

                <!-- Item 1: Experience -->
                <div
                    class="group flex flex-col items-center justify-center text-center p-6 sm:p-8 bg-white/60 backdrop-blur-xl rounded-2xl border border-white shadow-[0_4px_15px_rgb(0,0,0,0.02)] hover:shadow-[0_10px_30px_rgb(0,0,0,0.06)] hover:-translate-y-1 hover:bg-white transition-all duration-300">
                    <!-- Subtle Icon -->
                    <svg class="w-8 h-8 text-blue-200 group-hover:text-blue-500 transition-colors duration-300 mb-3 sm:mb-4"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <!-- Big Number -->
                    <h3 class="text-3xl md:text-4xl font-extrabold text-slate-800 tracking-tight mb-1">
                        10+ <span class="text-xl md:text-2xl font-bold text-slate-600">Years</span>
                    </h3>
                    <!-- Label -->
                    <p class="text-xs sm:text-sm md:text-base font-semibold text-slate-500">Teaching Experience</p>
                </div>

                <!-- Item 2: Students -->
                <div
                    class="group flex flex-col items-center justify-center text-center p-6 sm:p-8 bg-white/60 backdrop-blur-xl rounded-2xl border border-white shadow-[0_4px_15px_rgb(0,0,0,0.02)] hover:shadow-[0_10px_30px_rgb(0,0,0,0.06)] hover:-translate-y-1 hover:bg-white transition-all duration-300">
                    <svg class="w-8 h-8 text-blue-200 group-hover:text-blue-500 transition-colors duration-300 mb-3 sm:mb-4"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-slate-800 tracking-tight mb-1">500+</h3>
                    <p class="text-xs sm:text-sm md:text-base font-semibold text-slate-500">Students Trained</p>
                </div>

                <!-- Item 3: Results -->
                <div
                    class="group flex flex-col items-center justify-center text-center p-6 sm:p-8 bg-white/60 backdrop-blur-xl rounded-2xl border border-white shadow-[0_4px_15px_rgb(0,0,0,0.02)] hover:shadow-[0_10px_30px_rgb(0,0,0,0.06)] hover:-translate-y-1 hover:bg-white transition-all duration-300">
                    <svg class="w-8 h-8 text-blue-200 group-hover:text-blue-500 transition-colors duration-300 mb-3 sm:mb-4"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                    <h3
                        class="text-3xl md:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-sky-500 tracking-tight mb-1">
                        90%+</h3>
                    <p class="text-xs sm:text-sm md:text-base font-semibold text-slate-500">Average Results</p>
                </div>

                <!-- Item 4: Batches -->
                <div
                    class="group flex flex-col items-center justify-center text-center p-6 sm:p-8 bg-white/60 backdrop-blur-xl rounded-2xl border border-white shadow-[0_4px_15px_rgb(0,0,0,0.02)] hover:shadow-[0_10px_30px_rgb(0,0,0,0.06)] hover:-translate-y-1 hover:bg-white transition-all duration-300">
                    <svg class="w-8 h-8 text-blue-200 group-hover:text-blue-500 transition-colors duration-300 mb-3 sm:mb-4"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-slate-800 tracking-tight mb-1">1000+</h3>
                    <p class="text-xs sm:text-sm md:text-base font-semibold text-slate-500">Successful Batches</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Premium FAQ Accordion Section -->
    <!-- Luxury FAQ Section -->
    <section class="relative py-20 md:py-32 bg-slate-50 overflow-hidden">

        <!-- Ultra-soft Ambient Background Elements -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div
                class="absolute -top-40 -right-40 w-96 h-96 bg-blue-200/40 rounded-full mix-blend-multiply filter blur-[100px]">
            </div>
            <div
                class="absolute top-40 -left-20 w-72 h-72 bg-sky-200/40 rounded-full mix-blend-multiply filter blur-[100px]">
            </div>
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">

            <!-- Section Header (Minimal) -->
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight mb-4">Frequently Asked
                    Questions</h2>
                <p class="text-slate-500 text-lg">Everything you need to know about RACT Institute.</p>
            </div>

            <!-- FAQ Cards Container -->
            <div class="space-y-5 md:space-y-6" id="premium-faq-container">

                <!-- FAQ ITEM 1 -->
                <div
                    class="faq-card group bg-white/70 backdrop-blur-xl border border-white/80 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 cursor-pointer overflow-hidden relative">
                    <button class="w-full flex items-center justify-between p-5 md:p-6 text-left focus:outline-none">
                        <span class="text-lg md:text-xl font-semibold text-gray-900 pr-4">How can I enroll at RACT
                            Institute?</span>
                        <div
                            class="icon-wrapper flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full bg-blue-50 transition-colors duration-300">
                            <svg class="w-5 h-5 text-blue-500 transition-transform duration-300 chevron" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content grid grid-rows-[0fr] opacity-0 transition-all duration-300 ease-in-out">
                        <div class="overflow-hidden">
                            <div class="px-5 pb-5 md:px-6 md:pb-6">
                                <p class="text-gray-600 leading-relaxed pt-4 border-t border-gray-100">You can enroll by
                                    contacting us directly via phone, WhatsApp, or visiting our center. Our team will guide
                                    you through the complete admission process.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ ITEM 2 -->
                <div
                    class="faq-card group bg-white/70 backdrop-blur-xl border border-white/80 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 cursor-pointer overflow-hidden relative">
                    <button class="w-full flex items-center justify-between p-5 md:p-6 text-left focus:outline-none">
                        <span class="text-lg md:text-xl font-semibold text-gray-900 pr-4">Do you offer a demo class before
                            enrollment?</span>
                        <div
                            class="icon-wrapper flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full bg-blue-50 transition-colors duration-300">
                            <svg class="w-5 h-5 text-blue-500 transition-transform duration-300 chevron" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content grid grid-rows-[0fr] opacity-0 transition-all duration-300 ease-in-out">
                        <div class="overflow-hidden">
                            <div class="px-5 pb-5 md:px-6 md:pb-6">
                                <p class="text-gray-600 leading-relaxed pt-4 border-t border-gray-100">Yes, we provide demo
                                    classes so students can understand our teaching style before joining.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ ITEM 3 -->
                <div
                    class="faq-card group bg-white/70 backdrop-blur-xl border border-white/80 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 cursor-pointer overflow-hidden relative">
                    <button class="w-full flex items-center justify-between p-5 md:p-6 text-left focus:outline-none">
                        <span class="text-lg md:text-xl font-semibold text-gray-900 pr-4">What courses are offered at RACT
                            Institute?</span>
                        <div
                            class="icon-wrapper flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full bg-blue-50 transition-colors duration-300">
                            <svg class="w-5 h-5 text-blue-500 transition-transform duration-300 chevron" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content grid grid-rows-[0fr] opacity-0 transition-all duration-300 ease-in-out">
                        <div class="overflow-hidden">
                            <div class="px-5 pb-5 md:px-6 md:pb-6">
                                <p class="text-gray-600 leading-relaxed pt-4 border-t border-gray-100">We offer XI–XII
                                    Computer Science (CS/IP), Python, Web Development, and Data Analytics programs.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ ITEM 4 -->
                <div
                    class="faq-card group bg-white/70 backdrop-blur-xl border border-white/80 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 cursor-pointer overflow-hidden relative">
                    <button class="w-full flex items-center justify-between p-5 md:p-6 text-left focus:outline-none">
                        <span class="text-lg md:text-xl font-semibold text-gray-900 pr-4">What is the duration of each
                            course?</span>
                        <div
                            class="icon-wrapper flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full bg-blue-50 transition-colors duration-300">
                            <svg class="w-5 h-5 text-blue-500 transition-transform duration-300 chevron" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content grid grid-rows-[0fr] opacity-0 transition-all duration-300 ease-in-out">
                        <div class="overflow-hidden">
                            <div class="px-5 pb-5 md:px-6 md:pb-6">
                                <p class="text-gray-600 leading-relaxed pt-4 border-t border-gray-100">Course duration
                                    varies depending on the program, typically ranging from 3 to 12 months.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ ITEM 5 -->
                <div
                    class="faq-card group bg-white/70 backdrop-blur-xl border border-white/80 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 cursor-pointer overflow-hidden relative">
                    <button class="w-full flex items-center justify-between p-5 md:p-6 text-left focus:outline-none">
                        <span class="text-lg md:text-xl font-semibold text-gray-900 pr-4">How are the academic results of
                            your students?</span>
                        <div
                            class="icon-wrapper flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full bg-blue-50 transition-colors duration-300">
                            <svg class="w-5 h-5 text-blue-500 transition-transform duration-300 chevron" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content grid grid-rows-[0fr] opacity-0 transition-all duration-300 ease-in-out">
                        <div class="overflow-hidden">
                            <div class="px-5 pb-5 md:px-6 md:pb-6">
                                <p class="text-gray-600 leading-relaxed pt-4 border-t border-gray-100">Our students
                                    consistently achieve 85–99% marks, with multiple top performers every year.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ ITEM 6 -->
                <div
                    class="faq-card group bg-white/70 backdrop-blur-xl border border-white/80 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 cursor-pointer overflow-hidden relative">
                    <button class="w-full flex items-center justify-between p-5 md:p-6 text-left focus:outline-none">
                        <span class="text-lg md:text-xl font-semibold text-gray-900 pr-4">Where can I view past student
                            results?</span>
                        <div
                            class="icon-wrapper flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full bg-blue-50 transition-colors duration-300">
                            <svg class="w-5 h-5 text-blue-500 transition-transform duration-300 chevron" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content grid grid-rows-[0fr] opacity-0 transition-all duration-300 ease-in-out">
                        <div class="overflow-hidden">
                            <div class="px-5 pb-5 md:px-6 md:pb-6">
                                <p class="text-gray-600 leading-relaxed pt-4 border-t border-gray-100">You can explore our
                                    Results section to view detailed performance records of previous students.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ ITEM 7 -->
                <div
                    class="faq-card group bg-white/70 backdrop-blur-xl border border-white/80 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 cursor-pointer overflow-hidden relative">
                    <button class="w-full flex items-center justify-between p-5 md:p-6 text-left focus:outline-none">
                        <span class="text-lg md:text-xl font-semibold text-gray-900 pr-4">What is the fee structure for the
                            courses?</span>
                        <div
                            class="icon-wrapper flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full bg-blue-50 transition-colors duration-300">
                            <svg class="w-5 h-5 text-blue-500 transition-transform duration-300 chevron" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content grid grid-rows-[0fr] opacity-0 transition-all duration-300 ease-in-out">
                        <div class="overflow-hidden">
                            <div class="px-5 pb-5 md:px-6 md:pb-6">
                                <p class="text-gray-600 leading-relaxed pt-4 border-t border-gray-100">Fees vary by course.
                                    Please contact us directly for detailed fee information.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ ITEM 8 -->
                <div
                    class="faq-card group bg-white/70 backdrop-blur-xl border border-white/80 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 cursor-pointer overflow-hidden relative">
                    <button class="w-full flex items-center justify-between p-5 md:p-6 text-left focus:outline-none">
                        <span class="text-lg md:text-xl font-semibold text-gray-900 pr-4">Do you provide installment
                            options?</span>
                        <div
                            class="icon-wrapper flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full bg-blue-50 transition-colors duration-300">
                            <svg class="w-5 h-5 text-blue-500 transition-transform duration-300 chevron" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content grid grid-rows-[0fr] opacity-0 transition-all duration-300 ease-in-out">
                        <div class="overflow-hidden">
                            <div class="px-5 pb-5 md:px-6 md:pb-6">
                                <p class="text-gray-600 leading-relaxed pt-4 border-t border-gray-100">Yes, flexible
                                    installment plans are available for selected courses.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ ITEM 9 -->
                <div
                    class="faq-card group bg-white/70 backdrop-blur-xl border border-white/80 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 cursor-pointer overflow-hidden relative">
                    <button class="w-full flex items-center justify-between p-5 md:p-6 text-left focus:outline-none">
                        <span class="text-lg md:text-xl font-semibold text-gray-900 pr-4">Are classes available online or
                            offline?</span>
                        <div
                            class="icon-wrapper flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full bg-blue-50 transition-colors duration-300">
                            <svg class="w-5 h-5 text-blue-500 transition-transform duration-300 chevron" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content grid grid-rows-[0fr] opacity-0 transition-all duration-300 ease-in-out">
                        <div class="overflow-hidden">
                            <div class="px-5 pb-5 md:px-6 md:pb-6">
                                <p class="text-gray-600 leading-relaxed pt-4 border-t border-gray-100">We offer both
                                    offline classroom sessions and online learning options.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ ITEM 10 -->
                <div
                    class="faq-card group bg-white/70 backdrop-blur-xl border border-white/80 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 cursor-pointer overflow-hidden relative">
                    <button class="w-full flex items-center justify-between p-5 md:p-6 text-left focus:outline-none">
                        <span class="text-lg md:text-xl font-semibold text-gray-900 pr-4">How can I contact RACT
                            Institute?</span>
                        <div
                            class="icon-wrapper flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full bg-blue-50 transition-colors duration-300">
                            <svg class="w-5 h-5 text-blue-500 transition-transform duration-300 chevron" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content grid grid-rows-[0fr] opacity-0 transition-all duration-300 ease-in-out">
                        <div class="overflow-hidden">
                            <div class="px-5 pb-5 md:px-6 md:pb-6">
                                <p class="text-gray-600 leading-relaxed pt-4 border-t border-gray-100">You can reach us via
                                    phone, WhatsApp, or by visiting our institute directly.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Premium Contact Conversion Block -->
    <section class="relative py-20 md:py-32 overflow-hidden bg-gradient-to-br from-slate-900 via-[#0a1128] to-[#120a28]">

        <!-- Ambient Background Glows (For the Luxury SaaS feel) -->
        <div class="absolute inset-0 pointer-events-none">
            <div
                class="absolute -top-1/4 -right-1/4 w-[600px] h-[600px] bg-blue-600/20 rounded-full mix-blend-screen filter blur-[120px]">
            </div>
            <div
                class="absolute -bottom-1/4 -left-1/4 w-[600px] h-[600px] bg-purple-600/20 rounded-full mix-blend-screen filter blur-[120px]">
            </div>
        </div>

        <!-- Centered Container -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Large Glass Wrapper -->
            <div
                class="bg-white/[0.03] border border-white/10 backdrop-blur-2xl rounded-[2.5rem] p-8 md:p-12 lg:p-16 shadow-[0_8px_32px_0_rgba(0,0,0,0.3)] relative overflow-hidden">

                <!-- Inner Subtle Highlight -->
                <div
                    class="absolute top-0 left-1/2 -translate-x-1/2 w-3/4 h-[1px] bg-gradient-to-r from-transparent via-white/20 to-transparent">
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                    <!-- 🔥 LEFT SIDE: Conversion Hook -->
                    <div class="flex flex-col">
                        <h2
                            class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white tracking-tight mb-5 leading-tight">
                            Still Have Questions? <br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-sky-300">Let’s
                                Talk.</span>
                        </h2>
                        <p class="text-lg text-slate-300 mb-10 leading-relaxed max-w-md">
                            Our team is here to guide you with the best course and career advice. Start your journey with
                            RACT Institute today.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 sm:gap-5">
                            <!-- Primary CTA -->
                            <a href="#"
                                class="inline-flex justify-center items-center px-8 py-3.5 rounded-full font-bold text-white bg-gradient-to-r from-red-500 to-orange-500 shadow-[0_0_20px_rgba(239,68,68,0.4)] hover:shadow-[0_0_30px_rgba(249,115,22,0.6)] hover:scale-105 active:scale-95 transition-all duration-300">
                                Get Admission Now
                            </a>
                            <!-- Secondary CTA -->
                            <a href="#"
                                class="group inline-flex justify-center items-center gap-2 px-8 py-3.5 rounded-full font-semibold text-white border border-white/20 bg-white/5 hover:bg-white/10 hover:border-white/40 hover:scale-105 active:scale-95 transition-all duration-300">
                                <svg class="w-5 h-5 text-green-400 group-hover:text-green-300 transition-colors"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12.031 0C5.405 0 .018 5.37.018 11.979c0 2.115.553 4.182 1.605 6.002L.036 24l6.183-1.618c1.748.956 3.731 1.46 5.807 1.46 6.626 0 12.015-5.372 12.015-11.981C24.041 5.372 18.657 0 12.031 0zm.006 21.84c-1.79 0-3.541-.48-5.074-1.39l-.364-.216-3.766.985.999-3.664-.237-.378c-.995-1.579-1.521-3.411-1.521-5.3 0-5.485 4.475-9.948 9.97-9.948 5.493 0 9.967 4.463 9.967 9.948 0 5.483-4.474 9.963-9.974 9.963z" />
                                </svg>
                                Chat on WhatsApp
                            </a>
                        </div>
                    </div>

                    <!-- 📞 RIGHT SIDE: Contact Info Glass Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-5">

                        <!-- Card 1: Phone -->
                        <a href="tel:+919876543210"
                            class="group flex flex-col p-6 rounded-2xl bg-white/[0.04] backdrop-blur-md border border-white/10 hover:bg-white/[0.08] hover:border-blue-400/30 hover:shadow-[0_0_20px_rgba(59,130,246,0.1)] hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300">
                            <div
                                class="w-10 h-10 rounded-full bg-blue-500/10 flex items-center justify-center border border-blue-500/20 group-hover:bg-blue-500/20 transition-colors">
                                <svg class="w-5 h-5 text-blue-400 group-hover:text-blue-300" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <span class="text-sm text-slate-400 mt-4 tracking-wide">Phone</span>
                            <span
                                class="text-lg font-medium text-white mt-1 group-hover:text-blue-200 transition-colors">+91
                                98765 43210</span>
                        </a>

                        <!-- Card 2: WhatsApp -->
                        <a href="#"
                            class="group flex flex-col p-6 rounded-2xl bg-white/[0.04] backdrop-blur-md border border-white/10 hover:bg-white/[0.08] hover:border-green-400/30 hover:shadow-[0_0_20px_rgba(74,222,128,0.1)] hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300">
                            <div
                                class="w-10 h-10 rounded-full bg-green-500/10 flex items-center justify-center border border-green-500/20 group-hover:bg-green-500/20 transition-colors">
                                <svg class="w-5 h-5 text-green-400 group-hover:text-green-300" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                    </path>
                                </svg>
                            </div>
                            <span class="text-sm text-slate-400 mt-4 tracking-wide">WhatsApp</span>
                            <span
                                class="text-lg font-medium text-white mt-1 group-hover:text-green-200 transition-colors">Chat
                                Now</span>
                        </a>

                        <!-- Card 3: Email -->
                        <a href="mailto:info@ract.com"
                            class="group flex flex-col p-6 rounded-2xl bg-white/[0.04] backdrop-blur-md border border-white/10 hover:bg-white/[0.08] hover:border-indigo-400/30 hover:shadow-[0_0_20px_rgba(99,102,241,0.1)] hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300">
                            <div
                                class="w-10 h-10 rounded-full bg-indigo-500/10 flex items-center justify-center border border-indigo-500/20 group-hover:bg-indigo-500/20 transition-colors">
                                <svg class="w-5 h-5 text-indigo-400 group-hover:text-indigo-300" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <span class="text-sm text-slate-400 mt-4 tracking-wide">Email</span>
                            <span
                                class="text-lg font-medium text-white mt-1 group-hover:text-indigo-200 transition-colors">info@ract.com</span>
                        </a>

                        <!-- Card 4: Location -->
                        <div
                            class="group flex flex-col p-6 rounded-2xl bg-white/[0.04] backdrop-blur-md border border-white/10 hover:bg-white/[0.08] hover:border-orange-400/30 hover:shadow-[0_0_20px_rgba(249,115,22,0.1)] hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300 cursor-default">
                            <div
                                class="w-10 h-10 rounded-full bg-orange-500/10 flex items-center justify-center border border-orange-500/20 group-hover:bg-orange-500/20 transition-colors">
                                <svg class="w-5 h-5 text-orange-400 group-hover:text-orange-300" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-slate-400 mt-4 tracking-wide">Location</span>
                            <span
                                class="text-lg font-medium text-white mt-1 group-hover:text-orange-200 transition-colors">Ghaziabad,
                                UP</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@section('scripts')
    <!-- Lightweight Vanilla JS for Apple/Stripe-style Smooth Toggling -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const faqCards = document.querySelectorAll('.faq-card');

            faqCards.forEach(card => {
                // Hum directly card par click listener lagayenge (taaki padding area par click karne se bhi khul jaye)
                card.addEventListener('click', () => {
                    const content = card.querySelector('.faq-content');
                    const icon = card.querySelector('.chevron');
                    const iconWrapper = card.querySelector('.icon-wrapper');
                    const isOpen = content.classList.contains('grid-rows-[1fr]');

                    // Premium behavior: Close others automatically
                    faqCards.forEach(c => {
                        if (c !== card) {
                            const cContent = c.querySelector('.faq-content');
                            const cIcon = c.querySelector('.chevron');
                            const cIconWrapper = c.querySelector('.icon-wrapper');

                            cContent.classList.remove('grid-rows-[1fr]', 'opacity-100');
                            cContent.classList.add('grid-rows-[0fr]', 'opacity-0');
                            cIcon.classList.remove('-rotate-180');
                            cIconWrapper.classList.remove('bg-blue-100');
                            c.classList.remove('ring-1', 'ring-blue-100', 'bg-white',
                                'shadow-[0_20px_40px_rgb(0,0,0,0.06)]');
                            c.classList.add('bg-white/70');
                        }
                    });

                    // Toggle the clicked one
                    if (!isOpen) {
                        // Open states
                        content.classList.remove('grid-rows-[0fr]', 'opacity-0');
                        content.classList.add('grid-rows-[1fr]', 'opacity-100');
                        icon.classList.add('-rotate-180');
                        iconWrapper.classList.add('bg-blue-100');

                        // Card Glow & Elevation
                        card.classList.remove('bg-white/70');
                        card.classList.add('ring-1', 'ring-blue-100', 'bg-white',
                            'shadow-[0_20px_40px_rgb(0,0,0,0.06)]');
                    } else {
                        // Close states
                        content.classList.remove('grid-rows-[1fr]', 'opacity-100');
                        content.classList.add('grid-rows-[0fr]', 'opacity-0');
                        icon.classList.remove('-rotate-180');
                        iconWrapper.classList.remove('bg-blue-100');

                        // Remove Card Glow
                        card.classList.remove('ring-1', 'ring-blue-100', 'bg-white',
                            'shadow-[0_20px_40px_rgb(0,0,0,0.06)]');
                        card.classList.add('bg-white/70');
                    }
                });
            });
        });
    </script>
@endsection
@endsection
