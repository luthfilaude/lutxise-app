@extends('layouts.app')
@section('title', 'Lutxise - Home')
@section('content')
    <div class="hero min-h-screen"
        style="background-image: url(https://images.unsplash.com/photo-1745596669256-7ea37d8c597a?q=80&w=1031&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);">
        <div class="hero-overlay"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                <p class="mb-5">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
                <button class="btn btn-success btn-outline">Get Started</button>
                <audio id="backgroundMusic" loop autoplay muted>
                    <source src="{{ asset('storage/background-music.mp3') }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
    </div>
    <script>   document.addEventListener('DOMContentLoaded', function() {
       const backgroundMusic = document.getElementById('backgroundMusic');

       // Optional: Unmute the audio after a certain delay (e.g., 1 second)
       setTimeout(() => {
           backgroundMusic.muted = false;
           backgroundMusic.play(); // Ensure the audio starts playing
       }, 1000);

       // Optional:  Add event listeners for volume control or pausing
       // Example:
       // backgroundMusic.addEventListener('ended', function() {
       //     console.log('Music ended!');
       // });
   });</script>
@endsection
