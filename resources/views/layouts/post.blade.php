@extends('layouts.base')


@section('title')
    {{ $post->title }}
@endsection

@section('errors')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div x-init="setInterval(() => show = false, 3000)" x-transition.duration.2000ms x-data="{ show: true }" x-show="show"
                class="shadow-lg alert alert-error">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 stroke-current" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ $error }}</span>
                </div>
                <div class="flex-none">
                    <button class="btn btn-sm btn-error">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            </div>
        @endforeach
    @endif
@endsection

@section('content')
    <!-- Banner (mobile) -->
    <section class="bg-white md:hidden">

        <div class="py-2">
            <img src="{{ url('/uploads') }}/{{ $post->cover }}" style="max-height: 50vh" class="object-cover w-full"
                alt="">

            <img src="/i" style="max-height: 50vh" class="object-cover w-full" />
        </div>
        <div class="my-container">
            <div>
                <h1 class="mb-4 text-4xl font-medium tracking-wider capitalize font-dm-serif-display"
                    style="overflow-wrap: anywhere">
                    {{ $post->title }}
                </h1>
            </div>
            <div class="flex gap-x-2">
                <div>
                    <img src="{{ url('/images') }}/{{ $post->author->image ?? 'person.png' }}" class="w-10 h-10 rounded-full"
                        alt="">

                </div>
                <div>
                    <span class="self-center">
                        {{ $post->author_username }}
                    </span>
                    <div class="flex gap-x-4">
                        <span class="self-center text-gray-500">
                            {{ date_format($post->updated_at, 'M j, Y') }}
                        </span>
                        <x-circle className="self-center text-gray-500" />
                        <span class="self-center text-gray-500">
                            {{ $post->reading_time }} min read
                        </span>
                    </div>
                </div>
            </div>
            <div class="my-2">
                <div class="flex items-center justify-end mx-4 gap-x-4">
                    <x-social-btn-fb :post="$post" />
                    <x-social-btn-twitter :post="$post" />
                </div>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class="relative items-end justify-center hidden bg-gray-500 bg-center md:flex"
        style="height: 60vh; background-image: url('/uploads/{{ $post->cover }}')">
        &nbsp;
        <div class="p-6 py-10 translate-y-1/2 bg-white my-container drop-shadow-2xl">
            <header>
                <div class="flex gap-x-2">
                    <span class="self-center w-4 h-1 bg-primary"></span>
                    <span>
                        {{ $post->category->name }}
                    </span>
                </div>
                <h1 class="mb-4 text-6xl font-medium tracking-wider font-dm-serif-display">
                    {{ $post->title }}
                </h1>
                <div class="flex flex-col items-center gap-y-2 sm:flex-row gap-x-6">
                    <div class="flex gap-x-2">
                        <img src="{{ url('/images') }}/{{ $post->author->image ?? 'person.jpg' }}" class="w-10 h-10 rounded-full"
                            alt="">
                        <span class="self-center">
                            {{ $post->author->name }}
                        </span>
                    </div>
                    <x-circle className="hidden sm:block self-center text-gray-500" />
                    <div class="flex gap-x-4">
                        <div class="self-center text-gray-500">
                            {{ date_format($post->updated_at, 'M j, Y') }}
                        </div>
                        <x-circle className="self-center text-gray-500" />
                        <div class="self-center text-gray-500">
                            {{ $post->reading_time }} min read
                        </div>
                    </div>
                    <div class="flex items-center gap-x-4 sm:ml-auto">
                        <x-social-btn-fb :post="$post" />
                        <x-social-btn-twitter :post="$post" />
                    </div>
                </div>
            </header>
        </div>
    </section>

    <section class="bg-white">
        <!-- Spacer -->
        <div class="bg-white md:h-52"></div>
        <section x-data="{
            content: '',
            init() {
                /*
        				fetch('/post.html')
        					.then(res => res.text())
                  .then(data => this.content = data)
              */
            }
        }" class="flex my-container">
            <!-- Sidebar Widget -->
            <div class="hidden basis-3/4 lg:block">
                <div class="sticky flex flex-col top-20 gap-y-10">
                    <div>
                        {{-- <i class="fa-solid text-primary fa-thumbs-up"></i> 20 Likes --}}
                    </div>
                    <div>
                        <i class="fa-solid text-primary fa-message"></i> {{ $commentcount }} Comments
                    </div>
                </div>
            </div>

            <div>
                <!-- Blog post content -->
                <!-- <div x-html="content" class="mb-20 lg:mx-32"></div> -->
                <div class="mb-20 lg:mx-32">
                @section('post-content')
                @show
            </div>

            <!-- Blog post footer -->
            <div
                class="flex flex-col items-center justify-center py-10 border-gray-300 md:flex-row gap-y-6 gap-x-10 border-y-2">
               
               @role('Admin')
                <div>
                        {{-- <i class="fa-solid fa-thumbs-up"></i> Like --}}
                        <a href="{{ route('posts.edit', $post->slug) }}"><button
                            class="px-4 py-2 font-semibold text-green-700 bg-transparent border border-green-500 rounded hover:bg-green-500 hover:text-white hover:border-transparent">
                            Edit
                        </button></a>

                  
                </div>
                @endrole
                <div class="flex gap-x-4">
                    <span class="self-center hidden lg:block">
                        Share the post:
                    </span>
                    <div class="flex gap-x-4">
                        <x-social-btn-fb :post="$post" />
                        <x-social-btn-twitter :post="$post" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<!-- Featured Posts -->
<section class="py-10 bg-white">
    <div class='px-8 my-container'>
        <div class="flex justify-between">
            <header class="section-title">
                <h3 class="capitalize">
                    You may also like
                </h3>
                <span></span>
            </header>
            <a class="self-center hidden text-xl no-underline link link-primary sm:block" href="/posts">
                View All
            </a>
        </div>

        <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts->take(2) as $posti)
                <x-post-tab :post="$posti" />
            @endforeach
        </div>
    </div>
</section>

@include('inc.comments', ['post' => $post])



@endsection
