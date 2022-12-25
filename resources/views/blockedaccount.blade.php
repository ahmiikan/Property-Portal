<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Account is Blocked</title>
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"
    href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
    
<div class="bg-blue-200 min-h-screen flex items-center">

   <div class="w-full">
   <h1 class="text-sm text-red-400 mt-2 text-center font-bold text-2xl uppercase mb-10">{{auth()->user()->reason}}</h1>

     <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Fill out our form to appeal</h2>
     <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">

       <form action="{{route('unblock.appeal')}}" method="post">
         
@csrf
         <div class="mb-5">
           <label for="appeal" class="block mb-2 font-bold text-gray-600">Appeal</label>
           <input type="text" id="appeal" name="appeal" placeholder="Write here." class="border border-red-300 shadow p-10 w-full rounded mb-">
           <p class="text-sm text-red-400 mt-2">Why Should We Unblock Your Account?</p>
         </div>

         <button class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
       </form>
     </div>
   </div>
 </div>

</body>
</html>