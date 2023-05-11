@extends('auth.layouts')

<div class="w-screen h-screen bg-white">
    <div class="h-screen flex flex-col justify-center items-center">
        <div class="flex flex-col justify-center items-center">
            <svg width="201" height="32" viewBox="0 0 201 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4.94444 27.5556H0.5V23.1111H9.38889V27.5556H18.2778V18.6667H4.94444V14.2222H0.5V5.33333H4.94444V0.888891H22.7222V5.33333H27.1667V9.77778H18.2778V5.33333H9.38889V14.2222H22.7222V18.6667H27.1667V27.5556H22.7222V32H4.94444V27.5556ZM44.9271 32V14.2222H40.4826V32H31.5938V9.77778H62.7049V14.2222H67.1493V32H58.2604V14.2222H53.816V32H44.9271ZM71.5938 32V9.77778H80.4826V32H71.5938ZM71.5938 5.33333V0.888891H80.4826V5.33333H71.5938ZM93.803 32H84.9141V0.888891H93.803V32ZM120.457 9.77778V14.2222H124.901V23.1111H107.123V27.5556H124.901V32H102.679V27.5556H98.2344V14.2222H102.679V9.77778H120.457ZM116.012 14.2222H107.123V18.6667H116.012V14.2222ZM138.217 32H129.328V27.5556H138.217V32ZM147.093 27.5556H142.648V5.33333H147.093V0.888891H164.871V5.33333H169.315V9.77778H160.426V5.33333H151.537V27.5556H160.426V23.1111H169.315V27.5556H164.871V32H147.093V27.5556ZM178.187 27.5556H173.742V14.2222H178.187V9.77778H195.964V14.2222H200.409V27.5556H195.964V32H178.187V27.5556ZM191.52 14.2222H182.631V27.5556H191.52V14.2222Z"
                    fill="black" />
            </svg>
            <p class="mt-[10px] text-gray-400">Create Your Account.</p>
        </div>
        <form class="flex flex-col justify-center items-center" action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mt-[10px] flex flex-col ">
                <label class="pb-[5px]">Name</label>
                  <input type="text" class="w-[300px] h-[45px] border-2 border-[#333] rounded-[5px] indent-3" id="name" placeholder="Create Name..." name="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="text-red-600">{{ $errors->first('name') }}</span>
                    @endif
            </div>
            <div class="mt-[10px] flex flex-col">
                <label class="pb-[5px]">Your Email</label>
                <input required class="w-[300px] h-[45px] border-2 border-[#333] rounded-[5px] indent-3"
                    placeholder="Your Email..." type="text" id="email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="text-red-600 text-sm">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mt-[10px] flex flex-col">
                <label class="pb-[5px]">Create Password</label>
                <input class="w-[300px] h-[45px] border-2 border-[#333] rounded-[5px] indent-3"
                    placeholder="Create Password..." id="password" name="password" type="password">
                @if ($errors->has('password'))
                    <span class="text-red-600 text-sm">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="mt-[10px] flex flex-col">
                <label for="password_confirmation"  class="pb-[5px]">Confirm Password</label>
                <input class="w-[300px] h-[45px] border-2 border-[#333] rounded-[5px] indent-3"
                    placeholder="Confirm Password..." id="password_confirmation" name="password_confirmation" type="password">
            </div>                                  
            <input type="submit"
                class="text-black hover:text-white border-[2px] border-black hover:bg-black focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:border-black dark:text-black    dark:hover:text-white dark:hover:bg-black dark:focus:ring-gray-600 font-extrabold w-[243px] text-[24px] mt-[20px]"
                value="Register">
        </form>
    </div>
</div>