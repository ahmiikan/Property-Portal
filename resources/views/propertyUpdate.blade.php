@extends('layouts.dashboardmaster')
@section('content')
@if ($message = Session::get('success'))
<div class="">
    <p class="border border-gray-200">{{ $message }}</p>
</div>
@endif

@if (count($errors) > 0)
<br>
<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

    @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

    @endforeach

    </ul>

</div>

@endif

<form action="{{ route('property.update',$property->id) }}" method="post" enctype="multipart/form-data">

        @csrf
        @method('PUT')

    

        <div class="flex-1 h-full max-w-4xl mx-auto mb-5 bg-white rounded-lg shadow-xl">
            <h4 class="mt-5 mb-5 text-3xl font-normal leading-normal text-center text-blue-800">
                Update Listed Property 
            </h4>
            <div>
                <div class="mt-5 mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="mt-5 ml-5 md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Property Title and Description</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Mention your property title with description.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                        <!-- <form action="#" method="POST"> -->
                            <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                <!-- <div class="col-span-6 sm:col-span-3">
                                    
                                        
                                </div> -->
                                <div class="col-span-6">
                                    <label  for="areaSize" class="block mb-3 text-sm font-medium text-gray-700">Property Title</label>
                                    <input value="{{ $property->title }}" type="text" id="propertyTitle" name="propertyTitle" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Property Title">
                                </div>
                                
                                <div class="col-span-6">
                                    <label  for="description" class="block mb-3 text-sm font-medium text-gray-700">Description</label>
                                    <input value="{{ $property->description }}" type="text" id="description" name="description" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Details of Property">
                                </div>
    
                               
                                </div>
                            </div>
                           
                            </div>
                        <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- type purpose location  -->
                <div>
                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="ml-5 md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Purpose, Type And Location</h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                    choose your purpose , your property type And location where the property Exists.
                                    </p>
                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-2">
                            <!-- <form action="#" method="POST"> -->
                                <div class="overflow-hidden shadow sm:rounded-md">
                                <div class="px-4 py-5 mb-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        
                                            <label for="purpose" class="block mb-5 text-sm font-medium text-gray-700">Purpose</label>
                                            <div class="flex items-center mb-4">
                                            
                                                <input value="0" {{ ( $property->sale=="0")? "checked" : "" }} id="default-radio-1" type="radio" name="purpose" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sale</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input value="1" {{ ( $property->rent=="1")? "checked" : "" }} id="default-radio-2" type="radio" name="purpose" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rent</label>
                                            </div>
    
                                        <!-- <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"> -->
                                    </div> 
    
                                    <!-- <div class="col-span-6 sm:col-span-3">
                                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                        <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div> -->
    
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="property-type" class="block mb-5 text-sm font-medium text-gray-700">Property Type</label>
                                        <div class="flex items-center mb-4">
                                            
                                                <input value="0" {{ ($property->home=="0")? "checked" : "" }} id="default-radio-1" type="radio" value="0" name="PropertyType" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Home</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input 
                                                value="1" {{ ($property->commercial=="1")? "checked" : "" }} id="default-radio-2" type="radio" value="1" name="PropertyType" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Commercial</label>
                                            </div>
                                    </div>
                                     <div class="col-span-6 sm:col-span-3">
                                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                        <select id="city" name="city" autocomplete="city" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="" disabled selected>Select The City</option>
                                            
                                            @foreach ($cities as $city)
                                            <option value="{{ $city->id}}">{{ $city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
    
                                    <div class="col-span-6">
                                        <label for="street_address" class="block mb-3 text-sm font-medium text-gray-700">Location</label>
                                        <input value="{{ $property->address }}" type="text" id="location" name="location" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Address/location">
                                    </div>
    
                            
                                    </div>
                                </div>
                             
                                </div>
                            <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                
                <!-- specs and price  -->
                
                <div class="mt-10">
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
    
                                    <div class="col-span-6">
                                        <label for="areaSize" class="block mb-3 text-sm font-medium text-gray-700">Area Size</label>
                                        <input value="{{ $property->size }}" type="text" id="areaSize" name="areaSize" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Marla">
                                    </div>
                                    
                                    <div class="col-span-6">
                                        <label for="totalPrice" class="block mb-3 text-sm font-medium text-gray-700">Total Price</label>
                                        <input value="{{ $property->price }}" type="text" id="totalPrice" name="totalPrice" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1,00,000,000">
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
                
    
                
                <!--Images -->
                
                    <div>
                        <div class="mt-5 mt-10 sm:mt-0">
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                <div class="mt-5 ml-5 md:col-span-1">
                                    <div class="px-4 sm:px-0">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">Property Images</h3>
                                        <p class="mt-1 text-sm text-gray-600">
                                            Upload Property Images.
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <!-- <form action="#" method="POST"> -->
                                    <div class="overflow-hidden shadow sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <div class="container mt-5">
                                                    @if (session('status'))
                                                        <div class="alert alert-success">
                                                            {{ session('status') }}
                                                        </div>
                                                    @endif
                                                    <style>
                                                        .images-preview-div img {
                                                            padding: 10px;
                                                            max-width: 100px;
                                                        }
                                                    </style>
                                                    <div class="card">
                                                        <div class="text-center card-header font-weight-bold">
    
                                                        </div>
                                                    <div class="card-body">
    
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <input type="file" class="ml-10" name="images[]" id="images"
                                                                            placeholder="Choose images" multiple>
                                                                    </div>
                                                                    <br>
                                                                    @error('images')
                                                                        <div class="mt-1 mb-1 alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="ml-10 col-md-12">
                                                                    <div class="mt-1 text-center">
                                                                        <div class="images-preview-div">
                                                                            {{-- <img src="{{ url('/images') }}/{{ $property->images->image }}" class="w-full"
                                                                            alt=""> --}}
                                                                            @foreach ($property->images as $image)
                                                                            <img src="{{ url('/images') }}/{{ $image->image}}" 
                                                                            alt="property" class="w-full lg:w-52">
                                                                            @endforeach </div>
                                                                    </div>
                                                                </div>
    
                                                            </div>
    
                                                        </div>
                                                    </div>
                                                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                                                    <script>
                                                        $(function() {
                                                            // Multiple images preview with JavaScript
                                                            var previewImages = function(input, imgPreviewPlaceholder) {
                                                                if (input.files) {
                                                                    var filesAmount = input.files.length;
                                                                    for (i = 0; i < filesAmount; i++) {
                                                                        var reader = new FileReader();
                                                                        reader.onload = function(event) {
                                                                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                                                                imgPreviewPlaceholder);
                                                                        }
                                                                        reader.readAsDataURL(input.files[i]);
                                                                    }
                                                                }
                                                            };
                                                            $('#images').on('change', function() {
                                                                previewImages(this, 'div.images-preview-div');
                                                            });
                                                        });
                                                    </script>
                                                    </div>
                                                
                                                </div>
                                   
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </form> -->
                                 </div>
                        </div>
                    </div>
                </div>
                <hr>
                
                <!--decription and title -->
                <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                    <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update
                    </button>
                </div>
               
                <hr>
            </div>
       
    </form>   
   
@endsection
