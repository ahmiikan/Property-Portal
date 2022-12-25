<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Property Portal| Single Property</title>
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
                        <a class="text-xl font-bold text-gray-800 md:text-2xl hover:text-blue-400" href="#">Property Portal </a>
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
                        <a class="text-sm text-gray-800 hover:text-blue-400" href="index.html">Home</a>
                        <a class="text-sm text-gray-800 hover:text-blue-400" href="properties.html">Properties</a>
                        <a class="text-sm text-gray-800 hover:text-blue-400" href="single-property.html">Single
                            Properties</a>
                        <a class="text-sm text-gray-800 hover:text-blue-400" href="contact-us.html">Contact Us</a>
                    </div>
                </nav>
            </div>


            <section class="p-8 text-center bg-gradient-to-r from-blue-200 to-purple-500 lg:p-20">
                <h1 class="mb-2 text-2xl font-bold text-gray-700 lg:text-5xl">
                    Properties

                </h1>
                <div class="text-white">
                    <span class="text-blue-800">Home -</span> Single Property
                </div>
            </section>


            <!-- Single Property -->
            <section class="px-4 py-4 bg-gray-200 lg:px-20 lg:py-8">
                <div class="flex flex-wrap lg:space-x-12">

                    <div class="lg:w-3/5">
                        <h1 class="mb-4 text-2xl font-medium text-center text-gray-900 lg:text-3xl">Lorem ipsum dolor
                            sit amet,
                            consectetur adipFriuli-Venezia Giulia</h1>
                        <img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="property" class="w-full">
                        <div class="flex mt-4 space-x-4">
                            <img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="property" class="w-12 lg:w-52">
                            <img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="property" class="w-12 lg:w-52">
                            <img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="property" class="w-12 lg:w-52">
                            <img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="property" class="w-12 lg:w-52">
                        </div>
                        <div class="mt-4">
                            <h4 class="text-2xl font-bold">Description</h4>
                            <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                                asperiores facere
                                maxime libero alias enim recusandae quibusdam laborum. Fugiat aspernatur velit optio
                                neque
                                quos temporibus autem delectus fuga tempora unde! Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Saepe asperiores facere
                                maxime libero alias enim recusandae quibusdam laborum. Fugiat aspernatur velit optio
                                neque
                                quos temporibus autem delectus fuga tempora unde!.</p>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                                asperiores facere
                                maxime libero alias enim recusandae quibusdam laborum. Fugiat aspernatur velit optio
                                neque
                                quos temporibus autem delectus fuga tempora unde! Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Saepe asperiores facere
                                maxime libero alias enim recusandae quibusdam laborum. Fugiat aspernatur velit optio
                                neque
                                quos temporibus autem delectus fuga tempora unde!.</p>

                            <div class="flex flex-wrap ">
                                <div class="w-full p-2 lg:w-1/2">
                                    <div class="flex items-center h-full p-4 bg-gray-100 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-green-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                        </svg>
                                        <span class="font-medium">4 Beds</span>
                                    </div>
                                </div>
                                <div class="w-full p-2 lg:w-1/2">
                                    <div class="flex items-center h-full p-4 bg-gray-100 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-green-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                        </svg>
                                        <span class="font-medium">Area 550 sqft</span>
                                    </div>
                                </div>
                                <div class="w-full p-2 lg:w-1/2">
                                    <div class="flex items-center h-full p-4 bg-gray-100 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-green-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                        </svg>
                                        <span class="font-medium">Bedroom 6</span>
                                    </div>
                                </div>
                                <div class="w-full p-2 lg:w-1/2">
                                    <div class="flex items-center h-full p-4 bg-gray-100 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-green-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                        </svg>
                                        <span class="font-medium">Kitchen 2</span>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                                asperiores facere
                                maxime libero alias enim recusandae quibusdam laborum. Fugiat aspernatur velit optio
                                neque
                                quos temporibus autem delectus fuga tempora unde! Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Saepe asperiores facere
                                maxime libero alias enim recusandae quibusdam laborum. Fugiat aspernatur velit optio
                                neque
                                quos temporibus autem delectus fuga tempora unde!.</p>
                        </div>
                    </div>

                    <div class="lg:w-1/3 lg:mt-4">
                        <h4 class="text-2xl font-bold text-center text-blue-700">Search Property</h4>
                        <form action="">
                            <div class="lg:grid lg:gap-2 lg:grid-cols-2">
                                <div class="">
                                    <select
                                        class="w-full px-8 py-2 bg-white border border-gray-400 rounded outline-none appearance-none focus:ring-2">
                                        <option>Type</option>
                                        <option>Apartment</option>
                                        <option>Apartment</option>
                                        <option>House</option>
                                        <option>Villa</option>
                                        <option>Hotel</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="text"
                                        class="w-full p-2 border border-gray-400 rounded outline-none focus:ring-2"
                                        Placeholder="Location" />
                                </div>
                                <div class="">
                                    <select
                                        class="w-full px-8 py-2 bg-white border border-gray-400 rounded outline-none appearance-none focus:ring-2">
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                                <div class="">
                                    <select
                                        class="w-full px-8 py-2 bg-white border border-gray-400 rounded outline-none appearance-none focus:ring-2">
                                        <option>Bedrooms</option>
                                        <option>2</option>
                                        <option>4</option>
                                        <option>6</option>
                                    </select>
                                </div>
                                <div class="">
                                    <input type="text"
                                        class="w-full p-2 border border-gray-400 rounded outline-none focus:ring-2"
                                        Placeholder="min price" />
                                </div>
                                <div class="">
                                    <input type="text"
                                        class="w-full p-2 border border-gray-400 rounded outline-none focus:ring-2"
                                        Placeholder="max price" />
                                </div>

                                <div class>
                                    <button class="w-full px-8 py-2 text-blue-100 bg-gray-600 rounded">
                                        Search</button>
                                </div>
                            </div>
                        </form>
                        <div class="mt-4 rounded-lg">
                            <h3>Ads</h3>
                            <img src="https://images.unsplash.com/file-1626897789502-538d933b419fimage" alt="property"
                                class="w-full">
                        </div>
                    </div>
                </div>
            </section>



            <!-- footer -->
            <footer class="px-4 pt-12 pb-32 bg-gray-200 border-t border-gray-900 lg:0">

                <div class="lg:flex lg:justify-evenly">
                    <div class="max-w-sm mt-6 text-center lg:mt-0">
                        <h6 class="mb-4 text-4xl font-semibold text-gray-700">Real Estate</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, tenetur. Sint, vel sit
                            molestiae velit doloribus aspernatur. Voluptate, necessitatibus. Inventore corrupti aliquid
                            atque tempora quo eaque error voluptas et earum.</p>
                    </div>
                    <div class="mt-6 text-center lg:mt-0">
                        <h6 class="mb-4 font-semibold text-gray-700">Quick links</h6>
                        <ul>
                            <li> <a href="" class="block py-2 text-gray-600">Home</a> </li>
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

