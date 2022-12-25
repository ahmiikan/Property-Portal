@extends('layouts.dashboardmaster')

@section('content')

    <div class="h-full overflow-hidden bg-white shadow-sm sm:rounded-lg">

        @if(!$agents->first())
        0 agent applied for review.
        @endif
        @if ($message = Session::get('success'))
            <div class="">
                <p class="border border-gray-200">{{ $message }}</p>
            </div>
        @endif
        @foreach ($agents as $key => $agent)     
            <section class="p-6 text-center rounded-md shadow-lg md:p-12 md:text-left"
                style="background-image: {{url('/images')}}/{{$agent->logo}}">
                No:{{++$i}}
                <div class="flex justify-center">
                    <div class="max-w-sm">
                        <div class="block p-6 m-4 bg-white rounded-lg shadow-lg">
                            <div class="md:flex md:flex-row">
                                <div class="flex items-center justify-center mx-auto mb-6 md:w-96 w-36 lg:mb-0 md:mx-0">
                                    <img src="{{ url('/images') }}/{{ $agent->logo }}" class="mr-5 rounded-full w-52"
                                        alt="">
                                </div>
                                <div class="md:ml-6">
                                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                        Company Name
                                                    </p>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    {{ $agent->name }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center space-x-4">

                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                        Company Email
                                                    </p>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    {{ $agent->email }} </div>
                                            </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center space-x-4">

                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                        Address
                                                    </p>

                                                </div>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                {{ $agent->address }}

                                            </div>
                                            </div>
                                </li>                           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center mb-3">
                    <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                       <form action="{{ route('agent.approve', $agent->id) }}" method="post"> @csrf <button type="submit"
                            class="inline-block px-8 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-blue-500 rounded-l hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-700">Approve</button></form>
                            <!-- <a href="">  <button type="button"
                            class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-red-500 hover:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-0 active:bg-red-700">Reject</button></a> -->
                            @if($agent->doc->last())
                            <a href="{{url('/docs')}}/{{$agent->doc->last()->documents}}"  target="_blank" style="display: inline-block; width: 50px; height; 50px; background-image: {{url('/docs')}}/{{$agent->doc->last()->documents}}');">
                                <button type="button" class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-green-500 rounded-r hover:bg-green-600 focus:bg-green-600 focus:outline-none focus:ring-0 active:bg-green-700">View</button>
                              </a>
                              @endif
                    </div>
                </div>




                <!-- Button trigger modal -->
            <button type="button"
            class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md  hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-red-500 hover:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-0 active:bg-red-700"
            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Reject
            </button>

        <!-- Modal -->
            <div class="fixed top-0 hidden h-full overflow-x-hidden overflow-y-auto outline-none modal fade left-10 w-96"
                id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="relative w-auto pointer-events-none modal-dialog">
                    <div
                        class="relative flex flex-col w-full text-current bg-white border-none rounded-md shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding">
                        <div
                            class="flex items-center justify-between flex-shrink-0 p-4 border-b border-gray-200 modal-header rounded-t-md">
                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                            Reason Of Rejection
                            </h5>
                            <button type="button"
                            class="box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 btn-close focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>


                        <form action="{{ route('agent.reject', $agent->id) }}" method="POST">

                            @csrf
                            <div class="relative p-4 modal-body">
                                
                                    <!-- <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Give Reason of Rejection</label> -->
                                    <textarea id="message" rows="4" name= "reason" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..." required></textarea>

                            </div>
                            <div
                                class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 border-t border-gray-200 modal-footer rounded-b-md">
                                <button type="button"
                                class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-red-500 hover:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-0 active:bg-red-700"
                                data-bs-dismiss="modal">Close</button>
                                <button type="submit"
                                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1 inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-red-500 hover:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-0 active:bg-red-700">Submit</button>
                                
                                
                            </div>

                        </form>
                    </div>
                </div>
            </div>

                <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
            </section>
        @endforeach
      {!! $agents->render() !!}
    </div>
@endsection
