@extends('layouts.profilemaster')
@section('content')
<form class="w-full max-w-lg mx-auto justifyalign-center">
    <h4 class="font-medium leading-tight text-2xl mt-0 mb-5 text-blue-600 underline">Enter Your deletion Reason</h4>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                UserName
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="username">
            <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Reason
            </label>
            <textarea id="message" rows="4" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password"  placeholder="Description"></textarea>

        </div>
    </div>
    <div class="flex items-center justify-center mb-3 mt-6">
                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                    
                    <button type="button" class="inline-block px-6 py-3 bg-blue-500 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-700 transition duration-150 ease-in-out">Request</button>
                    
                </div>
    </div>
</form>
@endsection