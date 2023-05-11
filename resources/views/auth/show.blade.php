@extends('auth.layouts')

<div class="justify-center items-center grid">
    <div class="bg-white border-2 border-[#E6E6E6] w-[811px] h-fit m-[20px] rounded-xl">
        <div class="flex flex-col w-full justify-center items-center text-center p-[50px] gap-[20px]">
            <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-[653px] h-[193px] object-cover rounded-lg border-4 border-[#E6E6E6]">
            <h4 class="font-bold text-[24px]">{{ $post->title }}</h4>
            <p class="break-all w-full h-fit">
                {!! $post->content !!}
            </p>
        </div>
    </div>
</div>