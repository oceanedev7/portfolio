@extends('layouts.main')

@section('main')

<div class="flex justify-center items-center h-screen space-x-12">
 
    <a href="{{route ('socialmedias')}}" class="space-y-4 flex flex-col block w-60 h-60 bg-blue-navy hover:bg-opacity-90 flex justify-center items-center text-white text-lg font-bold rounded-lg">
        <i class="fa-solid fa-photo-video text-3xl"></i>
        <div class="uppercase"> Réseaux sociaux </div>
    </a>
    
    <a href="{{route ('webdevelopment')}}" class="space-y-4 flex flex-col block w-60 h-60 bg-blue-navy hover:bg-opacity-90 flex justify-center items-center text-white text-lg font-bold rounded-lg">
        <i class="fa-solid fa-code text-4xl"></i>
        <div class="uppercase"> Développement web </div>
    </a>
</div>

@endsection