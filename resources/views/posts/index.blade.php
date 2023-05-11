@extends('posts.layouts')

<div class="w-screen h-screen bg-white">
    <div class="w-screen h-screen items-center justify-items-center grid grid-cols-3">
        @forelse ($posts as $post)
            <a href="{{ route('posts.show', $post->id) }}">
                <div class="w-[210px] h-[245px] bg-white border-2 rounded-xl border-[#E6E6E6] text-center">
                    <img class="w-[209.73px] h-[169.71px] border-[1px] rounded-xl border-[#E6E6E6]"
                        src="{{ asset('/storage/posts/' . $post->image) }}" alt="">
                    <h1 class="relative top-[15px] font-bold text-[16px]">{{ $post->title }}</h1>
                </div>
            </a>
        @empty
            <a href="{{ route('posts.create') }}" class="absolute">
                <div>
                    <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-white dark:text-red-400 dark:border-red-800"
                        role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Null!</span> Tidak ada Data Bro👀.
                        </div>
                    </div>
                </div>
            </a>
        @endforelse
    </div>
</div>
