
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Portal</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
</head>
<!-- <style>
        [x-cloak] {
            display: none !important;
        }
    </style> -->

<body>
    <div>
        <div class="bg-white" x-data="{ isOpen: false }">
            <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
                <div class="flex items-center justify-between">
                    <a class="text-xl font-bold text-gray-800 md:text-2xl hover:text-blue-400" href="#">Property
                        Portal </a>
                    <!-- Mobile menu button -->
                    <div @click="isOpen = !isOpen" class="flex md:hidden">
                        <button type="button"
                            class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                            aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd"
                                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div :class="isOpen ? 'flex' : 'hidden'"
                    class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                    <a class="text-sm font-bold text-gray-800 hover:text-blue-400" href="">Home</a>

                </div>
            </nav>
        </div>


        <div class="relative overflow-hidden cursor-pointer ">
        <img class=" object-cover bg-left w-full h-96" src="{{ asset('assets/css/page.jpg') }}" alt="img" />
    </div>
    <div class="absolute inset-1/4 top-56 ">
        <h4 class="mb-3 text-center font-bold text-black lg:text-5xl">Find Your Dream Home</h4>
        <p class="mb-2 text-2xl text-center font-bold text-white"> Best  properties in Pakistan</p>
    </div>


        <!-- Single Property -->
        <section class="px-4 py-4 bg-gray-200 lg:px-20 lg:py-8">
            <div class="flex flex-wrap lg:space-x-12">

                <div class="lg:w-3/5">
                    <h1 class="mb-4 text-2xl font-medium border-l-4	border-blue-600 px-3.5	 text-gray-900 lg:text-3xl">
                        {{ $property->title }}
                    </h1>
                    <div class="w-full  lg:w-36">
                        <div class="flex items-center  h-10   bg-green-400 rounded-br-lg">

                            <span class="font-bold ml-10 text-black"> For {{ $property->purpose }} </span>
                        </div>
                    
                    </div>
                    <br>
                    
                         
        

                    <img src="{{ url('/images') }}/{{ $property->images->first()->image ?? 'home.jpeg'}}" class="w-full"
                        alt="">
                        <div class="flex justify-end  ">
                            <svg class="h-10 w-10 mr-4 -mt-16 text-white fill-current hover:bg-red-700 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                            </svg>
                            
                        </div>
                        
                    <div class="flex mt-4 space-x-4">
                        @foreach ($property->images as $image)
                        <img src="{{ url('/images') }}/{{ $image->image}}" 
                        alt="property" class="w-12 lg:w-52">
                        @endforeach
                         
                            
                        {{-- <img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="property" class="w-12 lg:w-52">
                        <img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="property" class="w-12 lg:w-52">
                        <img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="property" class="w-12 lg:w-52"> --}}
                    </div>

                

                    <div class="mt-4">
                        <h4 class="text-2xl font-bold">Description </h4>
                        <p class="my-4"> {{ $property->description }}</p>                     
                    </div>
                </div>


              <div class="lg:w-1/3 lg:mt-28">


                        <div class="mx-5 min-h-screen grid place-content-center">
                           
                              <div class="bg-white py-8 px-10 text-center rounded-md shadow-lg transform -translate-y-20 sm:-translate-y-24 max-w-xs mx-auto">
                              @if($property->owner->roles->pluck('name')->first()=='Agent')
                                <a href="mailto:{{$property->owner->agent->email}}">
                                    <button  class="rounded-md bg-gradient-to-r from-blue-400 to-indigo-500 text-xl text-white pt-3 pb-4 px-8 inline">               {{$property->owner->agent->email}}
                                </button> </button>
                               </a>
                               <a href="tel:{{$property->owner->agent->cell}}"><button  class=" mt-10 mb-5 rounded-md bg-gradient-to-r from-blue-400 to-indigo-500 text-xl text-white pt-3 pb-4 px-8 inline"> {{$property->owner->agent->cell}}</button>
                               </a>
                              @else

                                <a href="mailto:{{$property->owner->email }}">
                                    <button  class="rounded-md bg-gradient-to-r from-blue-400 to-indigo-500 text-xl text-white pt-3 pb-4 px-8 inline"> {{$property->owner->email }}</button> </button>
                               </a>
                               <a href="tel:{{$property->owner->cell_no}}"><button  class=" mt-10 mb-5 rounded-md bg-gradient-to-r from-blue-400 to-indigo-500 text-xl text-white pt-3 pb-4 px-8 inline"> {{$property->owner->cell_no}}</button>
                              
                                @endif
                                    
                                
                              
                     
                                <h2 class="  font-semibold text-2xl mb-6">Start chatting</h2>
                                <p class="text-gray-600"></p>
                               <a href="{{ route('message.create',$property->user_id) }}"> <button class="rounded-md bg-gradient-to-r from-blue-400 to-indigo-500 text-xl text-white pt-3 pb-4 px-8 inline">Send a message</button></a>
                              </div> 
                              
                              



                              <div class="flex ..." style ="margin-top: -50px;">
                                 <div class="w-1/3 ...">
                                    <div  class=" bg-yellow-500 origin-top mt-3 mr-9 w-28 mt-5 mx-5 text-center" 
                                    style="margin-left: 60px;
                                        border-radius: 40px;">
                                        <div class="mt-5">Verified</div>
                                    </div>
                                </div>
                                <div class="w-2/3 ...">
                                    <img src="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/team-2-800x800.jpg" alt="..." class="shadow w-50 rounded-full max-w-full h-auto border-none" style="
                                        width: 100px;
                                        margin-left: 70px;
                                    "/>
                                </div>
                    </div>
                    <div class="ml-10 mt-10">

                           
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select an option</label> 
        <select id="countries" class="my-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-50 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected="" value="Change status">change Status</option>
        <option value="US">Unlist</option>
        </select>
        
        <div class="w-20 mb-3">
                        <div class="flex h-8 bg-green-400 rounded-br-lg">

                            <button type="submit" class="font-bold ml-5 text-black"> submit </button>
                        </div>
                    </div>
        </div> 

                        </div> 
                        
                </div>
               <div class="mt-4">
                <div class="flex flex-wrap">
                    <div class="w-full p-2 lg:w-1/2">
                        <div class="flex items-center h-full p-4 bg-gray-100 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-green-600"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            
                            <span class="font-medium">Price : {{ $property->price }}</span>
                        </div>
                    </div>
                    <div class="w-full p-2 lg:w-1/2">
                        <div class="flex items-center h-full p-4 bg-gray-100 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-green-600"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-medium">Area : {{ $property->size }} Marla</span>
                        </div>
                    </div>
                    <div class="w-full p-2 lg:w-1/2">
                        <div class="flex items-center h-full p-4 bg-gray-100 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-green-600"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-medium">Address : {{ $property->address }}</span>
                        </div>
                    </div>
                    <div class="w-full p-2 lg:w-1/2">
                        <div class="flex items-center h-full p-4 bg-gray-100 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-green-600"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-medium">Type : {{ $property->type }}</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

       

        <!-- footer -->
        <footer class="px-4 pt-12 pb-32 bg-gray-200 border-t border-gray-900 lg:0">

            <div class="lg:flex lg:justify-evenly">
                <div class="max-w-sm mt-6 text-center lg:mt-0">
                    <h6 class="mb-4 text-4xl font-semibold text-gray-700">Property Portal</h6>
                    <p></p>
                </div>
                <div class="mt-6 text-center lg:mt-0">
                    <h6 class="mb-4 font-semibold text-gray-700">Quick links</h6>
                    <ul>
                        <li> <a href="/" class="block py-2 text-gray-600">Home</a> </li>
                        <li> <a href="" class="block py-2 text-gray-600">About us</a> </li>
                        <li> <a href="" class="block py-2 text-gray-600">Contact Us</a> </li>
                    </ul>
                </div>
                <div class="mt-6 text-center lg:mt-0">
                    <h6 class="mb-4 font-semibold text-gray-700">Quick links</h6>
                    <ul>
                        <li> <a href="" class="block py-2 text-gray-600">Property</a> </li>
                        <li> <a href="" class="block py-2 text-gray-600">About us</a> </li>
                        <li> <a href="" class="block py-2 text-gray-600">Help</a> </li>
                    </ul>
                </div>
                <div class="mt-6 text-center lg:mt-0">
                    <h6 class="mb-4 font-semibold text-gray-700">Quick links</h6>
                    <ul>
                        <li> <a href="" class="block py-2 text-gray-600">FAQ</a> </li>
                        <li> <a href="" class="block py-2 text-gray-600">About us</a> </li>
                        <li> <a href="" class="block py-2 text-gray-600">New Property</a> </li>
                    </ul>
                </div>


            </div>
        </footer>
    </div>
</body>

</html>
