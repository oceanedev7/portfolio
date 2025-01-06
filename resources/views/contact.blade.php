@extends('layouts.main')


@section('main')
<div class="flex justify-center items-center w-full h-screen">
    <div class="relative w-[800px] h-[500px] bg-blue-navy m-8">

        <div class="text-white uppercase font-bold text-center text-4xl mt-10">Contactez-moi !</div>

        <div class="flex items-center justify-center">

            <div class="w-full max-w-4xl flex flex-col md:flex-row bg-blue-navy shadow-lg p-8 space-y-8 md:space-y-0 md:space-x-20">
                
                <form action="#" method="post" class="flex flex-col w-full max-w-md space-y-4">
                    <input type="text" class="border-0 border-b-2 py-2 bg-transparent focus:ring-0 focus:border-white placeholder-white transition-all duration-300 ease-in-out" placeholder="Prénom">
                    <input type="text" class="border-0 border-b-2 py-2 bg-transparent focus:ring-0 focus:border-white placeholder-white transition-all duration-300 ease-in-out" placeholder="Nom">
                    <input type="email" class="border-0 border-b-2 py-2 bg-transparent focus:ring-0 focus:border-white placeholder-white transition-all duration-300 ease-in-out" placeholder="Adresse e-mail">
                    <textarea rows="4" class="resize-none border-2 border-b-2 focus:ring-0 focus:border-white bg-transparent placeholder-white transition-all duration-300 ease-in-out" placeholder="Message"></textarea>
        
                    <button class="bg-white hover:bg-blue-grey hover:text-white text-blue-navy uppercase font-bold py-2 px-4 rounded-md transition-all duration-300 ease-in-out">Envoyer</button>
                </form>
        
                <div class="flex flex-col justify-center text-lg text-white space-y-6">
                    <div class="flex items-center space-x-4">
                        <i class="fa-solid fa-phone text-xl"></i>
                        <div>0696 30 44 73</div>
                    </div>
        
                    <div class="flex items-center space-x-4">
                        <i class="fa-solid fa-envelope text-xl"></i>
                        <a href="mailto:oceanepy7@gmail.com">oceanepy7@gmail.com</a>
                    </div>
        
                    <div class="flex items-center space-x-4">
                        <i class="fa-solid fa-location-dot text-xl"></i>
                        <div>Ducos, Martinique</div>
                    </div>
        
                    <div class="flex items-center space-x-4">
                        <a href="https://www.linkedin.com/in/océane-py-3b3152196" target="_blank" rel="noopener noreferrer">
                            <i class="fa-brands fa-linkedin text-2xl"></i>
                        </a>
                    </div>
                </div>
        
            </div>
        
        </div>
        
    </div>
</div>
@endsection