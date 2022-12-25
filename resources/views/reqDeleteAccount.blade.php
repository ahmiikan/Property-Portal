@extends('layouts.dashboardmaster')
@section('content')
<br>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white">


    <div class="flex justify-center">
        <div class="mb-3 xl:w-96">
          <form action="{{route('account.store')}}" method="POST">
            @csrf
          <label for="exampleFormControlTextarea1" class="form-label inline-block mt-10 mb-10 font-bold text-gray-700"
            >Reason Box</label
          >
          <textarea
            class="
              form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            "
            id="exampleFormControlTextarea1"
            rows="3"
            placeholder="Your message"
         name="reason" ></textarea>
          <button type="submit" class="
          px-6
          py-2
          mt-10
          ml-28
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
          focus:outline-none
          ">
            Delete Account
          </button>
        </form>
        </div>
      </div>
    </div>
   

@endsection