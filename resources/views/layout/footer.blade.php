<footer class="w-full border-b">
    <div class="max-w-screen mx-auto px-6 py-4 grid grid-cols-1 md:grid-cols-2 " id="footer-bg-img">
        <div class="w-full max-w-9xl mx-auto px-6 py-10 text-sm flex flex-col gap-4 items-start ">
            <button 
            onclick="window.open('https://wa.me/5514988208146', '_blank')"
            class="relative z-10 p-2 md:text-start text-start font-semibold bg-white md:w-1/3 w-full hover:bg-gray-200 rounded h-12">
            <i class="fa-brands fa-instagram  mt-2 m-1"></i>    
            Instagram</button>
            <br>
            
            <button 
            onclick="window.open('https://wa.me/5514988208146', '_blank')"
            class="relative z-10 p-2 md:text-start text-start font-semibold bg-white md:w-1/3 w-full hover:bg-gray-200 rounded h-12">
            <i class="fa-brands fa-whatsapp  mt-2 m-1"></i>    
            Whatsapp</button>
        </div>
        <div class="text-white font-bold w-full max-w-9xl mx-auto px-6 py-10 text-sm flex  md:justify-end justify-center items-center">
           
        <i class="fa-solid fa-envelope-open-text  mt-2 m-1"></i>contato@mirimweb.com.br
        </div>
    </div>

    <div class="max-w-screen" id="footer-bottom">
        <div class="items-center max-w-9xl mx-auto px-6 py-10 text-sm flex justify-between md:flex-row flex-col gap-4 text-white font-bold">
            <span>© {{ date('Y') }} Mirim Tecnologia</span>
            <span class="flex items-center">Construímos estruturas sólidas para crescer com consistência.
            <img src="{{ asset('images/00-Logo-Mirim.png') }}" alt="" class="h-10">


            </span>
        </div>
    </div>
    
</footer>
