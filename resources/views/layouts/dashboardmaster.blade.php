<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">  
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

    <script  defere src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <title>Welcome To Property Portal</title>
</head>
<body class="bg-gray-100">
  
   

<!-- start navbar -->
<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
    
  <!-- logo -->
  <div class="flex-none w-56 flex flex-row items-center">
    <img src="{{ asset('assets/css/home.png') }}" class="w-10 flex-none">
    <strong class="capitalize ml-2 mt-2 text-2xl flex-1">Property Portal</strong>

    <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
      <i class="fad fa-list-ul"></i>
    </button>
  </div>
  <!-- end logo -->   
  
  <!-- navbar content toggle -->
  <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
    <i class="fad fa-chevron-double-down"></i>
  </button>
  <!-- end navbar content toggle -->

  <!-- navbar content -->
  <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
    <!-- left -->
    <div class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">
     
    </div>
    <!-- end left -->      

    <!-- right -->
    <div class="flex flex-row-reverse items-center"> 

      <!-- user -->
      <div class="dropdown relative md:static">

        <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
          <div class="w-8 h-8 overflow-hidden rounded-full">
            <img class="w-full h-full object-cover" src="{{url('/images')}}/{{Auth::user()->image??'default.png'}}" >
          </div> 

          <div class="ml-2 capitalize flex ">
            <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">{{Auth()->user()->name}}</h1>
            <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
          </div>                        
        </button>

        <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

        <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

          <!-- item -->
          <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
           href="{{ route('personalinfo') }}">
            <i class="fad fa-user-edit text-xs mr-1"></i> 
            edit my profile
          </a>     
          <!-- end item -->
          <hr>
          <!-- item -->
          <form
          class="flex flex-row items-center h-10 px-3 text-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700"
          method="POST" action="{{ route('logout') }}">
          @csrf
          <span class="flex items-center justify-center text-lg text-red-400">
              <i class="fad fa-sign-out-alt"></i>
              <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" 
                  href="route('logout')"
                  onclick="event.preventDefault();
  this.closest('form').submit();">Logout</a>
      </form>     
          <!-- end item -->

        </div>
      </div>
      <!-- end user -->

      <!-- notifcation -->
    
      <!-- end notifcation -->

      <!-- messages -->
     
      <!-- end messages -->               


    </div>
    <!-- end right -->
  </div>
  <!-- end navbar content -->
  
</div>
<!-- end navbar -->

@php
$role = auth()
    ->user()
    ->roles->pluck('name')->first();
    
@endphp

@if ($role === 'Super Admin' || $role === 'Admin')
    @include('/components/adminDashboard')
    
@elseif ($role === 'Agent')
    @include('/components/agentDashboard')
@else
    @include('/components/userDashboard')
@endif
   




<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{asset('assets\js\scripts.js')}}" defer></script>
<!-- end script -->

</body>
</html>
