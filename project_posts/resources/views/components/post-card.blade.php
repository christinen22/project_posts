@props(['post'])


<x-card>
    <div class="flex mb-8">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{ asset('/images/no-image.png') }}"
            alt="no image"/>
    <div>
        <h3 class="text-2xl">
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        </h3>
        <div class="text-xl font-bold mb-4">{{ $post->description }}</div>
            <x-post-tags :tagsCsv="$post->tags"/>
        <div class="text-lg mt-4">
            <i class="fa-solid"></i> {{ $post->user }}
        </div>
        </div>
    </div>
</x-card>
