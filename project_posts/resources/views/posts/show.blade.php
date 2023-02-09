@extends('layout')

@section('content')

<a href="/" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i> Back
</a>

<div class="mx-4">
    <x-card class="p-10">
        <div class="flex flex-col items-center justify-center text-center">
            <img
                class="w-48 mr-6 mb-6"
                src="{{ $post->image ? asset('/storage' . $post->logo) : asset('/images/no-image.png') }}"
                alt=""/>
                    <h3 class="text-2xl mb-2">{{$post->title}}</h3>
        <div class="text-xl font-bold mb-4">{{$post->user}}</div>
        <x-post-tags :tagsCsv="$post->tags"/>
        <div class="border border-gray-200 w-full mb-6"></div>
        <h3 class="text-3xl font-bold mb-4">
            Project description
        </h3>
        <div class="text-lg space-y-6">
            {{ $post->description }}

            <a
                href="mailto:{{ $post->email }}"
                class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80">
                <i class="fa-solid fa-envelope"></i>
                    Contact</a>

            <a
                href="{{ $post->github }}"
                target="_blank"
                class="block bg-black text-white py-2 rounded-xl hover:opacity-80">
                <i class="fa-solid fa-globe"></i>View on Github
            </a>
        </div>
        </div>
        </div>
    </x-card>
    <x-card class="mt-4 p-2 flex space-x-6">
        <a href="/posts/{{ $post->id }}/edit">
            <i class="fa-solid fa-pencil"></i> Edit </a>
    </x-card>
</div>
