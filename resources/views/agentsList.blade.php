@extends('layouts.profilemaster')
@section('content')
    
<div class="flex items-center justify-center p-12">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="mx-auto w-full max-w-[550px]">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="flex justify-center">
               
            <button class="
            px-6
            py-2
            mt-4
            text-sm
            font-medium
            leading-5
            text-center text-white
            transition-colors
            duration-150
            bg-green-600
            border border-transparent
            rounded-lg
            hover:bg-green-700
            focus:outline-none">
              {{ __('Approve') }}
          </button>

            <button class="
            px-6
            py-2
            mt-4
            mx-4
            text-sm
            font-medium
            leading-5
            text-center text-white
            transition-colors
            duration-150
            bg-red-600
            border border-transparent
            rounded-lg
            hover:bg-red-700
            focus:outline-none">
              {{ __('DisApprove') }}
          </button>
          </div>
        <div class="mb-4">
            <span class=" ml-1 font-bold "> Email Address: </span>
            <input for="email" readonly value="{{Auth::user()->email}}" type="email" name="email" :value="old('email')" required class="
                   w-full 
                  px-4
                  py-2
                  text-sm
                  border
                  rounded-md
                  focus:border-blue-400
                  focus:outline-none
                  focus:ring-1
                  focus:ring-blue-600
                " placeholder="Email*" 
        />
        </div>
          
          <div class="mb-4">
            <span class=" ml-1 font-bold "> User Name: </span>
            <input for="name" value="{{ Auth::user()->name}}" type="text" name="name" :value="old('name')" required class="
                   w-full
                  px-4
                  py-2
                  text-sm
                  border
                  rounded-md
                  focus:border-blue-400
                  focus:outline-none
                  focus:ring-1
                  focus:ring-blue-600
                " placeholder="Name" 
/>
          </div>
          <div class="mb-4">
            <span class=" ml-1 font-bold "> Phone Number: </span>
            <input  for="number" value="{{ Auth::user()->cell_no}}" type="tel" name="cell_no" :value="old('number')" required class="
                   w-full
                  px-4
                  py-2
                  text-sm
                  border
                  rounded-md
                  focus:border-blue-400
                  focus:outline-none
                  focus:ring-1
                  focus:ring-blue-600
                " placeholder="03xx-xxxxxxx" />
         </div>
         <div class="flex justify-center">
               
            <button class="
            px-6
            py-2
            mt-4
            text-sm
            font-medium
            leading-5
            text-center text-white
            transition-colors
            duration-150
            bg-blue-600
            border border-transparent
            rounded-lg
            hover:bg-blue-700
            focus:outline-none">
              {{ __('Update') }}
          </button>
          </div>
        </form>
  </div>
</div>
@endsection
