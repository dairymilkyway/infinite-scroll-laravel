<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Infinite Scroll</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/infinite-scroll/4.0.1/infinite-scroll.pkgd.min.js"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<div class="container mx-auto p-6">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-8">Infinite Scroll Posts</h1>
        <div id="posts" class="space-y-6">
            @include('posts.partials.posts')
        </div>
        <div id="loader" class="text-center my-4">
            <svg class="animate-spin h-5 w-5 text-gray-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8h8a8 8 0 01-8 8v-8H4z"></path>
            </svg>
            <p class="text-gray-500 mt-2">Loading...</p>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/infinite-scroll.js') }}"></script>
</body>
</html>
