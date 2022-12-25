@extends('layouts.dashboardmaster')
@section('content')
    <!-- Container -->
    <div class="container p-4 mx-auto mt-30 md:p-0">
        @if(!$properties->first())
        0 Property for review.
        @endif
        @if ($message = Session::get('success'))
            <div class="">
                <p>{{ $message }}</p>
            </div>
        @endif
        {{ $properties }}
        @foreach ($properties as $property)
            <!-- Card wrapper -->
            <div class="flex flex-wrap w-96 mx-auto mt-20 shadow-lg lg:w-4/5">

                <!-- Card image -->
                <div class="relative w-full h-64 bg-bottom bg-cover border md:w-1/3 md:h-auto"
                    style="background-image:url('{{ url('/images') }}/{{ $property->images->first()->image }}')">
                    <div class="absolute text-xl">
                       
                    </div>
                </div>
               
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
                               <a href="{{ route('property.show',$property->id) }}">
                                <button type="button"
                                    class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Visit</button>
                                 </a>
                                </div>
                            <!-- ./Call to action button -->
                        </div>
                        <div>
                            <div class="flex items-center justify-center mb-3">
                                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                    <form action="{{ route('property.approve', $property->id) }}" method="post"> @csrf
                                        <button type="submit"
                                            class="inline-block px-8 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-blue-500 rounded-l hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-700">Approve</button>
                                    </form>
                                    <form action="{{ route('property.reject', $property->id) }}" method="post"> @csrf
                                        <button type="submit"
                                            class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-red-500 hover:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-0 active:bg-red-700">Disapprove</button>
                                    </form>
                                    <form action="{{ route('property.unlist', $property->id) }}" method="post"> @csrf
                                        <button type="submit"
                                            class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-yellow-500 rounded-r hover:bg-yellow-600 focus:bg-yellow-600 focus:outline-none focus:ring-0 active:bg-yellow-700">Unlist</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ./Card body - inner wrapper -->
                    </div>
                    <!-- ./Card body - outer wrapper -->
                </div>
                <!-- ./Card body -->
            </div>
        @endforeach

        <!-- ./Card wrapper -->

        <!-- Card wrapper -->

    </div>
    <!-- ./Container -->
@endsection
