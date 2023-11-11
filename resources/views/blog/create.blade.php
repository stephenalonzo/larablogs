@extends('layout')

@section('content')

@if (session()->has('message'))
    {{ session('message') }}
@endif

<section class="px-4 py-6">
    <div class="container mx-auto space-y-6">
        <h1 class="font-semibold text-3xl">Create a post</h1>
        <form action="{{ route('blog.store') }}" method="post" class="space-y-4" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" id="" class="rounded-md border border-gray-300 w-full" placeholder="Enter title">
            @error('title')
                <p class="text-red-500">
                    {{ $message }}
                </p>
            @enderror
            <textarea id="editor" name="description"></textarea>
            @error('description')
                <p class="text-red-500">
                    {{ $message }}
                </p>
            @enderror
            {{-- <input type="text" name="category" id="" class="rounded-md border border-gray-300 w-full" placeholder="Enter tags (e.g. design, ux, ui)"> --}}
            <div class="flex flex-row items-center justify-between">
                <div class="flex flex-row items-center space-x-4">
                    <label for="" class="font-semibold">Choose a category:</label>
                    <select name="category" id="" class="rounded-md border border-gray-300">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                @error('category')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                @enderror
                <div class="flex flex-row items-center space-x-4">
                    <label for="" class="font-semibold w-1/2">Upload an image:</label>
                    <input type="file" name="image" id="" class="px-4 py-2 rounded-md border border-gray-300 w-full">
                </div>
            </div>
            <button type="submit" class="rounded-md px-4 py-2 bg-purple-700 text-white font-semibold">Submit</button>
        </form>
    </div>
</section>
@endsection