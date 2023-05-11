<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smile</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="justify-center items-center grid">
        <div class="bg-white border-2 border-[#E6E6E6] w-[811px] h-[681px] m-[20px] rounded-xl">
            <div class="flex w-full justify-center items-center text-center p-[50px]">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    {{-- Gambar Input --}}
                    @csrf
                    <div
                        class="border-dashed cursor-pointer  dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 flex flex-col justify-center items-center text-center w-[691px] h-[221px] bg-[#D9D9D9] rounded-xl border border-green-400">
                        <input type="file" class=" @error('image') @enderror" name="image">

                        @error('image')
                            <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Title Input --}}
                    <div class="mt-[20px]">
                        <input type="text"
                            class="block appearance-none w-full h-[42px] py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('title')  @enderror"
                            name="title" value="{{ old('title') }}" placeholder="Title....">

                        @error('title')
                            <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Content Input --}}
                    <div class="mt-[20px]">
                        <textarea
                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('content') @enderror"
                            name="content" rows="5" placeholder="Content...">{{ old('content') }}</textarea>

                        <!-- error message untuk content -->
                        @error('content')
                            <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Submit --}}
                    <div class="flex flex-row justify-center items-center ">
                        <button type="reset"
                        class="inline-block align-middle text-center select-none border border-[#E76161] whitespace-no-wrap rounded-lg py-1 px-3 leading-normal no-underline btn-md bg-[#F99B7D] font-bold text-[#E76161] hover:text-[#F99B7D] hover:bg-[#FF3E00]">Cencel</button>
                    <button type="submit"
                        class="inline-block align-middle text-center select-none border border-[#A0D8B3] whitespace-no-wrap rounded-lg m-[20px] py-1 px-3 leading-normal no-underline btn-md bg-[#E5F9DB] font-bold text-[#A0D8B3] hover:text-[#E5F9DB] hover:bg-[#B5EA9A]">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
