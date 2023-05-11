@extends('auth.layouts')

<a href="{{ route('posts.edit', $post->id) }}"><img class="absolute top-[-2px] left-[70px]"
        src="{{ asset('svg/edit.svg') }}" alt="back"></a>

<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    <div class="justify-center items-center grid">
        <div class="bg-white border-2 border-[#E6E6E6] w-[811px] h-fit m-[20px] rounded-xl">
            <div class="flex flex-col w-full justify-center items-center text-center p-[50px] gap-[20px]">
                <img src="{{ asset('storage/posts/' . $post->image) }}"
                    class="w-[653px] h-[193px] object-cover rounded-lg border-4 border-[#E6E6E6]">
                <h4 class="font-bold text-[24px]">{{ $post->title }}</h4>
                <p class="break-all w-full h-fit">
                    {!! $post->content !!}
                </p>
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="top-[20px] relative inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  bg-red-600 text-white hover:bg-red-700">HAPUS</button>
            </div>
        </div>
    </div>
</form>
