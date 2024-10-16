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
                    <!-- プロフィール画像 -->
                    <img class="w-3/4 max-w-36 h-auto rounded-full mx-auto" src="{{ asset($profile['image']) }}"
                        alt="Profile Image">
                    <!-- 名前 -->
                    <p class="text-center text-xl font-bold">
                        {{ $profile['name'] }}
                    </p>
                    <!-- 肩書き -->
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
                    <ul class="list-disc list-inside mb-2">
                        <li>ビジネス文書の日本語と英語の相互翻訳</li>
                        <li>技術文書の日本語と英語の相互翻訳</li>
                        <li>Webサイトの制作</li>
                    </ul>
                    <p class="mb-2">
                        工学系大学院でプログラミングを用いた建築構造解析研究の経験、日本の大企業での実務経験、オーストラリアでの海外留学経験、webアプリケーションのチーム開発の経験から、上記の内容でお手伝いできると考えています。
                    </p>
                </div>

                <div class="mb-6">
                    <h3 class="text-2xl border-s-4 border-blue-950 ps-2 mb-2">
                        Achievements
                    </h3>
                    <p class="mb-2">
                        <a href="https://www.freelancer.com/u/nabeyasu" target="_blank"
                            class="underline">Freelancer.com</a>で翻訳仕事を中心に受注経験があります。クライアントからは継続的に星５つ評価をいただいています。
                    </p>
                    <img src="{{ asset('images/freelancer-top.png') }}" alt="freelancer-top">
                    <img src="{{ asset('images/freelancer-reviews.png') }}" alt="freelancer-reviews" class="mb-2">
                    <p class="mb-4">
                        下の図は、成果品の例です。会社定款の内容を日本語から英語に翻訳しました。日本語の会社定款を英語に翻訳する際には、日本の法律に詳しくないと正確な翻訳が難しいですが、私は宅地建物取引士免許やビジネス実務法務検定の資格を持っており、日本の法律についてビジネスで使える程度に知識があります。
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
                        ※日本の行政書士等の資格を持っていないため、法的に有効な書類を作成するための翻訳はできませんが、一般的にビジネス使用目的の書類の翻訳が可能です。
                    </p>

                    <p>
                        その他の業務実績として、讃美歌の翻訳（英語→日本語）の経験があります。こちらは、拍の数や抽象的な意味を合わせる必要があるためハイレベルですが、バンドマン経験を活かして翻訳を行い、ご満足いただきました。
                    </p>
                </div>

                <div class="mb-6">
                    <h3 class="text-2xl border-s-4 border-blue-950 ps-2 mb-2">
                        Professional Experiences
                    </h3>
                    英語論文の執筆、発表、翻訳の実績あり。
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
                    アプリケーションの開発・プレゼンの実績あり。
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
            </div>
        </div>
    </div>
@endsection
