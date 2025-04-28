@extends('layouts.main')

@section('main')

 <div class="w-full h-screen p-8 flex items-center justify-center">

<div id="animation-carousel" class="relative min-h-[24rem] w-full max-w-4xl border-4 border-blue-navy" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden h-[30rem]">
         <!-- Item 1 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <video class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" autoplay muted>
                <source src="{{ Storage::url('videos/questionnaire.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute bottom-0 left-0 w-full flex justify-start z-20 mt-4">
                <div class="bg-blue-grey px-6 py-2">
                    <div class="text-xl font-bold text-white drop-shadow-lg">Questionnaire sur le développement web</div>
                </div>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <video class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" autoplay muted>
                <source src="{{ Storage::url('videos/todolist.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute bottom-0 left-0 w-full flex justify-start z-20 mt-4">
                <div class="bg-blue-grey px-6 py-2 ">
                    <div class="text-xl font-bold text-white drop-shadow-lg">To do list</div>
                </div>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item="active">
            <video class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" autoplay muted>
                <source src="{{ Storage::url('videos/calculatrice.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute bottom-0 left-0 w-full flex justify-start z-20 mt-4">
                <div class="bg-blue-grey px-6 py-2 ">
                    <div class="text-xl font-bold text-white drop-shadow-lg">Calculatrice</div>
                </div>
            </div>       
         </div>
        <!-- Item 4 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <video class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" autoplay muted>
                <source src="{{ Storage::url('videos/reseaulilas.mp4') }}" type="video/mp4">
            </video>  
            <div class="absolute bottom-0 left-0 w-full flex justify-start z-20 mt-4">
                <div class="bg-blue-grey px-6 py-2 ">
                    <div class="text-xl font-bold text-white drop-shadow-lg">Réseau L.I.L.A.S</div>
                </div>
            </div>          
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <video class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" autoplay muted>
                <source src="{{ Storage::url('videos/toutlahaut.mp4') }}" type="video/mp4">
            </video>    
            <div class="absolute bottom-0 left-0 w-full flex justify-start z-20 mt-4">
                <div class="bg-blue-grey px-6 py-2 ">
                    <div class="text-xl font-bold text-white drop-shadow-lg">Tout là-haut</div>
                </div>
            </div>      
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-blue-navy dark:bg-gray-800/30  dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-blue-navy dark:bg-gray-800/30  dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

</div>


@endsection 