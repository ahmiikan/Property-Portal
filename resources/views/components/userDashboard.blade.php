





            <div class="h-screen flex flex-row flex-wrap">
              <!-- start sidebar -->
            <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
              <!-- sidebar content -->
              <div class="flex flex-col">

                <!-- sidebar toggle -->
                <div class="text-right hidden md:block mb-4">
                  <button id="sideBarHideBtn">
                    <i class="fad fa-times-circle"></i>
                  </button>
                </div>
                <!-- end sidebar toggle -->

                <p class="uppercase text-xl font-bold text-decoration-line: underline text-black mb-4 mt-4 tracking-wider">User Dashboard</p>

                <p class="uppercase text-sm font-bold text-black  mb-4 mt-4 tracking-wider">Property Management</p>

                <!-- link -->
                <a href="{{route('property.create')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fa fa-plus mr-2"></i>
                  Post Property
                </a>
                <a href="{{route('property.my')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fa fa-list mr-2"></i>
                  My Listed Properties
                </a>

                <a href="{{route('property.mysold')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fa fa-list mr-2"></i>
                  My Sold Properties
                </a>

                {{-- <a href="" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fa fa-trash mr-2"></i>
                  Deleted Properties
                </a>
                --}}
                <!-- end link -->
                {{-- <p class="uppercase text-sm font-bold text-black  mb-4 mt-4 tracking-wider">Message Management</p>

                <!-- link -->
                <a href="{{route('propertyAlerts')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fa fa-plus mr-2"></i>
                  Create Alerts
                </a>        --}}
                <p class="uppercase text-sm font-bold text-black  mb-4 mt-4 tracking-wider">Settings</p>

                <!-- link -->
                <a href="{{ route('users.show',auth()->id())}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fa fa-info-circle mr-2"></i>
                    Personal Info
                </a>
                 <a href="{{route('agent.form')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fa fa-plus mr-2"></i>
                  Become An Agent
                </a>  
                <a href="{{ route('pass-reset.index') }}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                 <i class="fas fa-edit mr-2"></i>
                 Change Password
                </a>
                <a href="{{ route('reqDeleteAccount') }}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fa fa-trash mr-2"></i>
                    Delete My Account
                </a>

                <p class="uppercase text-sm font-bold text-black  mb-4 mt-4 tracking-wider">Messages</p>

<!-- link -->
<a href="{{route('favorites')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
  <i class="fa fa-plus mr-2"></i>
  Favorite Messages
</a>
<a href="{{ route('messages') }}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
  <i class="fa fa-list-alt mr-2"></i>
  All Messages
  <span class="bg-black hover:bg-black text-white font-bold px-2 border border-black rounded ml-10"> {{ auth()->user()->unreadCount() }}</span>
</a>

              </div>
              <!-- end sidebar content -->

            </div>
            <!-- end sidbar -->

            <!-- strat content -->

            <!-- end content -->
            <div class="flex flex-col flex-grow p-4 main-content">
              @yield('content')


            </div>
            </div>






