@extends('layouts.layout')

@section('content')
    <div class="container w-full mx-auto px-4 py-8 md:w-3/5 lg:p-8">
        {{-- About Newtralize --}}
        <div class="mb-8">
            <h1 class="text-3xl font-bold border-b-2 border-blue-950 mb-4">
                About
            </h1>

            <p>
                "Newtralize" is a sole proprietorship operated by Yasuhiro W, focusing on web development.<br><br>
                The name "Newtralize" is a coined word combining "Neutralize" and "New." It was named with the belief that,
                in a
                rapidly changing modern world, creating new value requires a neutral perspective on existing values.<br><br>
                We provide the best solutions for our clients' businesses and projects from a neutral standpoint.
            </p>
        </div>

        {{-- Members --}}
        <div>
            <h2 class="text-2xl font-bold border-b-2 border-blue-950 mb-4">
                Members
            </h2>

            @php
                // Profile data
                $profiles = [
                    [
                        'id' => 1,
                        'image' => 'images/hiro.jpg',
                        'name' => 'Yasuhiro W',
                        'description' =>
                            "Web Developer | Translator (Japanese|English) | Master of Engineering\n\nIn graduate school, I developed a program to analyze building vibrations during earthquakes. Subsequently, I worked for a major Japanese railway company for seven years. After studying in Australia for one year, I made a career change to the IT industry.",
                    ],
                ];
            @endphp
            @foreach ($profiles as $profile)
                {{-- Profile Card --}}
                <div class="mb-4">
                    <x-profile-card :profile="$profile" />
                </div>
            @endforeach
        </div>
    </div>
@endsection
