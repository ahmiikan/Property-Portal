@extends('layouts.dashboardmaster')
@section('content')
    @if ($message = Session::get('success'))
        <div class="">
            <br>{{ $message }}<br>
        </div>
    @endif
    <div class="flex items-center justify-center pt-5">

        <div class="mx-10 mb-4">
            <img src="{{ url('/images') }}/{{ $user->image }}" class="mr-5 rounded-full w-24" alt="">
            <!-- <p class="mx-auto">
                        profile picture
                      </p> -->
        </div>

        <div class="mx-auto w-full max-w-[550px]">
            <div class="max-w-md p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">User Details</h5>

                </div>
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">

                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Name
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $user->name }}

                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">

                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Email
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $user->email }}
                                </div>
                            </div>
                        </li>
                        {{-- <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">
                    
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Adress
                        </p>
                        
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        lahore, pakistan
                    </div>
                </div>
            </li> --}}
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">

                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        City
                                    </p>

                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $user->city->name }}

                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">

                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        status
                                    </p>

                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $user->user_status }}

                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">

                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Number
                                    </p>

                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $user->cell_no }}

                                </div>
                            </div>
                        </li>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">

                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Account Creation Date
                                    </p>

                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $user->created_at }}

                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- for Company  -->
    <div class="flex items-center justify-center pt-5">

        @if ($user->agent)
            @include('components.companydetails')
        @endif
     

@if ($user->id!=auth()->id())
<div class="flex items-center justify-center mb-3">
    <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
        {{-- <button type="button"
            class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-blue-500 rounded-l hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-700">Change
            Role</button> --}}

        @if ($user->user_status == 'blocked')
            <form action="{{ route('users.unblock', $user->id) }}" method="put">
                @csrf
                <button type="submit"
                    class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-yellow-500 rounded-r hover:bg-yellow-600 focus:bg-yellow-600 focus:outline-none focus:ring-0 active:bg-yellow-700">UnBlock</button>
            </form>
        @else
            <form action="{{ route('users.block', $user->id) }}" method="put">
                @csrf
                <button type="submit"
                    class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-red-500 hover:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-0 active:bg-red-700">Block</button>
            </form>
        @endif
    </div>
</div>  

@else 
<a href="{{ route('personalinfo') }}">
    
    <button type="submit"
        class=" ml-36 mb-36 inline-block px-6 py-3 text-xs font-bold  text-white uppercase bg-green-500 rounded-r hover:bg-green-600 focus:bg-green-600 focus:outline-none focus:ring-0 active:bg-green-700">Edit Profile</button>
</a>
        

        @endif
        </ul>
    </div>
    </div>
    </div>

    </div>
@endsection
