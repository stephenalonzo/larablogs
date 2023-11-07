@extends('layout')

@section('content')
<section class="px-4 py-6">
    <div class="container mx-auto space-y-4 flex flex-col items-center justify-center">
        <div class="space-y-2 text-center">
            <h3 class="text-sm font-semibold text-purple-700">Our Blog</h3>
            <h1 class="text-3xl font-semibold">{{ $post->title }}</h1>
        </div>
        <p class="text-gray-500">{{ $post->description }}</p>
        <div class="space-x-2 flex flex-row items-center">
            <img src="{{ asset('images/49.png') }}" alt="" class="w-12">
            <div>
                <h5 class="font-semibold">Lorem, ipsum.</h5>
                <p class="text-gray-500 text-sm">November 06, 2023</p>
            </div>
        </div>
    </div>
</section>
{{-- FEATURED POST --}}
<section class="px-4 py-6">
    <div class="container mx-auto">
        <h2 class="font-semibold text-xl"></h2>
    </div>
</section>
@endsection