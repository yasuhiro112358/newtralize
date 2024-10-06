@extends('layouts.layout')

@section('content')
    <div class="w-full h-screen-minus-96 relative" id="p5-container">
        <div class="absolute top-1/2 left-1/2 transform  -translate-x-1/2">
            {{-- Works button --}}
            <a href="{{ route('works') }}"
                class="block text-xl font-semibold bg-white text-blue-950 text-center py-2 px-8 rounded-full hover:bg-gray-300 transition-colors duration-300 mb-4 w-60 select-none">
                Works
            </a>
            {{-- About button --}}
            <a href="{{ route('about') }}"
                class="block text-xl font-semibold bg-white text-blue-950 text-center py-2 px-8 rounded-full hover:bg-gray-300 transition-colors duration-300 w-60 select-none">
                About
            </a>
        </div>
    </div>
    <div class="w-full" id="tweakpane-container"></div>
@endsection

@push('script')
    @vite(['resources/js/welcome/sketch.js'])
@endpush
