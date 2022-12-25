<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Property Portal</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <!-- Styles -->
</head>
<body>
    

    <!-- Container -->
    <div class="container p-4 mx-auto mt-30 md:p-0">
        @if ($message = Session::get('success'))
            <div class="">
                <p>{{ $message }}</p>
            </div>
        @endif
        
            <!-- Card wrapper -->
            <div class="flex flex-wrap w-full mx-auto mt-20 shadow-lg lg:w-4/5">

                <!-- Card image -->
                <div class="relative w-full h-64 bg-bottom bg-cover border md:w-1/3 md:h-auto"
                    style="background-image:url('https://images7.alphacoders.com/347/347549.jpg')">
                    <div class="absolute text-xl">
                        <i class="mt-4 ml-4 text-white cursor-pointer fa fa-heart hover:text-red-light"></i>
                    </div>
                </div>
                <!-- ./Card image -->

                <!-- Card body -->
                <div class="w-full bg-white md:w-2/3">
                    <!-- Card body - outer wrapper -->
                    <div class="relative h-full px-6 mx-auto md:px-0 md:pt-6 md:-ml-6">
                        <!-- Card body - inner wrapper -->
                        <div
                            class="relative flex flex-wrap items-center p-6 mb-4 -mt-6 bg-white lg:h-full md:mt-0 md:mb-0 md:flex-wrap">
                            <!-- Card title and subtitle -->
                            <div class="w-full text-center lg:w-1/5 lg:border-right lg:border-solid md:text-left">
                                <h3>{{ $property->title }}</h3>
                                <p class="mt-3 mb-0 text-sm italic text-grey-dark">{{ $property->address }}</p>
                                <hr class="w-1/4 mt-4 border md:ml-0 lg:hidden">
                            </div>
                            <!-- ./Card title and subtitle -->

                            <!-- Card description -->
                            <div class="w-full lg:w-3/5 lg:px-3">
                                <p class="mt-4 text-sm text-justify text-md lg:mt-0 md:text-left">
                                    {{ $property->description }} </p>
                            </div>
                            <!-- ./Card description -->

                            <!-- Call to action button -->
                            <div class="w-full mt-6 text-center lg:w-1/5 lg:mt-0 lg:px-4 md:text-left">
                                <button type="button"
                                    class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Visit</button>
                            </div>
                            <!-- ./Call to action button -->
                        </div>
                        <!-- ./Card body - inner wrapper -->
                    </div>
                    <!-- ./Card body - outer wrapper -->
                </div>
                <!-- ./Card body -->
            </div>

        <!-- ./Card wrapper -->

        <!-- Card wrapper -->

    </div>
    <!-- ./Container -->
    </body>
    </html>