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
                        <h1 class="text-3xl font-bold border-b-2 border-blue-950">Works</h1>
                    </div>
                </div>

                <!-- Portfolio Items -->
                <div class="max-h-screen grid grid-cols-1 gap-6 overflow-y-scroll md:grid-cols-2 lg:grid-cols-2">
                    @php
                        $portfolioItems = [
                            [
                                'id' => 'portfolio-3',
                                'image' => 'images/portfolio-blog.png',
                                'title' => 'Blog System',
                                'description' => 'Web App, Responsive Design',
                                'skills' =>
                                    'PHP, CRUD, mysqli, password_hash(), SQL, MySQL, MAMP, HTML/CSS, Tailwind CSS, Responsive Design',
                                'note' =>
                                    "Feel free to touch it!\n[Username]: admin, [Password]: admin\nYou can create your own account as well!",
                                'link' => 'https://nabeyasu.com/portfolio-blog/',
                            ],
                            [
                                'id' => 'portfolio-4',
                                'image' => 'images/show-seismic-wave.png',
                                'title' => 'Calculation API',
                                'description' => 'Web API, Calculation for Architectural Structure, Developing',
                                'skills' =>
                                    'Python, flask, pandas, REST API, PHP, MAMP, Docker, Heroku, JavaScript, Chart.js, HTML/CSS, Tailwind CSS',
                                'note' => "Heroku for API server\nXserver for Web server",
                                'link' => 'https://nabeyasu.com/architectual-structural-analysis/',
                            ],
                            [
                                'id' => 'portfolio-2',
                                'image' => 'images/coffee-bean.png',
                                'title' => 'Retail Website',
                                'description' => 'Web Page, Responsive Design',
                                'skills' => 'HTML/CSS, Tailwind CSS, Responsive Design',
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
                                'link' => '/index.html',
                            ],
                            [
                                'id' => 'portfolio-sample',
                                'image' => '',
                                'title' => 'Sample',
                                'description' => 'Web Pages, Responsive Design',
                                'skills' => 'HTML/CSS, JavaScript, Responsive Design, Git, GitHub',
                                'note' => '',
                                'link' => '',
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
                                "Freelancer / Web Developer / Translator (Japanese/English) / Master of Engineering\n\nIn graduate school, I developed a program to analyze building vibrations during earthquakes. Subsequently, I worked for a major Japanese railway company for seven years. After studying in Australia for one year, I made a career change to the IT industry.",
                        ],
                    ];
                @endphp
                {{-- Profile card --}}
                <x-profile-card :profile="$profiles[0]" />
            </div>
        </div>
    </div>
@endsection
