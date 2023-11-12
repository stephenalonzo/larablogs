@extends('layout')

@section('content')

@if (session()->has('update_success'))
<div class="px-4 py-2 rounded-md bg-green-100 text-green-500 w-full">
    {{ session('update_success') }}
</div>
@endif
@if (session()->has('comment_store_success'))
<div class="px-4 py-2 rounded-md bg-green-100 text-green-500 w-full">
    {{ session('comment_store_success') }}
</div>
@endif
@if (session()->has('comment_destroy_success'))
<div class="px-4 py-2 rounded-md bg-green-100 text-green-500 w-full">
    {{ session('comment_destroy_success') }}
</div>
@endif
<section class="px-4 py-6">
    <div class="container mx-auto text-left">
        <a href="/" class="w-24 flex flex-row items-center space-x-4 px-4 py-2 rounded-md bg-purple-700 text-white font-medium">
            <i class="fas fa-arrow-left"></i>
            <span>Back</span>
        </a>
    </div>
</section>
<section class="px-4 py-6">
    <div class="container mx-auto space-y-8">
        <div class="space-y-4 flex flex-col items-center justify-center text-center">
            <div class="px-3 py-1 rounded-full bg-purple-200 text-xs text-purple-700">
                {{ $post->category }}
            </div>
            <h1 class="text-3xl font-semibold">{{ $post->title }}</h1>
            <div class="flex flex-row items-center space-x-4">
                <h5 class="font-semibold text-base text-purple-700">
                    {{ $post->user->name }}
                </h5>
                <p class="text-gray-500 text-xs">{{ date('F m, Y') }}</p>
            </div>
        </div>
        <div>
            {!! $post->description !!}
        </div>
        @auth
        <div class="flex flex-row items-center justify-end space-x-4">
            <a href="{{ route('blog.edit', $post->id) }}" class="underline underline-offset-4 font-medium">Edit</a>
            <form action="{{ route('blog.destroy', $post->id) }}" method="post" class="m-0 p-0">
                @csrf
                @method('DELETE')
                <button type="submit" class="font-medium text-purple-700" onclick="confirmDelete()">Delete</button>
            </form>
        </div>
        @endauth
    </div>
</section>
<hr>
{{-- COMMENTS --}}
<section class="px-4 py-6">
    <div class="container mx-auto">
        <form action="{{ route('blog.show', $post->id) }}/comment" method="POST" class="space-y-4">
            @csrf
            <textarea name="comment" class="w-full px-4 rounded-md border border-gray-200 resize-none" placeholder="Add a comment..."></textarea>
            @error('comment')
                <p class="text-red-500">
                    {{ $message }}
                </p>
            @enderror
            <button type="submit" class="rounded-md px-4 py-2 bg-purple-700 text-white font-semibold">Comment</button>
        </form>
    </div>
</section>
<section class="px-4 py-6">
    <div class="container mx-auto">
    @foreach ($post->comments as $comment)
            <div class="space-y-4">
                <div class="flex flex-row items-center justify-between w-full">
                    <div class="flex flex-row items-center space-x-4">
                        <i class="fas fa-user-circle text-3xl text-gray-300"></i>
                        <div class="flex flex-col">
                            <h5 class="font-semibold">{{ $comment->user->name }}</h5>
                            <p class="text-gray-300 text-xs">{{ date('F d, Y', strtotime($comment->created_at)) }}</p>
                        </div>
                    </div>
                    <form action="{{ route('comment.destroy', $comment->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="fas fa-trash text-purple-700"></button>
                    </form>
                </div>
                <p>{{ $comment->comment }}</p>
            </div>
            @endforeach
        </div>
    </section>
@endsection

<script>
    function confirmDelete()
    {
        let f = confirm('Are you sure you want to delete this post');

        if (f == false)
        {

            return event.preventDefault();

        }
    }
</script>