<div class="max-w-sm mx-auto bg-white rounded-2xl shadow overflow-hidden">
    <div class="p-4">
        <div class="text-center">
            <!-- プロフィール画像 -->
            <img class="w-3/4 max-w-36 h-auto rounded-full mx-auto mb-4" src="{{ $image }}" alt="Profile Image">

            <!-- 名前 -->
            <h2 class="text-xl font-bold mb-2">{{ $name }}</h2>

            <!-- 自己紹介 -->
            <p class="text-gray-600 mb-4">{{ $description }}</p>

            <!-- Contactボタン -->
            <a href="{{ route('contact') }}" class="block bg-blue-950 text-white px-4 py-2 rounded-full hover:bg-blue-800 transition-colors duration-300 w-5/6 mx-auto">
                Contact
            </a>
        </div>
    </div>
</div>
