@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1>

    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <!-- Image Section -->
    <div class="mt-4">
        <img src="{{ asset('img/foto_bg.png') }}" alt="Background Image" class="img-fluid">
    </div>

     <!-- Quote Section -->
     <div class="mt-4">
        <blockquote class="blockquote">
            <p class="mb-0">
                "I don't understand what it means to 'understand' someone. But I want to understand.
                 I want to understand what my dear friend meant when she told me, 'I love you.'
                 What does it mean to love someone? What does it mean to be loved by someone? I've tried to ask, but I can't find the right words.
                  All I can do is feel, and I feel like I'm being torn apart."
            </p>
            <strong>~ Violet Evergarden</strong>
        </blockquote>
    </div>

     <!-- Audio Section -->
     <div class="mt-4 text-center">
        <audio id="audio-player" controls>
            <source src="{{ asset('audio/The Voice in My Heart.mp3') }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var audioPlayer = document.getElementById('audio-player');

            // Set volume to 30% (0.3)
            audioPlayer.volume = 0.3;

            // Load audio state from sessionStorage
            var savedTime = sessionStorage.getItem('audio-current-time');
            var savedPlaying = sessionStorage.getItem('audio-playing');

            if (savedTime) {
                audioPlayer.currentTime = savedTime;
            }

            if (savedPlaying === 'true') {
                audioPlayer.play();
            }

            // Save audio state to sessionStorage before the page unloads
            window.addEventListener('beforeunload', function() {
                sessionStorage.setItem('audio-current-time', audioPlayer.currentTime);
                sessionStorage.setItem('audio-playing', !audioPlayer.paused);
            });

            // Save audio state when the audio is paused or played
            audioPlayer.addEventListener('pause', function() {
                sessionStorage.setItem('audio-current-time', audioPlayer.currentTime);
                sessionStorage.setItem('audio-playing', false);
            });

            audioPlayer.addEventListener('play', function() {
                sessionStorage.setItem('audio-playing', true);
            });
        });
    </script>

@endsection
