@extends('layouts.dashboardmaster')
@section('content')

<!-- agent 1  -->
<section class="p-6 md:p-12 text-center md:text-left shadow-lg rounded-md" style="background-image: url(https://mdbcdn.b-cdn.net/img/Photos/Others/background2.jpg)">
  <div class="flex justify-center">
    <div class="max-w-3xl">
      <div class="block p-6 rounded-lg shadow-lg bg-white m-4">
        <div class="md:flex md:flex-row">
          <div
            class="md:w-96 w-36 flex justify-center items-center mb-6 lg:mb-0 mx-auto md:mx-0"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg"
              class="rounded-full shadow-md"
              alt="woman avatar"
            />
          </div>
          <div class="md:ml-6">
            <p class="text-gray-500 font-light mb-6">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
              molestiae numquam quas, voluptates omnis nulla ea odio quia similique corrupti
              magnam.
            </p>
            <p class="font-semibold text-xl mb-2 text-gray-800">Anna Smith</p>
            <p class="font-semibold text-gray-500 mb-0">Product manager</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div>
            <div class="flex items-center justify-center mb-3">
                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                    <button type="button" class="rounded-l inline-block px-8 py-3 bg-blue-500 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-700 transition duration-150 ease-in-out">Approve</button>
                    <button type="button" class="inline-block px-6 py-3 bg-red-500 text-white font-medium text-xs leading-tight uppercase hover:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-0 active:bg-red-700 transition duration-150 ease-in-out">Disapprove</button>
                    <a href="{{ route('verifyDocs') }}" class="rounded-r inline-block px-6 py-3 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase hover:bg-yellow-600 focus:bg-yellow-600 focus:outline-none focus:ring-0 active:bg-yellow-700 transition duration-150 ease-in-out">View Docs</a>
                </div>
            </div>
</div>

<!-- agent 2  -->
<section class="p-6 md:p-12 text-center md:text-left shadow-lg rounded-md" style="background-image: url(https://mdbcdn.b-cdn.net/img/Photos/Others/background2.jpg)">
  <div class="flex justify-center">
    <div class="max-w-3xl">
      <div class="block p-6 rounded-lg shadow-lg bg-white m-4">
        <div class="md:flex md:flex-row">
          <div
            class="md:w-96 w-36 flex justify-center items-center mb-6 lg:mb-0 mx-auto md:mx-0"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg"
              class="rounded-full shadow-md"
              alt="woman avatar"
            />
          </div>
          <div class="md:ml-6">
            <p class="text-gray-500 font-light mb-6">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
              molestiae numquam quas, voluptates omnis nulla ea odio quia similique corrupti
              magnam.
            </p>
            <p class="font-semibold text-xl mb-2 text-gray-800">Anna Smith</p>
            <p class="font-semibold text-gray-500 mb-0">Product manager</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div>
            <div class="flex items-center justify-center mb-3">
                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                    <button type="button" class="rounded-l inline-block px-8 py-3 bg-blue-500 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-700 transition duration-150 ease-in-out">Approve</button>
                    <button type="button" class="inline-block px-6 py-3 bg-red-500 text-white font-medium text-xs leading-tight uppercase hover:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-0 active:bg-red-700 transition duration-150 ease-in-out">Disapprove</button>
                    <a href="{{ route('verifyDocs') }}"  type="submit"  class="rounded-r inline-block px-6 py-3 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase hover:bg-yellow-600 focus:bg-yellow-600 focus:outline-none focus:ring-0 active:bg-yellow-700 transition duration-150 ease-in-out">View Docs</a>
                   
                  </div>
            </div>
</div>
@endsection