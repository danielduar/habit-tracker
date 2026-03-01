<!DOCTYPE html>
<html lang="pt-PT" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Landim — Arquitetura de Software</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js (Para interatividade: Menu Mobile e Scroll) -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .animate-spin-slow {
            animation: spin-slow 15s linear infinite;
        }
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body
    x-data="{ scrolled: false, mobileMenu: false }"
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    class="bg-[#050508] text-slate-200 font-sans selection:bg-blue-600 selection:text-white"
>

<!-- NAVEGAÇÃO -->
<nav
    :class="scrolled ? 'bg-black/90 border-white/5 backdrop-blur-md py-3 shadow-2xl' : 'bg-transparent border-transparent py-8'"
    class="fixed w-full z-50 transition-all duration-500 border-b"
>
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center gap-4 group cursor-pointer" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
            <div class="relative flex items-center justify-center shrink-0 w-10 h-10 bg-white rounded-full shadow-lg transition-transform hover:scale-105 duration-300">
                <svg viewBox="0 0 100 100" class="w-3/5 h-3/5 fill-[#000046]">
                    <path d="M15 25 L45 25 L45 35 L30 35 L30 65 L45 65 L45 75 L15 75 Z" />
                    <path d="M15 25 L25 15 L45 15 L45 25 Z" opacity="0.8" />
                    <path d="M50 25 L60 25 L60 65 L85 65 L85 75 L50 75 Z" />
                </svg>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-black tracking-tighter leading-none text-white">DANIEL</span>
                <span class="text-[10px] font-bold tracking-[0.4em] leading-none text-blue-500 uppercase">LANDIM</span>
            </div>
        </div>

        <!-- Links Desktop -->
        <div class="hidden lg:flex items-center gap-10">
            <a href="#servicos" class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 hover:text-blue-500 transition-colors">Serviços</a>
            <a href="#especialidades" class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 hover:text-blue-500 transition-colors">Especialidades</a>
            <a href="#blog" class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 hover:text-blue-500 transition-colors">Blog</a>
            <a href="#contacto" class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 hover:text-blue-500 transition-colors">Contacto</a>

            <a href="#contacto" class="px-8 py-3 rounded-full text-[10px] font-black uppercase tracking-widest bg-white text-black hover:bg-blue-600 hover:text-white transition-all duration-300 shadow-xl">
                Iniciar Consultoria
            </a>
        </div>

        <!-- Gatilho Mobile -->
        <button class="lg:hidden p-2 text-white" @click="mobileMenu = !mobileMenu">
            <i x-show="!mobileMenu" data-lucide="menu" class="w-7 h-7"></i>
            <i x-show="mobileMenu" data-lucide="x" class="w-7 h-7" x-cloak></i>
        </button>
    </div>

    <!-- Menu Mobile Overlay -->
    <div
        x-show="mobileMenu"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        class="lg:hidden absolute top-full left-0 w-full bg-black border-b border-white/5 p-8"
        x-cloak
    >
        <div class="flex flex-col gap-8 text-center">
            <a href="#servicos" @click="mobileMenu = false" class="text-xs font-black uppercase tracking-widest text-white">Serviços</a>
            <a href="#especialidades" @click="mobileMenu = false" class="text-xs font-black uppercase tracking-widest text-white">Especialidades</a>
            <a href="#blog" @click="mobileMenu = false" class="text-xs font-black uppercase tracking-widest text-white">Blog</a>
            <a href="#contacto" @click="mobileMenu = false" class="text-xs font-black uppercase tracking-widest text-white">Contacto</a>
        </div>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="relative min-h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0 opacity-20 pointer-events-none">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, #1e3a8a 1px, transparent 0); background-size: 48px 48px;"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-900/20 rounded-full blur-[120px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 w-full grid lg:grid-cols-2 gap-16 items-center pt-24">
        <div class="relative z-10 fade-in-up">
            <div class="inline-flex items-center gap-3 font-bold text-[10px] uppercase tracking-[0.5em] mb-8 text-blue-500">
                <span class="w-8 h-[1px] bg-current"></span> Senior Software Architect
            </div>
            <h1 class="text-6xl md:text-[6.8rem] font-black leading-[0.85] tracking-tighter mb-10 text-white">
                Arquitetura <br />
                <span class="text-blue-600">Digital</span> <br />
                Premium.
            </h1>
            <p class="text-xl leading-relaxed mb-12 max-w-lg text-slate-400 font-medium">
                Especializado na criação de ecossistemas robustos para o mercado corporativo, focando em segurança crítica e escalabilidade absoluta.
            </p>
            <div class="flex flex-col sm:flex-row gap-6">
                <a href="#blog" class="group flex items-center justify-center gap-4 px-12 py-6 rounded-sm font-black uppercase tracking-widest text-[11px] bg-blue-600 text-white hover:bg-blue-700 transition-all shadow-2xl shadow-blue-900/40">
                    Explorar Blog <i data-lucide="arrow-up-right" class="w-4 h-4 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                </a>
                <div class="flex items-center gap-8 px-4">
                    <a href="#" class="text-slate-500 hover:text-white transition-colors"><i data-lucide="linkedin" class="w-6 h-6"></i></a>
                    <a href="#" class="text-slate-500 hover:text-white transition-colors"><i data-lucide="github" class="w-6 h-6"></i></a>
                </div>
            </div>
        </div>

        <div class="hidden lg:flex justify-end relative">
            <div class="relative w-full max-w-md aspect-square flex items-center justify-center">
                <div class="absolute inset-0 rounded-full border border-white/5 animate-spin-slow"></div>
                <div class="absolute inset-8 rounded-full border-2 border-dashed border-blue-900/30"></div>

                <div class="relative flex flex-col items-center gap-6">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-2xl shadow-blue-500/20">
                        <svg viewBox="0 0 100 100" class="w-3/5 h-3/5 fill-[#000046]">
                            <path d="M15 25 L45 25 L45 35 L30 35 L30 65 L45 65 L45 75 L15 75 Z" />
                            <path d="M15 25 L25 15 L45 15 L45 25 Z" opacity="0.8" />
                            <path d="M50 25 L60 25 L60 65 L85 65 L85 75 L50 75 Z" />
                        </svg>
                    </div>
                    <div class="text-center">
                        <span class="block text-3xl font-black tracking-tighter text-white">D. LANDIM</span>
                        <span class="block text-[8px] font-bold tracking-[0.6em] text-blue-500 uppercase mt-2">Zero Trust Engineering</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- INDICADORES -->
