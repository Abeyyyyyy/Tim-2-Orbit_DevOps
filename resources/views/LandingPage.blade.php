<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 4 Bandung | Sekolah Inovatif & Inklusif</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#a7c7e7',
                        'primary-light': '#d4e6f8',
                        'primary-dark': '#7aa7cc',
                        'light-gray': '#f5f7fa',
                        dark: '#2c3e50'
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif']
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        scaleUp: {
                            '0%': { transform: 'scale(1)' },
                            '50%': { transform: 'scale(1.05)' },
                            '100%': { transform: 'scale(1)' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
                        }
                    },
                    animation: {
                        fadeInUp: 'fadeInUp 0.6s ease-out',
                        scaleUp: 'scaleUp 0.4s ease-in-out',
                        float: 'float 3s ease-in-out infinite'
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f5f7fa;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(#7aa7cc, #a7c7e7);
            border-radius: 10px;
        }
        
        /* Custom styles for specific elements */
        .hero-bg {
            background: linear-gradient(135deg, #d4e6f8, #ffffff);
        }
        
        .highlight-bg {
            background: linear-gradient(135deg, #d4e6f8, #ffffff);
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #a7c7e7, #7aa7cc);
            border-radius: 2px;
        }
        
        /* Ensure no text disappears on hover */
        .primary-btn {
            position: relative;
            z-index: 10;
        }
        
        .primary-btn span {
            position: relative;
            z-index: 20;
        }
        
        .read-more i {
            transition: transform 0.3s ease;
        }
        
        .read-more:hover i {
            transform: translateX(5px);
        }
    </style>
</head>
<body class="font-sans bg-white text-gray-800 leading-relaxed overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-md p-4 md:p-6 shadow-lg z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="https://placehold.co/48x48/2563eb/ffffff?text=SMK" alt="Logo SMKN 4 Bandung" class="w-12 h-12 rounded-xl shadow-lg">
                <div>
                    <h2 class="text-xl md:text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">SMKN 4 BANDUNG</h2>
                    <p class="text-xs md:text-sm text-gray-600">Sekolah Menengah Kejuruan Negeri 4 Bandung</p>
                </div>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="#" class="px-3 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-md relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-gradient-to-r from-blue-600 to-purple-600 after:transition-all after:duration-300 hover:after:w-full">Akademik</a>
                <a href="#" class="px-3 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-md relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-gradient-to-r from-blue-600 to紫色-600 after:transition-all after:duration-300 hover:after:w-full">Ekstrakurikuler</a>
                <a href="#" class="px-3 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-md relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-gradient-to-r from-blue-600 to-purple-600 after:transition-all after:duration-300 hover:after:w-full">E-Learning</a>
                <a href="#" class="px-3 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-md relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-gradient-to-r from-blue-600 to-purple-600 after:transition-all after:duration-300 hover:after:w-full">PPDB</a>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <button id="menuToggle" class="md:hidden text-gray-700 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>

            <!-- Auth Dropdown (Desktop) -->
            <div class="relative hidden md:block">
                <button id="authMenuToggle" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-2 rounded-full font-medium hover:shadow-lg transform hover:scale-105 transition-all duration-300 inline-flex items-center gap-2">
                    <i class="fas fa-user"></i>
                    <span>Masuk</span>
                    <i class="fas fa-chevron-down text-xs"></i>
                </button>
                <div id="authMenu" class="hidden absolute right-0 mt-3 w-48 bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden">
                    <a href="/login" class="flex items-center gap-2 px-8 py-3 text-gray-700 hover:bg-gray-50 hover:text-blue-600 transition-colors">
                        <i class="fas fa-right-to-bracket w-5 text-gray-500"></i>
                        <span class="font-medium">Login</span>
                    </a>
                    <div class="h-px bg-gray-100"></div>
                    <a href="/register" class="flex items-center gap-2 px-8 py-3 text-gray-700 hover:bg-gray-50 hover:text-purple-600 transition-colors">
                        <i class="fas fa-user-plus w-5 text-gray-500"></i>
                        <span class="font-medium">Register</span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobileMenu" class="md:hidden hidden absolute top-full left-0 right-0 bg-white border-t border-gray-200 shadow-lg">
            <div class="px-8 py-4 space-y-3">
                <a href="#" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 hover:text-blue-600 font-medium">Akademik</a>
                <a href="#" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 hover:text-blue-600 font-medium">Ekstrakurikuler</a>
                <a href="#" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 hover:text-blue-600 font-medium">E-Learning</a>
                <a href="#" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 hover:text-blue-600 font-medium">PPDB</a>
                <div class="pt-4 mt-1 border-t border-gray-200 grid grid-cols-2 gap-3">
                    <a href="/login" class="text-center px-8 py-2 rounded-full border border-gray-300 text-gray-700 hover:border-blue-600 hover:text-blue-600 transition">Login</a>
                    <a href="/register" class="text-center px-4 py-2 rounded-full bg-gradient-to-r from-blue-600 to-purple-600 text-white hover:shadow-md transition">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        // Mobile menu toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            const authMenuToggle = document.getElementById('authMenuToggle');
            const authMenu = document.getElementById('authMenu');
            
            if (menuToggle && mobileMenu) {
                menuToggle.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                    menuToggle.innerHTML = mobileMenu.classList.contains('hidden') ? 
                        '<i class="fas fa-bars text-xl"></i>' : 
                        '<i class="fas fa-times text-xl"></i>';
                });
            }

            // Auth dropdown toggle
            if (authMenuToggle && authMenu) {
                authMenuToggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    authMenu.classList.toggle('hidden');
                });
                // Close on outside click
                document.addEventListener('click', function(e) {
                    if (!authMenu.contains(e.target) && !authMenuToggle.contains(e.target)) {
                        authMenu.classList.add('hidden');
                    }
                });
                // Close on ESC
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') authMenu.classList.add('hidden');
                });
            }

            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const nav = document.querySelector('nav');
                if (window.scrollY > 50) {
                    nav.style.background = 'rgba(255, 255, 255, 0.98)';
                    nav.style.boxShadow = '0 5px 25px rgba(0,0,0,0.15)';
                } else {
                    nav.style.background = 'rgba(255, 255, 255, 0.95)';
                    nav.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
                }
            });

            // Close mobile menu when clicking on a link
            document.querySelectorAll('#mobileMenu a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    menuToggle.innerHTML = '<i class="fas fa-bars text-xl"></i>';
                });
            });
        });
    </script>

    <!-- Hero Section -->
    <section class="hero-bg min-h-screen flex items-center pt-32 pb-20 relative overflow-hidden">
        <!-- Background video for md+ with mobile fallback image -->
        <video autoplay muted loop playsinline preload="metadata" poster="{{ asset('images/fallback.jpg') }}" class="hidden md:block absolute inset-0 w-full h-full object-cover">
            <source src="{{ asset('videos/school-bg.webm') }}" type="video/webm">
        </video>
        <img class="md:hidden absolute inset-0 w-full h-full object-cover" src="{{ asset('images/fallback.jpg') }}" alt="Hero background">
        
        <div class="container mx-auto px-8 relative z-10">
            <div class="max-w-3xl animate-fadeInUp">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6 leading-tight">
                    Lingkungan Belajar <span class="text-primary-dark">Inovatif</span> untuk Masa Depan Gemilang
                </h1>
                <p class="text-lg text-gray-700 mb-10 opacity-90">
                    SMKN 4 Bandung menciptakan ruang belajar yang mendorong kreativitas, kolaborasi, <br>dan inovasi bagi setiap siswa dengan fasilitas modern dan pendekatan pembelajaran terkini.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="primary-btn bg-primary-dark text-white font-semibold py-4 px-8 rounded-full shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 inline-flex items-center justify-center w-fit">
                        <span>Jelajahi Sekolah</span>
                    </a>
                    <a href="#" class="border-2 border-primary-dark text-primary-dark font-semibold py-4 px-8 rounded-full hover:bg-primary-dark hover:text-white transition-all duration-300 inline-flex items-center justify-center w-fit">
                        <span>Virtual Tour</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Environment Section -->
    <section class="py-32 bg-white">
        <div class="container mx-auto px-8">
            <div class="text-center mb-20">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 relative inline-block">Lingkungan Sekolah Kami</h2>
                <p class="text-lg text-gray-700 max-w-3xl mx-auto opacity-70 mt-4">
                    Kami menciptakan ruang belajar yang mendukung perkembangan potensi setiap siswa
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                <!-- Card 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                             alt="Ruang Kelas" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-dark mb-4">Ruang Belajar Modern</h3>
                        <p class="text-gray-700 mb-6 opacity-80">
                            Kelas dilengkapi teknologi terkini dengan desain yang mendukung kolaborasi dan kreativitas siswa.
                        </p>
                        <a href="#" class="inline-flex items-center text-primary-dark font-medium hover:text-primary transition-all duration-300">
                            Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                             alt="Laboratorium" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-dark mb-4">Laboratorium Teknologi</h3>
                        <p class="text-gray-700 mb-6 opacity-80">
                            Peralatan praktik mutakhir untuk mempersiapkan siswa menghadapi tantangan industri 4.0.
                        </p>
                        <a href="#" class="inline-flex items-center text-primary-dark font-medium hover:text-primary transition-all duration-300">
                            Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                             alt="Area Kolaborasi" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-dark mb-4">Area Kolaborasi</h3>
                        <p class="text-gray-700 mb-6 opacity-80">
                            Ruang terbuka yang dirancang untuk diskusi, brainstorming, dan kerja tim antar siswa.
                        </p>
                        <a href="#" class="inline-flex items-center text-primary-dark font-medium hover:text-primary transition-all duration-300">
                            Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Highlight Section -->
    <section class="highlight-bg py-28">
        <div class="container mx-auto px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="flex-1">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8 leading-tight">
                        Lingkungan <span class="text-primary-dark">Inklusif</span> yang Mendukung Setiap Individu
                    </h2>
                    <p class="text-lg text-gray-700 mb-10 opacity-90">
                        SMKN 4 Bandung berkomitmen menciptakan lingkungan belajar yang ramah dan mendukung untuk semua siswa, tanpa terkecuali. Kami percaya setiap individu memiliki potensi unik yang perlu dikembangkan.
                    </p>
                    
                    <div class="space-y-6">
                        <!-- Feature 1 -->
                        <div class="flex items-start">
                            <div class="w-14 h-14 bg-primary rounded-xl flex items-center justify-center text-white text-xl mr-5 flex-shrink-0">
                                <i class="fas fa-universal-access"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800 mb-2">Aksesibilitas Penuh</h4>
                                <p class="text-gray-700 opacity-80">
                                    Fasilitas sekolah dirancang untuk dapat diakses oleh semua siswa termasuk penyandang disabilitas.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Feature 2 -->
                        <div class="flex items-start">
                            <div class="w-14 h-14 bg-primary rounded-xl flex items-center justify-center text-white text-xl mr-5 flex-shrink-0">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800 mb-2">Dukungan Psikologis</h4>
                                <p class="text-gray-700 opacity-80">
                                    Layanan konseling dan pendampingan untuk mendukung kesejahteraan mental siswa.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Feature 3 -->
                        <div class="flex items-start">
                            <div class="w-14 h-14 bg-primary rounded-xl flex items-center justify-center text-white text-xl mr-5 flex-shrink-0">
                                <i class="fas fa-users"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800 mb-2">Komunitas yang Hangat</h4>
                                <p class="text-gray-700 opacity-80">
                                    Lingkungan sosial yang mendukung dan bebas dari diskriminasi atau perundungan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex-1 relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl hover:scale-105 transition-transform duration-500">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                             alt="Lingkungan Inklusif" 
                             class="w-full h-auto transition-transform duration-500">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="py-28 bg-light-gray">
        <div class="container mx-auto px-8">
            <div class="text-center mb-20">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 relative inline-block">Galeri Sekolah</h2>
                <p class="text-lg text-gray-700 max-w-3xl mx-auto opacity-70 mt-4">
                    Potret kegiatan dan lingkungan SMKN 4 Bandung
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-12">
                <!-- Gallery Item 1 -->
                <div class="rounded-xl overflow-hidden h-64 relative group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                         alt="Kegiatan Belajar" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            Sesi Belajar Interaktif
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 2 -->
                <div class="rounded-xl overflow-hidden h-64 relative group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                         alt="Ekstrakurikuler" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            Kegiatan Ekstrakurikuler
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 3 -->
                <div class="rounded-xl overflow-hidden h-64 relative group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                         alt="Perpustakaan" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            Perpustakaan Digital
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 4 -->
                <div class="rounded-xl overflow-hidden h-64 relative group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                         alt="Laboratorium" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            Praktikum di Lab Komputer
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-20">
        <div class="container mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mb-16">
                <!-- About Column -->
                <div class="space-y-6">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 bg-primary rounded-lg flex items-center justify-center text-white text-xl font-bold">
                            S4
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">SMKN 4 BANDUNG</h3>
                            <p class="text-white/70 text-sm">Sekolah Inovatif & Inklusif</p>
                        </div>
                    </div>
                    <p class="text-white/80 mb-6">
                        Mewujudkan generasi muda yang kompeten, kreatif, dan berkarakter melalui pendidikan vokasional berkualitas.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-primary transition-all duration-300 hover:-translate-y-1">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-primary transition-all duration-300 hover:-translate-y-1">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-primary transition-all duration-300 hover:-translate-y-1">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-primary transition-all duration-300 hover:-translate-y-1">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links Column -->
                <div>
                    <h4 class="text-xl font-bold mb-6 pb-3 border-b-2 border-primary inline-block">Tautan Cepat</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-white/80 hover:text-primary transition-all duration-300 hover:translate-x-1 inline-block">Beranda</a></li>
                        <li><a href="#" class="text-white/80 hover:text-primary transition-all duration-300 hover:translate-x-1 inline-block">Fasilitas</a></li>
                        <li><a href="#" class="text-white/80 hover:text-primary transition-all duration-300 hover:translate-x-1 inline-block">Galeri</a></li>
                        <li><a href="#" class="text-white/80 hover:text-primary transition-all duration-300 hover:translate-x-1 inline-block">Tentang Kami</a></li>
                        <li><a href="#" class="text-white/80 hover:text-primary transition-all duration-300 hover:translate-x-1 inline-block">Virtual Tour</a></li>
                    </ul>
                </div>
                
                <!-- Contact Column -->
                <div>
                    <h4 class="text-xl font-bold mb-6 pb-3 border-b-2 border-primary inline-block">Hubungi Kami</h4>
                    <div class="space-y-5">
                        <div class="flex">
                            <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center text-primary mr-4 flex-shrink-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="text-white/80">Jl. Kliningan No.6, Buahbatu, Kota Bandung</div>
                        </div>
                        <div class="flex">
                            <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center text-primary mr-4 flex-shrink-0">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text-white/80">(022) 7301047</div>
                        </div>
                        <div class="flex">
                            <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center text-primary mr-4 flex-shrink-0">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="text-white/80">info@smkn4bandung.sch.id</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="pt-8 border-t border-white/10 text-center text-white/70 text-sm">
                <p>&copy; 2023 SMKN 4 Bandung. Semua Hak Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Header scroll effect (already implemented in navbar script)
        // Mobile menu toggle functionality (already implemented in navbar script)

        // Add hover animations to cards
        document.querySelectorAll('.environment-card, .gallery-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const target = document.querySelector(targetId);
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Animate elements when they come into view
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe sections for animation
        document.querySelectorAll('.environment-card, .feature-item, .gallery-item').forEach(item => {
            item.classList.add('opacity-0');
            observer.observe(item);
        });

        // Add delay to animations
        document.querySelectorAll('.environment-card').forEach((card, index) => {
            card.style.transitionDelay = `${index * 0.1}s`;
        });
    </script>
</body>
</html>


