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
                        <h3 class="mb-4 text-xl font-bold text-center text-blue-600">Sign up</h3>
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <input for="email"   type="email" name="email"
                                    value="{{ old('email') }}" required
                                    class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                    placeholder="Email*" />
                            </div>
                            <div class="mb-4">

                                <input for="password"  type="password" name="password" required
                                    autocomplete="new-password"
                                    class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                    placeholder="Password*" />
                            </div>
                            <div class="mb-4">

                                <input for="password_confirmation" type="password" name="password_confirmation" required
                                                                         class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                    placeholder="Confirm Password" />
                            </div>
                            <div class="mb-4">

                                <input for="name"   type="text" name="name"
                                    value="{{ old('name')  }}" required
                                    class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                    placeholder="Name" />
                            </div>
                            <div class="mb-4">

                                <input for="number"  type="tel" name="cell_no"
                                    value="{{old('cell_no')}}" required
                                    class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                    placeholder="03xx-xxxxxxx" />
                            </div>
                            <div class="mb-4">
                                <select id="countries" name="country_id" for="countries"                                     value="{{old('country_id')}}" required
                                    class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600">
                                    <option value="" disabled selected>Choose a country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="mt-4 mb-4">

                                <select id="Cities" name="city_id" for="city"  
                                   value="{{old('city_id')}}" required
                                    class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600">
                                </select>
                            </div>
                            <div class="mb-4">
                              <label for="image">Choose Profile Photo (PNG, JPG)</label>
                              <input type="file" accept=".jpg, .jpeg, .png"
                                  name="image" value="{{old('image')}}"
                                  class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-5 focus:ring-blue-600" />
                          </div>
                            <div class="mb-4">

                                <select id="SignupAs" name="SignupAs" for="SignupAs" value="{{old('SignupAs')}}" onchange="display('display', this)"
                                    class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                    placeholder="Phone Number" required>
                                    <option value="" disabled selected>Signing Up As</option>
                                    <option value="1">User</option>
                                    <option value="2">Agent</option>
                                </select>
                            </div>
                            <div id="display" style="display:none;">
                                <div class="mt-4 mb-4">

                                    <select id="City" for="city"  value=""
                                        class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" multiple data-live-search="true" name="agent_cities[]">
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">

                                    <input for="agencyName"  ('AgencyName')" type="text" name="agencyName"
                                        :value="old('agencyName')"
                                        class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                        placeholder="Agency Name" />
                                </div>
                                <div class="mb-4">
                                    <label for="logo">Choose Company Logo (PNG, JPG)</label>
                                    <input type="file" accept=".jpg, .jpeg, .png"
                                        name="logo" :value="{{old('Logo')}}"
                                        class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-5 focus:ring-blue-600" />
                                </div>
                                <div class="mb-4">

                                    <input for="Address" type="text"
                                        name="Address" value="{{old('Address')}}"
                                        class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                        placeholder="Agency Address" />
                                </div>
                                <div class="mb-4">

                                    <input for="phoneNumber"   type="tel" name="Number"
                                        value="{{old('Number')}}"
                                        class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                        placeholder="0xx-xxxxxxx" />
                                </div>
                                <div class="mb-4">

                                    <input for="AgencyEmail"  type="email" name="AgencyEmail"
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
                                <p class="text-sm">
                                    <a class="text-sm text-blue-600 underline hover:underline"
                                        href="{{ route('login') }}">
                                        {{ __('Already registered?') }}</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
    <!-- ajax jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function display(id, elementValue) {
            document.getElementById(id).style.display = elementValue.value == 2 ? 'block' : 'none';
        }


        $(document).ready(function() {
            $('#countries').on('change', function() {
                var idCountry = this.value;
                console.log(idCountry);
                $("#Cities").html('');
                $.ajax({
                    url: "{{ url('api/fetch-cities') }}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        console.log("success");

                        $('#Cities').html('<option value="">Select City</option>');
                        $.each(res.cities, function(key, value) {
                            console.log(value.id);

                            $("#Cities").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        console.log(res);
                    }
                });
            });
        });
    </script>
@endsection
