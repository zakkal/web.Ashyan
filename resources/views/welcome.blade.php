<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IoT Craft - Jasa Pembuatan Alat IoT & Embedded System Profesional</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Jasa pembuatan alat IoT dan embedded system custom. Ahli sensor pH, Turbidity, TDS dengan ESP32. Solusi untuk industri, penelitian, dan mahasiswa.">
    <meta name="keywords" content="Jasa IoT, Pembuatan Alat IoT, ESP32, Sensor pH, Sensor Turbidity, Monitoring Air, Smart System">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0ea5e9',
                        secondary: '#6366f1',
                        dark: '#0f172a',
                        accent: '#f43f5e',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 1s ease-out forwards',
                        'slide-up': 'slideUp 0.8s ease-out forwards',
                        'float': 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(30px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>
    
    <style type="text/css">
        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .hero-gradient {
            background: radial-gradient(circle at 50% 50%, rgba(14, 165, 233, 0.1) 0%, rgba(15, 23, 42, 1) 100%);
        }
        .text-gradient {
            background: linear-gradient(to right, #0ea5e9, #6366f1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .btn-primary {
            background: linear-gradient(to right, #0ea5e9, #6366f1);
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            box-shadow: 0 0 20px rgba(14, 165, 233, 0.4);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-dark text-slate-200 antialiased font-sans">

    <!-- Header / Navbar -->
    <nav class="fixed w-full z-50 glass top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center animate-float">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold tracking-tight text-white font-heading">IoT<span class="text-primary">Craft</span></span>
                </div>
                <div class="hidden md:flex gap-8 text-sm font-medium">
                    <a href="#tentang" class="hover:text-primary transition-colors">Tentang</a>
                    <a href="#fitur" class="hover:text-primary transition-colors">Fitur</a>
                    <a href="#portfolio" class="hover:text-primary transition-colors">Portfolio</a>
                    <a href="#harga" class="hover:text-primary transition-colors">Harga</a>
                </div>
                <div>
                    <a href="#harga" class="btn-primary text-white px-6 py-2.5 rounded-full text-sm font-bold shadow-lg">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden hero-gradient">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary/20 rounded-full blur-[120px]"></div>
        <div class="absolute top-1/2 -right-24 w-80 h-80 bg-secondary/20 rounded-full blur-[100px]"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="animate-slide-up opacity-0 [animation-delay:0.2s]">
                <span class="px-4 py-1.5 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider border border-primary/20">
                    Trusted IoT Solutions
                </span>
                <h1 class="mt-8 text-5xl md:text-7xl font-extrabold font-heading text-white leading-tight">
                    Jasa Pembuatan Alat <br> <span class="text-gradient">IoT Custom Profesional</span>
                </h1>
                <p class="mt-6 text-lg md:text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
                    Wujudkan ide IoT Anda menjadi kenyataan. Dari sensor monitoring hingga otomatisasi industri dengan teknologi ESP32 terbaru.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#harga" class="btn-primary text-white px-10 py-4 rounded-full text-lg font-bold">
                        Pesan Sekarang
                    </a>
                    <a href="#portfolio" class="px-10 py-4 rounded-full border border-slate-700 hover:bg-slate-800 transition-all text-lg font-medium">
                        Lihat Portfolio
                    </a>
                </div>
            </div>
            
            <!-- Hero Image / Illustration Placeholder -->
            <div class="mt-16 animate-fade-in opacity-0 [animation-delay:0.6s]">
                <div class="relative inline-block">
                    <div class="absolute inset-0 bg-primary/20 blur-3xl rounded-3xl"></div>
                    <img src="{{ asset('img/hero.png') }}" alt="IoT Device" class="relative rounded-3xl shadow-2xl border border-white/10 max-w-3xl w-full mx-auto">
                </div>
            </div>
        </div>
    </header>

    <!-- Tentang Layanan -->
    <section id="tentang" class="py-24 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="animate-slide-up">
                    <h2 class="text-3xl md:text-4xl font-bold font-heading text-white">Solusi IoT Terintegrasi untuk <span class="text-primary">Berbagai Kebutuhan</span></h2>
                    <p class="mt-6 text-slate-400 leading-relaxed">
                        Kami menyediakan layanan end-to-end mulai dari perancangan skematik, pemilihan sensor yang akurat, hingga pengembangan dashboard monitoring berbasis web atau mobile.
                    </p>
                    
                    <div class="mt-10 space-y-6">
                        <div class="flex gap-4">
                            <div class="mt-1 w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold">Custom Sesuai Kebutuhan</h4>
                                <p class="text-slate-400 text-sm">Desain sistem dan sensor yang benar-benar menyesuaikan problem Anda.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="mt-1 w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold">Akurasi & Real-time</h4>
                                <p class="text-slate-400 text-sm">Kalibrasi sensor profesional untuk data yang presisi secara real-time.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="mt-1 w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold">Monitoring Global</h4>
                                <p class="text-slate-400 text-sm">Pantau alat Anda dari mana saja melalui smartphone atau laptop.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-secondary/10 blur-3xl -rotate-12 scale-110"></div>
                    <img src="{{ asset('img/monitoring.png') }}" alt="Monitoring System" class="relative rounded-2xl border border-white/5 shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Fitur & Sensor -->
    <section id="fitur" class="py-24 bg-slate-900/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold font-heading text-white">Komponen & <span class="text-primary">Fitur Unggulan</span></h2>
            <p class="mt-4 text-slate-400">Kami menggunakan sensor industri berkualitas tinggi.</p>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">
                <!-- pH Sensor -->
                <div class="glass p-8 rounded-2xl text-left hover:border-primary/50 transition-all group">
                    <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">Sensor pH</h3>
                    <p class="mt-3 text-slate-400 text-sm">Monitoring keasaman air dengan presisi tinggi (range 0-14 pH).</p>
                </div>
                
                <!-- Turbidity -->
                <div class="glass p-8 rounded-2xl text-left hover:border-primary/50 transition-all group">
                    <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">Sensor Turbidity</h3>
                    <p class="mt-3 text-slate-400 text-sm">Mendeteksi kekeruhan air berdasarkan tingkat kejernihan (NTU).</p>
                </div>
                
                <!-- TDS -->
                <div class="glass p-8 rounded-2xl text-left hover:border-primary/50 transition-all group">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">Sensor TDS</h3>
                    <p class="mt-3 text-slate-400 text-sm">Mengukur total zat terlarut dalam air (PPM) untuk kualitas air minum.</p>
                </div>
                
                <!-- Dashboard -->
                <div class="glass p-8 rounded-2xl text-left hover:border-primary/50 transition-all group">
                    <div class="w-12 h-12 bg-green-500/10 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">Dashboard IoT</h3>
                    <p class="mt-3 text-slate-400 text-sm">Visualisasi data interaktif via browser atau aplikasi mobile.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-24 bg-dark overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-16">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold font-heading text-white">Proyek <span class="text-primary">Terbaru Kami</span></h2>
                    <p class="mt-4 text-slate-400">Implementasi nyata di lapangan dan laboratorium.</p>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <div class="group relative overflow-hidden rounded-3xl border border-white/5 shadow-2xl">
                    <img src="{{ asset('img/dashboard.png') }}" alt="Project 1" class="w-full transform group-hover:scale-110 transition-duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/20 to-transparent flex flex-col justify-end p-8">
                        <span class="text-primary font-bold text-xs uppercase tracking-widest">Industry Monitoring</span>
                        <h3 class="text-2xl font-bold text-white mt-2">Sistem Monitoring Kualitas Air Real-time</h3>
                        <p class="text-slate-300 mt-2 text-sm">Implementasi pH, TDS, dan Turbidity sensor dengan notifikasi Telegram.</p>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-3xl border border-white/5 shadow-2xl">
                    <img src="{{ asset('img/hero.png') }}" alt="Project 1" class="w-full transform group-hover:scale-110 transition-duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/20 to-transparent flex flex-col justify-end p-8">
                        <span class="text-secondary font-bold text-xs uppercase tracking-widest">Smart Automation</span>
                        <h3 class="text-2xl font-bold text-white mt-2">Alat Otomatis Berbasis Sensor</h3>
                        <p class="text-slate-300 mt-2 text-sm">Otomatisasi pengisian cairan berdasarkan preset parameter sensor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Harga & Paket -->
    <section id="harga" class="py-24 bg-slate-900/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold font-heading text-white">Paket <span class="text-primary">Layanan</span></h2>
            <p class="mt-4 text-slate-400 mb-16">Pilih paket yang sesuai dengan budget dan kebutuhan Anda.</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Basic -->
                <div class="glass p-10 rounded-3xl text-left relative flex flex-col">
                    <h3 class="text-xl font-bold text-white">Basic</h3>
                    <div class="mt-4 mb-8">
                        <span class="text-4xl font-extrabold text-white">Rp 300.000</span>
                        <span class="text-slate-500">/proyek</span>
                    </div>
                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-center gap-3 text-sm text-slate-300">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            1 Sensor Utama
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-300">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            ESP32 Microcontroller
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-300">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Simple LCD Display
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            Web Dashboard
                        </li>
                    </ul>
                    <button onclick="handlePayment('basic')" class="w-full py-4 rounded-xl border border-slate-700 font-bold hover:bg-slate-800 transition-colors">Pilih Basic</button>
                </div>
                
                <!-- Standard -->
                <div class="glass p-10 rounded-3xl text-left relative flex flex-col scale-105 border-primary/40 ring-2 ring-primary bg-primary/5">
                    <div class="absolute top-0 right-10 -translate-y-1/2 bg-primary text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest shadow-xl shadow-primary/20">Best Value</div>
                    <h3 class="text-xl font-bold text-white">Standard</h3>
                    <div class="mt-4 mb-8">
                        <span class="text-4xl font-extrabold text-white">Rp 300.000</span>
                        <span class="text-slate-500">/proyek</span>
                    </div>
                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-center gap-3 text-sm text-slate-300">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            3 Sensor (pH, TDS, Turb)
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-300">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Web Dashboard Monitoring
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-300">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Database Cloud Storage
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-300">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Notifikasi Telegram
                        </li>
                    </ul>
                    <button onclick="handlePayment('standard')" class="btn-primary w-full py-4 rounded-xl text-white font-bold shadow-xl shadow-primary/30">Pilih Standard</button>
                </div>
                
                <!-- Premium -->
                <div class="glass p-10 rounded-3xl text-left relative flex flex-col">
                    <h3 class="text-xl font-bold text-white">Premium</h3>
                    <div class="mt-4 mb-8">
                        <span class="text-4xl font-extrabold text-white">Custom</span>
                    </div>
                    <p class="text-slate-400 text-sm mb-10">Untuk kebutuhan industri skala besar, penelitian lanjutan, atau sistem otomasi penuh yang terintegrasi dengan ERP.</p>
                    <button onclick="handlePayment('premium')" class="w-full mt-auto py-4 rounded-xl border border-slate-700 font-bold hover:bg-slate-800 transition-colors">Hubungi Kami</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="py-24 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold font-heading text-white">Apa Kata <span class="text-primary">Pelanggan</span></h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
                <div class="glass p-8 rounded-2xl text-left">
                    <div class="flex gap-1 text-primary mb-4">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-slate-300 italic mb-6">"Pengerjaannya sangat cepat dan sensor pH-nya akurat. Sangat membantu riset skripsi saya yang butuh presisi tinggi."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-slate-700"></div>
                        <div>
                            <h4 class="text-white font-bold text-sm">Andi Pratama</h4>
                            <p class="text-slate-500 text-xs">Mahasiswa Teknik Elektro</p>
                        </div>
                    </div>
                </div>
                
                <div class="glass p-8 rounded-2xl text-left border-primary/20">
                    <div class="flex gap-1 text-primary mb-4">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-slate-300 italic mb-6">"Solusi IoT dari IoT Craft sangat handal. Kami menggunakannya untuk monitoring kolam pembibitan ikan intensif."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-slate-700"></div>
                        <div>
                            <h4 class="text-white font-bold text-sm">Budi Santoso</h4>
                            <p class="text-slate-500 text-xs">CEO AquaSmart Indo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-primary/20 blur-[150px] scale-75 rounded-full"></div>
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold font-heading text-white">Mulai Proyek IoT Anda <span class="text-primary">Sekarang</span></h2>
            <p class="mt-6 text-slate-400 text-lg">Konsultasikan kebutuhan teknis Anda secara gratis dan dapatkan penawaran terbaik.</p>
            <div class="mt-10">
                <a href="#harga" class="btn-primary text-white px-12 py-5 rounded-full text-xl font-bold inline-block">Mulai Proyek Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 py-20 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-12">
                <div class="col-span-2">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <span class="text-xl font-bold text-white font-heading">IoTCraft</span>
                    </div>
                    <p class="text-slate-500 max-w-sm mb-8">Penyedia jasa pembuatan alat IoT dan Embedded System terpercaya dengan fokus pada akurasi data dan kemudahan monitoring.</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-900 border border-white/10 flex items-center justify-center hover:bg-primary transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-900 border border-white/10 flex items-center justify-center hover:bg-primary transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.336 3.608 1.31.974.974 1.248 2.242 1.31 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.336 2.633-1.31 3.608-.974.974-2.242 1.248-3.608 1.31-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.336-3.608-1.31-.974-.974-1.248-2.242-1.31-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.336-2.633 1.31-3.608.974-.974 2.242-1.248 3.608-1.31 1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.337 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.947-.072c4.351-.2 6.78-2.618 6.98-6.98.058-1.281.072-1.689.072-4.948s-.014-3.667-.072-4.947c-.2-4.338-2.617-6.78-6.98-6.98-1.28-.058-1.688-.072-4.947-.072zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Navigasi</h4>
                    <ul class="space-y-4 text-slate-500 text-sm">
                        <li><a href="#tentang" class="hover:text-primary">Tentang Kami</a></li>
                        <li><a href="#fitur" class="hover:text-primary">Fitur Alat</a></li>
                        <li><a href="#portfolio" class="hover:text-primary">Portfolio</a></li>
                        <li><a href="#harga" class="hover:text-primary">Paket Harga</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Kontak</h4>
                    <ul class="space-y-4 text-slate-500 text-sm">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                            hello@iotcraft.id
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 004.569 4.569l.773-1.548a1 1 0 011.06-.539l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                            +62 812-3456-7890
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-20 pt-8 border-t border-white/5 text-center text-slate-600 text-xs">
                &copy; {{ date('Y') }} IoT Craft. All rights reserved. Professional IoT Development.
            </div>
        </div>
    </footer>

    <!-- Scalev Payment Handler Script -->
    <script>
        /**
         * Handle Scalev Payment Integration
         * @param {string} plan - The selected plan (basic, standard, premium)
         */
        async function handlePayment(plan) {
            console.log(`Processing payment for plan: ${plan}`);
            
            // If premium, redirect to WhatsApp for custom consultation
            if (plan === 'premium') {
                window.open('https://wa.me/6281234567890?text=Halo%20IoT%20Craft,%20saya%20ingin%20konsultasi%20proyek%20IoT%20Premium.', '_blank');
                return;
            }

            // Define Scalev Endpoint and Payload (Example/Dummy)
            const SCALEV_API_ENDPOINT = '/api/payment/scalev'; // Integrated backend endpoint
            
            // Simulate Loading State
            const btn = event.currentTarget;
            const originalText = btn.innerHTML;
            btn.innerHTML = `<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Memproses...`;
            btn.disabled = true;

            try {
                // Call Laravel backend to integrate with Scalev API
                const response = await fetch(SCALEV_API_ENDPOINT, {
                    method: 'POST',
                    headers: { 
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ 
                        plan: plan, 
                        timestamp: Date.now() 
                    })
                });

                const data = await response.json();
                
                if (data.status === 'success' && data.checkout_url) {
                    // In a real scenario, this will redirect to the Scalev checkout page
                    window.location.href = data.checkout_url;
                } else {
                    throw new Error(data.error || 'Terjadi kesalahan sistem.');
                }
            } catch (error) {
                console.error('Payment Error:', error);
                alert('Terjadi kesalahan: ' + error.message + '. Silakan hubungi admin via WhatsApp.');
                btn.innerHTML = originalText;
                btn.disabled = false;
            }
        }

        // Smooth scroll for internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Simple Fade-in intersection observer
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                    entry.target.style.opacity = '1';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.glass, h2, #portfolio .group').forEach(el => {
            el.style.opacity = '0';
            observer.observe(el);
        });
    </script>
</body>
</html>
