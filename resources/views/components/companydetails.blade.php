  
    <div class="mx-10 mb-4">
        <img src="{{url('/images')}}/{{$user->agent->logo}}" class="mr-5 rounded-full w-24" alt="">
        <!-- <p class="mx-auto">
        profile picture
      </p> -->
    </div>
 
 
    <div class="mx-auto w-full max-w-[550px]">
        <div class="max-w-md p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Company Details</h5>
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
                              Company Name
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            {{$user->agent->name}}
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
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            {{$user->agent->email}}                    </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                Adress
                            </p>
                            
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            {{$user->agent->address}}
    
                        </div>
                    </div>
                </li>
                {{-- <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                city
                            </p>
                            
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            {{$user->city->name}}
                        </div>
                    </div>
                </li> --}}
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                status
                            </p>
                            
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            {{$user->agent->status}}
    
                        </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                Company Number
                            </p>
                            
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            {{$user->agent->cell}}
    
                        </div>
                    </div>
                </li>
    
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                View docs
                            </p>
                            
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        <button type="button" class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-yellow-500 rounded-r hover:bg-yellow-600 focus:bg-yellow-600 focus:outline-none focus:ring-0 active:bg-yellow-700">View Docs</button>
                        </div>
                    </div>
                </li>
    