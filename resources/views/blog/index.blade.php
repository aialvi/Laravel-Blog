@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blogs
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-1/5  m-auto">
        <a 
            href="/blog/create"
            class="bg-blue-900 uppercase bg-transparent text-center text-gray-100 text-lg block font-bold py-4 px-5 rounded-2xl">
            Create post
        </a>
    </div>
@endif



@foreach ($posts as $post)

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2016/03/26/13/09/workspace-1280538_960_720.jpg" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post->title }}
        </h2>

        <span class="text-gray-500">
            By <span class="font-bold text-gray-800">{{ $post->user->name }}</span>, 
            Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description }}
        </p>

        <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-200 text-gray-800 text-md font-bold py-2 px-8 rounded-3xl">
            Keep Reading
        </a>
        

    </div>
</div>
    
@endforeach

    

@endsection