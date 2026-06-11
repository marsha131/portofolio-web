<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marsha Yohan Widyarahma - Portofolio Multimedia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- KONFIGURASI TEMA TAILWIND -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: 'var(--color-primary)',
                        accent: 'var(--color-accent)',
                        accentLight: 'var(--color-accent-light)',
                        bgMain: 'var(--color-bg-main)',
                    }
                }
            }
        }
    </script>

    <style>
        /* DEFINISI VARIABEL WARNA TEMA */
        :root {
            --color-primary: #1e1b4b; /* indigo-950 */
            --color-accent: #f43f5e;  /* rose-500 */
            --color-accent-light: #fff1f2; /* rose-50 */
            --color-bg-main: #FDFBF7;
        }
        [data-theme="ocean"] {
            --color-primary: #0f172a; /* slate-900 */
            --color-accent: #0ea5e9;  /* sky-500 */
            --color-accent-light: #f0f9ff; /* sky-50 */
            --color-bg-main: #f8fafc;
        }
        [data-theme="nature"] {
            --color-primary: #064e3b; /* emerald-900 */
            --color-accent: #10b981;  /* emerald-500 */
            --color-accent-light: #ecfdf5; /* emerald-50 */
            --color-bg-main: #f0fdf4;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--color-bg-main);
            transition: background-color 0.4s ease;
        }
        .serif-title { font-family: 'Playfair Display', serif; }
        .glass-card { background: rgba(255, 255, 255, 0.6); backdrop-filter: blur(10px); border: 1px solid rgba(251, 146, 60, 0.1); }
        
        /* 3D AVATAR STYLES */
        .avatar-stage { perspective: 1100px; transform-style: preserve-3d; }
        .avatar-orbit {
            --rx: 0deg; --ry: 0deg; --mx: 50%; --my: 45%;
            position: relative; width: min(86vw, 430px); aspect-ratio: 3 / 4;
            display: grid; place-items: end center;
            transform: rotateX(var(--rx)) rotateY(var(--ry));
            transform-style: preserve-3d; transition: transform 180ms ease-out;
            will-change: transform; cursor: crosshair;
        }
        .avatar-orbit::before {
            content: ""; position: absolute; inset: 4% 0 0; border-radius: 2rem;
            background: radial-gradient(circle at var(--mx) var(--my), rgba(255,255,255,.84), transparent 17%),
                        radial-gradient(circle at 24% 22%, rgba(251, 113, 133, .38), transparent 34%),
                        radial-gradient(circle at 80% 74%, rgba(251, 191, 36, .42), transparent 34%),
                        linear-gradient(145deg, rgba(255,255,255,.36), rgba(255,255,255,.05));
            box-shadow: inset 0 1px 0 rgba(255,255,255,.55), 0 28px 70px rgba(15, 23, 42, .12);
            transform: translateZ(-70px) scale(.95); opacity: .85;
        }
        .avatar-orbit::after {
            content: ""; position: absolute; left: 14%; right: 10%; bottom: 2%; height: 14%;
            border-radius: 999px; background: radial-gradient(ellipse, rgba(15, 23, 42, .23), transparent 68%);
            transform: translateZ(-90px) rotateX(72deg); filter: blur(12px);
        }
        .avatar-depth { position: absolute; inset: 0; display: grid; place-items: end center; transform-style: preserve-3d; pointer-events: auto; }
        .avatar-model {
            position: absolute; inset: 0; width: 100%; height: 100%; transform: translateZ(42px);
            filter: drop-shadow(0 32px 35px rgba(15, 23, 42, .28));
            --poster-color: transparent; --progress-bar-color: var(--color-accent); --progress-mask: transparent; pointer-events: auto;
        }
        .avatar-model::part(default-progress-bar) { height: 3px; border-radius: 999px; }
        .avatar-gloss {
            position: absolute; inset: 8% 8% 5%; border-radius: 2rem;
            background: radial-gradient(circle at var(--mx) var(--my), rgba(255,255,255,.28), transparent 23%);
            mix-blend-mode: screen; transform: translateZ(70px); pointer-events: none; opacity: .7;
        }
        .avatar-float { animation: avatarFloat 5.5s ease-in-out infinite; }
        @keyframes avatarFloat { 0%, 100% { translate: 0 0; } 50% { translate: 0 -12px; } }
        @media (prefers-reduced-motion: reduce) { .avatar-float { animation: none; } .avatar-orbit { transition: none; } }
        
        .typing-indicator span {
            animation: blink 1.4s infinite both; height: 6px; width: 6px; background: var(--color-accent);
            display: inline-block; border-radius: 50%; margin: 0 1px;
        }
        .typing-indicator span:nth-child(2) { animation-delay: .2s; }
        .typing-indicator span:nth-child(3) { animation-delay: .4s; }
        @keyframes blink { 0% { opacity: .2; } 20% { opacity: 1; } 100% { opacity: .2; } }

        /* THEME SWITCHER WIDGET */
        .theme-switcher {
            position: fixed; left: 0; top: 50%; transform: translateY(-50%);
            background: white; padding: 12px 8px; border-radius: 0 16px 16px 0;
            box-shadow: 4px 0 15px rgba(0,0,0,0.05); z-index: 50;
            display: flex; flex-direction: column; gap: 10px; border: 1px solid #f1f5f9; border-left: none;
        }
        .theme-btn { width: 24px; height: 24px; border-radius: 50%; cursor: pointer; transition: transform 0.2s, box-shadow 0.2s; }
        .theme-btn:hover { transform: scale(1.2); }
        .theme-btn.active { box-shadow: 0 0 0 2px white, 0 0 0 4px var(--color-accent); }
    </style>
