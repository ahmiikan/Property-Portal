@extends('layouts.dashboardmaster')
@section('content')
    @if ($message = Session::get('success'))
        <div class="font-bold text-center ">
            <br>{{ $message }}<br>
        </div>
    @endif
            <br>

            <p class=" font-bold text-center">
                 FBR Certificate OR Company Register Certificate Should Be In The Form Of Image (jpg,png) </p>  
   
                 <div class=" flex items-center justify-center w-full h-screen bg-grey-lighter">
       
        <label
        
            class="flex flex-col items-center mb-40 w-96 h-96 px-28 py-28 tracking-wide uppercase bg-white border rounded-lg shadow-lg cursor-pointer text-blue border-blue hover:bg-blue ">
           <i class="fa fa-upload mt-20 "> </i>
           
             <br>
            <span class=" text-base leading-normal">Select a file</span>
            <form action="{{ route('agent.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type='file' class="hidden" name="doc" />
        </label>
                  <br>
                <button type="submit"
                    class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-red-500 hover:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-0 active:bg-red-700">Submit</button>
            </form>
        
    </div>
@endsection
