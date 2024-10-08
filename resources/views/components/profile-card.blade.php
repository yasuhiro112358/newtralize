<div class="w-full h-full bg-white rounded-2xl shadow overflow-hidden px-4 py-8 md:px-8">
    <div class="">
        <div class="">
            <!-- プロフィール画像 -->
            <img class="w-3/4 max-w-36 h-auto rounded-full mx-auto mb-4" src="{{ asset($profile['image']) }}" alt="Profile Image">

            <!-- 名前 -->
            <h2 class="text-center text-xl font-bold mb-2">{{ $profile['name'] }}</h2>

            <!-- 自己紹介 -->
            <p class="text-gray-600 mb-4">{!! nl2br(e($profile['description'])) !!}</p>

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
