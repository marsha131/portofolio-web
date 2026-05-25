<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marsha Yohan Widyarahma - Portofolio Multimedia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FDFBF7;
        }
        .serif-title { font-family: 'Playfair Display', serif; }
        .glass-card { background: rgba(255, 255, 255, 0.6); backdrop-filter: blur(10px); border: 1px solid rgba(251, 146, 60, 0.1); }
    </style>
</head>
<body class="text-slate-800 antialiased min-h-screen flex flex-col">

    <nav class="sticky top-0 z-40 bg-[#FDFBF7]/80 backdrop-blur-md border-b border-orange-100">
        <div class="max-w-6xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#" class="text-xl font-bold tracking-tight text-indigo-950 uppercase">MARSHA<span class="text-rose-500">.</span></a>
            <div class="hidden md:flex items-center space-x-10 font-medium text-sm text-slate-600">
                <a href="#home" class="hover:text-rose-500 transition-colors">Home</a>
                <a href="#about" class="hover:text-rose-500 transition-colors">Tentang</a>
                <a href="#portfolio" class="hover:text-rose-500 transition-colors">Portofolio</a>
                <a href="#contact" class="hover:text-rose-500 transition-colors">Kontak</a>
            </div>
            <a href="#contact" class="bg-indigo-950 text-white text-xs font-semibold px-6 py-3 rounded-full hover:bg-rose-500 transition-all shadow-sm">Kirim Pesan</a>
        </div>
    </nav>

    <section id="home" class="py-12 md:py-24 max-w-6xl mx-auto px-6 w-full flex-grow flex flex-col md:flex-row items-center justify-between gap-12">
        <div class="w-full md:w-1/2 space-y-6 text-center md:text-left">
            <div class="inline-flex items-center gap-2 bg-rose-50 text-rose-600 text-xs font-bold px-4 py-2 rounded-full uppercase tracking-widest">
                <i class="fa-solid fa-microphone-lines animate-pulse"></i> Creative Broadcaster
            </div>
            <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-indigo-950 leading-[1.1] serif-title">
                Capturing Voice, <br>Creating <span class="text-rose-500 italic font-normal">Impact.</span>
            </h1>
            <p class="text-slate-600 text-base md:text-lg max-w-lg leading-relaxed">
                Halo! Saya Marsha, mahasiswa Multimedia Broadcasting di PENS. Berfokus pada penyiaran radio, manajemen produksi, dan eksplorasi teknologi media digital.
            </p>
            <div class="pt-4 flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4">
                <a href="#portfolio" class="w-full sm:w-auto text-center bg-rose-500 text-white font-bold px-8 py-4 rounded-2xl hover:bg-rose-600 transition-all shadow-lg shadow-rose-200">Eksplorasi Karya</a>
                <a href="#about" class="w-full sm:w-auto text-center bg-white border border-slate-200 text-slate-700 font-bold px-8 py-4 rounded-2xl hover:bg-slate-50 transition-all">Kenal Lebih Dekat</a>
            </div>
        </div>
        <div class="w-full md:w-1/2 flex justify-center relative">
            <div class="absolute inset-0 bg-gradient-to-tr from-rose-200/50 to-amber-200/50 rounded-full filter blur-3xl opacity-60 w-72 h-72 m-auto -z-10"></div>
            <img src="{{ asset('images/marsha-3d.png') }}" alt="Marsha 3D Character" class="w-72 md:w-96 drop-shadow-2xl object-contain hover:rotate-2 transition-transform duration-500">
        </div>
    </section>

    <section id="about" class="py-24 bg-white border-y border-orange-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-16 items-start">
                <div class="lg:w-5/12 space-y-6">
                    <h2 class="text-xs font-bold tracking-[0.2em] text-rose-500 uppercase">Profil Mahasiswa</h2>
                    <h3 class="text-4xl font-bold text-indigo-950 serif-title leading-tight">Marsha Yohan Widyarahma</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Saya merupakan mahasiswa aktif Program Studi Teknologi Multimedia Broadcasting di Politeknik Elektronika Negeri Surabaya. Memiliki ketertarikan besar dalam dunia broadcasting, terutama di ranah industri penyiaran radio dan podcasting.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Aktif dalam berbagai kepanitiaan dan organisasi kampus karena saya percaya bahwa kolaborasi dan manajemen event adalah kunci utama untuk melatih *leadership*, komunikasi interpersonal, serta kemampuan memecahkan masalah secara praktis.
                    </p>
                    
                    <div class="pt-4 grid grid-cols-2 gap-4">
                        <div class="p-4 rounded-2xl bg-indigo-50/50 border border-indigo-100">
                            <span class="block text-2xl font-bold text-indigo-950">5+</span>
                            <span class="text-xs text-slate-500 font-medium">Event Management</span>
                        </div>
                        <div class="p-4 rounded-2xl bg-rose-50/50 border border-rose-100">
                            <span class="block text-2xl font-bold text-rose-500">4+</span>
                            <span class="text-xs text-slate-500 font-medium">Digital Projects</span>
                        </div>
                    </div>
                </div>

                <div class="lg:w-7/12 space-y-10">
                    <div class="glass-card p-8 rounded-3xl">
                        <h4 class="text-lg font-bold text-indigo-950 mb-8 flex items-center gap-3"><i class="fa-solid fa-graduation-cap text-rose-500"></i> Riwayat Pendidikan</h4>
                        <div class="space-y-8 border-l-2 border-orange-200 pl-6 ml-2">
                            <div class="relative">
                                <div class="absolute -left-[33px] top-1.5 bg-rose-500 w-4 h-4 rounded-full border-4 border-white shadow-sm"></div>
                                <span class="text-xs font-bold text-rose-500 bg-rose-50 px-2 py-1 rounded">2024 - Sekarang</span>
                                <h5 class="font-bold text-indigo-950 mt-2">Politeknik Elektronika Negeri Surabaya</h5>
                                <p class="text-sm text-slate-500">D3 Teknologi Multimedia Broadcasting</p>
                            </div>
                            <div class="relative">
                                <div class="absolute -left-[33px] top-1.5 bg-slate-300 w-4 h-4 rounded-full border-4 border-white"></div>
                                <span class="text-xs font-bold text-slate-500 bg-slate-50 px-2 py-1 rounded">2021 - 2024</span>
                                <h5 class="font-bold text-indigo-950 mt-2">SMA Muhammadiyah 1 Gresik</h5>
                                <p class="text-sm text-slate-500">MIPA (Matematika dan Ilmu Pengetahuan Alam)</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="p-6 rounded-3xl border border-slate-100 bg-slate-50/50">
                            <h4 class="font-bold text-indigo-950 mb-5 flex items-center gap-2"><i class="fa-solid fa-users text-indigo-600"></i> Organisasi</h4>
                            <ul class="space-y-4 text-sm text-slate-600">
                                <li>
                                    <span class="text-indigo-950 font-bold block leading-tight">EEPIS English Community (E2C)</span>
                                    <span class="text-xs">Divisi Administrasi (2024 - Sekrg)</span>
                                </li>
                                <li>
                                    <span class="text-indigo-950 font-bold block leading-tight">Fungsionaris HIMA MMB PENS</span>
                                    <span class="text-xs">Dep. Kerumahtanggaan (2025 - Sekrg)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="p-6 rounded-3xl border border-slate-100 bg-slate-50/50 text-sm">
                            <h4 class="font-bold text-indigo-950 mb-5 flex items-center gap-2"><i class="fa-solid fa-clipboard-list text-indigo-600"></i> Kepanitiaan</h4>
                            <ul class="space-y-3 text-slate-600 text-xs">
                                <li class="flex gap-2"> <i class="fa-solid fa-check text-emerald-500"></i> LKMM Pra-Dasar 2026 (Kesehatan)</li>
                                <li class="flex gap-2"> <i class="fa-solid fa-check text-emerald-500"></i> MMB Fest 2025 (Konsumsi)</li>
                                <li class="flex gap-2"> <i class="fa-solid fa-check text-emerald-500"></i> PKKMB PENS 2025 (Siaga)</li>
                                <li class="flex gap-2"> <i class="fa-solid fa-check text-emerald-500"></i> LKMM Pra-Dasar 2025 (LO)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="py-24 max-w-6xl mx-auto px-6 w-full">
        <div class="text-center max-w-2xl mx-auto mb-20 space-y-4">
            <h2 class="text-xs font-bold tracking-[0.3em] text-rose-500 uppercase">Portfolio Gallery</h2>
            <h3 class="text-4xl font-bold text-indigo-950 serif-title">Karya Pilihan & Eksperimen Media</h3>
            <p class="text-slate-500">Dari produksi live streaming hingga pengembangan frontend kloning website kuliner lokal.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="md:col-span-2 bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all group flex flex-col lg:flex-row">
                <div class="lg:w-7/12 bg-black aspect-video lg:aspect-auto h-full">
                    <iframe class="w-full h-full min-h-[300px]" src="https://www.youtube.com/embed/QSK43xNXY3k" title="Live Radio Announcer Studio TV 1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="lg:w-5/12 p-8 lg:p-12 flex flex-col justify-center space-y-6">
                    <div class="space-y-3">
                        <span class="bg-rose-50 text-rose-600 text-[10px] font-bold px-3 py-1 rounded-lg uppercase tracking-wider">Highlight Project</span>
                        <h4 class="text-2xl font-bold text-indigo-950 serif-title">Studio TV 1: Live Radio Streaming</h4>
                        <p class="text-slate-600 text-sm leading-relaxed italic">"Halo Sobat Multimedia! Saya Marsha di sini sebagai Announcer program Studio TV 1..."</p>
                        <p class="text-slate-500 text-sm leading-relaxed">
                            Pengalaman siaran radio secara live melalui YouTube, mengelola alur komunikasi dengan pendengar, serta menjalankan rundown program penyiaran yang dinamis.
                        </p>
                    </div>
                    <div class="flex items-center gap-4 text-xs font-bold text-slate-400">
                        <span class="flex items-center gap-1"><i class="fa-solid fa-microphone"></i> Announcer</span>
                        <span class="flex items-center gap-1"><i class="fa-solid fa-calendar"></i> 2025</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all group flex flex-col h-full">
                <div class="h-56 bg-gradient-to-br from-rose-400 to-rose-600 flex items-center justify-center p-8 relative overflow-hidden">
                    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
                    <i class="fa-solid fa-video text-6xl text-white/20 absolute -right-4 -bottom-4 group-hover:scale-125 transition-transform duration-500"></i>
                    <h4 class="text-white text-xl font-bold text-center relative z-10 serif-title">Video Explainer "Hot In Cream"</h4>
                </div>
                <div class="p-8 flex-grow flex flex-col justify-between space-y-6">
                    <div class="space-y-3">
                        <span class="text-[10px] font-bold text-rose-500 uppercase tracking-widest">Multimedia Asset</span>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Pengembangan video promosi digital interaktif dengan fokus pada visualisasi produk dan pesan komersial yang persuasif untuk kebutuhan tugas praktikum video.
                        </p>
                    </div>
                    <div class="flex items-center justify-between text-xs font-bold text-indigo-950 pt-4 border-t border-slate-50">
                        <span class="bg-indigo-50 px-3 py-1 rounded-full">Praktikum Video</span>
                        <span class="text-slate-400">2025</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all group flex flex-col h-full">
                <div class="h-56 bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center p-8 relative overflow-hidden">
                    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
                    <i class="fa-solid fa-utensils text-6xl text-white/20 absolute -right-4 -bottom-4 group-hover:scale-125 transition-transform duration-500"></i>
                    <h4 class="text-white text-xl font-bold text-center relative z-10 serif-title">Web Slicing: Toko Ayam Almaz</h4>
                </div>
                <div class="p-8 flex-grow flex flex-col justify-between space-y-6">
                    <div class="space-y-3">
                        <span class="text-[10px] font-bold text-amber-600 uppercase tracking-widest">Web Development</span>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Tugas praktikum mereplikasi antarmuka website menu restoran lokal legendaris (Toko Ayam Almaz) semirip mungkin dengan aslinya untuk mengasah presisi UI layouting dan keahlian *frontend slicing*.
                        </p>
                    </div>
                    <div class="flex items-center justify-between text-xs font-bold text-indigo-950 pt-4 border-t border-slate-50">
                        <span class="bg-indigo-50 px-3 py-1 rounded-full">Frontend Slice</span>
                        <span class="text-slate-400">2026</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="bg-indigo-950 text-white pt-24 pb-12 mt-auto rounded-t-[3rem]">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-20">
            <div class="space-y-8 text-center md:text-left">
                <div class="space-y-4">
                    <h3 class="text-4xl font-bold serif-title">Let's Talk About <br><span class="text-rose-500 italic font-normal">Media & Events.</span></h3>
                    <p class="text-indigo-200/70 text-sm leading-relaxed max-w-sm">
                        Tertarik untuk berkolaborasi atau sekadar berdiskusi tentang broadcasting dan project multimedia? Mari terhubung!
                    </p>
                </div>
                <div class="flex justify-center md:justify-start gap-6 text-2xl">
                    <a href="https://github.com/marsha131" target="_blank" class="hover:text-rose-500 transition-colors"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="hover:text-rose-500 transition-colors"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="hover:text-rose-500 transition-colors"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="bg-white text-slate-800 p-10 rounded-[2.5rem] shadow-2xl shadow-indigo-950/50">
                <form action="#" onsubmit="event.preventDefault();" class="space-y-5">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Lengkap</label>
                        <input type="text" class="w-full bg-slate-50 border-0 rounded-2xl px-6 py-4 text-sm focus:ring-2 focus:ring-rose-500 outline-none" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-widest">Email</label>
                        <input type="email" class="w-full bg-slate-50 border-0 rounded-2xl px-6 py-4 text-sm focus:ring-2 focus:ring-rose-500 outline-none" placeholder="Email@anda.com">
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-widest">Pesan</label>
                        <textarea class="w-full bg-slate-50 border-0 rounded-2xl px-6 py-4 text-sm h-32 focus:ring-2 focus:ring-rose-500 outline-none" placeholder="Halo Marsha, saya ingin berdiskusi mengenai..."></textarea>
                    </div>
                    <button class="w-full bg-rose-500 text-white font-bold py-4 rounded-2xl hover:bg-rose-600 transition-all shadow-lg shadow-rose-200">Kirim Sekarang</button>
                </form>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-6 mt-20 pt-10 border-t border-indigo-900 text-center text-xs text-indigo-300/50">
            &copy; 2026 Marsha Yohan Widyarahma. Politeknik Elektronika Negeri Surabaya.
        </div>
    </footer>

    <div class="fixed bottom-8 right-8 z-50 flex flex-col items-end">
        <div id="aiChat" class="hidden w-80 bg-white rounded-3xl shadow-2xl border border-slate-100 overflow-hidden mb-4 transition-all duration-300 transform scale-95 origin-bottom-right">
            <div class="bg-indigo-950 p-5 text-white flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></div>
                    <span class="text-xs font-bold uppercase tracking-widest">Marsha's AI Agent</span>
                </div>
                <button onclick="toggleAI()" class="hover:text-rose-500 transition-colors"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div id="aiDisplay" class="h-64 p-5 overflow-y-auto text-xs space-y-4 bg-slate-50/50">
                <div class="bg-indigo-50 text-indigo-900 p-3 rounded-2xl rounded-tl-none border border-indigo-100 shadow-sm leading-relaxed">
                    Halo! Saya AI assistant Marsha. Ingin tahu lebih dalam tentang pengalaman broadcasting Marsha di PENS atau proyek web Toko Ayam Almaz-nya?
                </div>
            </div>
            <div class="p-3 bg-white border-t border-slate-100 flex gap-2">
                <input type="text" id="aiText" placeholder="Tanya tentang PENS, Porto, atau Organisasi..." class="flex-grow bg-slate-100 rounded-xl px-4 py-2 text-xs focus:outline-none" onkeypress="if(event.key==='Enter') sayToAI()">
                <button onclick="sayToAI()" class="bg-indigo-950 text-white p-2 px-3 rounded-xl hover:bg-rose-500 transition-colors"><i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </div>
        <button onclick="toggleAI()" class="w-16 h-16 bg-indigo-950 text-white rounded-full flex items-center justify-center shadow-2xl hover:bg-rose-500 hover:rotate-12 transition-all group active:scale-90">
            <i class="fa-solid fa-robot text-2xl"></i>
        </button>
    </div>

    <script>
        function toggleAI() { document.getElementById('aiChat').classList.toggle('hidden'); }
        function sayToAI() {
            const input = document.getElementById('aiText');
            const display = document.getElementById('aiDisplay');
            if(!input.value.trim()) return;

            const uMsg = document.createElement('div');
            uMsg.className = "bg-white border border-slate-200 p-3 rounded-2xl rounded-tr-none text-slate-700 max-w-[85%] ml-auto text-right shadow-sm";
            uMsg.innerText = input.value;
            display.appendChild(uMsg);

            const q = input.value.toLowerCase();
            input.value = '';
            display.scrollTop = display.scrollHeight;

            setTimeout(() => {
                const botMsg = document.createElement('div');
                botMsg.className = "bg-indigo-50 text-indigo-900 p-3 rounded-2xl rounded-tl-none border border-indigo-100 shadow-sm leading-relaxed";
                
                if(q.includes('pens') || q.includes('kuliah') || q.includes('studi')) {
                    botMsg.innerText = "Marsha kuliah di PENS jurusan Teknologi Multimedia Broadcasting angkatan 2024. Saat ini sedang mendalami dunia media.";
                } else if(q.includes('porto') || q.includes('karya') || q.includes('almaz') || q.includes('ayam')) {
                    botMsg.innerText = "Karya unik Marsha adalah kloning web Toko Ayam Almaz (Kuliner) dan menjadi Announcer siaran di Studio TV 1 PENS.";
                } else if(q.includes('hima') || q.includes('e2c') || q.includes('organisasi')) {
                    botMsg.innerText = "Marsha aktif di Fungsionaris HIMA MMB PENS bagian Kerumahtanggaan dan Administrasi di EEPIS English Community (E2C).";
                } else {
                    botMsg.innerText = "Keahlian utama Marsha meliputi Radio Broadcasting, Event Management, dan Slicing Frontend Website. Ada yang mau ditanyakan lagi?";
                }
                display.appendChild(botMsg);
                display.scrollTop = display.scrollHeight;
            }, 600);
        }
    </script>
</body>
</html>