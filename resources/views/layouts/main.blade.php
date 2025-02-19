<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <title>Portfolio - Océane PY</title>
</head>
<body>
    
    <div class="flex flex-row w-full ">
        <div class="h-screen bg-blue-navy w-1/4 flex flex-col items-center justify-center space-y-12"> 
            <div> 
                <img class="rounded-full w-40 h-40" src="{{ Storage::url('images/profil.jpg') }}" alt="Photo de profil"> 
            </div>


            <div class="text-white text-xl font-bold space-y-12">
                <div class="flex flex-row items-center space-x-4 hover:text-gray-200">
                    <div class="w-6 flex justify-center">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <a href="{{route ('accueil')}}"> Accueil </a>
                </div>
            
                <div class="flex flex-row items-center space-x-4 hover:text-gray-200">
                    <div class="w-6 flex justify-center">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <a href="{{route ('parcours')}}"> Mon parcours </a>
                </div>
            
                <div class="flex flex-row items-center space-x-4 hover:text-gray-200">
                    <div class="w-6 flex justify-center">
                        <i class="fa-solid fa-file-code"></i>
                    </div>
                    <a href="{{route ('projets')}}"> Mes projets web </a>
                </div>
            
                <div class="flex flex-row items-center space-x-4 hover:text-gray-200">
                    <div class="w-6 flex justify-center">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <a href="{{route ('contact')}}"> Contact </a>
                </div>
            </div>
            


        </div>


        <div class="w-3/4">
            @yield('main') 
        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
     </script>
</body>
</html>