@extends('layouts.layout')

@section('content')
    @php
        // Profile data
        $profile = [
            'id' => 1,
            'image' => 'images/hiro.jpg',
            'name' => 'Yasuhiro WATANABE',
        ];
    @endphp
    <div class="container w-full mx-auto px-4 py-8 md:w-3/5 lg:p-8">
        {{-- About Newtralize --}}
        <div class="mb-8 w-full">
            <h1 class="text-3xl font-bold border-b-2 border-blue-950 mb-4">
                Highlights
            </h1>

            <div class="w-full h-full bg-white rounded-2xl shadow px-4 py-8 md:px-8">

                <div class="mb-6">
                    <!-- Profile Image -->
                    <img class="w-3/4 max-w-36 h-auto rounded-full mx-auto" src="{{ asset($profile['image']) }}"
                        alt="Profile Image">
                    <!-- Name -->
                    <p class="text-center text-xl font-bold">
                        {{ $profile['name'] }}
                    </p>
                    <!-- Title -->
                    <p class="text-gray-600 mb-4">
                        Web Developer | Translator (Japanese|English) | Master of
                        Engineering
                    </p>
                </div>

                <!-- What I Can Help You -->
                <div class="mb-6">
                    <h3 class="text-2xl border-s-4 border-blue-950 ps-2 mb-2">
                        What I Can Help You
                    </h3>
                    <ul class="list-disc list-outside ps-4 mb-2">
                        <li>Mutual translation of business documents between Japanese and English</li>
                        <li>Mutual translation of technical documents between Japanese and English</li>
                        <li>Website creation</li>
                    </ul>
                    <p class="mb-2">
                        With experience in programming-based architectural structural analysis research in graduate school,
                        practical experience in a large Japanese company, study abroad experience in Australia, and team
                        development experience of web applications, I believe I can help with the above content.
                    </p>
                </div>

                <div class="mb-6">
                    <h3 class="text-2xl border-s-4 border-blue-950 ps-2 mb-2">
                        Achievements
                    </h3>

                    {{-- High Rating --}}
                    <div class="mb-6">
                        <h4 class="text-lg border-s-4 border-blue-950 ps-2 mb-2">
                            Translation Work with High Ratings
                        </h4>
                        <p class="mb-2">
                            I have experience receiving translation work mainly on <a
                                href="https://www.freelancer.com/u/nabeyasu" target="_blank"
                                class="underline">Freelancer.com</a>. I have consistently received five-star ratings from
                            clients.
                        </p>
                        <img src="{{ asset('images/freelancer-top.png') }}" alt="freelancer-top">
                        <img src="{{ asset('images/freelancer-reviews.png') }}" alt="freelancer-reviews">
                    </div>

                    {{-- Examples --}}
                    <div>
                        <h4 class="text-lg border-s-4 border-blue-950 ps-2 mb-2">
                            Examples of Translation Work
                        </h4>
                        <p class="mb-4">
                            The figure below is an example of a output. I translated the content of the company's articles
                            of incorporation from Japanese to English. When translating Japanese articles of incorporation
                            into English, it is difficult to translate accurately without being familiar with Japanese law,
                            but I have a real estate transaction license and I have knowledge of Japanese law to a
                            business-usable extent.
                        </p>

                        <div class="flex flex-row w-full gap-2">
                            <div class="flex-1">
                                <img src="{{ asset('images/articles-of-incorporation-ja.png') }}"
                                    alt="articles-of-incorporation-ja.png" class="border object-contain">
                            </div>
                            <div class="flex-1">
                                <img src="{{ asset('images/articles-of-incorporation-eng.png') }}"
                                    alt="articles-of-incorporation-eng" class="border object-contain">
                            </div>
                        </div>
                        <p class="mb-4">
                            ※Since I do not have qualifications such as a Japanese administrative scrivener, I cannot
                            translate documents that are legally valid, but I can translate documents for general business
                            use.
                        </p>

                        <p>
                            As other work achievements, I have experience translating hymns (English to Japanese). This is
                            high-level work as it requires matching the number of beats and abstract meanings, but I
                            utilized my experience as a band member to perform the translation, and the client was
                            satisfied.
                        </p>
                    </div>
                </div>

                
                <div class="mb-6">
                    <h3 class="text-2xl border-s-4 border-blue-950 ps-2 mb-2">
                        Professional Experiences
                    </h3>
                    I have experience writing and presenting English papers.
                    <div class="flex flex-row w-full gap-2">
                        <div class="flex-1">
                            <img src="{{ asset('images/article-EESD.png') }}" alt="article-EESD"
                                class="border object-contain">
                        </div>
                        <div class="flex-1">
                            <img src="{{ asset('images/article-EESD-2.png') }}" alt="article-EESD-2"
                                class="border object-contain">
                        </div>
                    </div>
                    I have experience developing and presenting web applications.
                    <img src="{{ asset('images/kredo-present-1.png') }}" alt="kredo-present-1" class="border mb-2">

                    <div class="flex flex-row w-full gap-2">
                        <div class="flex-1">
                            <img src="{{ asset('images/kredo-present-2.png') }}" alt="kredo-present-2"
                                class="border object-contain">
                        </div>
                        <div class="flex-1">
                            <img src="{{ asset('images/kredo-present-3.png') }}" alt="kredo-present-3"
                                class="border object-contain">
                        </div>
                    </div>
                </div>

                <p class="mb-8">
                    Thank you for reading.<br>
                    If you have any questions or requests, please contact me through the links below.
                </p>

                {{-- contact links container --}}
                <div class="flex justify-center flex-wrap gap-1">
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/yasuhiro-watanabe-669a10b0/" target="_blank"
                        class="flex items-center bg-[#0966C2] text-white px-3 py-2 rounded-full">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <!-- X (twitter) -->
                    <a href="https://twitter.com/nabeyasu_int" target="_blank"
                        class="flex items-center bg-black text-white px-3 py-2 rounded-full">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                    <!-- GitHub -->
                    <a href="https://github.com/yasuhiro112358" target="_blank"
                        class="flex items-center bg-black text-white px-3 py-2 rounded-full">
                        <i class="bi bi-github"></i>
                    </a>

                    <!-- upwork -->
                    <a href="https://www.upwork.com/freelancers/~01cd2305d9fd32bec5" target="_blank"
                        class="flex items-center bg-[#14A800] text-white px-4 py-2 rounded-full">
                        <i class="bi bi-briefcase-fill"></i>&nbsp;upwork
                    </a>

                    <!-- freelancer -->
                    <a href="https://www.freelancer.com/u/nabeyasu" target="_blank"
                        class="flex items-center bg-[#28B2FE] text-white px-4 py-2 rounded-full">
                        <i class="bi bi-briefcase-fill"></i>&nbsp;freelancer
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
