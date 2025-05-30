@extends('layouts.main')

@section('main')

<div class="w-full h-screen flex items-center justify-center space-x-48 overflow-y-hidden">

    <div class="flex flex-col">
    <div id="default-carousel" class=" relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class=" relative overflow-hidden rounded-lg w-64 aspect-square mx-auto">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/acise1.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/acise2.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/acise3.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/acise4.jpeg') }}" class="absolute block w-full -translate-x-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/acise5.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
             <!-- Item 6 -->
             <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/acise6.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
             <!-- Item 7 -->
             <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/acise7.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
           
        </div>
       
        <!-- Slider controls -->
        <button type="button" class="absolute top-28 right-72 z-30 flex items-center justify-center cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-blue-navy dark:bg-gray-800/30 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute  top-28 left-72 z-30 flex items-center justify-center cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-blue-navy dark:bg-gray-800/30 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div class="text-center font-bold text-blue-navy uppercase"> Acise Insertion et Environnement  </div>
</div>

<div class="flex flex-col">
    <div id="default-carousel" class=" relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="  relative overflow-hidden rounded-lg w-64 aspect-square mx-auto">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/wib1.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/wib2.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/wib3.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/wib4.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/wib5.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
             <!-- Item 6 -->
             <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/wib6.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
             <!-- Item 7 -->
             <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/wib7.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
            <!-- Item 8 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/wib8.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
            <!-- Item 9 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/wib9.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
            <!-- Item 10 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('images/wib10.jpeg') }}" class="absolute block w-full -translate-x-1/2  left-1/2" alt="...">
            </div>
           
        </div>
        
        <!-- Slider controls -->
        <button type="button" class="absolute top-28 right-[270px] z-30 flex items-center justify-center cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-blue-navy dark:bg-gray-800/30  group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-28 left-[270px] z-30 flex items-center justify-center cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-blue-navy dark:bg-gray-800/30 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button> 



















    </div>
    <div class="text-center font-bold text-blue-navy uppercase"> West Indies Barber </div>
</div>
    

    
</div>



@endsection 