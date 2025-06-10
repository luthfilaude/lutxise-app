@extends('layouts.app')
@section('title', 'Lutxise - Home')
@section('content')
    {{-- Hero Section --}}
    <div class="hero min-h-screen" style="background-image: url(/storage/bg-photo.jpg); background-position: center;">
        <div class="hero-overlay"></div>
        <div class="hero-content text-neutral-content">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
                <div class="h-32">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                        <p class="mb-5">
                            Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                            quasi. In deleniti eaque aut repudiandae et a id nisi.
                        </p>
                        <a href="/"
                            class="inline-block rounded-sm border border-teal-600 bg-teal-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-teal-600 focus:ring-3 focus:outline-hidden">Get
                            Started</a>
                        <audio id="backgroundMusic" loop autoplay muted>
                            <source src="{{ asset('storage/background-music.mp3') }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                </div>
                <div class="h-32"></div>
            </div>
        </div>
    </div>
    {{-- End Hero Section --}}
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8 px-6 py-8">
        <div class="h-50 rounded bg-gray-300"></div>
        <div class="h-50 rounded bg-gray-300"></div>
    </div>

    {{-- Optional: Add more content sections here --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
        });
    </script>
@endsection
