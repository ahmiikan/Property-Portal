@extends('layouts.dashboardmaster')
@section('content')
<div>

      <div>
        <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">
        
            <a href="{{route('users.index')}}">  <div class="report-card">
    <div class="card">
        <div class="flex flex-col card-body">
            
            <!-- top -->
            <div class="flex flex-row items-center justify-between">
                <div class="text-teal-600 h6 fas fa-user-friends"></div>
                <span class="text-xs text-white bg-teal-400 rounded-full badge">
                All Users
                    <i class="ml-1 fal fa-chevron-up"></i>
                </span>
            </div>
            <!-- end top -->

            <!-- bottom -->
            <div class="mt-8">
                <h1 class="h5 num-4">{{$data['AllUsers']}}</h1>
                <p>All Users</p>
            </div>                
            <!-- end bottom -->

        </div>
    </div>
    <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
    </div></a>
        
    <a href="{{route('users.index')}}">
        <div class="report-card">
            <div class="card">
                <div class="flex flex-col card-body">
                    
                    <!-- top -->
                    <div class="flex flex-row items-center justify-between">
                        <div class="text-blue-700 h6 fad fa-shopping-cart"></div>
                        <span class="text-xs text-white bg-blue-400 rounded-full badge">
                        Active Users
                            <i class="ml-1 fal fa-chevron-up"></i>
                        </span>
                    </div>
                    <!-- end top -->
    
                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5 num-4">{{$data['activeUsers']}}</h1>
                        <p>Active Users</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
        </div></a>

       <a href="{{route('users.blocked')}}">
    <div class="report-card">
    <div class="card">
        <div class="flex flex-col card-body">
            
            <!-- top -->
            <div class="flex flex-row items-center justify-between">
                <div class="text-red-700 h6 fas fa-user-alt-slash"></div>
                <span class="text-xs text-white bg-red-400 rounded-full badge">
                Blocked Users
                    <i class="ml-1 fal fa-chevron-down"></i>
                </span>
            </div>
            <!-- end top -->

            <!-- bottom -->
            <div class="mt-8">
                <h1 class="h5 num-4">{{$data['blockedUsers']}}</h1>
                <p>Blocked Users</p>
            </div>                
            <!-- end bottom -->

        </div>
    </div>
    <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
        </div></a>
    <a href="{{route('users.deleted')}}">
        <div class="report-card">
        <div class="card">
            <div class="flex flex-col card-body">
                
                <!-- top -->
                <div class="flex flex-row items-center justify-between">
                    <div class="text-purple-700 h6 fas fa-user-minus"></div>
                    <span class="text-xs text-white bg-purple-400 rounded-full badge">
                    Deleted Users
                        <i class="ml-1 fal fa-chevron-down"></i>
                    </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                    <h1 class="h5 num-4">{{$data['deleteUsers']}}</h1>
                    <p>Deleted Users</p>
                </div>                
                <!-- end bottom -->

            </div>
        </div>
        <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
        </div></a>

        
    <a href="{{route('agent.list')}}">
    <div class="report-card">
        <div class="card">
            <div class="flex flex-col card-body">
                
                <!-- top -->
                <div class="flex flex-row items-center justify-between">
                    <div class="text-green-700 h6 fas fa-user-check"></div>
                    <span class="text-xs text-white bg-teal-400 rounded-full badge">
                    Verified Agents
                        <i class="ml-1 fal fa-chevron-up"></i>
                    </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                    <h1 class="h5 num-4">{{$data['verifiedAgents']}}</h1>
                    <p>Verified Agents</p>
                </div>                
                <!-- end bottom -->

            </div>
        </div>
        <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
    </div></a>



    <a href="{{route('agent.index')}}">
        <div class="report-card">
            <div class="card">
                <div class="flex flex-col card-body">
                    
                    <!-- top -->
                    <div class="flex flex-row items-center justify-between">
                        <div class="text-yellow-600 h6 fas fa-user-clock"></div>
                        <span class="text-xs text-white bg-yellow-600 rounded-full badge">
                        InReview Agents
                            <i class="ml-1 fal fa-chevron-up"></i>
                        </span>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5 num-4">{{$data['InReviewAgents']}}</h1>
                        <p>InReview Agents</p>
                    </div>                
                    <!-- end bottom -->

                </div>
            </div>
            <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
        </div>
    </a>



    <div class="report-card">
        <div class="card">
            <div class="flex flex-col card-body">
                
                <!-- top -->
                <div class="flex flex-row items-center justify-between">
                    <div class="text-red-700 h6 far fa-frown"></div>
                    <span class="text-xs text-white bg-red-400 rounded-full badge">
                    Rejected Agents
                        <i class="ml-1 fal fa-chevron-up"></i>
                    </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                    <h1 class="h5 num-4">{{$data['rejectedAgents']}}</h1>
                    <p>Rejected Agents</p>
                </div>                
                <!-- end bottom -->

            </div>
        </div>
        <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
    </div>

    <div class="report-card">
        <div class="card">
            <div class="flex flex-col card-body">
                
                <!-- top -->
                <div class="flex flex-row items-center justify-between">
                    <div class="text-purple-700 h6 fas fa-user-times"></div>
                    <span class="text-xs text-white bg-purple-400 rounded-full badge">
                    unverified Agents
                        <i class="ml-1 fal fa-chevron-up"></i>
                    </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                    <h1 class="h5 num-4">{{$data['unverifiedAgents']}}</h1>
                    <p>unverified Agents</p>
                </div>                
                <!-- end bottom -->

            </div>
        </div>
        <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
    </div>

        <a href="{{route('property.index')}}">
            <div class="report-card">
                <div class="card">
                    <div class="flex flex-col card-body">
                        
                        <!-- top -->
                        <div class="flex flex-row items-center justify-between">
                            <div class="text-green-700 h6 fad fa-home"></div>
                            <span class="text-xs text-white bg-teal-400 rounded-full badge">
                            Total Listings
                                <i class="ml-1 fal fa-chevron-up"></i>
                            </span>
                        </div>
                        <!-- end top -->

                        <!-- bottom -->
                        <div class="mt-8">
                            <h1 class="h5 num-4">{{$data['unverifiedAgents']}}</h1>
                            <p>Total Listings</p>
                        </div>                
                        <!-- end bottom -->

                    </div>
                </div>
                <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
            </div></a>
        <a href="{{route('property.index')}}">

            <div class="report-card">
                <div class="card">
                    <div class="flex flex-col card-body">
                        
                        <!-- top -->
                        <div class="flex flex-row items-center justify-between">
                            <div class="text-blue-700 h6 fad fa-home"></div>
                            <span class="text-xs text-white bg-blue-400 rounded-full badge">
                            Active Listings
                                <i class="ml-1 fal fa-chevron-up"></i>
                            </span>
                        </div>
                        <!-- end top -->

                        <!-- bottom -->
                        <div class="mt-8">
                            <h1 class="h5 num-4">{{$data['unverifiedAgents']}}</h1>
                            <p>Active Listings </p>
                        </div>                
                        <!-- end bottom -->

                    </div>
                </div>
                <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
            </div></a>

            

        <a href="{{route('property.reviewlist')}}">
            <div class="report-card">
                <div class="card">
                    <div class="flex flex-col card-body">
                        
                        <!-- top -->
                        <div class="flex flex-row items-center justify-between">
                            <div class="text-yellow-600 h6 fad fa-home"></div>
                            <span class="text-xs text-white bg-yellow-600 rounded-full badge">
                            In review Listing
                                <i class="ml-1 fal fa-chevron-up"></i>
                            </span>
                        </div>
                        <!-- end top -->

                        <!-- bottom -->
                        <div class="mt-8">
                            <h1 class="h5 num-4">{{$data['unverifiedAgents']}}</h1>
                            <p>In review Listing</p>
                        </div>                
                        <!-- end bottom -->

                    </div>
                </div>
                <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
            </div></a>


            <div class="report-card">
                <div class="card">
                    <div class="flex flex-col card-body">
                        
                        <!-- top -->
                        <div class="flex flex-row items-center justify-between">
                            <div class="text-purple-700 h6 fad fa-home"></div>
                            <span class="text-xs text-white bg-purple-400 rounded-full badge">
                            Sold Out Listing
                                <i class="ml-1 fal fa-chevron-up"></i>
                            </span>
                        </div>
                        <!-- end top -->

                        <!-- bottom -->
                        <div class="mt-8">
                            <h1 class="h5 num-4">
                                0
                            </h1>
                            <p>Sold Out Listing</p>
                        </div>                
                        <!-- end bottom -->

                    </div>
                </div>
                <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
            </div>

                
            </div>














            
        <!-- <div class="text-white bg-teal-400 border-teal-400 shadow-md card"> -->
                    <!-- <div class="flex flex-row card-body"> -->
                        
                        <!-- image -->

                        <!-- <div class="flex items-center justify-center w-40 h-40 img-wrapper">
                            <img src="{{ asset('assets/css/happy.svg') }}" alt="img title">
                        </div> -->

                        <!-- end image -->
            
                        <!-- info -->


                        <!-- <div class="py-2 ml-10">
                            <h1 class="h6">Good Job, Admin!</h1>
                            <p class="text-xs text-white">You've finished all of your tasks for this week.</p>
            
                            <ul class="mt-4">
                                <li class="text-sm font-light"><i class="mb-2 mr-2 fad fa-check-double"></i> Best Dashboard Design</li>
                                <li class="text-sm font-light"><i class="mb-2 mr-2 fad fa-check-double"></i> Fix All Issue</li>
                                <li class="text-sm font-light"><i class="mr-2 fad fa-check-double"></i> Property Portal Admin</li>
                            </ul>
                        </div> -->


                        <!-- end info -->
            
                    <!-- </div> -->
        </div> 
      
        </div>
    
</div>
     

@endsection