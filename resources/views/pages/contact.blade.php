@extends('layouts.layout')

@section('content')
    <div class="container w-full md:w-3/5 mx-auto px-4 py-8 lg:p-8">

        <!-- Portfolio heading-->
        <h1 class="text-3xl font-bold border-b-2 border-blue-950 mb-4">
            Contact
        </h1>

        {{-- Profile Card --}}
        @php
            // Profile data
            $profiles = [
                [
                    'id' => 1,
                    'image' => 'images/hiro.jpg',
                    'name' => 'Yasuhiro W',
                    'description' =>
                        "Freelancer / Web Developer / Translator (Japanese/English) / Master of Engineering\n\nIn graduate school, I developed a program to analyze building vibrations during earthquakes. Subsequently, I worked for a major Japanese railway company for seven years. After studying in Australia for one year, I made a career change to the IT industry.",
                ],
            ];
        @endphp
        {{-- Profile card --}}
        <div class="">
            <x-profile-card :profile="$profiles[0]" />
        </div>
    </div>
@endsection
