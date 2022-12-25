@extends('layouts.master')
@section('content')

    <body>

        <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
            <div class="flex flex-col md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img class="object-cover w-full h-full" src="{{ asset('assets/css/house.jpg') }}" alt="img" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h3 class="mb-4 text-xl font-bold text-blue-600">Login </h3>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <!-- Message -->
                        <br>
                        <div class="">
                            @if ($message = Session::get('success'))
                                <div class="">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mt-4 mb-4">

                                    <input type="email" name="email" :value="old('email')" required autofocus
                                        class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                        placeholder="Email" />
                                </div>

                                <!-- Password input -->

                                <div class="mt-4 mb-4">

                                    <input required autocomplete="current-password" name="password" type="password"
                                        class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                        placeholder="Password" />
                                </div>
                                <!-- Submit button -->
                                <div>
                                    <button type="submit"
                                        class="w-full px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-md rounded-lg hover:bg-blue-700 focus:outline-none"
                                        data-mdb-ripple="true" data-mdb-ripple-color="light">
                                        Login
                                    </button>
                                </div>
                                <br><br>

                                <div class="flex items-center justify-between mb-6 ">
                                    <div class="form-group form-check">
                                        <input type="checkbox"
                                            class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-sm appearance-none cursor-pointer form-check-input checked:bg-black focus:outline-none"
                                            id="exampleCheck3" />
                                        <label class="inline-block text-gray-800 form-check-label"
                                            for="exampleCheck2">Remember me</label>
                                    </div>
                                    <div>
                                        <a class="text-blue-600 transition duration-200 ease-in-out hover:text-blue-700 focus:text-blue-700 active:text-blue-800"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    </div>
                                </div>
                                <!-- Submit button -->

                            </form>
                            <div>
                                <button type="button"
                                    class="w-full px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-md rounded-lg hover:bg-blue-700 focus:outline-none"
                                    onclick="window.location='{{ url('register') }}'">
                                    {{ __('Become a free member') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
@endsection
