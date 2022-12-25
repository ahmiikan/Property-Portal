<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Property Portal</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link href="public\css\home.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

</head>

<body class="antialiased">
    <div>
        <div class="bg-white" x-data="{ isOpen: false }">
            <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
                <div class="flex items-center justify-between">

                    <a href="/" class="text-xl font-bold text-black-700 md:text-2xl hover:text-blue-400">Property Portal </a>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col mt-1 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                    <a class="text-sm text-black-700 hover:text-blue-400" href="">Home</a>
                    <a class="text-sm text-black-700 hover:text-blue-400" href="{{ route('posts.index') }}">Blog</a>
                    @if (Route::has('login'))

                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                    <a class="text-sm text-black-700 hover:text-blue-400" href="{{ route('dashboard') }}">Dashboard</a>

                    @else
                    <a href="{{ route('login') }}" class="text-sm text-center text-black-700 dark:text-black-500 hover:text-blue-400 ">Log in</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-center text-black-700 dark:text-black-500 hover:text-blue-400 ">Register</a>
                    @endif
                    @endauth

                    @endif



                </div>
            </nav>
        </div>
        <div class="relative overflow-hidden cursor-pointer " style="opacity: 0.5;">
            <img class=" object-cover bg-left w-full h-96" src="{{ asset('assets/css/page.jpg') }}" alt="img" />
        </div>
        <div class="absolute inset-1/4 top-56 ">
            <h4 class="mb-3 text-center font-bold text-black lg:text-5xl">Find Your Dream Home</h4>
            <p class="mb-2 text-2xl text-center font-bold text-black"> Search properties for sale in Pakistan</p>
        </div>
        <!-- property search section -->




        <div class="bg-clip-padding p-6 rounded search" style="
        background-color: black;
        margin-top: -22px;
        position: relative;
        top: -15px;
        opacity: 0.8;
        margin-left:105px;
        margin-right:105px;
        border-radius:20px">

            <div class="m-4 mt-5 lg:m-0">

                <div class="p-2 mt-5 mb-5 lg:flex lg:items-center lg:justify-center">

                    <form action="{{ route('property.findBySearchKeyAll') }}" method="get" class="space-y-4 lg:space-y-0 lg:flex lg:space-x-4 lg:flex-nowrap">
                        @csrf
                        <div>
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                      rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full
                       pl-10 p-3  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
                            </div>
                        </div>
                        <div class="">
                            <select class="w-full py-2.5 px-8 bg-white border border-gray-400 rounded outline-none focus:ring-2" name="type">
                                <option value="">Type</option>
                                <!-- <option>Apartment</option>
                        <option>Apartment</option> -->
                                <option value="home">home</option>
                                <option value="commercial">Commercial</option>
                                <!-- <option>Hotel</option> -->
                            </select>

                        </div>
                        <div>
                            <select class="w-full py-2.5 px-8 bg-white border border-gray-400 rounded outline-none focus:ring-2" name="city">
                                <option value="">select city</option>
                                @foreach ($cities as $city)
                                <option value="{{ $city->id}}">{{ $city->name}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="w-full p-2 border border-gray-400 rounded outline-none focus:ring-2" Placeholder="city" name="city"/> -->
                        </div>
                        <div>
                            <input type="number" class="w-full p-2 border border-gray-400 rounded outline-none focus:ring-2" placeholder="min" name="min" />
                        </div>
                        <div>
                            <input type="number" class="w-full p-2 border border-gray-400 rounded outline-none focus:ring-2" placeholder="max" name="max" />
                        </div>
                        <div>
                            <button class="px-8 py-2 text-blue-100 bg-gray-600 rounded">
                                Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- property search section end -->


        <!-- search property design  -->
        <section class="px-4 py-4 bg-gray-200 lg:px-32 lg:py-20">
            <div class="">
                <h1 class="text-2xl font-bold text-center text-black-600 lg:text-4xl">Search Properties</h1>
                <div class="flex justify-center">
                    <div class="w-40 h-1 bg-black rounded"></div>
                </div>
            </div>
            <div class=" flex flex-wrap mt-4 space-x-0 space-y-2 lg:flex lg:flex-wrap lg:mt-20">

                @if ($properties->count() == 0)
                No Properties found!
                @endif
                @foreach ($properties as $property)
                <div class=" flex-none my-1 px-1 w-full md:w-1/2  lg:w-1/3">


                    <div class=" w-full h-full bg-white shadow-xl rounded">
                        <div>
                            <img src="{{ url('/images') }}/{{ $property->images->first()->image ?? 'home.jpeg' }}" class="w-full h-56" alt="">

                        </div>
                        <div class="p-4">
                            <p class="text-xl font-semibold text-gray-900">{{ $property->title }}</p>
                            <a href="{{ route('property.show', $property->id) }}">
                                <p class="text-sm text-gray-900"> PKR {{ $property->price }} </p>

                                <p class="text-gray-700"></p>
                        </div>

                        <div class=" p-4 border-t border-gray-300 text-gray-700">
                            <div class="inline-flex items-center">
                                <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 293.334 293.334" style="enable-background:new 0 0 293.334 293.334;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path style="fill:#010002;" d="M146.667,0C94.903,0,52.946,41.957,52.946,93.721c0,22.322,7.849,42.789,20.891,58.878    c4.204,5.178,11.237,13.331,14.903,18.906c21.109,32.069,48.19,78.643,56.082,116.864c1.354,6.527,2.986,6.641,4.743,0.212    c5.629-20.609,20.228-65.639,50.377-112.757c3.595-5.619,10.884-13.483,15.409-18.379c6.554-7.098,12.009-15.224,16.154-24.084    c5.651-12.086,8.882-25.466,8.882-39.629C240.387,41.962,198.43,0,146.667,0z M146.667,144.358    c-28.892,0-52.313-23.421-52.313-52.313c0-28.887,23.421-52.307,52.313-52.307s52.313,23.421,52.313,52.307    C198.98,120.938,175.559,144.358,146.667,144.358z" />
                                            <circle style="fill:#010002;" cx="146.667" cy="90.196" r="21.756" />
                                        </g>
                                    </g>
                                </svg>
                                <span class="text-gray-900 font-bold"> {{ $property->address }}</span>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>




        <!-- Feature Property -->
        <!-- <section class="px-4 py-4 bg-gray-200 lg:px-32 lg:py-20">
            <div class="">
                <h1 class="text-2xl font-bold text-center text-black-600 lg:text-4xl">Feature Property</h1>
                <div class="flex justify-center">
                    <div class="w-40 h-1 bg-black rounded"></div>
                </div>
            </div>
            <div class="mt-4 space-x-0 space-y-2 lg:flex lg:flex-nowrap lg:space-x-4 lg:space-y-0 lg:mt-20">
                <a href="{{ route('property.index') }}">
                    <div class="wrapper bg-gray-400 antialiased text-gray-900">
                        <div>

                            <img src="https://source.unsplash.com/random/350x350" alt=" random image" class="w-full object-cover object-center rounded-lg shadow-md">

                            <div class="relative px-4 -mt-16  ">
                                <div class="bg-white p-6 rounded-lg shadow-lg">
                                    <div class="flex items-baseline">
                                        <span class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                                            New
                                        </span>
                                        <div class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                                            2 baths &bull; 3 rooms
                                        </div>
                                    </div>

                                    <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate">A random Title</h4>

                                    <div class="mt-1">
                                        $1800
                                        <span class="text-gray-600 text-sm"> /wk</span>
                                    </div>
                                    <div class="mt-4">
                                        <span class="text-teal-600 text-md font-semibold">4/5 ratings </span>
                                        <span class="text-sm text-gray-600">(based on 234 ratings)</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </a>
                <div class="wrapper bg-gray-400 antialiased text-gray-900">
                    <div>

                        <img src="https://source.unsplash.com/random/350x350" alt=" random imgee" class="w-full object-cover object-center rounded-lg shadow-md">

                        <div class="relative px-4 -mt-16  ">
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <div class="flex items-baseline">
                                    <span class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                                        New
                                    </span>
                                    <div class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                                        2 baths &bull; 3 rooms
                                    </div>
                                </div>

                                <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate">A random Title</h4>

                                <div class="mt-1">
                                    $1800
                                    <span class="text-gray-600 text-sm"> /wk</span>
                                </div>
                                <div class="mt-4">
                                    <span class="text-teal-600 text-md font-semibold">4/5 ratings </span>
                                    <span class="text-sm text-gray-600">(based on 234 ratings)</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="wrapper bg-gray-400 antialiased text-gray-900">
                    <div>

                        <img src="https://source.unsplash.com/random/350x350" alt=" random imgee" class="w-full object-cover object-center rounded-lg shadow-md">

                        <div class="relative px-4 -mt-16  ">
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <div class="flex items-baseline">
                                    <span class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                                        New
                                    </span>
                                    <div class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                                        2 baths &bull; 3 rooms
                                    </div>
                                </div>

                                <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate">A random Title</h4>

                                <div class="mt-1">
                                    $1800
                                    <span class="text-gray-600 text-sm"> /wk</span>
                                </div>
                                <div class="mt-4">
                                    <span class="text-teal-600 text-md font-semibold">4/5 ratings </span>
                                    <span class="text-sm text-gray-600">(based on 234 ratings)</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section> -->

        <!-- Our Services -->
        <section class="bg-white">
            <!-- heading  -->
            <div class="px-6 py-16 mx-auto max-w-7xl">
                <div class="mb-8">
                    <h1 class="text-2xl font-bold text-center text-black-600 lg:text-4xl">Our Services</h1>
                    <div class="flex justify-center">
                        <div class="w-40 h-1 bg-black rounded"></div>
                    </div>
                </div>


                <!-- sections  -->
                <div class="grid mb-8 rounded-lg border border-gray-200 shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2" style="margin:0px 80px">
                    <figure class="flex flex-col justify-center items-center p-8 text-center bg-white rounded-t-lg border-b border-gray-200 md:rounded-t-none md:rounded-tl-lg md:border-r dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Sale Properties</h3>
                            <p class="my-4 font-light">If you care for your time, I hands down would go with this.WE HAVE BEEN SERVING NOW in  Pakistan Property Services is a leading real estate network in Pakistan connecting thousands of property buyers/ sellers across the globe. We have been providing professional and reliable real estate consultancy for nearly two decades"</p>
                        </blockquote>

                    </figure>
                    <figure class="flex flex-col justify-center items-center p-8 text-center bg-white rounded-tr-lg border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Properties for Rent</h3>
                            <p class="my-4 font-light">the short term rental industry continues to grow at an impressive rate. For instance, short-term vacation rental nightly rates can range anywhere from $186 to $978 in the most popular vacation spots across the United States. Even in less desirable locations, short term rentals provide a valuable alternative to hotels for travelers seeking a more unique, home-like and private environment.</p>
                        </blockquote>

                    </figure>
                    <figure class="flex flex-col justify-center items-center p-8 text-center bg-white rounded-bl-lg border-b border-gray-200 md:border-b-0 md:border-r dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Verified Agents</h3>
                            <p class="my-4 font-light">Buying or selling a property requires a lot of time and dedication. In addition to the various processes to sell the property, you will also have to deal with all the parties. When buying, the process is practically the same, therefore it is faster and easier to find the house of your dreams through a trustworthy estate agent.
</p>
                        </blockquote>
                        <!-- <figcaption class="flex justify-center items-center space-x-3">
                            <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left">
                                <div>Jese Leos</div>
                                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Verified Properties</div>
                            </div>
                        </figcaption> -->
                    </figure>
                    <figure class="flex flex-col justify-center items-center p-8 text-center bg-white rounded-b-lg border-gray-200 md:rounded-br-lg dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
                            <p class="my-4 font-light">You have many examples that can be used to create a fast prototype for your team."</p>
                        </blockquote>
                    </figure>
                </div>


            </div>
        </section>


        <!-- newsletter  -->
        <div class="border border-solid rounded-md shadow-md newsletter" style="margin: -15px 142px;">
            <div class="container ">
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
                @endif
                @if (\Session::has('failure'))
                <div class="alert alert-danger">
                    <p>{{ \Session::get('failure') }}</p>
                </div><br />
                @endif

                <form method="post" action="{{url('newsletter')}}">
                    @csrf
                    <h1 class=" mt-10 ml-10 font-bold text-5xl text-gray-800 dark:text-white ">Newsletter</h1>
                    <p class="pt-8 md:pt-4 ml-10 text-gray-600 dark:text-gray-200">Sign up for our newsletter and get emails about our latest news on the market once a month.</p>
                    <br />
            </div>


            <div class="mt-8 ml-10 md:flex justify-start md:gap-4">

                <input type="text" class=" placeholder-gray-600
                   dark:bg-gray-800 dark:border-transparent dark:placeholder-gray-200
                    dark:text-white w-full md:w-1/2 p-4 grid place-items-center
                     border rounded-md focus:outline-none" placeholder="Your Email" name="email">


                <button class="w-full md:w-auto bg-black dark:border-transparent text-white px-8 py-4 border rounded-md hover:bg-blackgrid place-items-center font-semibold mt-4 md:mt-0 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-opacity-50">Subscribe</button>
            </div>
            <p class="pt-4 ml-10 text-xs mb-10 text-gray-600 dark:text-gray-200">Read our <u class="cursor-pointer no-underline hover:underline">privacy policy</u></p>

            </form>
        </div>



        <!-- footer -->
        <footer class="px-4 pt-12 pb-5 mt-12 bg-gray-200 border-t lg:0">

            <div class="lg:flex lg:justify-evenly">


                <!-- col 1 footer  -->
                <div class="max-w-sm mt-6 text-center lg:mt-0">

                    <p>
                        <i class="fa fa-home" style="font-size:80px;"></i>
                    <h6 class="mb-4 text-4xl font-semibold text-gray-700">Property Portal</h6>
                    </p>
                    <form class="flex items-center" action="{{ route('property.findbyid')}}">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search By Id" required="" name="id">
                        </div>
                        <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-black rounded-lg border border-black hover:bg-black focus:ring-4 focus:outline-none focus:ring-black dark:bg-black dark:hover:bg-black dark:focus:ring-black">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                </div>

                <!-- col 2 footer  -->

                <div class="mt-6 text-center lg:mt-0">
                    <h6 class="mb-4 font-semibold text-gray-700">Quick links</h6>
                    <ul>
                        <li> <a href="" class="block py-2 text-gray-600">Home</a> </li>
                        <li> <a href="" class="block py-2 text-gray-600">About us</a> </li>
                        <li> <a href="" class="block py-2 text-gray-600">Contact Us</a> </li>
                    </ul>
                </div>

                <!-- col 3 footer  -->
                <div class="mt-6 text-center lg:mt-0">
                    <h6 class="mb-4 font-semibold text-gray-700">Virual University Of Pakistan</h6>
                    <ul>
                        <li> <a href="" class="block py-2 text-gray-600">Lawrance road ,jubilee town</a> </li>
                        <li> <a href="" class="block py-2 text-gray-600">Lahore</a> </li
                    </ul>
                </div>

                <!-- col 4 footer  -->
                <div class="mt-6 text-center lg:mt-0">
                    <h6 class="mb-4 font-semibold text-gray-700">Project By</h6>
                    <ul>
                        <li> <a href="" class="block py-2 text-gray-600">Salman Khalid</a> </li>
                        <li> <a href="" class="block py-2 text-gray-600">Fahad Awan</a> </li>
                        <li> <a href="" class="block py-2 text-gray-600">Wajeeha</a> </li>
                    </ul>
                </div>

            </div>

        </footer>

</body>

</html>
