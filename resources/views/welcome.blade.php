@extends('layout.app')
@section('title', 'Mirim')
@section('content')
<!-- Início -->
<div class="pt-24">
    <div class="md:text-base text-xs max-w-7xl mx-auto px-6 sobtitulo">
        Dados • Estrutura • Escala
    </div>
    <div class="max-w-7xl mx-auto px-6 ">
        <h1 class="md:text-4xl text-2xl mb-6 titulo">
           Criação de Software
        </h1>
        <p class="text-lg max-w-xl texto-normal">
            Desenvolvemos software orientado a processos reais, com foco em eficiência, segurança e crescimento sustentável, transformando necessidades do negócio em soluções digitais escaláveis, sempre em conformidade com a LGPD.
        </p>
        <div class="max-w-7xl mx-auto">
            <a href="#sobre-nos">
            <button 
            class="md:!text-lg !text-xm bt-laranja relative z-10 text-center hover:bg-gray-200 rounded h-12 ">
            Saiba Mais</button>
            </a>
            
            <button 
            onclick="window.open('https://wa.me/5514988208146', '_blank')"
            class="md:!text-lg !text-xm w-full bt-branco relative z-10 text-center hover:bg-gray-400 rounded h-12 ">
            Agendar um Orçamento</button>
        </div>
    </div>
    

</div>

<hr class="w-48 h-1 mx-auto my-4 bg-black border-1 rounded-sm md:my-10 md:mb-auto mb-23">

<!-- Carrosel -->
<div class="md:text-base text-xs text-center max-w-7xl mx-auto px-6 sobtitulo">
    Sistemas web sob medida • Sites institucionais e B2B • Integrações Web
</div>
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <div class="relative h-56 overflow-hidden rounded-base md:h-96 md:m-20 m-3">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/06-Site0.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/07-Site1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/08-Site2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/03-WebDesign.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/03-WebDesign.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div> -->
    </div>
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse ">
        <button type="button" class="w-3 h-3 rounded-base" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-base" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-base" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <!-- <button type="button" class="w-3 h-3 rounded-base" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-base" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button> -->
    </div>
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="md:m-20 inline-flex items-center justify-center w-10 h-10 rounded-base bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/></svg>
            <span class="sr-only">Anterior</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="md:m-20 inline-flex items-center justify-center w-10 h-10 rounded-base bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/></svg>
            <span class="sr-only">Próximo</span>
        </span>
    </button>
</div>

<!-- Galeria Img -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        <h1 class="md:text-4xl text-2xl mb-6 titulo text-center">
           Transformamos ideias em soluções digitais estruturadas e escaláveis
        </h1>
        
        <!-- Grid Container com borda preta -->
        <div class=" grid grid-cols-1 md:grid-cols-2 gap-10">
            
            <!-- Coluna Esquerda - Web Design -->
            <div class="galeria-card overflow-hidden border-3 border-orange-500 rounded-lg md:row-span-2 flex flex-col md:h-auto h-70">
                <div class="rounded-lg flex-1 overflow-hidden">
                    <img src="{{ asset('images/03-WebDesign.jpg') }}" 
                         alt="Web Design" 
                         class="w-full h-full object-cover">
                </div>
                <div class="galeria-bg-img bg-orange-500 text-white font-bold md:text-2xl text-xs text-center md:py-3 py-1">
                    Web Design
                </div>
            </div>

            <!-- Coluna Direita Superior - Software's B2B -->
            <div class="galeria-card overflow-hidden border-3 border-orange-500 rounded-lg flex flex-col md:h-auto h-70">
                <div class="flex-1 overflow-hidden">
                    <img src="{{ asset('images/04-SoftwareDevelopment.jpg') }}" 
                         alt="Software B2B" 
                         class="w-full h-full object-cover">
                </div>
                <div class="galeria-bg-img bg-orange-500 text-white font-bold md:text-2xl text-xs text-center md:py-3 py-1"">
                    Software's B2B
                </div>
            </div>

            <!-- Coluna Direita Inferior - Sistemas Embarcados -->
            <div class="galeria-card overflow-hidden border-3 border-orange-500 rounded-lg flex flex-col md:h-auto h-70">
                <div class="flex-1 overflow-hidden">
                    <img src="{{ asset('images/05-Arduino.jpg') }}" 
                         alt="Sistemas Embarcados" 
                         class="w-full h-full object-cover">
                </div>
                <div class="galeria-bg-img bg-orange-500 text-white font-bold md:text-2xl text-xs text-center md:py-3 py-1"">
                    Sistemas Embarcados
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Sobre Nós -->
<section class="pb-24" id="sobre-nos">
    <div class="max-w-7xl mx-auto px-6 ">
        <h1 class="text-4xl mb-6 titulo">
           Mirim Web Services
        </h1>
        <p class="text-lg max-w-xl texto-normal">
            Somos uma empresa de tecnologia focada em desenvolver soluções digitais com base em dados, processos e decisões conscientes. Atuamos na criação de software e sistemas sob medida, sempre priorizando estrutura, segurança e valor real ao negócio.
            <br><br>
            <b>Missão:</b> identificar, analisar e validar oportunidades de soluções digitais que resolvam problemas reais, criando uma base estratégica e financeira sólida para crescimento sustentável.
            <br><br>
            <b>Visão:</b> construir uma empresa de tecnologia escalável e orientada a produtos, capaz de gerar valor recorrente e duradouro para o mercado.
            <br><br>
            <b>Valores:</b> estrutura antes da escala, decisões orientadas a dados, foco em valor real ao cliente, eficiência operacional e aprendizado contínuo.
        </p>
    </div>
</section>
@endsection