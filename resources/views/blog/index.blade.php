@extends('layout')

@section('content')
<section class="px-4 py-6">
    <div class="container mx-auto space-y-4 flex flex-col items-center justify-center">
        <div class="space-y-2 text-center">
            <h3 class="text-sm font-semibold text-purple-700">Larablogs</h3>
            <h1 class="text-3xl font-semibold">The latest industry news, interviews, technologies, and resources.</h1>
        </div>
        <form action="/?search=" method="GET">
            <div class="flex items-center">
                <input type="text" name="search" id="" class="px-4 py-2 rounded-l-md rounded-tl-md rounded-bl-md border border-gray-300"
                @if (isset($_GET['search']))
                    value="{{ $_GET['search'] }}"
                @else
                    placeholder="Search"
                @endif>
                <button type="submit" class="px-4 py-2 rounded-r-md rounded-tr-md rounded-br-md bg-purple-700 border border-purple-700 text-white font-semibold">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
</section>
<hr class="container mx-auto">
<section class="px-4 py-6">
    <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-6">
            @foreach ($posts as $post)
            <div class="col-span-4 gap-6 flex flex-col items-start justify-between">
                <img src="{{ asset('storage/' . $post->image) }}" alt="" class="w-full h-full rounded-md">
                <div class="flex flex-col items-start justify-between space-y-4 w-full">
                    <div class="flex flex-row items-center space-x-4">
                        <h5 class="font-semibold text-purple-700 text-base">{{ $post->user->name }}</h5>
                        <p class="text-gray-500 text-xs">{{ date('F d, Y', strtotime($post->created_at)) }}</p>
                    </div>
                    <div class="space-y-2 w-full">
                        <div class="flex flex-row items-center justify-between">
                            <a href="{{ route('blog.show', $post->id) }}">
                                <h3 class="text-xl font-semibold">{{ $post->title }}</h3>
                            </a>
                            <a href="{{ route('blog.show', $post->id) }}"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                        <p class="text-gray-500">
                            {{ strip_tags($post->description) }}
                        </p>
                    </div>
                    <a href="/?category={{ $post->category }}" class="px-3 py-1 rounded-full bg-purple-200 text-xs text-purple-700">
                        {{ $post->category }}
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection