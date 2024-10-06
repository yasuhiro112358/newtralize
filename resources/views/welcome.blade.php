@extends('layouts.layout')

@section('content')
    <div class="w-full h-full" id="p5-container"></div>
    <div class="w-full" id="tweakpane-container"></div>
@endsection

@push('script')
    @vite(['resources/js/welcome/sketch.js'])
@endpush
