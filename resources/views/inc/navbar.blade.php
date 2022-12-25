<div class="bg-white">
	<nav class="container mx-auto px-4 flex py-4 justify-between">
	<div class="flex items-center justify-between">
                    <a class="text-xl font-bold text-black-700 md:text-2xl hover:text-blue-400" href="{{route('welcome')}}">Property Portal </a>
                </div>
		<div class="flex lg:hidden items-center">
			<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
		</div>
    <div class="hidden lg:flex gap-x-6 items-center">
      @foreach($categories->splice(0, 4) as $category)
				<x-nav-link :page="[ 'name' => $category->name, 'url' => '/categories/' . $category->name ]" />
			@endforeach

		</div>
	</nav>
</div>
