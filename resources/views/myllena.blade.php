<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myllena Barroca | Design Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;400;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-dark': '#05021a',
                        'brand-card': '#0d072b',
                        'brand-purple': '#9d66ff',
                        'brand-light-purple': '#c4a2ff',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body { background-color: #05021a; color: white; overflow-x: hidden; }
        .glass-card {
            background: rgba(13, 7, 43, 0.4);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(157, 102, 255, 0.1);
        }
        .text-gradient {
            background: linear-gradient(to right, #ffffff, #9d66ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .glow {
            box-shadow: 0 0 30px rgba(157, 102, 255, 0.3);
        }
    </style>
</head>
<body class="selection:bg-brand-purple selection:text-white">

<!-- Navbar -->
<nav class="fixed w-full z-50 px-6 py-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center glass-card rounded-2xl px-6 py-3 border border-white/5">
        <div class="flex items-center gap-2">
            <!-- Monogram SVG Minimalist -->
            <svg width="32" height="32" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 80V20L50 50L80 20V80" stroke="#9d66ff" stroke-width="8" stroke-linejoin="round"/>
                <path d="M50 50C65 50 75 60 75 70C75 80 65 90 50 90H20" stroke="#9d66ff" stroke-width="8" stroke-linejoin="round"/>
            </svg>
            <span class="font-bold tracking-tighter text-lg hidden sm:block">MYLLENA BARROCA</span>
        </div>
        <div class="flex items-center gap-8">
            <div class="hidden md:flex gap-8 text-xs font-bold tracking-[0.2em] uppercase">
                <a href="#work" class="hover:text-brand-purple transition">Projetos</a>
                <a href="#about" class="hover:text-brand-purple transition">Sobre</a>
                <a href="#services" class="hover:text-brand-purple transition">Serviços</a>
            </div>
            <a href="#contact" class="bg-brand-purple text-brand-dark font-bold px-5 py-2 rounded-full text-sm hover:glow hover:scale-105 transition-all">
                ORÇAMENTO
            </a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center pt-20 px-6">
    <!-- Background Elements -->
    <div class="absolute top-1/4 -left-20 w-96 h-96 bg-brand-purple/20 rounded-full blur-[120px] animate-pulse-slow"></div>
    <div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px]"></div>

    <div class="max-w-5xl w-full text-center z-10">
        <div class="inline-block px-4 py-1 rounded-full border border-brand-purple/30 text-brand-light-purple text-[10px] tracking-[0.4em] uppercase mb-8 animate-bounce">
            Visual Designer & Branding Specialist
        </div>
        <h1 class="text-6xl md:text-9xl font-extrabold tracking-tighter leading-none mb-6">
            DESIGN <br> <span class="text-gradient">COM ALMA.</span>
        </h1>
        <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto mb-10 font-light leading-relaxed">
            Transformo marcas em ícones visuais através de design estratégico e estética minimalista de alto impacto.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <button class="w-full sm:w-auto px-10 py-4 bg-white text-brand-dark font-bold rounded-xl hover:scale-105 transition-transform">
                Ver Portfólio
            </button>
            <button class="w-full sm:w-auto px-10 py-4 border border-white/20 hover:bg-white/5 transition font-bold rounded-xl">
                Minha Metodologia
            </button>
        </div>
    </div>
</section>

<!-- Work Grid -->
<section id="work" class="py-24 px-6 max-w-7xl mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4">
        <div>
            <span class="text-brand-purple font-bold tracking-widest text-xs uppercase">Trabalhos Selecionados</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-2">PORTFÓLIO</h2>
        </div>
        <div class="text-gray-500 max-w-xs text-sm">
            Uma coleção de identidades visuais focadas em performance e reconhecimento de marca.
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Project 01 -->
        <div class="group cursor-pointer">
            <div class="relative aspect-[4/3] rounded-3xl overflow-hidden mb-6 bg-brand-card">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-dark to-transparent opacity-60"></div>
                <div class="absolute inset-0 flex items-center justify-center p-12">
                    <div class="w-full h-full border border-white/10 rounded-2xl flex items-center justify-center group-hover:border-brand-purple/50 transition-colors">
                        <span class="text-brand-purple text-5xl font-bold opacity-20 group-hover:opacity-100 transition-opacity">01</span>
                    </div>
                </div>
                <img src="https://images.unsplash.com/photo-1634942537034-2531766767d7?q=80&w=1000&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay group-hover:scale-110 transition-transform duration-700" alt="Projeto">
            </div>
            <div class="flex justify-between items-start">
                <div>
                    <h3 class="text-2xl font-bold group-hover:text-brand-purple transition">Nexus Energy</h3>
                    <p class="text-gray-500 uppercase tracking-widest text-[10px] mt-1">Branding & Motion Design</p>
                </div>
                <div class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center group-hover:bg-brand-purple group-hover:text-brand-dark transition-all">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
                </div>
            </div>
        </div>

        <!-- Project 02 -->
        <div class="group cursor-pointer md:mt-24">
            <div class="relative aspect-[4/3] rounded-3xl overflow-hidden mb-6 bg-brand-card">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-dark to-transparent opacity-60"></div>
                <div class="absolute inset-0 flex items-center justify-center p-12">
                    <div class="w-full h-full border border-white/10 rounded-2xl flex items-center justify-center group-hover:border-brand-purple/50 transition-colors">
                        <span class="text-brand-purple text-5xl font-bold opacity-20 group-hover:opacity-100 transition-opacity">02</span>
                    </div>
                </div>
                <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?q=80&w=1000&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay group-hover:scale-110 transition-transform duration-700" alt="Projeto">
            </div>
            <div class="flex justify-between items-start">
                <div>
                    <h3 class="text-2xl font-bold group-hover:text-brand-purple transition">Lumina Skincare</h3>
                    <p class="text-gray-500 uppercase tracking-widest text-[10px] mt-1">Packaging & Visual Identity</p>
                </div>
                <div class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center group-hover:bg-brand-purple group-hover:text-brand-dark transition-all">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="bg-brand-card/30 py-32 mt-20">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-3 gap-16">
        <div class="lg:col-span-1">
            <h2 class="text-5xl font-bold mb-6">O QUE EU <br><span class="text-brand-purple">ENTREGO.</span></h2>
            <p class="text-gray-400 mb-8 leading-relaxed">
                Mais do que apenas desenhos, eu entrego ferramentas de crescimento e posicionamento para empresas que querem liderar seus nichos.
            </p>
            <div class="p-8 border-l-2 border-brand-purple bg-brand-purple/5">
                <span class="text-3xl font-bold text-white italic">"O design é a embaixada silenciosa da sua marca."</span>
            </div>
        </div>

        <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-8">
            <div class="p-10 glass-card rounded-3xl hover:border-brand-purple/40 transition">
                <div class="w-12 h-12 bg-brand-purple/20 rounded-xl flex items-center justify-center mb-6">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#9d66ff" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18"/><path d="M3 9h18"/></svg>
                </div>
                <h4 class="text-xl font-bold mb-4">Branding Full</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Logotipo, tipografia, paleta de cores, manual da marca e estratégia de posicionamento.</p>
            </div>

            <div class="p-10 glass-card rounded-3xl hover:border-brand-purple/40 transition">
                <div class="w-12 h-12 bg-brand-purple/20 rounded-xl flex items-center justify-center mb-6">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#9d66ff" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                </div>
                <h4 class="text-xl font-bold mb-4">UI/UX Design</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Interfaces para web e mobile focadas na experiência do usuário e conversão.</p>
            </div>

            <div class="p-10 glass-card rounded-3xl hover:border-brand-purple/40 transition">
                <div class="w-12 h-12 bg-brand-purple/20 rounded-xl flex items-center justify-center mb-6">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#9d66ff" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
                </div>
                <h4 class="text-xl font-bold mb-4">Embalagens</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Design de produto que se destaca na prateleira física e digital.</p>
            </div>

            <div class="p-10 glass-card rounded-3xl hover:border-brand-purple/40 transition">
                <div class="w-12 h-12 bg-brand-purple/20 rounded-xl flex items-center justify-center mb-6">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#9d66ff" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <h4 class="text-xl font-bold mb-4">Social Media</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Curadoria visual para redes sociais com foco em consistência e estética.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section id="contact" class="py-32 px-6">
    <div class="max-w-4xl mx-auto glass-card rounded-[3rem] p-12 md:p-24 text-center relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-brand-purple/10 blur-[80px] -mr-32 -mt-32"></div>
        <h2 class="text-4xl md:text-6xl font-bold mb-8 tracking-tighter uppercase">Vamos criar algo <br> <span class="text-brand-purple">Inesquecível?</span></h2>
        <p class="text-gray-400 mb-12 text-lg">Atendimento limitado para projetos de alto nível. Garanta sua vaga na agenda.</p>
        <form class="flex flex-col md:flex-row gap-4 max-w-lg mx-auto">
            <input type="email" placeholder="Seu melhor e-mail" class="flex-1 bg-white/5 border border-white/10 rounded-xl px-6 py-4 focus:outline-none focus:border-brand-purple transition">
            <button class="bg-brand-purple text-brand-dark font-bold px-8 py-4 rounded-xl hover:glow transition-all">
                COMEÇAR
            </button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="py-12 px-6 border-t border-white/5 bg-brand-dark">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
        <div class="text-center md:text-left">
            <h3 class="text-xl font-black tracking-tighter mb-2 italic">MYLLENA BARROCA</h3>
            <p class="text-gray-500 text-xs tracking-widest uppercase">Design Studio © 2026</p>
        </div>
        <div class="flex gap-8 text-gray-400 text-sm">
            <a href="#" class="hover:text-brand-purple transition">Instagram</a>
            <a href="#" class="hover:text-brand-purple transition">Behance</a>
            <a href="#" class="hover:text-brand-purple transition">LinkedIn</a>
        </div>
        <p class="text-gray-600 text-[10px] uppercase tracking-tighter">
            Feito com precisão & paixão.
        </p>
    </div>
</footer>

<!-- Smooth Scroll Script -->
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
</body>
</html>
