@extends('layout')

@section('content')
<section class="px-4 py-6">
    <div class="container mx-auto space-y-6">
        <h1 class="font-semibold text-3xl">Edit a post</h1>
        <form action="{{ route('blog.update', $post->id) }}" method="post" class="space-y-4" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <input type="text" name="title" id="" class="rounded-md border border-gray-300 w-full" value="{{ $post->title }}">
            @error('title')
                <p class="text-red-500">
                    {{ $message }}
                </p>
            @enderror
            <textarea id="editor" name="description">
                {!! $post->description !!}
            </textarea>
            @error('description')
                <p class="text-red-500">
                    {{ $message }}
                </p>
            @enderror
            {{-- <input type="text" name="category" id="" class="rounded-md border border-gray-300 w-full" placeholder="Enter tags (e.g. design, ux, ui)"> --}}
            <div class="flex flex-row items-center justify-between">
                <div class="flex flex-row items-center space-x-4">
                    <label for="" class="font-semibold">Choose a category:</label>
                    <select name="category" id="">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->title == $post->category ? 'selected' : ''  }}>{{ $category->title }}</option>
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