@extends("layouts.postlist")

@section("title")
	Category | {{$category->name}}
@endsection

@section("content")
  <!-- All Posts -->
	<section class="py-10 bg-white">
		<div class='px-8 my-container'>
			<header class="section-title">
				<h3 class="capitalize">
          {{$category->name}} Posts
				</h3>
				<span></span>
      </header>
      @if ($category->posts()->count() > 0)
        <div class="grid grid-cols-3 gap-10">
          @foreach ($category->posts()->get() as $post)
            <x-post-tab :post="$post" />
          @endforeach
        </div>
      @else
        <h3 class="text-3xl text-center text-gray-700 md:text-4xl">
          No posts in this category!
        </h3>
      @endif
		</div>
	</section>
@endsection
