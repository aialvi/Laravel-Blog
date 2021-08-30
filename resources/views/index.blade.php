@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-gray-700 text-5xl uppercase font-bold text-shadow-md pb-14">
                    Want to know how to become a better human?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Let's Find Out
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-2xl font-bold text-gray-600">
                Struggling to be a better human?
            </h2>
     

            <p class="py-8 text-gray-600 text-s pb-9">
            It's harder to be your best self when another person is giving orders. At the point when you're holding the reins, you're enabled to settle on the decisions and choices that guarantee your best self flourishes.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-bold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-gray-800 text-green-100">
        <h2 class="text-2xl pb-5 text-l"> 
        The 5 Most Important Things in Life
        </h2>

        <span class="font-bold block text-3xl py-3">
        Family
        </span>
        <span class="font-bold block text-3xl py-3">
        Friends
        </span>
        <span class="font-bold block text-3xl py-3">
        Love
        </span>
        <span class="font-bold block text-3xl py-3">
        Dream
        </span>
        <span class="font-bold block text-3xl py-3">
        Health
        </span>
    </div>

    <!-- <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div> -->

    <div class="sm:grid grid-cols-2 w-4/5 m-auto py-15 mt-10">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                   Happiness
                </span>

                <h3 class="text-xl font-bold py-10">
                Happiness is not the absence of problems, it’s the ability to deal with them. -- Steve Maraboli
                </h3>

                <a 
                    href="/blog"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Read More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection