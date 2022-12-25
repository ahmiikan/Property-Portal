@extends('layouts.dashboardmaster')
@section('content')
    @if ($message = Session::get('success'))
        <div class="">
            <p>{{ $message }}</p>
        </div>
    @endif

    <form method="POST" action="{{ route('pass-reset.store') }}" method="POST">
        @csrf
        <div class="mt-4 mb-4 ml-10">
            <label class="text-xl font-bold " for="password">Enter Old Password :</label> <br> <br>

            <input type="password" name="old-password" :value="old('password')" required autofocus
                class="px-4 py-2 text-sm border rounded-md w-96 focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                placeholder=" Old Password" />
        </div>
        @if ($errors->has('old-password'))
            <div class="error">{{ $errors->first('old-password') }}</div>
        @endif
        <!-- Password input -->

        <div class="mt-4 mb-4 ml-10">

            <label class="text-xl font-bold " for="password">Enter New Password :</label> <br> <br>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
            <input required autocomplete="current-password" name="password" type="password"
                class="px-4 py-2 text-sm border rounded-md w-96 focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                placeholder="New Password" />
        </div>

        <div class="mt-4 mb-4 ml-10">
            <label class="text-xl font-bold " for="password">Enter Confirm Password :</label> <br> <br>
            <input required autocomplete="current-password" name="password_confirmation" type="password"
                class="px-4 py-2 text-sm border rounded-md w-96 focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                placeholder="Confirm Password" />
        </div>
        <!-- Submit button -->
        <div>
            <button type="submit"
                class="px-4 py-2 ml-10 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-md rounded-lg w-96 hover:bg-blue-700 focus:outline-none"
                data-mdb-ripple="true" data-mdb-ripple-color="light">
                Reset Password
            </button>
        </div>
        <br><br>

    </form>
@endsection