</head>
<body class="text-slate-800 antialiased min-h-screen flex flex-col transition-colors duration-300">

    <!-- THEME SWITCHER -->
    <div class="theme-switcher">
        <button onclick="changeTheme('default', this)" class="theme-btn active" style="background-color: #f43f5e;" title="Rose Theme"></button>
        <button onclick="changeTheme('ocean', this)" class="theme-btn" style="background-color: #0ea5e9;" title="Ocean Theme"></button>
        <button onclick="changeTheme('nature', this)" class="theme-btn" style="background-color: #10b981;" title="Nature Theme"></button>
    </div>

    <!-- NAVBAR -->
    <nav class="sticky top-0 z-40 bg-bgMain/80 backdrop-blur-md border-b border-slate-100 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#" class="text-xl font-bold tracking-tight text-primary uppercase transition-colors">MARSHA<span class="text-accent">.</span></a>
            <div class="hidden md:flex items-center space-x-10 font-medium text-sm text-slate-600">
                <a href="#home" class="hover:text-accent transition-colors">Home</a>
                <a href="#about" class="hover:text-accent transition-colors">Tentang</a>
                <a href="#portfolio" class="hover:text-accent transition-colors">Portofolio</a>
                <a href="#contact" class="hover:text-accent transition-colors">Kontak</a>
            </div>
            <a href="#contact" class="bg-primary text-white text-xs font-semibold px-6 py-3 rounded-full hover:bg-accent transition-all shadow-sm">Kirim Pesan</a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="home" class="py-12 md:py-24 max-w-6xl mx-auto px-6 w-full flex-grow flex flex-col md:flex-row items-center justify-between gap-12">
        <div class="w-full md:w-1/2 space-y-6 text-center md:text-left">
            <div class="inline-flex items-center gap-2 bg-accentLight text-accent text-xs font-bold px-4 py-2 rounded-full uppercase tracking-widest transition-colors">
                <i class="fa-solid fa-microphone-lines animate-pulse"></i> Creative Broadcaster
            </div>
            <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-primary leading-[1.1] serif-title transition-colors">
                Capturing Voice, <br>Creating <span class="text-accent italic font-normal">Impact.</span>
            </h1>
            <p class="text-slate-600 text-base md:text-lg max-w-lg leading-relaxed">
                Halo! Saya Marsha, mahasiswa Multimedia Broadcasting di PENS. Berfokus pada penyiaran radio, manajemen produksi, dan eksplorasi teknologi media digital.
            </p>
            <div class="pt-4 flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4">
                <a href="#portfolio" class="w-full sm:w-auto text-center bg-accent text-white font-bold px-8 py-4 rounded-2xl hover:opacity-90 transition-all shadow-lg shadow-accent/30">Eksplorasi Karya</a>
                <a href="#about" class="w-full sm:w-auto text-center bg-white border border-slate-200 text-slate-700 font-bold px-8 py-4 rounded-2xl hover:bg-slate-50 transition-all">Kenal Lebih Dekat</a>
            </div>
        </div>
        <div class="w-full md:w-1/2 flex justify-center relative avatar-stage" aria-label="Karakter 3D Marsha yang bergerak mengikuti kursor">
            <div class="avatar-orbit avatar-float" id="marshaAvatar" data-view="front">
                <div class="avatar-depth">
                    <model-viewer
                        class="avatar-model"
                        src="{{ asset('models/marsha-3d.glb') }}"
                        alt="Model 3D Marsha"
                        camera-controls
                        touch-action="pan-y"
                        interaction-prompt="none"
                        auto-rotate
                        auto-rotate-delay="1200"
                        rotation-per-second="24deg"
                        camera-orbit="0deg 75deg 3m"
                        min-camera-orbit="auto auto 2.4m"
                        max-camera-orbit="auto auto 4.2m"
                        shadow-intensity="0.55"
                        exposure="1"
                        ar>
                    </model-viewer>
                    <span class="avatar-gloss" aria-hidden="true"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-24 bg-white border-y border-slate-100">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-16 items-start">
                <div class="lg:w-5/12 space-y-6">
                    <h2 class="text-xs font-bold tracking-[0.2em] text-accent uppercase transition-colors">Profil Mahasiswa</h2>
                    <h3 class="text-4xl font-bold text-primary serif-title leading-tight transition-colors">Marsha Yohan Widyarahma</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Saya merupakan mahasiswa aktif Program Studi Teknologi Multimedia Broadcasting di Politeknik Elektronika Negeri Surabaya. Memiliki ketertarikan besar dalam dunia broadcasting, terutama di ranah industri penyiaran radio dan podcasting.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Aktif dalam berbagai kepanitiaan dan organisasi kampus karena saya percaya bahwa kolaborasi dan manajemen event adalah kunci utama untuk melatih *leadership*, komunikasi interpersonal, serta kemampuan memecahkan masalah secara praktis.
                    </p>
                    
                    <div class="pt-4 grid grid-cols-2 gap-4">
                        <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100">
                            <span class="block text-2xl font-bold text-primary transition-colors">5+</span>
                            <span class="text-xs text-slate-500 font-medium">Event Management</span>
                        </div>
                        <div class="p-4 rounded-2xl bg-accentLight border border-accent/20 transition-colors">
                            <span class="block text-2xl font-bold text-accent transition-colors">4+</span>
                            <span class="text-xs text-slate-500 font-medium">Digital Projects</span>
                        </div>
                    </div>
                </div>

                <div class="lg:w-7/12 space-y-10">
                    <div class="glass-card p-8 rounded-3xl">
                        <h4 class="text-lg font-bold text-primary mb-8 flex items-center gap-3 transition-colors"><i class="fa-solid fa-graduation-cap text-accent"></i> Riwayat Pendidikan</h4>
                        <div class="space-y-8 border-l-2 border-slate-100 pl-6 ml-2">
                            <div class="relative">
                                <div class="absolute -left-[33px] top-1.5 bg-accent w-4 h-4 rounded-full border-4 border-white shadow-sm transition-colors"></div>
                                <span class="text-xs font-bold text-accent bg-accentLight px-2 py-1 rounded transition-colors">2024 - Sekarang</span>
                                <h5 class="font-bold text-primary mt-2 transition-colors">Politeknik Elektronika Negeri Surabaya</h5>
                                <p class="text-sm text-slate-500">D3 Teknologi Multimedia Broadcasting</p>
                            </div>
                            <div class="relative">
                                <div class="absolute -left-[33px] top-1.5 bg-slate-300 w-4 h-4 rounded-full border-4 border-white"></div>
                                <span class="text-xs font-bold text-slate-500 bg-slate-50 px-2 py-1 rounded">2021 - 2024</span>
                                <h5 class="font-bold text-primary mt-2 transition-colors">SMA Muhammadiyah 1 Gresik</h5>
                                <p class="text-sm text-slate-500">Sosial Humaniora (SOSHUM)</p>
                            </div>
                        </div>
                    </div>

                    <!-- ORGANISASI & KEPANITIAAN DISEIMBANGKAN -->
                    <div class="grid sm:grid-cols-2 gap-6">
                        <!-- Organisasi -->
                        <div class="p-6 rounded-3xl border border-slate-100 bg-slate-50 flex flex-col">
                            <h4 class="font-bold text-primary mb-5 flex items-center gap-2 transition-colors"><i class="fa-solid fa-users text-accent"></i> Organisasi</h4>
                            <ul class="space-y-4 text-sm text-slate-600">
                                <li>
                                    <span class="text-primary font-bold block leading-tight transition-colors">EEPIS English Community (E2C)</span>
                                    <span class="text-xs">Divisi Administrasi (2024 - Sekarang)</span>
                                </li>
                                <li>
                                    <span class="text-primary font-bold block leading-tight transition-colors">HIMA MMB PENS</span>
                                    <span class="text-xs">Fungsionaris Dep. Kerumahtanggaan (2025 - Sekarang)</span>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Kepanitiaan (Kembali Detail Sesuai Data Asli) -->
                        <div class="p-6 rounded-3xl border border-slate-100 bg-slate-50 flex flex-col">
                            <h4 class="font-bold text-primary mb-5 flex items-center gap-2 transition-colors"><i class="fa-solid fa-clipboard-list text-accent"></i> Kepanitiaan</h4>
                            <ul class="space-y-4 text-sm text-slate-600">
                                <li>
                                    <span class="text-primary font-bold block leading-tight transition-colors">LKMM Pra-Dasar PENS</span>
                                    <span class="text-xs block text-slate-500 mt-0.5">Divisi Kesehatan (2026)</span>
                                    <span class="text-xs block text-slate-500">Liaison Officer / LO (2025)</span>
                                </li>
                                <li>
                                    <span class="text-primary font-bold block leading-tight transition-colors">MMB Fest PENS</span>
                                    <span class="text-xs block text-slate-500 mt-0.5">Divisi_Konsumsi (2025)</span>
                                </li>
                                <li>
                                    <span class="text-primary font-bold block leading-tight transition-colors">PKKMB PENS</span>
                                    <span class="text-xs block text-slate-500 mt-0.5">Divisi Siaga / Keamanan (2025)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO SECTION -->
    <section id="portfolio" class="py-24 max-w-6xl mx-auto px-6 w-full">
        <div class="text-center max-w-2xl mx-auto mb-20 space-y-4">
            <h2 class="text-xs font-bold tracking-[0.3em] text-accent uppercase transition-colors">Portfolio Gallery</h2>
            <h3 class="text-4xl font-bold text-primary serif-title transition-colors">Karya Pilihan & Eksperimen Media</h3>
            <p class="text-slate-500">Dari produksi live streaming hingga pengembangan frontend kloning website kuliner lokal.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- PORTFOLIO 1: LIVE RADIO -->
            <a href="https://www.youtube.com/live/QSK43xNXY3k?si=FNc3CRy0vsu9ROaz" target="_blank" rel="noopener noreferrer" class="md:col-span-2 bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all group flex flex-col lg:flex-row cursor-pointer">
                <div class="lg:w-7/12 bg-slate-100 aspect-video lg:aspect-auto h-full relative overflow-hidden flex items-center justify-center">
                    <img src="images/innerspace-fm.png" alt="Marsha Announcer Innerspace FM" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                        <div class="w-16 h-16 bg-accent/90 text-white rounded-full flex items-center justify-center shadow-lg transform group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-play text-xl ml-1"></i>
                        </div>
                    </div>
                </div>
                <div class="lg:w-5/12 p-8 lg:p-12 flex flex-col justify-center space-y-6">
                    <div class="space-y-3">
                        <span class="bg-accentLight text-accent text-[10px] font-bold px-3 py-1 rounded-lg uppercase tracking-wider transition-colors">Highlight Project - Klik Tonton</span>
                        <h4 class="text-2xl font-bold text-primary serif-title group-hover:text-accent transition-colors">Innerspace FM: Realita Mahasiswa Kampus</h4>
                        <p class="text-slate-600 text-sm leading-relaxed italic">"Halo Sobat Multimedia! Saya Marsha di sini sebagai Announcer program Innerspace FM..."</p>
                        <p class="text-slate-500 text-sm leading-relaxed">
                            Pengalaman siaran live radio streaming interaktif, mengulas topik realita kehidupan mahasiswa, serta berkolaborasi langsung mengelola penyiaran digital program MMB PENS.
                        </p>
                    </div>
                    <div class="flex items-center gap-4 text-xs font-bold text-slate-400">
                        <span class="flex items-center gap-1"><i class="fa-solid fa-microphone text-accent"></i> Live Announcer</span>
                        <span class="flex items-center gap-1"><i class="fa-solid fa-calendar"></i> 2025</span>
                    </div>
                </div>
            </a>

            <!-- PORTFOLIO 2 -->
            <div class="bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all group flex flex-col h-full">
                <div class="h-56 bg-slate-100 relative overflow-hidden flex items-center justify-center">
                    <img src="images/hotincream-thumbnail.png" alt="Video Explainer Hot In Cream Thumbnail" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-70"></div>
                    <h4 class="absolute bottom-6 left-6 text-white text-xl font-bold serif-title z-10">Video Explainer "Hot In Cream"</h4>
                </div>
                <div class="p-8 flex-grow flex flex-col justify-between space-y-6">
                    <div class="space-y-3">
                        <span class="text-[10px] font-bold text-accent uppercase tracking-widest transition-colors">Multimedia Asset</span>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Produksi video promosi digital komersial interaktif dengan fokus visualisasi animasi 2D produk pereda nyeri untuk kebutuhan tugas praktikum video.
                        </p>
                    </div>
                    <div class="flex items-center justify-between text-xs font-bold text-primary pt-4 border-t border-slate-50 transition-colors">
                        <span class="bg-slate-50 px-3 py-1 rounded-full">Praktikum Video</span>
                        <span class="text-slate-400">2025</span>
                    </div>
                </div>
            </div>

            <!-- PORTFOLIO 3 -->
            <div class="bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all group flex flex-col h-full">
                <div class="h-56 bg-slate-100 relative overflow-hidden flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=600&q=80" alt="Toko Ayam Almaz Project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-70"></div>
                    <h4 class="absolute bottom-6 left-6 text-white text-xl font-bold serif-title z-10">Web Slicing: Toko Ayam Almaz</h4>
                </div>
                <div class="p-8 flex-grow flex flex-col justify-between space-y-6">
                    <div class="space-y-3">
                        <span class="text-[10px] font-bold text-accent uppercase tracking-widest transition-colors">Web Development</span>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Tugas praktikum mereplikasi antarmuka website menu restoran lokal legendaris (Toko Ayam Almaz) semirip mungkin dengan aslinya untuk mengasah presisi UI layouting.
                        </p>
                    </div>
                    <div class="flex items-center justify-between text-xs font-bold text-primary pt-4 border-t border-slate-50 transition-colors">
                        <span class="bg-slate-50 px-3 py-1 rounded-full">Frontend Slice</span>
                        <span class="text-slate-400">2026</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER & CONTACT -->
    <footer id="contact" class="bg-primary text-white pt-24 pb-12 mt-auto rounded-t-[3rem] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-20">
            <div class="space-y-8 text-center md:text-left">
                <div class="space-y-4">
                    <h3 class="text-4xl font-bold serif-title">Let's Talk About <br><span class="text-accent italic font-normal transition-colors">Media & Events.</span></h3>
                    <p class="text-white/70 text-sm leading-relaxed max-w-sm">
                        Tertarik untuk berkolaborasi atau sekadar berdiskusi tentang broadcasting dan project multimedia? Mari terhubung!
                    </p>
                </div>
                <div class="flex justify-center md:justify-start gap-6 text-2xl">
                    <a href="https://github.com/marsha131" target="_blank" class="hover:text-accent transition-colors"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.instagram.com/marshayohan?igsh=MTI1ZWx5ZHU2b2xxNw==" target="_blank" rel="noopener noreferrer" class="hover:text-accent transition-colors"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="hover:text-accent transition-colors"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="bg-white text-slate-800 p-10 rounded-[2.5rem] shadow-2xl">
                <form id="contactForm" action="https://formspree.io/f/xoqgkyre" method="POST" class="space-y-5">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Lengkap</label>
                        <input type="text" name="name" required class="w-full bg-slate-50 border-0 rounded-2xl px-6 py-4 text-sm focus:ring-2 focus:ring-accent outline-none" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-widest">Email</label>
                        <input type="email" name="email" required class="w-full bg-slate-50 border-0 rounded-2xl px-6 py-4 text-sm focus:ring-2 focus:ring-accent outline-none" placeholder="Email@anda.com">
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-widest">Pesan</label>
                        <textarea name="message" required class="w-full bg-slate-50 border-0 rounded-2xl px-6 py-4 text-sm h-32 focus:ring-2 focus:ring-accent outline-none" placeholder="Halo Marsha, saya ingin berdiskusi mengenai..."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-accent text-white font-bold py-4 rounded-2xl hover:opacity-90 transition-all shadow-lg shadow-accent/30">Kirim Sekarang</button>
                </form>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-6 mt-20 pt-10 border-t border-white/10 text-center text-xs text-white/50">
            &copy; 2026 Marsha Yohan Widyarahma. Politeknik Elektronika Negeri Surabaya.
        </div>
    </footer>

    <!-- CONTAINER CHAT BOT AI -->
    <div class="fixed bottom-8 right-8 z-50 flex flex-col items-end">
        <div id="aiChat" class="hidden w-80 bg-white rounded-3xl shadow-2xl border border-slate-100 overflow-hidden mb-4 transition-all duration-300 transform scale-95 origin-bottom-right">
            <div class="bg-primary p-5 text-white flex items-center justify-between transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></div>
                    <span class="text-xs font-bold uppercase tracking-widest">Marsha's AI Agent</span>
                </div>
                <button onclick="toggleAI()" class="hover:text-accent transition-colors"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div id="aiDisplay" class="h-64 p-5 overflow-y-auto text-xs space-y-4 bg-slate-50/50">
                <div class="bg-accentLight text-primary p-3 rounded-2xl rounded-tl-none border border-accent/10 shadow-sm leading-relaxed transition-colors">
                    Halo! Saya AI assistant Marsha. Ingin tahu lebih dalam tentang pengalaman broadcasting Marsha di PENS atau proyek web Toko Ayam Almaz-nya?
                </div>
            </div>
            <div class="p-3 bg-white border-t border-slate-100 flex gap-2">
                <input type="text" id="aiText" placeholder="Ketik pesan..." class="flex-grow bg-slate-100 rounded-xl px-4 py-2 text-xs focus:outline-none" onkeypress="if(event.key==='Enter') sayToAI()">
                <button onclick="sayToAI()" class="bg-primary text-white p-2 px-3 rounded-xl hover:bg-accent transition-colors"><i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </div>
        <button onclick="toggleAI()" class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center shadow-2xl hover:bg-accent hover:rotate-12 transition-all group active:scale-90">
            <i class="fa-solid fa-robot text-2xl"></i>
        </button>
    </div>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        // LOGIKA THEME SWITCHER
        function changeTheme(themeName, btnElement) {
            if (themeName === 'default') {
                document.body.removeAttribute('data-theme');
            } else {
                document.body.setAttribute('data-theme', themeName);
            }
            document.querySelectorAll('.theme-btn').forEach(btn => btn.classList.remove('active'));
            btnElement.classList.add('active');
        }

        // LOGIKA AVATAR 3D
        const marshaAvatar = document.getElementById('marshaAvatar');
        if (marshaAvatar) {
            const resetAvatar = () => {
                marshaAvatar.style.setProperty('--rx', '0deg');
                marshaAvatar.style.setProperty('--ry', '0deg');
                marshaAvatar.style.setProperty('--mx', '50%');
                marshaAvatar.style.setProperty('--my', '45%');
                marshaAvatar.classList.add('avatar-float');
            };

            marshaAvatar.addEventListener('pointermove', (event) => {
                const rect = marshaAvatar.getBoundingClientRect();
                const x = (event.clientX - rect.left) / rect.width;
                const y = (event.clientY - rect.top) / rect.height;
                const clampedX = Math.min(Math.max(x, 0), 1);
                const clampedY = Math.min(Math.max(y, 0), 1);
                const rotateY = (clampedX - 0.5) * 42;
                const rotateX = (0.5 - clampedY) * 22;

                marshaAvatar.classList.remove('avatar-float');
                marshaAvatar.style.setProperty('--rx', `${rotateX.toFixed(2)}deg`);
                marshaAvatar.style.setProperty('--ry', `${rotateY.toFixed(2)}deg`);
                marshaAvatar.style.setProperty('--mx', `${(clampedX * 100).toFixed(1)}%`);
                marshaAvatar.style.setProperty('--my', `${(clampedY * 100).toFixed(1)}%`);
            });

            marshaAvatar.addEventListener('pointercancel', resetAvatar);
            marshaAvatar.addEventListener('pointerleave', resetAvatar);
        }

        // --- INTERAKTIF AI CHATBOT (LOGIKA ASLI LENGKAP MARSHA) ---
        function toggleAI() { document.getElementById('aiChat').classList.toggle('hidden'); }
        
        function sayToAI() {
            const input = document.getElementById('aiText');
            const display = document.getElementById('aiDisplay');
            if(!input.value.trim()) return;

            const uMsg = document.createElement('div');
            uMsg.className = "bg-white border border-slate-200 p-3 rounded-2xl rounded-tr-none text-slate-700 max-w-[85%] ml-auto text-right shadow-sm";
            uMsg.innerText = input.value;
            display.appendChild(uMsg);

            const q = input.value.toLowerCase().trim();
            input.value = '';
            display.scrollTop = display.scrollHeight;

            const typingDiv = document.createElement('div');
            typingDiv.className = "bg-accentLight text-primary p-3 rounded-2xl rounded-tl-none border border-accent/10 shadow-sm flex items-center gap-1 w-16 typing-indicator";
            typingDiv.innerHTML = "<span></span><span></span><span></span>";
            display.appendChild(typingDiv);
            display.scrollTop = display.scrollHeight;

            setTimeout(() => {
                display.removeChild(typingDiv);
                
                const botMsg = document.createElement('div');
                botMsg.className = "bg-accentLight text-primary p-3 rounded-2xl rounded-tl-none border border-accent/10 shadow-sm leading-relaxed transition-colors";
                
                if (q.includes('nama') || q.includes('siapa') || q.includes('panggilan')) {
                    botMsg.innerText = "Nama lengkap saya Marsha Yohan Widyarahma, biasa dipanggil Marsha! Saya mahasiswa Multimedia Broadcasting PENS.";
                } else if (q.includes('pens') || q.includes('kuliah') || q.includes('jurusan')) {
                    botMsg.innerText = "Saya kuliah di Politeknik Elektronika Negeri Surabaya (PENS), program studi D3 Teknologi Multimedia Broadcasting angkatan 2024.";
                } else if (q.includes('porto') || q.includes('karya') || q.includes('projek')) {
                    if (q.includes('almaz')) {
                        botMsg.innerText = "Untuk projek Web Slicing, saya membuat replika antarmuka Frontend untuk Toko Ayam Almaz.";
                    } else if (q.includes('cream')) {
                        botMsg.innerText = "Saya membuat Video Explainer untuk produk 'Hot In Cream' dengan konsep visual 2D.";
                    } else if (q.includes('radio') || q.includes('announcer')) {
                        botMsg.innerText = "Saya menjadi Live Announcer di Innerspace FM PENS untuk membawakan program Realita Mahasiswa Kampus.";
                    } else {
                        botMsg.innerText = "Beberapa projek andalan saya meliputi siaran Live Radio di Innerspace FM PENS, Video Explainer 'Hot In Cream', dan slicing frontend website Toko Ayam Almaz.";
                    }
                } 
                else if (q.includes('organisasi') || q.includes('hima') || q.includes('e2c') || q.includes('kegiatan') || q.includes('panitia')) {
                    botMsg.innerText = "Di kampus, saya aktif sebagai Fungsionaris HIMA MMB PENS di Departemen Kerumahtanggaan, serta menjadi staf Administrasi di EEPIS English Community (E2C).";
                } 
                else if (q.includes('kontak') || q.includes('email') || q.includes('hubungi') || q.includes('instagram') || q.includes('ig')) {
                    botMsg.innerText = "Kamu bisa hubungi saya lewat formulir di bawah, email langsung ke marshayyohan@gmail.com, atau via IG di @marshayohan.";
                } 
                else if (q.includes('asal') || q.includes('tinggal') || q.includes('rumah') || q.includes('gresik')) {
                    botMsg.innerText = "Saya berasal dari Gresik (alumnus SMA Muhammadiyah 1 Gresik) dan saat ini menetap di Surabaya untuk kuliah di PENS.";
                }
                else if (q.includes('halo') || q.includes('hai') || q.includes('p ') || q === 'p') {
                    botMsg.innerText = "Halo! Ada yang bisa saya bantu? Silakan tanya seputar biodata, proyek portofolio, atau pengalaman organisasi saya.";
                } 
                else {
                    botMsg.innerText = "Maaf, saya belum paham detail itu. Coba tanyakan: 'Siapa nama lengkap Marsha?', 'Proyek Innerspace FM', atau 'Kuliah di mana?'.";
                }
                
                display.appendChild(botMsg);
                display.scrollTop = display.scrollHeight;
            }, 800);
        }
    </script>
</body>
</html>