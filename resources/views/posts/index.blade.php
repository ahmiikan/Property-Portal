@extends("layouts.postlist")

@section("title")
	Posts
@endsection

@section("content")
	<!-- All Posts -->
	<section class="py-10 bg-white">
		<div class='px-8 my-container'>
			<header class="section-title">
				<h3>
					All Posts
				</h3>
				<span></span>
			</header>

			<div class="grid grid-cols-3 gap-10">
				@foreach ($posts as $post)
					<x-post-tab :post="$post" />
				@endforeach
			</div>
		</div>
	</section>

@endsection