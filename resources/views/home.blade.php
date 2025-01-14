@extends('layouts.main')

@section('main')

<div class="relative w-full">
    <img class="w-full h-screen" src="{{ Storage::url('images/home.png') }}" alt="Espace de travail">
    <div class="absolute inset-0 flex justify-center flex-col font-lora ml-20">
        <div class="text-blue-navy text-5xl font-bold italic">Passionnée de créativité</div>
        <div id="typingText" class="text-blue-navy text-4xl uppercase typing-animation overflow-hidden whitespace-nowrap"></div>
    </div>
</div>

@endsection