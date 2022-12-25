
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Property portal')</title>

    <script defer src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>
<div>
  {{-- {{ $messages }} --}}
    
  <!-- user list -->
  <div
    class="flex flex-row items-center justify-center px-2 py-4 border-b-2"
  >
    <div class="w-1/4">
      <img
        src="https://source.unsplash.com/_7LbC5J-jw4/600x600"
        class="object-cover w-12 h-12 rounded-full"
        alt=""
      />
    </div>
    <div class="w-full">
      <div class="text-lg font-semibold">Luis1994</div>
      <span class="text-gray-500">Pick me at 9:00 Am</span>
    </div>
  </div>
  <div class="flex flex-row items-center px-2 py-4 border-b-2">
    <div class="w-1/4">
      <img
        src="https://source.unsplash.com/otT2199XwI8/600x600"
        class="object-cover w-12 h-12 rounded-full"
        alt=""
      />
    </div>
    <div class="w-full">
      <div class="text-lg font-semibold">Everest Trip 2021</div>
      <span class="text-gray-500">Hi Sam, Welcome</span>
    </div>
  </div>
  <div
    class="flex flex-row items-center px-2 py-4 border-b-2 border-l-4 border-blue-400"
  >
    <div class="w-1/4">
      <img
        src="https://source.unsplash.com/L2cxSuKWbpo/600x600"
        class="object-cover w-12 h-12 rounded-full"
        alt=""
      />
    </div>
    <div class="w-full">
      <div class="text-lg font-semibold">MERN Stack</div>
      <span class="text-gray-500">Lusi : Thanks Everyone</span>
    </div>
  </div>
  <div class="flex flex-row items-center px-2 py-4 border-b-2">
    <div class="w-1/4">
      <img
        src="https://source.unsplash.com/vpOeXr5wmR4/600x600"
        class="object-cover w-12 h-12 rounded-full"
        alt=""
      />
    </div>
    <div class="w-full">
      <div class="text-lg font-semibold">Javascript Indonesia</div>
      <span class="text-gray-500">Evan : some one can fix this</span>
    </div>
  </div>
  <div class="flex flex-row items-center px-2 py-4 border-b-2">
    <div class="w-1/4">
      <img
        src="https://source.unsplash.com/vpOeXr5wmR4/600x600"
        class="object-cover w-12 h-12 rounded-full"
        alt=""
      />
    </div>
    <div class="w-full">
      <div class="text-lg font-semibold">Javascript Indonesia</div>
      <span class="text-gray-500">Evan : some one can fix this</span>
    </div>
  </div>

  <div class="flex flex-row items-center px-2 py-4 border-b-2">
    <div class="w-1/4">
      <img
        src="https://source.unsplash.com/vpOeXr5wmR4/600x600"
        class="object-cover w-12 h-12 rounded-full"
        alt=""
      />
    </div>
    <div class="w-full">
      <div class="text-lg font-semibold">Javascript Indonesia</div>
      <span class="text-gray-500">Evan : some one can fix this</span>
    </div>
  </div>
  <!-- end user list -->
</div>