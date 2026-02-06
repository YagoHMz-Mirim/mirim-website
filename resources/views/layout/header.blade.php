    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mirim Web</title>
</head>
    
 <nav
     class="fixed top-0 left-0 w-full z-50
         flex items-center justify-between
         px-4 sm:px-6 md:px-8 py-4
         bg-[#fffbf7]">
     <a href="#mirim" class="relative group inline-flex items-center gap-1 text-xl sm:text-2xl font-[Inter]">
         <span class="text-gray-900">Mirim</span>
         <span class="text-orange-500">Web</span>
         <span
             class="absolute left-0 -bottom-2 w-full h-[2px] bg-orange-500 scale-x-0 origin-center transition-transform duration-300 ease-out group-hover:scale-x-100"></span>
     </a>

     <ul class="flex items-center text-base sm:text-lg md:text-xl font-[Inter]">
         <li class="hidden md:flex items-center border-r-2 border-black">
             <a href="#sobre" class="relative group inline-flex items-center px-3 sm:px-4">
                 <span>Sobre</span>
                 <span
                     class="absolute left-0 -bottom-2 w-full h-[2px] bg-orange-500 scale-x-0 origin-center transition-transform duration-300 ease-out group-hover:scale-x-100"></span>
             </a>
         </li>

         <li class="hidden md:flex items-center border-r-2 border-black">
             <a href="#solucoes" class="relative group inline-flex items-center px-3 sm:px-4">
                 <span>Soluções</span>
                 <span
                     class="absolute left-0 -bottom-2 w-full h-[2px] bg-orange-500 scale-x-0 origin-center transition-transform duration-300 ease-out group-hover:scale-x-100"></span>
             </a>
         </li>

         <li class="flex items-center pl-3 sm:pl-4">
<button 
            onclick="window.open('https://wa.me/5514991221660', '_blank')"
                 class="bg-orange-500 text-white px-4 py-1 rounded-full text-sm sm:text-base hover:bg-orange-600 transition-colors duration-500 ease-in-out">
                 Contato
             </button>
         </li>
     </ul>
 </nav>
