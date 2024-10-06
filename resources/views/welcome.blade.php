@extends('layouts.layout')

@section('content')
    <div class="w-full h-[360px]" id="p5-container"></div>
    <div class="w-full" id="tweakpane-container"></div>

    <div class="container mx-auto p-6">


        <h1 class="text-4xl font-bold text-center">トップページへようこそ</h1>
        <p class="text-center mt-4">ここにトップページのコンテンツを追加してください。</p>
    </div>
@endsection

@push('script')
    @vite(['resources/js/welcome/sketch.js'])
@endpush
