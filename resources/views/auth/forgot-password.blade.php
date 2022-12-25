@extends('layouts.master')
@section('content')
      <body>
          <div
            class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl"
          >
            <div class="flex flex-col md:flex-row">
              <div class="h-32 md:h-auto md:w-1/2">
                <img
                  class="object-cover w-full h-full"
                  src="{{ asset('assets/css/house.jpg') }}"
                  alt="img"
                />
              </div>
              <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                <div class="w-full">
                  <h3 class="mb-4 text-xl font-bold text-blue-600">Forgot Password</h3>
                  Please enter your email address and we'll send you a link to reset your password.
                  <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
    
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                  <div class="mt-4 mb-4">
                    
                    <input
                      type="email"
                      class="
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
                        "
                        placeholder="Email"
                        name="email"
                      />
                     </div>
                    <div class="flex justify-end">              
                      <button 
                    class="
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
                    focus:outline-none
                    "
                  >
                    Next
                  </button>
                  </div>
                  <div class="mt-4 text-Left">
                    <p class="text-sm">
                      <a class="underline text-sm text-blue-600 hover:underline" href="{{ route('login') }}">
                        {{ __('Back To Login') }}</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>
      </body>
@endsection
