@extends('layouts.dashboardmaster')
@section('content')
    
<div class="flex items-center justify-center p-12">
  
    <div class="mx-10 mb-4">
        <img src="{{url('/images')}}/{{Auth::user()->image ?? 'person.png' }}" class="mr-5 rounded-full w-52" alt="">
        <!-- <p class="mx-auto">
        profile picture
      </p> -->
    </div>
 
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
    <div class="max-w-md p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center justify-between mb-4">
        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">User Details</h5>
        <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
            <!-- View all -->
        </a>
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
                        {{Auth::user()->name}}

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
                        {{Auth::user()->email}}
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
                        {{Auth::user()->city->name}}

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
                        {{Auth::user()->user_status}}

                    </div>
                </div>
            </li>  <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">
                    
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Number
                        </p>
                        
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        {{Auth::user()->cell_no}}

                    </div>
                </div>
            </li> </li>  <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">
                    
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Account Creation Date
                        </p>
                        
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        {{Auth::user()->created_at}}

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
  
    @role('Agent')
    @include('components.agentDetail')
    @endrole

            <div class="flex items-center justify-center mb-3">
                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                    <button type="button" class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-blue-500 rounded-l hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-700">Change Role</button>
                
                    @if (Auth::user()->user_status =='blocked')
                    <button type="button" class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-yellow-500 rounded-r hover:bg-yellow-600 focus:bg-yellow-600 focus:outline-none focus:ring-0 active:bg-yellow-700" data-bs-toggle="modal" data-bs-target="#staticBackdrop">UnBlock</button>
                    @else
                    <button type="button" class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-red-500 hover:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-0 active:bg-red-700" data-bs-toggle="modal" data-bs-target="#staticBackdrop">>
                        Block
                    </button>
                    @endif
                </div>
            </div>

                         <!-- Modal -->
                <div class="modal fade fixed top-0 left-10 hidden w-96 h-full outline-none overflow-x-hidden overflow-y-auto"
                id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog relative w-auto pointer-events-none">
                <div
                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div
                        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                        Reason Of Rejection
                        </h5>
                        <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <form action="{{ route('users.block', $user->id) }}" method="POST">

                        @csrf
                        <div class="modal-body relative p-4">
                            
                                <!-- <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Give Reason of Rejection</label> -->
                                <textarea id="message" rows="4" name= "reason" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..." required></textarea>

                        </div>
                        <div
                            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                            <button type="button"
                            class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-red-500 hover:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-0 active:bg-red-700"
                            data-bs-dismiss="modal">Close</button>
                            <button type="submit"
                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1 inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-red-500 hover:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-0 active:bg-red-700">Submit</button>
                            
                            
                        </div>

                    </form>
        </ul>
   </div>
    </div>
    </div>
    
</div>
@endsection
