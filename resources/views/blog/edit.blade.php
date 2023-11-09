@extends('layout')

@section('content')

<section class="px-4 py-6">
    <div class="container mx-auto space-y-6">
        <h1 class="font-semibold text-3xl">Edit post</h1>
        <form action="{{ route('blog.update', $post->id) }}" method="post" class="space-y-4">
            @csrf
            @method('PATCH')
            <input type="text" name="title" id="" class="rounded-md border border-gray-300 w-full" value="{{ $post->title }}">
            <textarea id="editor" name="description">
                {!! $post->description !!}
            </textarea>
            <input type="text" name="tags" id="" class="rounded-md border border-gray-300 w-full" value="{{ $post->tags }}">
            <button type="submit" class="rounded-md px-4 py-2 bg-green-700 text-white font-semibold">Update</button>
        </form>
    </div>
</section>
@endsection