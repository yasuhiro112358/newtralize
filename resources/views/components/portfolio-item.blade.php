<div class="w-full h-full bg-white rounded-2xl overflow-hidden p-4 sm:p-6 shadow" id="{{ $id }}">
    {{-- Image --}}
    <div class="overflow-hidden rounded-xl mb-4 shadow">
        <img class="w-full h-48 object-cover object-top" src="{{ asset($image) }}" alt="">
    </div>

    {{-- Description --}}
    <div class="">
        <h3 class="text-xl font-bold">{{ $title }}</h3>
        <h4 class="text-sm mb-3 text-gray-500">{{ $description }}</h4>
        <p class="mb-2">
            <span class="font-bold">Related Skills</span>: {{ $skills }}
        </p>
        <p class="mb-4">
            <span class="font-bold">Note</span>:<br>
            {!! nl2br(e($note)) !!}
        </p>

        <a href="{{ $link }}" target="_blank" class="block bg-blue-950 text-white text-center py-2 rounded-full hover:bg-blue-800 transition-colors duration-300 w-5/6 mx-auto mt-8">
            Check it!
        </a>
    </div>
</div>
