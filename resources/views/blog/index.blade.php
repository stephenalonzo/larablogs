@extends('layout')

@section('content')
<section class="px-4 py-6">
    <div class="container mx-auto space-y-8 flex flex-col items-center justify-center">
        <div class="space-y-2 text-center">
            <h3 class="text-sm font-semibold text-purple-700">Larablogs</h3>
            <h1 class="text-4xl font-semibold">The latest writings from our team</h1>
            <p class="text-gray-400">The latest industry news, interviews, technologies, and resources.</p>
        </div>
        <form action="/?search=" method="GET">
            <div class="relative">
                <input type="text" name="search" id="" class="pl-9 pr-4 py-2 rounded-md border border-gray-300"
                @if (isset($_GET['search']))
                    value="{{ $_GET['search'] }}"
                @else
                    placeholder="Search"
                @endif>
                <i class="fas fa-search absolute top-1/2 transform -translate-y-1/2 left-0 text-gray-400 pl-3"></i>
            </div>
        </form>
    </div>
</section>
<hr class="container mx-auto">
<section class="px-4 py-6">
    <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-8">
            @foreach ($posts as $post)
            <div class="col-span-4 gap-4 flex flex-col items-start justify-between">
                <img src="{{ asset('storage/' . $post->image) }}" alt="" class="w-full h-48 rounded-md object-cover">
                <div class="p-2 rounded-full bg-purple-200 text-xs space-x-1 text-purple-700">
                    <a href="/?category={{ $post->category }}" class="px-2 py-1 rounded-full bg-white text-purple-700">
                        {{ $post->category }}
                    </a>
                    <span class="text-xs">{{ $post->mins_to_read }} min read</span>
                </div>
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
                        <p class="text-gray-500 truncate">
                            {{ strip_tags($post->description) }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<div class="px-4 py-6">
    {{ $posts->links() }}
</div>
@endsection