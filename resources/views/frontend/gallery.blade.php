@extends('layouts.frontend')
@section('title', 'Gallery | Photos, Achievements and Highlights')
@section('description', '')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/frontend/gallery.css') }}">
@endsection

@section('content')
    {{-- HERO --}}
    <section class="gallery-hero-bg">
        <!-- Ambient Studio Glow -->
        <div class="studio-glow-center"></div>

        <!-- Depth of Field Background Frames -->
        <div class="floating-frame frame-1 hidden md:block"></div>
        <div class="floating-frame frame-2 hidden md:block"></div>
        <div class="floating-frame frame-3 hidden lg:block"></div>

        <!-- Center Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 hero-content-wrapper">

            <div class="gallery-badge">
                <svg class="w-4 h-4 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                    </path>
                </svg>
                <span class="gallery-badge-text">Visual Experience</span>
            </div>

            <h1 class="gallery-title">
                Step Into Our <br>
                <span class="gallery-title-gradient">Legacy & Excellence.</span>
            </h1>

            <p class="gallery-subtitle">
                Take a visual tour of our state-of-the-art tech labs, success stories, seminars, and the everyday discipline
                that makes RACT the premier IT institute.
            </p>

            <a href="#gallery-grid" class="scroll-indicator-box">
                <div class="mouse-shape">
                    <div class="mouse-wheel"></div>
                </div>
                <span class="scroll-text">Explore Gallery</span>
            </a>

        </div>
    </section>

    {{-- Gallery --}}
    <section class="luxe-gallery-light py-24 lg:py-32" id="gallery-grid">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Header -->
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 lg:mb-20 border-b border-gray-200 pb-8">
                <div class="max-w-2xl">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-gray-200 shadow-sm mb-4">
                        <span class="w-2 h-2 rounded-full bg-[#d4af37]"></span>
                        <span class="text-[#0a192f] text-[0.65rem] font-bold uppercase tracking-widest">Visual
                            Portfolio</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-light text-[#0a192f] tracking-tight">
                        Captured <strong
                            class="font-black text-transparent bg-clip-text bg-gradient-to-r from-[#d4af37] to-[#aa8416]">Moments.</strong>
                    </h2>
                </div>
            </div>

            <!-- The Fluid Masonry Grid (with onclick triggers) -->
            <div class="luxe-masonry-grid">

                <!-- Image 1 -->
                <div class="art-frame" onclick="openLightbox(this)">
                    <img src="https://res.cloudinary.com/dsf4b0hve/image/upload/v1781962657/WhatsApp_Image_2026-05-08_at_13.11.32_mqvur2.jpg"
                        alt="Interactive Lab Sessions" loading="lazy">
                    <div class="art-zoom-btn"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg></div>
                    <div class="art-caption-glass">
                        <span class="caption-category">Hands-on Execution</span>
                        <h3 class="caption-title">Interactive Lab Sessions</h3>
                    </div>
                </div>

                <!-- Image 2 -->
                <div class="art-frame" onclick="openLightbox(this)">
                    <img src="https://res.cloudinary.com/dsf4b0hve/image/upload/v1781962657/WhatsApp_Image_2026-05-08_at_13.11.32_1_vm2w6l.jpg"
                        alt="Core Logic Building" loading="lazy">
                    <div class="art-zoom-btn"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg></div>
                    <div class="art-caption-glass">
                        <span class="caption-category">Foundation First</span>
                        <h3 class="caption-title">Core Logic Building</h3>
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="art-frame" onclick="openLightbox(this)">
                    <img src="https://res.cloudinary.com/dsf4b0hve/image/upload/v1781962656/WhatsApp_Image_2026-05-08_at_13.11.33_yk09g3.jpg"
                        alt="Mega Tech Seminars" loading="lazy">
                    <div class="art-zoom-btn"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg></div>
                    <div class="art-caption-glass">
                        <span class="caption-category">Industry Exposure</span>
                        <h3 class="caption-title">Mega Tech Seminars</h3>
                    </div>
                </div>

                <!-- Image 4 -->
                <div class="art-frame" onclick="openLightbox(this)">
                    <img src="https://res.cloudinary.com/dsf4b0hve/image/upload/v1781962656/WhatsApp_Image_2026-05-08_at_13.11.32_2_hfsghb.jpg"
                        alt="Dedicated Doubt Clearing" loading="lazy">
                    <div class="art-zoom-btn"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg></div>
                    <div class="art-caption-glass">
                        <span class="caption-category">Personalized Attention</span>
                        <h3 class="caption-title">Dedicated Doubt Clearing</h3>
                    </div>
                </div>

                <!-- Image 5 -->
                <div class="art-frame" onclick="openLightbox(this)">
                    <img src="https://res.cloudinary.com/dsf4b0hve/image/upload/v1781962656/WhatsApp_Image_2026-05-08_at_13.11.34_d1hlo6.jpg"
                        alt="Live Project Execution" loading="lazy">
                    <div class="art-zoom-btn"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg></div>
                    <div class="art-caption-glass">
                        <span class="caption-category">Real World Coding</span>
                        <h3 class="caption-title">Live Project Execution</h3>
                    </div>
                </div>

                <!-- Image 6 -->
                <div class="art-frame" onclick="openLightbox(this)">
                    <img src="https://res.cloudinary.com/dsf4b0hve/image/upload/v1781962656/WhatsApp_Image_2026-05-08_at_13.11.33_1_zk4kcv.jpg"
                        alt="Digital Demonstrations" loading="lazy">
                    <div class="art-zoom-btn"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg></div>
                    <div class="art-caption-glass">
                        <span class="caption-category">Tech Visualized</span>
                        <h3 class="caption-title">Digital Demonstrations</h3>
                    </div>
                </div>

                <!-- Image 7 -->
                <div class="art-frame" onclick="openLightbox(this)">
                    <img src="https://res.cloudinary.com/dsf4b0hve/image/upload/v1781962656/WhatsApp_Image_2026-05-08_at_13.11.33_2_itqnab.jpg"
                        alt="School Outreach Programs" loading="lazy">
                    <div class="art-zoom-btn"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg></div>
                    <div class="art-caption-glass">
                        <span class="caption-category">Inspiring The Youth</span>
                        <h3 class="caption-title">School Outreach Programs</h3>
                    </div>
                </div>

                <!-- Image 8 -->
                <div class="art-frame" onclick="openLightbox(this)">
                    <img src="https://res.cloudinary.com/dsf4b0hve/image/upload/v1781962655/WhatsApp_Image_2026-05-08_at_13.11.31_2_ekec6e.jpg"
                        alt="Smart Classroom Sessions" loading="lazy">
                    <div class="art-zoom-btn"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg></div>
                    <div class="art-caption-glass">
                        <span class="caption-category">Modern Infrastructure</span>
                        <h3 class="caption-title">Smart Classroom Sessions</h3>
                    </div>
                </div>

                <!-- Image 9 -->
                <div class="art-frame" onclick="openLightbox(this)">
                    <img src="https://res.cloudinary.com/dsf4b0hve/image/upload/v1781962656/WhatsApp_Image_2026-05-08_at_13.11.34_1_dhckv6.jpg"
                        alt="Student-First Mentorship" loading="lazy">
                    <div class="art-zoom-btn"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg></div>
                    <div class="art-caption-glass">
                        <span class="caption-category">Guidance & Support</span>
                        <h3 class="caption-title">Student-First Mentorship</h3>
                    </div>
                </div>

                <!-- Image 10 -->
                <div class="art-frame" onclick="openLightbox(this)">
                    <img src="https://res.cloudinary.com/dsf4b0hve/image/upload/v1781962655/WhatsApp_Image_2026-05-08_at_13.11.35_ew0s5q.jpg"
                        alt="Focused Learning Environment" loading="lazy">
                    <div class="art-zoom-btn"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg></div>
                    <div class="art-caption-glass">
                        <span class="caption-category">Zero Distractions</span>
                        <h3 class="caption-title">Focused Learning Environment</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- THE LIGHTBOX MODAL HTML -->
    <div class="luxe-lightbox" id="premiumLightbox">
        <!-- Overlay clicks to close -->
        <div class="lightbox-overlay" onclick="closeLightbox()"></div>

        <!-- Close Button -->
        <button class="lightbox-close" onclick="closeLightbox()">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Content Container -->
        <div class="lightbox-content">
            <img src="" alt="Gallery Preview" class="lightbox-img" id="lbImage">
            <div class="lightbox-caption">
                <div class="lb-title" id="lbTitle">Image Title</div>
                <div class="lb-category" id="lbCategory">Category</div>
            </div>
        </div>
    </div>

    {{-- VIDEO --}}
    <style>
        /* Absolute Cinematic Dark Background */
        .reels-dark-bg {
            background-color: #02040a;
            position: relative;
            overflow: hidden;
            z-index: 10;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        /* Cinematic Ambient Backlight */
        .reels-dark-bg::before {
            content: '';
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            height: 600px;
            background: radial-gradient(ellipse, rgba(59, 130, 246, 0.08) 0%, rgba(212, 175, 55, 0.04) 40%, transparent 70%);
            filter: blur(80px);
            pointer-events: none;
            z-index: 0;
        }

        /*
             =======================================
               REELS GRID LAYOUT
             =======================================
            */
        .reels-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            justify-items: center;
        }

        @media (min-width: 768px) {
            .reels-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 2.5rem;
            }
        }

        /*
             =======================================
               THE PREMIUM REEL CARD
             =======================================
            */
        .reel-card {
            width: 100%;
            max-width: 360px;
            /* Perfect mobile width */
            aspect-ratio: 9 / 16;
            /* Standard Reel/Short Format */
            border-radius: 32px;
            background: #0a0c10;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8), inset 0 2px 10px rgba(255, 255, 255, 0.05);
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            transform: translateZ(0);
            /* Hardware Acceleration */
        }

        /* Glowing Border Effect on Hover */
        .reel-card::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 32px;
            padding: 2px;
            background: linear-gradient(135deg, #3b82f6, transparent 40%, #d4af37);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: 5;
            pointer-events: none;
        }

        .reel-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.9), 0 0 30px rgba(59, 130, 246, 0.15);
        }

        .reel-card:hover::after {
            opacity: 1;
        }

        /* The HTML5 Video Element */
        .reel-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Ensures no black bars */
            transition: transform 0.5s ease;
        }

        /* Subtle zoom out when playing for cinematic feel */
        .reel-card.is-playing .reel-video {
            transform: scale(1.02);
        }

        /* Dark Vignette Overlay for Text Readability */
        .reel-vignette {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, transparent 30%, transparent 60%, rgba(0, 0, 0, 0.9) 100%);
            z-index: 1;
            pointer-events: none;
        }

        /*
             =======================================
               PLAY BUTTON & UI ELEMENTS
             =======================================
            */
        .play-btn-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            z-index: 3;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .reel-card:hover .play-btn-overlay {
            background: rgba(212, 175, 55, 0.8);
            border-color: #d4af37;
            color: #02040a;
            transform: translate(-50%, -50%) scale(1.1);
        }

        .play-btn-overlay svg {
            width: 32px;
            height: 32px;
            margin-left: 4px;
            /* Optically center the play triangle */
        }

        /* Hide Play Button when video is playing */
        .reel-card.is-playing .play-btn-overlay {
            opacity: 0;
            transform: translate(-50%, -50%) scale(1.5);
            pointer-events: none;
        }

        /* Video Info Section (Bottom) */
        .reel-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem 1.5rem 1.5rem 1.5rem;
            z-index: 4;
            pointer-events: none;
        }

        .reel-tag {
            display: inline-block;
            background: rgba(59, 130, 246, 0.2);
            color: #60a5fa;
            border: 1px solid rgba(59, 130, 246, 0.3);
            padding: 0.25rem 0.75rem;
            border-radius: 8px;
            font-size: 0.7rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 0.75rem;
            backdrop-filter: blur(4px);
        }

        .reel-title {
            color: #ffffff;
            font-size: 1.25rem;
            font-weight: 800;
            line-height: 1.3;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
        }

        /*
             =======================================
               LIVE AUDIO VISUALIZER (Only shows when playing)
             =======================================
            */
        .audio-visualizer {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            display: flex;
            align-items: flex-end;
            gap: 3px;
            height: 20px;
            z-index: 4;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .reel-card.is-playing .audio-visualizer {
            opacity: 1;
        }

        .bar {
            width: 4px;
            background: #10b981;
            /* Neon Green */
            border-radius: 2px;
            animation: soundBars 0.5s ease-in-out infinite alternate;
            box-shadow: 0 0 10px #10b981;
        }

        .bar:nth-child(1) {
            height: 40%;
            animation-delay: 0.0s;
        }

        .bar:nth-child(2) {
            height: 80%;
            animation-delay: 0.2s;
        }

        .bar:nth-child(3) {
            height: 60%;
            animation-delay: 0.1s;
        }

        .bar:nth-child(4) {
            height: 100%;
            animation-delay: 0.3s;
        }

        @keyframes soundBars {
            0% {
                transform: scaleY(0.3);
            }

            100% {
                transform: scaleY(1);
            }
        }
    </style>

    <section class="reels-dark-bg py-24 lg:py-32" id="video-gallery">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Premium Header -->
            <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-sm mb-6">
                    <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                    <span class="text-gray-300 text-xs font-bold uppercase tracking-widest">Live Action</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-white leading-tight tracking-tight mb-6">
                    Experience the <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#3b82f6] to-[#d4af37]">RACT
                        Vibe.</span>
                </h2>
                <p class="text-lg text-gray-400 font-medium">
                    Watch our students, seminars, and behind-the-scenes action. Click any reel to play.
                </p>
            </div>

            <!-- Reels Grid -->
            <div class="reels-grid">

                <!-- Reel 1 -->
                <div class="reel-card" onclick="toggleReel(this)">
                    <!-- Replace src with your actual vertical video URL -->
                    <!-- Poster image is the thumbnail shown before playing -->
                    <video class="reel-video" loop playsinline preload="metadata"
                        poster="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        src="https://www.w3schools.com/html/mov_bbb.mp4">
                    </video>
                    <div class="reel-vignette"></div>

                    <!-- Audio Visualizer (Hidden until playing) -->
                    <div class="audio-visualizer">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>

                    <!-- Center Play Button -->
                    <div class="play-btn-overlay">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"></path>
                        </svg>
                    </div>

                    <!-- Text Content -->
                    <div class="reel-info">
                        <div class="reel-tag">Seminars</div>
                        <h3 class="reel-title">Mega Tech Seminar at Delhi University Campus</h3>
                    </div>
                </div>

                <!-- Reel 2 -->
                <div class="reel-card" onclick="toggleReel(this)">
                    <video class="reel-video" loop playsinline preload="metadata"
                        poster="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        src="https://www.w3schools.com/html/mov_bbb.mp4">
                    </video>
                    <div class="reel-vignette"></div>

                    <div class="audio-visualizer">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>

                    <div class="play-btn-overlay">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"></path>
                        </svg>
                    </div>

                    <div class="reel-info">
                        <div class="reel-tag"
                            style="background: rgba(212, 175, 55, 0.2); color: #fdf0a6; border-color: rgba(212, 175, 55, 0.3);">
                            Student Success</div>
                        <h3 class="reel-title">From Beginner to Full-Stack Developer in 6 Months</h3>
                    </div>
                </div>

                <!-- Reel 3 -->
                <div class="reel-card" onclick="toggleReel(this)">
                    <video class="reel-video" loop playsinline preload="metadata"
                        poster="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        src="https://www.w3schools.com/html/mov_bbb.mp4">
                    </video>
                    <div class="reel-vignette"></div>

                    <div class="audio-visualizer">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>

                    <div class="play-btn-overlay">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"></path>
                        </svg>
                    </div>

                    <div class="reel-info">
                        <div class="reel-tag"
                            style="background: rgba(16, 185, 129, 0.2); color: #6ee7b7; border-color: rgba(16, 185, 129, 0.3);">
                            Behind The Scenes</div>
                        <h3 class="reel-title">A day inside the RACT Tech Lab</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>


@section('scripts')
    <!-- LIGHTBOX JAVASCRIPT LOGIC -->
    <script>
        function openLightbox(element) {
            // Get data from clicked card
            const imgSrc = element.querySelector('img').src;
            const title = element.querySelector('.caption-title').innerText;
            const category = element.querySelector('.caption-category').innerText;

            // Set data to Modal
            document.getElementById('lbImage').src = imgSrc;
            document.getElementById('lbTitle').innerText = title;
            document.getElementById('lbCategory').innerText = category;

            // Show Modal & Prevent Body Scroll
            document.getElementById('premiumLightbox').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            // Hide Modal & Restore Body Scroll
            document.getElementById('premiumLightbox').classList.remove('active');
            document.body.style.overflow = '';

            // Small timeout to clear image source after animation completes
            setTimeout(() => {
                document.getElementById('lbImage').src = '';
            }, 500);
        }

        // Close on Escape Key press
        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape") {
                closeLightbox();
            }
        });

        function toggleReel(clickedCard) {
            // Find the video element inside the clicked card
            const clickedVideo = clickedCard.querySelector('.reel-video');

            // Find ALL videos and cards on the page
            const allVideos = document.querySelectorAll('.reel-video');
            const allCards = document.querySelectorAll('.reel-card');

            // Logic 1: Pause all OTHER videos and reset their UI
            allVideos.forEach(video => {
                if (video !== clickedVideo) {
                    video.pause();
                    // Find the parent card of this video and remove playing state
                    video.closest('.reel-card').classList.remove('is-playing');
                }
            });

            // Logic 2: Toggle the CLICKED video
            if (clickedVideo.paused) {
                clickedVideo.play();
                clickedCard.classList.add('is-playing');
            } else {
                clickedVideo.pause();
                clickedCard.classList.remove('is-playing');
            }
        }
    </script>
@endsection

@endsection
