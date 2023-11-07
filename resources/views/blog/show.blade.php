@extends('layout')

@section('content')
<section class="px-4 py-6">
    <div class="container mx-auto space-y-8">
        <div class="space-y-4 flex flex-col items-center justify-center text-center">
            <h3 class="text-sm font-semibold text-purple-700">Our Blog</h3>
            <h1 class="text-3xl font-semibold">{{ $post->title }}</h1>
            <div class="space-x-2 flex flex-row items-center">
                <img src="{{ asset('images/49.png') }}" alt="" class="w-12">
                <div>
                    <h5 class="font-semibold">Lorem, ipsum.</h5>
                    <p class="text-gray-500 text-sm">{{ date('F m, Y') }}</p>
                </div>
            </div>
        </div>
        <div>
            {!! $post->description !!}
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