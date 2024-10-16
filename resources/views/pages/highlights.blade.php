@extends('layouts.layout')

@section('content')
    @php
        // Profile data
        $profile = [
            'id' => 1,
            'image' => 'images/hiro.jpg',
            'name' => 'Yasuhiro WATANABE',
            'description' =>
                "Freelancer / Web Developer / Translator (Japanese/English) / Master of Engineering\n\nIn graduate school, I developed a program to analyze building vibrations during earthquakes. Subsequently, I worked for a major Japanese railway company for seven years. After studying in Australia for one year, I made a career change to the IT industry.",
        ];
    @endphp
    <div class="container w-full mx-auto px-4 py-8 md:w-3/5 lg:p-8">
        {{-- About Newtralize --}}
        <div class="mb-8 w-full">
            <h1 class="text-3xl font-bold border-b-2 border-blue-950 mb-4">
                Professional Highlights
            </h1>

            {{-- <div class="w-full h-full bg-white rounded-2xl shadow overflow-hidden px-4 py-8 md:px-8"> --}}
            <div class="w-full h-full bg-white rounded-2xl shadow px-4 py-8 md:px-8">
                {{-- <div class="">
                    <div class=""> --}}
                <!-- プロフィール画像 -->
                <img class="w-3/4 max-w-36 h-auto rounded-full mx-auto mb-4" src="{{ asset($profile['image']) }}"
                    alt="Profile Image">

                <!-- 名前 -->
                <p class="text-center text-xl font-bold mb-2">{{ $profile['name'] }}</p>

                <!-- 肩書き -->
                <p class="text-gray-600 mb-4">Freelancer / Web Developer / Translator (Japanese/English) / Master of
                    Engineering</p>

                <!-- LP -->
                <h3>できること</h3>
                <p>日本語と英語の相互翻訳。できる理由。大学時代に英語での論文執筆、発表経験あり。フィリピンへの語学留学経験。オーストラリアへの居住経験。</p>



                <h3>実績</h3>
                フリーランサー.comで翻訳の仕事を受注。翻訳の実績あり。
                会社定款の参考翻訳。契約書の参考翻訳。ビジネス書類の翻訳。
                讃美歌の翻訳（拍の数も合わせる必要があるためハイレベル）。
                ※日本の行政書士等の資格を持っていないため、法的に有効な書類を作成するための翻訳はできませんが、一般的なビジネス書類の翻訳は可能です。むしろ、宅地建物取引士免許やビジネス実務法務検定の資格を持っており、日本の法律には詳しいです。

                <h3>お客様からの評価</h3>
                <img src="{{ asset('images/freelancer-top.png') }}" alt="freelancer-top">
                <img src="{{ asset('images/freelancer-reviews.png') }}" alt="freelancer-reviews">
                星５つ評価をいただいています。

                <a href="https://www.freelancer.com/u/nabeyasu" target="_blank">freelancer.com</a>

                articles-of-incorporation-eng.png

                <div class="flex flex-row w-full gap-2">
                    <div class="flex-1">
                        <img src="{{ asset('images/articles-of-incorporation-ja.png') }}" alt="articles-of-incorporation-ja.png" class="border object-contain">
                    </div>
                    <div class="flex-1">
                        <img src="{{ asset('images/articles-of-incorporation-eng.png') }}" alt="articles-of-incorporation-eng" class="border object-contain">
                    </div>
                </div>

                <h3>経験</h3>
                英語論文の執筆、発表、翻訳の実績あり。
                <div class="flex flex-row w-full gap-2">
                    <div class="flex-1">
                        <img src="{{ asset('images/article-EESD.png') }}" alt="article-EESD" class="border object-contain">
                    </div>
                    <div class="flex-1">
                        <img src="{{ asset('images/article-EESD-2.png') }}" alt="article-EESD-2" class="border object-contain">
                    </div>
                </div>
                アプリケーションの開発・プレゼンの実績あり。
                <img src="{{ asset('images/kredo-present-1.png') }}" alt="kredo-present-1" class="border mb-2">

                <div class="flex flex-row w-full gap-2">
                    <div class="flex-1">
                        <img src="{{ asset('images/kredo-present-2.png') }}" alt="kredo-present-2" class="border object-contain">
                    </div>
                    <div class="flex-1">
                        <img src="{{ asset('images/kredo-present-3.png') }}" alt="kredo-present-3" class="border object-contain">
                    </div>
                </div>







                <p class="mb-8">ご連絡は下記のリンクからお願いします。</p>

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
                {{-- </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
