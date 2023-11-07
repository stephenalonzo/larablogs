@extends('layout')

@section('content')
<section class="px-4 py-6">
    <div class="container mx-auto space-y-4 flex flex-col items-center justify-center">
        <div class="space-y-2 text-center">
            <h3 class="text-sm font-semibold text-purple-700">Our Blog</h3>
            <h1 class="text-3xl font-semibold">The latest writings from our team</h1>
        </div>
        <p class="text-gray-500">The latest industry news, interviews, technologies, and resources.</p>
    </div>
</section>
{{-- FEATURED POST --}}
<section class="px-4 py-6">
    <div class="container mx-auto space-y-6 flex flex-col items-start">
        <img src="{{ asset('images/design-banner.jpg') }}" alt="" class="w-full h-full">
        <div class="flex flex-row items-center justify-between w-full">
            <div class="space-y-2">
                <h3 class="text-xl font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur?</h3>
                <p class="text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis perspiciatis inventore quod delectus dolorum mollitia?</p>
            </div>
            <div class="space-x-2 flex flex-row items-center">
                <img src="{{ asset('images/49.png') }}" alt="" class="w-12">
                <div>
                    <h5 class="font-semibold">Lorem, ipsum.</h5>
                    <p class="text-gray-500 text-sm">November 06, 2023</p>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="container mx-auto">
{{-- OTHER POSTS --}}
<section class="px-4 py-6">
    <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-3 space-y-6">
                <form 
                    action="" 
                    method="post"
                >
                    <input type="text" name="" id="" class="bg-white px-4 py-2 rounded-md border-1 border-gray-300" placeholder="Search">
                </form>
                <h5 class="text-sm font-semibold text-purple-700">Blog categories</h5>
                <ul class="space-y-4 font-semibold">
                    <li><a href="">Lorem, ipsum.</a></li>
                    <li><a href="">Lorem, ipsum.</a></li>
                    <li><a href="">Lorem, ipsum.</a></li>
                    <li><a href="">Lorem, ipsum.</a></li>
                    <li><a href="">Lorem, ipsum.</a></li>
                    <li><a href="">Lorem, ipsum.</a></li>
                    <li><a href="">Lorem, ipsum.</a></li>
                </ul>
            </div>
            <div class="col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-6 space-y-6 flex flex-col items-start">
                        <img src="{{ asset('images/design-banner.jpg') }}" alt="" class="w-full h-full">
                        <div class="flex flex-col items-start justify-between space-y-6 w-full">
                            <div class="space-y-2">
                                <a href="#"><h3 class="text-xl font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur?</h3></a>
                                <p class="text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis perspiciatis inventore quod delectus dolorum mollitia?</p>
                            </div>
                            <div class="space-x-2 flex flex-row items-center">
                                <img src="{{ asset('images/49.png') }}" alt="" class="w-12">
                                <div>
                                    <h5 class="font-semibold">Lorem, ipsum.</h5>
                                    <p class="text-gray-500 text-sm">November 06, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 space-y-6 flex flex-col items-start">
                        <img src="{{ asset('images/design-banner.jpg') }}" alt="" class="w-full h-full">
                        <div class="flex flex-col items-start justify-between space-y-6 w-full">
                            <div class="space-y-2">
                                <a href="#"><h3 class="text-xl font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur?</h3></a>
                                <p class="text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis perspiciatis inventore quod delectus dolorum mollitia?</p>
                            </div>
                            <div class="space-x-2 flex flex-row items-center">
                                <img src="{{ asset('images/49.png') }}" alt="" class="w-12">
                                <div>
                                    <h5 class="font-semibold">Lorem, ipsum.</h5>
                                    <p class="text-gray-500 text-sm">November 06, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection