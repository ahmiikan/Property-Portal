@extends('layouts.dashboardmaster')
@section('content')
@if ($message = Session::get('success'))
        <div class="">
            <br>{{ $message }}<br>
        </div>
    @endif
<div class="flex  items-center justify-center p-12">
  
    <div class="mx-10 mb-4">
      <img src="{{url('/images')}}/{{Auth::user()->image}}" class="mr-5 rounded-full w-24" alt="">
    </div>
 
  <div class="mx-auto w-full max-w-[550px]">
    <form method="POST" action="{{ route('personalinfo') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1 class =" mb-10 font-bold"> Update Profile Information </h1>
        <div class="mb-4">

            <span class="ml-1 font-bold ">  Email Address: </span>
            <input for="email" readonly value="{{Auth::user()->email}}" type="email" name="email" :value="old('email')" required class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" placeholder="Email*" 
/>
          </div>
          
          <div class="mb-4">
            <span class="ml-1 font-bold ">   Name: </span>
            <input for="name" value="{{ Auth::user()->name}}"  type="text" name="name" :value="old('name')" required class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" placeholder="Name" 
/>
          </div>
          <div class="mb-4">
            <span class="ml-1 font-bold "> Phone Number: </span>
            <input  for="number" value="{{ Auth::user()->cell_no}}" type="tel" name="cell_no" :value="old('number')" required class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" placeholder="03xx-xxxxxxx" />
         </div>

        
         <span class="ml-1 font-bold "> City: </span>
          <select id="City" for="city"  value="{{Auth::user()->city->id}}"
                                        class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" name="city">
                                        @foreach ($cities as $city)
                                        @if ($city->id ==Auth::user()->city->id){   

                                        <option selected value="{{ $city->id }}">{{ $city->name }}</option>
                                      }@else{                                        
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
}
                                      @endif            
                                      @endforeach
                                    </select>
          <div class="flex justify-center">
            <br>
  
          <div class="mb-4 mt-10 " >
                                    <label for="image">Choose profile image (PNG, JPG)</label>
                                    <input type="file" accept=".jpg, .jpeg, .png"
                                        name="image" :value="{{ Auth::user()->image}}"
                                        class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-5 focus:ring-blue-600" />
            </div>
                      
                                <div>
                                <button class="px-6 py-2 mt-20 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg hover:bg-blue-700 focus:outline-none">
                                   {{ __('Update') }}
                                </button>
                                </div>
            
          </div>
            </form>
  </div>
</div>


@endsection
