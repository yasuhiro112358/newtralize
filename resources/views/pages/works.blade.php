@extends('layouts.layout')

@section('content')
    <!-- Main contents -->
    <div class="container max-w-screen-lg mx-auto px-4 py-8 lg:p-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
            <!-- Left column -->
            <div class="lg:col-span-3">
                <!-- Portfolio heading-->
                <div class="mb-4">
                    <div class="heading">
                        <h1 class="text-3xl font-bold border-b-2 border-blue-950">Portfolio</h1>
                    </div>
                </div>

                <!-- Portfolio Items -->
                <div class="max-h-screen grid grid-cols-1 gap-6 overflow-y-scroll md:grid-cols-2 lg:grid-cols-2">
                    @php
                        $portfolioItems = [
                            [
                                'id' => 'omotenaship',
                                'image' => 'images/omotenaship.png',
                                'title' => 'Omotenaship',
                                'description' => 'Web App (in production)',
                                'skills' =>
                                    '[FE]: JavaScript, jQuery, Bootstrap, [BE]: PHP, Laravel, npm, Vite, OpenAI API, Google Cloud API, OpenWeatherMap API, [DB]: MySQL, [Infra]: Docker, AWS (EC2, RDS)',
                                'note' => "[Sample Account]:\nUsername: user01, email: user01@sample.com, PW: 11111111",
                                'link' => 'https://omotenaship.com/',
                            ],
                            [
                                'id' => 'newtralize',
                                'image' => 'images/newtralize.png',
                                'title' => 'Newtralize website',
                                'description' => 'Web App (in production)',
                                'skills' =>
                                    '[FE]: JavaScript, Tailwind CSS, p5.js, [BE]: PHP, Laravel, npm, Vite, [DB]: MySQL, [Infra]: Docker, AWS (EC2, RDS)',
                                'note' => "This website",
                                'link' => 'https://newtralize.com/',
                            ],
                            [
                                'id' => 'docs-search',
                                'image' => 'images/docs_search.png',
                                'title' => 'DocsSearch',
                                'description' => 'Google Chrome Extension (in production)',
                                'skills' =>
                                    'JavaScript, Tailwind CSS, npm, Vite',
                                'note' => "Can search only within official documentations of each technology",
                                'link' => 'https://chromewebstore.google.com/detail/docssearch/fkekhmafjhnpgakmdhnjigmmjmcjbgma?authuser=0&hl=en-AU',
                            ],
                            [
                                'id' => 'portfolio-4',
                                'image' => 'images/show-seismic-wave.png',
                                'title' => 'ArchStructAnalysis',
                                'description' => 'SPA(Single Page Application), Calculation for Architectural Structure (in development)',
                                'skills' =>
                                    '[API]: Python, Flask, pandas, [Web]: JavaScript(Vanilla), Bootstrap, Chart.js, [Infra] Ubuntu, Apache2, uWSGI, Docker, AWS EC2',
                                'note' => "API(BE) is by Python, Web(FE) is by JavaScript",
                                'link' => 'https://arch-struct-analisis.newtralize.com/',
                            ],
                            [
                                'id' => 'portfolio-3',
                                'image' => 'images/portfolio-blog.png',
                                'title' => 'Blog System',
                                'description' => 'Web App, Responsive Design',
                                'skills' =>
                                    'PHP, CRUD, mysqli, password_hash(), SQL, MySQL, MAMP, HTML/CSS, Bootstrap, Responsive Design',
                                'note' =>
                                    "Feel free to touch it!\n[Username]: admin, [Password]: admin\nYou can create your own account as well!",
                                'link' => 'https://nabeyasu.com/portfolio-blog/',
                            ],
                            [
                                'id' => 'portfolio-2',
                                'image' => 'images/coffee-bean.png',
                                'title' => 'Retail Website',
                                'description' => 'Web Page, Responsive Design',
                                'skills' => 'HTML/CSS, Bootstrap, Responsive Design',
                                'note' => '',
                                'link' => 'https://nabeyasu.com/portfolio-coffee-bean/',
                            ],
                            [
                                'id' => 'portfolio-1',
                                'image' => 'images/github-page.png',
                                'title' => 'GitHub Pages',
                                'description' => 'Web Pages, Responsive Design',
                                'skills' => 'HTML/CSS, JavaScript, Responsive Design, Git, GitHub',
                                'note' => '',
                                'link' => 'https://yasuhiro112358.github.io/',
                            ],
                        ];
                    @endphp

                    @foreach ($portfolioItems as $item)
                        <div class="h-[600px]">
                            <x-portfolio-item :id="$item['id']" :image="$item['image']" :title="$item['title']" :description="$item['description']"
                                :skills="$item['skills']" :note="$item['note']" :link="$item['link']" />
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Right column -->
            {{-- <div class="lg:sticky lg:top-32"> --}}
            <div class="">
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
                {{-- Profile card --}}
                <x-profile-card :profile="$profiles[0]" />
            </div>
        </div>
    </div>
@endsection
