@extends("layouts.postlist")

@section("title")
	Home
@endsection

@section("content")
	<!-- hero (mobile) -->
	<section class="relative h-screen md:hidden">
      <div class="absolute z-10 w-full h-full px-4 py-10 text-white" style="background-color: rgba(0, 0, 0, 0.8)">
        <div class="flex gap-x-2">
          <span class="self-center w-4 h-1 bg-primary"></span>
          <span class="capitalize">
            {{$posts[0]->category->name}}
          </span>
        </div>
        <h1 class="mb-2 text-4xl font-bold">
          {{$posts[0]->title}}
        </h1>
        <h3 class="mb-4">
          {{$posts[0]->desc}}
        </h3>
        <p>
          <a href="/posts/{{$posts[0]->id}}">
            <button class="btn btn-primary">Read More</button>
          </a>
        </p>
      </div>
		<div class="w-full h-full overflow-hidden bg-gray-500">
      <img class="object-cover w-full -z-10" src="/imgs/mock.jpg" />
    </div>
  </section>

	<!-- hero -->
	<section class="hidden h-screen md:flex">
		<div class="flex items-center justify-end w-1/2">
      <div class="z-10 p-6 py-10 translate-x-1/2 bg-white w-90 drop-shadow-2xl">
        <div class="flex gap-x-2">
          <span class="self-center w-4 h-1 bg-primary"></span>
          <span class="capitalize">
            {{$posts[0]->category->name}}
          </span>
        </div>
        <h1 class="mb-2 text-4xl font-bold">
          {{$posts[0]->title}}
        </h1>
        <h3 class="mb-4">
          {{$posts[0]->desc}}
        </h3>
        <p>
          <a href="/posts/{{$posts[0]->id}}">
            <button class="btn btn-primary">Read More</button>
          </a>
        </p>
      </div>
		</div>
		<div class="w-full bg-gray-500">
      <img class="object-cover w-full drop-shadow-2xl -z-10" style="height: 110%" src="/imgs/mock.jpg" />
    </div>
  </section>

	<!-- Recent Posts -->
	<section class="py-10 bg-white">
		<div class='px-8 my-container'>
			<header class="section-title">
				<h3>
					Recent Posts
				</h3>
				<span></span>
			</header>

			<div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
				@foreach ($posts->take(3) as $post)
					<x-post-tab :cover="false" :post="$post" />
				@endforeach
			</div>
		</div>
	</section>

	<!-- Latest Posts -->
	<section class="py-10 bg-white">
		<div class='px-8 my-container'>
			<header class="section-title">
				<h3>
					Latest Posts
				</h3>
				<span></span>
			</header>

			<div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
				@foreach ($posts->take(6) as $post)
					<x-post-tab :post="$post" />
				@endforeach
			</div>
		</div>
	</section>

	<!-- Featured Posts -->
	<section class="py-10 bg-white">
		<div class='px-8 my-container'>
			<header class="section-title">
				<h3>
					Featured Posts
				</h3>
				<span></span>
			</header>

			<div class="grid grid-cols-1 gap-10 md:grid-cols-2">
        @foreach ($posts->take(2) as $post)
					<x-post-tab :post="$post" />
				@endforeach
			</div>
		</div>
	</section>

	<!-- All Posts -->
	<section class="py-10 bg-white">
		<div class='px-8 my-container'>
			<header class="section-title">
				<h3>
					All Posts
				</h3>
				<span></span>
			</header>

			<div class="flex flex-col-reverse lg:flex-row gap-x-10">
				<div>
					<div class="grid grid-cols-1 gap-10 md:grid-cols-2">
						@foreach ($posts->splice(0, 4) as $post)
							<x-post-tab :post="$post" />
						@endforeach
					</div>
				</div>
				<div class="basis-1/2">
					<h3>
						Featured Category
					</h3>
					<div class="flex flex-col gap-y-2">
						<div class="flex bg-gray-500">
							<h4 class="px-2 py-1 bg-white">
								Travel
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
