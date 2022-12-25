<div class="w-full">
    <a href="/blog/posts/{{$post->slug}}">
        @if ($cover)
            <img class="object-cover w-full -mb-10 shadow-md h-2/5 -z-10" src="{{url('/uploads')}}/{{$post->cover}}" />
        @endif
        <div @class([
            "bg-gray-100",
            "z-10",
            "relative" => $cover,
            "w-11/12" => $cover,
            "px-6",
            "py-4",
            "shadow-md"
            ])>
            <div class="flex gap-x-2">
                <span class="self-center w-4 h-1 bg-primary"></span>
                <span>
                    Lifestyle
                </span>
            </div>
            <h2 class="mb-2 text-2xl font-bold tracking-wider duration-300 ease-in-out font-dm-serif-display hover:text-primary">
                {{$post->title}}
            </h2>
            <div class="flex items-center mb-4 text-gray-700 gap-x-4">
                {{date_format($post->updated_at, "M j, Y")}} <x-circle className="text-gray-700" /> {{$post->reading_time}} min read
            </div>
            <div>
                <a class="flex no-underline link link-primary gap-x-2" href="/blog/posts/{{$post->slug}}">
                    Read Article <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </a>
</div>