<section id="especialidades" class="py-24 bg-black border-y border-white/5">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-12">
            @php
                $stats = [
                    ['label' => 'Performance', 'val' => '99.99%', 'desc' => 'Disponibilidade em escala global.'],
                    ['label' => 'Segurança', 'val' => 'AES-256', 'desc' => 'Criptografia de ponta a ponta.'],
                    ['label' => 'Experiência', 'val' => '+07 Anos', 'desc' => 'No mercado de software de alto nível.'],
                    ['label' => 'Metodologia', 'val' => 'Clean Code', 'desc' => 'Manutenibilidade e rigor técnico.']
                ];
            @endphp
            @foreach($stats as $stat)
                <div class="group border-l border-white/10 pl-8">
                    <div class="text-4xl font-black mb-2 tracking-tighter text-white group-hover:text-blue-500 transition-colors">{{ $stat['val'] }}</div>
                    <div class="text-[10px] font-black uppercase tracking-widest text-blue-900 mb-4">{{ $stat['label'] }}</div>
                    <p class="text-xs text-slate-500 leading-relaxed max-w-[180px]">{{ $stat['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- SERVIÇOS -->
<section id="servicos" class="py-32">
    <div class="max-w-7xl mx-auto px-6">
        <div class="max-w-3xl mb-24">
            <h2 class="text-5xl font-black tracking-tighter mb-8 text-white">Serviços de <br /> <span class="text-blue-600">Alta Engenharia.</span></h2>
            <p class="text-lg text-slate-500">Desenvolvimento focado no mercado Enterprise, utilizando arquiteturas distribuídas e as tecnologias mais estáveis do mercado.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @php
                $servicos = [
                    ['t' => 'Sistemas Core SaaS', 'icon' => 'layers', 'd' => 'Construção de infraestruturas complexas com múltiplos níveis de acesso e isolamento de dados por cliente.'],
                    ['t' => 'APIs de Alta Carga', 'icon' => 'zap', 'd' => 'Engenharia de backend optimizada para concorrência massiva e baixa utilização de recursos.'],
                    ['t' => 'Cloud Security', 'icon' => 'shield-check', 'd' => 'Implementação de redes privadas, firewall de aplicação e auditoria completa de infraestrutura na nuvem.']
                ];
            @endphp
            @foreach($servicos as $s)
                <div class="p-12 border border-white/5 bg-white/[0.02] hover:bg-white/[0.04] transition-all group relative overflow-hidden rounded-lg">
                    <div class="mb-10 text-blue-600 transition-transform group-hover:-translate-y-2 duration-500">
                        <i data-lucide="{{ $s['icon'] }}" class="w-10 h-10"></i>
                    </div>
                    <h3 class="text-2xl font-black mb-6 tracking-tighter uppercase text-white">{{ $s['t'] }}</h3>
                    <p class="text-sm leading-relaxed text-slate-500">{{ $s['d'] }}</p>
                    <div class="absolute bottom-0 left-0 h-1 w-0 group-hover:w-full transition-all duration-700 bg-blue-600"></div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- BLOG -->
<section id="blog" class="py-32 bg-black/40">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
            <div class="max-w-xl">
                <div class="text-blue-500 font-black text-[10px] uppercase tracking-[0.5em] mb-4">Arquivo Técnico</div>
                <h2 class="text-5xl font-black tracking-tighter text-white leading-none">Insights & <br /> <span class="text-blue-600 italic">Arquitetura.</span></h2>
            </div>
            <button class="text-xs font-black uppercase tracking-widest text-slate-400 hover:text-white border-b-2 border-white/10 pb-2 transition-all">
                Ver todos os artigos
            </button>
        </div>

        <div class="grid md:grid-cols-3 gap-10">
            @php
                $posts = [
                    [
                        'title' => 'Arquitetura Hexagonal: Desacoplando o Core',
                        'cat' => 'Arquitetura',
                        'img' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc48?auto=format&fit=crop&q=80&w=800'
                    ],
                    [
                        'title' => 'Latência em Sistemas de Alta Carga',
                        'cat' => 'Performance',
                        'img' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=800'
                    ],
                    [
                        'title' => 'Segurança Zero Trust: O Futuro SaaS',
                        'cat' => 'Segurança',
                        'img' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800'
                    ]
                ];
            @endphp
            @foreach($posts as $p)
                <article class="group cursor-pointer">
                    <div class="relative h-64 overflow-hidden rounded-2xl mb-8">
                        <img src="{{ $p['img'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                        <div class="absolute top-4 left-4 bg-[#000046] text-white px-3 py-1 rounded text-[10px] font-black uppercase tracking-widest">
                            {{ $p['cat'] }}
                        </div>
                    </div>
                    <div class="space-y-4 px-2">
                        <div class="flex items-center gap-4 text-slate-500 text-[10px] font-bold uppercase tracking-widest">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3"></i> 8 min</span>
                            <span>14 Fev, 2026</span>
                        </div>
                        <h3 class="text-2xl font-black text-white group-hover:text-blue-500 transition-colors leading-tight">
                            {{ $p['title'] }}
                        </h3>
                        <div class="flex items-center gap-2 text-blue-600 font-black text-[10px] uppercase tracking-[0.2em] pt-2 group-hover:gap-4 transition-all">
                            Ler Artigo <i data-lucide="chevron-right" class="w-3 h-3"></i>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<!-- CONTACTO -->
<section id="contacto" class="py-40 bg-black relative">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-24 items-start">
        <div>
            <h2 class="text-6xl md:text-7xl font-black tracking-tighter mb-10 text-white leading-none">
                Inicie o seu <br /> <span class="text-blue-600 italic">Legado Digital.</span>
            </h2>
            <p class="text-slate-400 text-xl mb-16 max-w-sm">
                Está pronto para levar a sua infraestrutura técnica ao patamar das maiores empresas do mundo?
            </p>

            <div class="space-y-10">
                <div class="flex items-center gap-8 group">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center bg-blue-600/10 text-blue-600 border border-blue-600/20 group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <i data-lucide="mail" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <span class="block text-[10px] font-black uppercase tracking-widest text-slate-600 mb-1">Direct Line</span>
                        <a href="mailto:hello@daniellandim.com" class="text-xl font-bold text-white hover:text-blue-500 transition-colors">hello@daniellandim.com</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white/[0.03] border border-white/5 p-12 md:p-16 rounded-2xl shadow-2xl">
            <form class="space-y-10" onsubmit="event.preventDefault()">
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-3">
                        <label class="text-[10px] font-black uppercase tracking-widest text-slate-500">Nome</label>
                        <input type="text" class="w-full bg-transparent border-b border-white/10 py-4 focus:border-blue-500 outline-none transition-all text-white">
                    </div>
                    <div class="space-y-3">
                        <label class="text-[10px] font-black uppercase tracking-widest text-slate-500">Email Corporativo</label>
                        <input type="email" class="w-full bg-transparent border-b border-white/10 py-4 focus:border-blue-500 outline-none transition-all text-white">
                    </div>
                </div>
                <button type="submit" class="w-full py-6 rounded-sm font-black uppercase tracking-[0.2em] text-[11px] bg-blue-600 text-white hover:bg-blue-700 transition-all flex items-center justify-center gap-4 group">
                    Submeter Requisitos <i data-lucide="send" class="w-4 h-4 group-hover:translate-x-2 transition-transform"></i>
                </button>
            </form>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="py-16 bg-black border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-10">
        <div class="flex items-center gap-5 grayscale opacity-30 hover:opacity-100 transition-all duration-500">
            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                <svg viewBox="0 0 100 100" class="w-3/5 h-3/5 fill-[#000046]">
                    <path d="M15 25 L45 25 L45 35 L30 35 L30 65 L45 65 L45 75 L15 75 Z" />
                    <path d="M50 25 L60 25 L60 65 L85 65 L85 75 L50 75 Z" />
                </svg>
            </div>
            <div class="flex flex-col">
                <span class="text-lg font-black tracking-tighter text-white leading-none">DANIEL LANDIM</span>
                <span class="text-[8px] font-bold tracking-[0.4em] text-blue-500 uppercase">Software Architect</span>
            </div>
        </div>

        <div class="text-[10px] font-bold text-slate-700 uppercase tracking-widest">
            &copy; {{ date('Y') }} — Engineered with Focus
        </div>
    </div>
</footer>

<!-- Script para inicializar Lucide Icons -->
<script>
    lucide.createIcons();
</script>
</body>
</html>
