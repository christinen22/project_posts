@extends('layout')

<x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create a Post
        </h2>
            <p class="mb-4">Post your project and/or share your thoughts</p>
    </header>

        <form method="POST" action="/posts">
            @csrf
            <div class="mb-6 mx-auto">
                <label
                    for="user"
                    class="inline-block text-lg mb-2">
                        User
                </label>
                <input type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="user"/>

                        @error('user')
                            <p class="text-red-500 text-xs mt-1">{{ $message }} </p>
                        @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">
                    Title
                </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="title"/>

                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }} </p>
                        @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">
                    Contact Email
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"/>

                    @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }} </p>
                        @enderror
            </div>

            <div class="mb-6">
                <label
                    for="github"
                    class="inline-block text-lg mb-2">
                        Github Project URL
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="github"/>

                    @error('github')
                            <p class="text-red-500 text-xs mt-1">{{ $message }} </p>
                        @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="tags"
                    placeholder="Example: Laravel, Backend, Frontend, etc"/>

                    @error('tags')
                            <p class="text-red-500 text-xs mt-1">{{ $message }} </p>
                        @enderror
            </div>

          <!--  <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-2">
                    Image
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="image"/>
            </div> -->

            <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg mb-2">
                        Share your thoughts
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="description"
                    rows="10">
                </textarea>

                @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }} </p>
                        @enderror
            </div>

            <div class="mb-6">
                <button class="bg-theme text-white rounded py-2 px-4 hover:bg-black">
                    Create Post
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
</x-card>

