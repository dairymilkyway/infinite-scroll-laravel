@extends('layouts.vue')

@foreach ($posts as $post)
    <div class="post bg-white p-6 rounded-lg shadow transition hover:shadow-xl transform hover:-translate-y-1">
        <h2 class="text-2xl font-semibold text-gray-800 mb-2">{{ $post->title }}</h2>
        <p class="text-gray-700">{{ $post->body }}</p>
    </div>
@endforeach

{{ $posts->links() }}
