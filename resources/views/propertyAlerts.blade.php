@extends('layouts.dashboardmaster')
@section('content')
<form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="flex-1 h-full max-w-4xl mx-auto mb-5 bg-white rounded-lg shadow-xl">
    <h4 class="mt-5 mb-5 text-3xl font-normal leading-normal text-center text-blue-800">
       Create Alerts About Property
    </h4>
        
    <!-- type purpose location  -->
        <div>
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="ml-5 md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Purpose, Type And Location</h3>
                            <p class="mt-1 text-sm text-gray-600">
                            Choose your purpose , your property type And location where the property Exists.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                    
                        <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="px-4 py-5 mb-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                
                                    <label for="purpose" class="block mb-5 text-sm font-medium text-gray-700">Purpose</label>
                                    <div class="flex items-center mb-4">
                                    
                                        <input id="default-radio-1" type="radio" value="Sale" name="pupose" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sale</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input checked="" id="default-radio-2" type="radio" value="Rent" name="pupose" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rent</label>
                                    </div>

                               
                            </div> 

                            

                            <div class="col-span-6 sm:col-span-4">
                                <label for="property-type" class="block mb-5 text-sm font-medium text-gray-700">Property Type</label>
                                <div class="flex items-center mb-4">
                                    
                                        <input id="default-radio-1" type="radio" value="home" name="PropertyType" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Home</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input checked="" id="default-radio-2" type="radio" value="commercial" name="PropertyType" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Commercial</label>
                                    </div>
                            </div>

                            

                            <div class="col-span-6">
                                <label for="street_address" class="block mb-3 text-sm font-medium text-gray-700">Location</label>
                                <input type="text" id="location" name="location" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Address/location">
                            </div>

                            <!-- <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                <input type="text" name="city" id="city" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div> -->

                            <!-- <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
                                <input type="text" name="state" id="state" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"> -->
                            <!-- </div> -->

                            <!-- <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
                                <input type="text" name="postal_code" id="postal_code" autocomplete="postal-code" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div> -->
                            </div>
                        </div>
                        <!-- <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                            <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                            </button>
                        </div> -->
                        </div>
                    <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
        <!-- specs and price  -->
        
        <div>
            <div class="mt-5 mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="mt-5 ml-5 md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Property specs and price</h3>
                            <p class="mt-1 text-sm text-gray-600">
                            Mention your property size in marla with price.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                    <!-- <form action="#" method="POST"> -->
                        <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                
                                    
                            </div> 

                            <!-- <div class="col-span-6 sm:col-span-3">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div> -->

                            <!-- <div class="col-span-6 sm:col-span-4">
                                <label for="property-type" class="block mb-5 text-sm font-medium text-gray-700">Property Type</label>
                                <div class="flex items-center mb-4">
                                    
                                        <input id="default-radio-1" type="radio" value="home" name="PropertyType" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Home</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input checked="" id="default-radio-2" type="radio" value="commercial" name="PropertyType" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Commercial</label>
                                    </div>
                            </div> -->

                            <!-- <div class="col-span-6 sm:col-span-3">
                                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                <select id="city" name="city" autocomplete="city" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" disabled selected>Select The City</option>
                                    
                                    {{-- @foreach ($cities as $city)
                                    <option value="{{ $city->id}}">{{ $city->name}}</option>
                                    @endforeach --}}
                                </select>
                            </div> -->

                            <div class="col-span-6">
                                <label for="areaSize" class="block mb-3 text-sm font-medium text-gray-700">Area Size</label>
                                <input type="text" id="areaSize" name="areaSize" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Marla">
                            </div>
                            
                            <div class="col-span-6">
                                <label for="totalPrice" class="block mb-3 text-sm font-medium text-gray-700">Total Price</label>
                                <input type="text" id="totalPrice" name="totalPrice" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1,00,000,000">
                            </div>

                           
                            </div>
                        </div>
                        <!-- <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                            <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                            </button>
                        </div> -->
                        </div>
                    <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
        <hr>
        

        
       
        <hr>
        
        <!--decription and title -->
        
        <div>
            <div class="mt-5 mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="mt-5 ml-5 md:col-span-1">
                        
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                    <!-- <form action="#" method="POST"> -->
                        <div class="overflow-hidden shadow sm:rounded-md">
                       
                        <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                            <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Add Alert
                            </button>
                        </div>
                        </div>
                    <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

</form>
    
@endsection