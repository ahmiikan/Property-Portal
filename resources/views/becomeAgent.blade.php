@extends('layouts.dashboardmaster')
@section('content')

<div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
    <div class="flex flex-col md:flex-row">

        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <h3 class="mb-4 text-xl font-bold text-center text-blue-600">Become An Agent</h3>
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('agent.register') }}" enctype="multipart/form-data">
                    @csrf


                    <div class="mb-4">

                    </div>
                    <div id="display" >
                        <div class="mt-4 mb-4">

                            <select id="City" for="city"  value=""
                                class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" multiple data-live-search="true" name="agent_cities[]">
                                @foreach ($cities as $city)
                                    <option required value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">

                            <input required for="agencyName"('AgencyName')" type="text" name="agencyName"
                                :value="old('agencyName')"
                                class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                placeholder="Agency Name" />
                        </div>
                        <div class="mb-4">
                            <label for="logo">Choose Company Logo (PNG, JPG)</label>
                            <input required type="file" accept=".jpg, .jpeg, .png"
                                name="logo" :value="{{old('Logo')}}"
                                class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-5 focus:ring-blue-600" />
                        </div>
                        <div class="mb-4">

                            <input required for="Address" type="text"
                                name="Address" value="{{old('Address')}}"
                                class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                placeholder="Agency Address" />
                        </div>
                        <div class="mb-4">

                            <input required for="phoneNumber"   type="tel" name="Number"
                                value="{{old('Number')}}"
                                class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                placeholder="0xx-xxxxxxx" />
                        </div>
                        <div class="mb-4">

                            <input required for="AgencyEmail"  type="email" name="AgencyEmail"
                               value="{{old('AgencyEmail')}}"
                                class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                placeholder="Agency Email" />
                        </div>
                    </div>

                    <div class="flex justify-center">


                        <button
                            class="px-6 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg hover:bg-blue-700 focus:outline-none">
                            {{ __('Register') }}
                        </button>
                    </div>
                    <div class="mt-4 text-Left">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>
@endsection
