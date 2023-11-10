@extends('layout')

@section('content')

@if (session()->has('message'))
    {{ session('message') }}
@endif
<section class="px-4 py-6">
    <div class="container mx-auto space-y-8">
        <div class="space-y-4 flex flex-col items-center justify-center text-center">
            <h1 class="text-3xl font-semibold">{{ $post->title }}</h1>
            <div class="flex flex-row items-center space-x-4">
                <i class="fas fa-user-circle text-3xl"></i>
                <div>
                    <h5 class="font-semibold">Lorem, ipsum.</h5>
                    <p class="text-gray-500 text-sm">{{ date('F m, Y') }}</p>
                </div>
            </div>
        </div>
        <div>
            {!! $post->description !!}
        </div>
        @auth
        <div class="flex flex-row items-center justify-end space-x-4">
            <a href="{{ route('blog.edit', $post->id) }}" class="underline underline-offset-4 font-medium">Edit</a>
            <form action="{{ route('blog.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="font-medium text-purple-700">Delete</button>
            </form>
        </div>
        @endauth
    </div>
</section>
{{-- FEATURED POST --}}
<section class="px-4 py-6">
    <div class="container mx-auto">
        <h2 class="font-semibold text-xl"></h2>
    </div>
</section>
@endsection