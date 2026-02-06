@extends('layout.app')
@section('title', 'Mirim')
@section('content')
    <main class="pt-[50px] sm:pt-[50px]">

        <section
            class="w-full min-h-screen flex flex-col px-4 sm:px-6 md:px-8 bg-[#f3f4f6] animated-background animate-fadeIn"
            id="mirim">
            <div class="background-wrapper">
                <div class="shapes-container">
                    <div class="shape circle"></div>
                    <div class="shape square"></div>
                    <div class="shape circle"></div>
                    <div class="shape square"></div>
                    <div class="shape circle"></div>
                    <div class="shape square"></div>
                    <div class="gradient-overlay"></div>
                </div>
            </div>

            <div class="max-w-6xl w-full mt-10 sm:mt-16 md:mt-20 text-left mb-8 sm:mb-12 relative z-10">
                <h1
                    class="text-6xl sm:text-6xl md:text-5xl lg:text-6xl font-bold font-arial mb-6 sm:mb-8 animate-slideIn [animation-delay:0s] text-[#111827] tracking-wide">
                    Otimize seus processos
                </h1>

                <h2
                    class="text-5xl sm:text-5xl md:text-4xl lg:text-5xl font-arial mb-6 sm:mb-8 pl-2 sm:pl-6 md:pl-10 animate-slideIn [animation-delay:0.5s] tracking-wide">
                    <span class="text-[#111827]">Com tecnologia seus processos ficam </span>
                    <span class="text-orange-500">mais rápidos, mais precisos e mais profissionais</span>
                </h2>

                <h2
                    class="text-5xl sm:text-5xl md:text-4xl lg:text-5xl font-arial pl-3 sm:pl-12 md:pl-20 animate-slideIn [animation-delay:1s] tracking-wide">
                    <span class="text-[#111827]">Com ela você atinge </span>
                    <span class="text-orange-500">maiores margens</span>
                </h2>
            </div>

            <div
                class="mt-auto w-full h-[400px] sm:h-[500px] md:h-[600px] lg:h-[600px] flex items-end gap-2 sm:gap-3 md:gap-5  px-4 sm:px-8 md:px-12 animate-growUp [animation-delay:0.2s] relative z-10">
                <div class="flex-1 h-full flex flex-col justify-end">
                    <div
                        class="w-full bg-orange-500 rounded-t-lg h-[40%] origin-bottom scale-y-0 animate-growUp [animation-delay:0.2s]">
                    </div>
                </div>
                <div class="flex-1 h-full flex flex-col justify-end">
                    <div
                        class="w-full bg-orange-500 rounded-t-lg h-[50%] origin-bottom scale-y-0 animate-growUp [animation-delay:0.4s]">
                    </div>
                </div>
                <div class="flex-1 h-full flex flex-col justify-end">
                    <div
                        class="w-full bg-orange-500 rounded-t-lg h-[60%] origin-bottom scale-y-0 animate-growUp [animation-delay:0.6s]">
                    </div>
                </div>
                <div class="flex-1 h-full flex flex-col justify-end">
                    <div
                        class="w-full bg-orange-500 rounded-t-lg h-[70%] origin-bottom scale-y-0 animate-growUp [animation-delay:0.8s]">
                    </div>
                </div>
                <div class="flex-1 h-full flex flex-col justify-end">
                    <div
                        class="w-full bg-orange-500 rounded-t-lg h-[80%] origin-bottom scale-y-0 animate-growUp [animation-delay:1s]">
                    </div>
                </div>
                <div class="flex-1 h-full flex flex-col justify-end">
                    <div
                        class="w-full bg-orange-500 rounded-t-lg h-[90%] origin-bottom scale-y-0 animate-growUp [animation-delay:1.2s]">
                    </div>
                </div>
                <div class="flex-1 h-full flex flex-col justify-end">
                    <div
                        class="w-full bg-orange-500 rounded-t-lg h-[100%] origin-bottom scale-y-0 animate-growUp [animation-delay:1.4s]">
                    </div>
                </div>
            </div>
        </section>



        <section
            class="relative w-full z-100 animate-fadeIn animate-slideIn [animation-delay:0s] overflow-hidden bg-gray-100  min-h-screen"
            id="solucoes">

            <div class="absolute top-0 right-0 w-full h-full lg:w-1/2 lg:h-full z-10">
                <div class="h-full overflow-hidden shadow-4xl"
                    style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%); lg:clip-path: polygon(15% 0, 100% 0, 100% 100%, 0 100%);">
                    <div class="relative w-full h-full">

                        <img id="carouselImage"
                            class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-100" />

                        <div class="absolute inset-0 bg-black/65"></div>
                    </div>
                </div>
            </div>

            <div class="relative z-20">

                <div class="w-full max-w-4xl mb-8 mx-auto px-4">
                    <div class="flex justify-center py-6">
                        <div
                            class="inline-flex flex-wrap justify-center gap-4 sm:gap-8 md:gap-12 lg:gap-16 xl:gap-24 border-b-2 border-gray-200">

                            <button onclick="goToSlide(0)"
                                class="tab-btn-v3 active relative px-3 sm:px-4 md:px-6 pb-4 sm:pb-6 font-semibold text-sm sm:text-base tracking-widest transition-all duration-300 flex items-center gap-2 sm:gap-3">
                                <i class="fas fa-mobile-alt text-base sm:text-lg"></i>
                                <span class="hidden sm:inline">MOBILE</span>
                                <span class="sm:hidden">MOB</span>
                            </button>

                            <button onclick="goToSlide(1)"
                                class="tab-btn-v3 relative px-3 sm:px-4 md:px-6 pb-4 sm:pb-6 font-semibold text-sm sm:text-base tracking-widest text-gray-400 transition-all duration-300 flex items-center gap-2 sm:gap-3">
                                <i class="fas fa-desktop text-base sm:text-lg"></i>
                                WEB
                            </button>

                            <button onclick="goToSlide(2)"
                                class="tab-btn-v3 relative px-3 sm:px-4 md:px-6 pb-4 sm:pb-6 font-semibold text-sm sm:text-base tracking-widest text-gray-400 transition-all duration-300 flex items-center gap-2 sm:gap-3">
                                <i class="fas fa-laptop-code text-base sm:text-lg"></i>
                                <span class="hidden sm:inline">DESKTOP</span>
                                <span class="sm:hidden">DESK</span>
                            </button>

                        </div>
                    </div>
                </div>

                <div
                    class="relative grid grid-cols-1 lg:grid-cols-2 min-h-[500px] sm:min-h-[600px] lg:min-h-[550px] mt-12 sm:mt-16 lg:mt-20 xl:mt-44">

                    <div class="relative z-20 flex items-center px-4 sm:px-6 lg:px-0">
                        <div class="max-w-7xl w-full">
                            <div
                                class="relative min-h-[300px] sm:min-h-[400px] lg:ml-12 xl:ml-20 mb-12 sm:mb-16 lg:mb-24 md:mb-16">

                                <div
                                    class="carousel-text-slide absolute inset-0 opacity-100 z-10 transition-opacity duration-500 pointer-events-auto">
                                    <div
                                        class="h-full flex flex-col items-center lg:items-start justify-center gap-6 sm:gap-8 md:gap-10 lg:gap-14 xl:gap-16 py-6 sm:py-9">

                                        <h2
                                            class="text-3xl sm:text-5xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl font-inter text-white lg:text-gray-900 leading-tight tracking-tight max-w-3xl text-center lg:text-left">
                                            <span class="text-orange-500">Coletores indicadores</span>, seja o que for
                                            estará na palma de sua
                                            mão para
                                            <span class="text-orange-500">acesso rápido.</span>
                                        </h2>

                                        <button 
                                            onclick="window.open('https://wa.me/+5514991221660', '_blank')"
                                            class="inline-flex items-center gap-5 sm:gap-4 md:gap-5 lg:gap-6 bg-orange-500 text-white px-12 py-6 sm:px-14 sm:py-5 md:px-16 md:py-6 lg:px-18 lg:py-7 xl:px-20 xl:py-8 text-xl sm:text-lg md:text-xl lg:text-2xl xl:text-3xl
                                                   rounded-full font-inter font-semibold hover:bg-orange-600 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 whitespace-nowrap">
                                            Solicitar orçamento
                                            <i
                                                class="fa-solid fa-arrow-right text-xl sm:text-lg md:text-xl lg:text-2xl xl:text-3xl"></i>
                                        </button>



                                    </div>
                                </div>

                                <div
                                    class="carousel-text-slide absolute inset-0 opacity-0 z-0 transition-opacity duration-500 pointer-events-none">
                                    <div
                                        class="h-full flex flex-col items-center lg:items-start justify-center gap-6 sm:gap-8 md:gap-10 lg:gap-14 xl:gap-16 py-6 sm:py-9">

                                        <h2
                                            class="text-3xl sm:text-4xl md:text-4xl lg:text-6xl xl:text-7xl 2xl:text-8xl font-inter text-white lg:text-gray-900 leading-tight tracking-tight max-w-3xl text-center lg:text-left">
                                            Tenha seu <span class="text-orange-500">espaço profissional na
                                                internet</span> com um site que
                                            entenda as suas
                                            <span class="text-orange-500">dores</span> e <span
                                                class="text-orange-500">cresça junto</span> com
                                            o
                                            seu negócio.
                                        </h2>

                                        <button
                                            class="inline-flex items-center gap-5 sm:gap-4 md:gap-5 lg:gap-6 bg-orange-500 text-white px-12 py-6 sm:px-14 sm:py-5 md:px-16 md:py-6 lg:px-18 lg:py-7 xl:px-20 xl:py-8 text-xl sm:text-lg md:text-xl lg:text-2xl xl:text-3xl
                                                   rounded-full font-inter font-semibold hover:bg-orange-600 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 whitespace-nowrap">
                                            Solicitar orçamento
                                            <i
                                                class="fa-solid fa-arrow-right text-xl sm:text-lg md:text-xl lg:text-2xl xl:text-3xl"></i>
                                        </button>




                                    </div>
                                </div>

                                <div
                                    class="carousel-text-slide absolute inset-0 opacity-0 z-0 transition-opacity duration-500 pointer-events-none">
                                    <div
                                        class="h-full flex flex-col items-center lg:items-start justify-center gap-6 sm:gap-8 md:gap-10 lg:gap-14 xl:gap-16 py-6 sm:py-9">

                                        <h2
                                            class="text-3xl sm:text-4xl md:text-4xl lg:text-6xl xl:text-7xl 2xl:text-8xl font-inter text-white lg:text-gray-900 leading-tight tracking-tight max-w-3xl text-center lg:text-left">
                                            Processos, análises e operações complexas executadas direto no seu
                                            computador,
                                            <span class="text-orange-500">sem depender de rede.</span>
                                        </h2>

                                        <button
                                            class="inline-flex items-center gap-5 sm:gap-4 md:gap-5 lg:gap-6 bg-orange-500 text-white px-12 py-6 sm:px-14 sm:py-5 md:px-16 md:py-6 lg:px-18 lg:py-7 xl:px-20 xl:py-8 text-xl sm:text-lg md:text-xl lg:text-2xl xl:text-3xl
                                                   rounded-full font-inter font-semibold hover:bg-orange-600 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 whitespace-nowrap">
                                            Solicitar orçamento
                                            <i
                                                class="fa-solid fa-arrow-right text-xl sm:text-lg md:text-xl lg:text-2xl xl:text-3xl"></i>
                                        </button>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="relative w-full h-full hidden lg:block"></div>

                </div>

            </div>

        </section>

        <section
            class="w-full min-h-screen flex flex-col bg-[#ff8533] relative overflow-hidden opacity-1 translate-y-6 animate-[sectionIn_0.8s_ease-out_forwards]"
            id="sobre">

            <div class="absolute inset-0 bg-black/10 rounded-lg"></div>


            <div class="absolute top-[-35%] left-[-18%] w-[850px] h-[850px] wave-1 pointer-events-none">
                <svg viewBox="0 0 850 850" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="425" cy="425" rx="425" ry="360" fill="rgba(255, 154, 77, 0.4)"
                        opacity="0.9" />
                </svg>
            </div>

            <div class="absolute top-[8%] right-[-22%] w-[720px] h-[720px] wave-2 pointer-events-none">
                <svg viewBox="0 0 720 720" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="360" cy="360" rx="360" ry="310"
                        fill="rgba(255, 122, 31, 0.35)" opacity="0.85" />
                </svg>
            </div>

            <div class="absolute top-[35%] left-[12%] w-[550px] h-[550px] wave-3 pointer-events-none">
                <svg viewBox="0 0 550 550" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="275" cy="275" rx="275" ry="230"
                        fill="rgba(255, 133, 51, 0.3)" opacity="0.8" />
                </svg>
            </div>

            <div class="absolute bottom-[-38%] right-[-12%] w-[780px] h-[780px] wave-4 pointer-events-none">
                <svg viewBox="0 0 780 780" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="390" cy="390" rx="390" ry="335"
                        fill="rgba(255, 154, 77, 0.33)" opacity="0.87" />
                </svg>
            </div>

            <div class="absolute bottom-[-20%] left-[-8%] w-[620px] h-[620px] wave-1 pointer-events-none"
                style="animation-delay: 4s;">
                <svg viewBox="0 0 620 620" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="310" cy="310" rx="310" ry="265"
                        fill="rgba(255, 122, 31, 0.28)" opacity="0.82" />
                </svg>
            </div>

            <div
                class="absolute inset-0 bg-gradient-to-br from-orange-400/10 via-transparent to-orange-600/10 pointer-events-none">
            </div>

            </div>

            <div class="max-w-[115rem] w-full mx-auto z-10 my-32 px-6 sm:px-8 md:px-12">
                <div class="text-center mb-16 animate-slideUp">
                    <h2 class="text-6xl sm:text-7xl lg:text-7xl font-inter text-white mb-4 leading-tight">
                        <span class="inline-block">Sobre</span>
                    </h2>

                    <div class="flex items-center justify-center gap-3 mb-4">
                        <div
                            class="w-36 h-px rounded-7xl bg-white/90 origin-center scale-x-0 opacity-0 animate-[lineIn_0.6s_ease-out_forwards]">
                        </div>
                    </div>

                    <p class="text-xl sm:text-2xl text-white/90 max-w-3xl mx-auto leading-relaxed font-light">
                        Somos uma empresa de tecnologia focada em desenvolver
                        <span class="font-semibold text-white">soluções digitais</span> com base em
                        <span class="font-semibold text-white">dados, processos</span> e
                        <span class="font-semibold text-white">decisões conscientes</span>.
                    </p>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-16 mb-4 items-stretch">

                    <div
                        class="value-card bg-white/10 backdrop-blur-sm p-12 rounded-3xl border border-white min-h-[28rem]">
                        <div class="icon-wrapper w-24 h-24 rounded-3xl flex items-center justify-center mb-8">
                            <i class="fa-regular fa-flag text-white text-7xl"></i>
                        </div>
                        <h3 class="text-5xl font-inter sm:text-3xl lg:text-5xl text-white mb-6">Missão</h3>
                        <p class="text-white/90 text-2xl leading-relaxed">
                            Identificar, analisar e transformar gargalos reais em soluções digitais estratégicas, por
                            meio da
                            informatização de processos.
                    </div>

                    <div class="value-card bg-white/10 backdrop-blur-sm p-12 rounded-3xl border border-white min-h-[28rem]"
                        style="animation-delay: 0.1s;">
                        <div class="icon-wrapper w-24 h-24 rounded-3xl flex items-center justify-center mb-8">
                            <i class="fa-regular fa-eye text-white text-7xl"></i>
                        </div>
                        <h3 class="text-5xl font-inter sm:text-3xl lg:text-5xl text-white mb-6">Visão</h3>
                        <p class="text-white/90 text-2xl leading-relaxed">
                            Ser uma empresa de tecnologia sólida e escalável, orientada a produtos que geram valor real,
                            recorrente e
                            sustentável.</p>
                    </div>

                    <div class="value-card bg-white/10 backdrop-blur-sm p-12 rounded-3xl border border-white min-h-[28rem]"
                        style="animation-delay: 0.2s;">
                        <div class="icon-wrapper w-24 h-24 rounded-3xl flex items-center justify-center mb-8">
                            <i class="fa-regular fa-handshake text-white text-7xl"></i>
                        </div>
                        <h3 class="text-5xl sm:text-3xl lg:text-5xl font-inter text-white mb-6">Valores</h3>
                        <p class="text-white/90 text-2xl leading-relaxed">
                            Estrutura antes da escala </p>
                        <p class="text-white/90 text-2xl leading-relaxed">
                            Decisão consciente
                        </p>
                        <p class="text-white/90 text-2xl leading-relaxed">
                            Foco em valor real ao cliente
                        </p>
                    </div>

                </div>

            </div>
@endsection
