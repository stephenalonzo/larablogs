@extends('layout')

@section('content')

@if (session()->has('message'))
    {{ session('message') }}
@endif

<section class="px-4 py-6">
    <div class="container mx-auto space-y-6">
        <h1 class="font-semibold text-3xl">Create a post</h1>
        <form action="{{ route('blog.store') }}" method="post" class="space-y-4">
            @csrf
            <input type="text" name="title" id="" class="rounded-md border border-gray-300 w-full" placeholder="Enter title">
            <textarea id="editor" name="description"></textarea>
            {{-- <input type="text" name="category" id="" class="rounded-md border border-gray-300 w-full" placeholder="Enter tags (e.g. design, ux, ui)"> --}}
            <select name="category" id="">
                <option value="1">Design</option>
            </select>
            <button type="submit" class="rounded-md px-4 py-2 bg-purple-700 text-white font-semibold">Submit</button>
        </form>
    </div>
</section>
@endsection