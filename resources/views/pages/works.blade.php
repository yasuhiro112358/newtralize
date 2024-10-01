@extends('layouts.layout')

@section('content')
    <!-- Main contents -->
    <div class="container mx-auto mb-4 mt-4">
        <!-- Portfolio -->
        <div class="mb-4">
            <div class="heading">
                <h1 class="text-3xl font-bold">Portfolio</h1>
                <hr class="border-3 border-gray-800 mt-2">
            </div>
        </div>

        <!-- Contents -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <!-- Portfolio Blog -->
            <div class="col-span-1">
                <div class="card border-2" id="portfolio-3">
                    <img class="w-full border" src="{{ asset('images/portfolio-blog.png') }}" alt="">
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Blog System</h3>
                        <h4 class="text-sm mb-3 text-gray-500">Web App, Responsive Design</h4>
                        <p class="mb-2">
                            <span class="font-bold">Related Skills</span>: PHP, CRUD, mysqli, password_hash(), SQL, MySQL,
                            MAMP, HTML/CSS,
                            Tailwind CSS, Responsive Design
                        </p>
                        <p class="mb-4">
                            <span class="font-bold">Note</span>:<br>
                            Feel free to touch it!<br>
                            [Username]: admin, [Password]: admin<br>
                            You can create your own account as well!
                        </p>
                        <a href="https://nabeyasu.com/portfolio-blog/" target="_blank"
                            class="block bg-black text-white text-center py-2 rounded">Check it</a>
                    </div>
                </div>
            </div>

            <!-- Structural Analysis -->
            <div class="col-span-1">
                <div class="card border-2" id="portfolio-4">
                    <img class="w-full border" src="{{ asset('images/show-seismic-wave.png') }}" alt="">
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Calculation API</h3>
                        <h4 class="text-sm mb-3 text-gray-500">Web API, Calculation for Architectural Structure, Developing
                        </h4>
                        <p class="mb-2">
                            <span class="font-bold">Related Skills</span>: Python, flask, pandas, REST API, PHP, MAMP, Docker,
                            Heroku, JavaScript, Chart.js, HTML/CSS, Tailwind CSS
                        </p>
                        <p class="mb-4">
                            <span class="font-bold">Note</span>:<br>
                            Heroku for API server<br>
                            Xserver for Web server
                        </p>
                        <a href="https://nabeyasu.com/architectual-structural-analysis/" target="_blank"
                            class="block bg-black text-white text-center py-2 rounded">Check it</a>
                    </div>
                </div>
            </div>

            <!-- Retail Website -->
            <div class="col-span-1">
                <div class="card border-2" id="portfolio-2">
                    <img class="w-full border" src="{{ asset('images/coffee-bean.png') }}" alt="">
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Retail Website</h3>
                        <h4 class="text-sm mb-3 text-gray-500">
                            Web Page, Responsive Design
                        </h4>
                        <p class="mb-4">
                            <span class="font-bold">Related Skills</span>: HTML/CSS, Tailwind CSS, Responsive Design
                        </p>
                        <a href="https://nabeyasu.com/portfolio-coffee-bean/" target="_blank"
                            class="block bg-black text-white text-center py-2 rounded">
                            Check it
                        </a>
                    </div>
                </div>
            </div>

            <!-- GitHub Pages -->
            <div class="col-span-1">
                <div class="card border-2" id="portfolio-1">
                    <img class="w-full border" src="{{ asset('images/github-page.png') }}" alt="">
                    <div class="p-4">
                        <h3 class="text-xl font-bold">GitHub Pages</h3>
                        <h4 class="text-sm mb-3 text-gray-500">Web Pages, Responsive Design</h4>
                        <p class="mb-4">
                            <span class="font-bold">Related Skills</span>: HTML/CSS, JavaScript, Responsive Design, Git,
                            GitHub
                        </p>
                        <a href="/index.html" target="_blank" class="block bg-black text-white text-center py-2 rounded">Check it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
