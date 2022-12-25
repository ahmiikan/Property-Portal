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

    <!-- component -->
    <div class="flex flex-col justify-between flex-1 h-screen p:2 sm:p-6">
        <div class="flex justify-between py-3 border-b-2 border-gray-200 sm:items-center">
            <div class="relative flex items-center space-x-4">
                <div class="relative">
                    <span class="absolute bottom-0 right-0 text-green-500">
                        <svg width="20" height="20">
                            <circle cx="8" cy="8" r="8" fill="currentColor"></circle>
                        </svg>
                    </span>
                
                    <img src="{{ url('/images') }}/{{$recipient->image ?? 'default_user.jpg' }}"
                        alt="" class="w-10 h-10 rounded-full sm:w-16 sm:h-16">
                </div>
                <div class="flex flex-col leading-tight">
                    <div class="flex items-center mt-1 text-2xl">
                        <span class="mr-3 text-gray-700">{{ $recipient->name?? ''}}
                        </span>
                    </div>
                    <span class="text-lg text-gray-600">{{ $recipient->getRoleNames()[0]?? ''}}</span>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <button type="button"
                    class="inline-flex items-center justify-center w-10 h-10 text-gray-500 transition duration-500 ease-in-out border rounded-lg hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
                <button type="button"
                    class="inline-flex items-center justify-center w-10 h-10 text-gray-500 transition duration-500 ease-in-out border rounded-lg hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                        </path>
                    </svg>
                </button>
                <button type="button"
                    class="inline-flex items-center justify-center w-10 h-10 text-gray-500 transition duration-500 ease-in-out border rounded-lg hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        {{-- {{ $messages }} --}}
        <div id="imessages"
            class="flex flex-col p-3 space-y-4 overflow-y-auto scrolling-touch scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2">
            @foreach ($messages as $message)
                @if ($message->sender_id == Auth::user()->id)
                    <div class="chat-message">
                        <div class="flex items-end justify-end">
                            <div class="flex flex-col items-end order-1 max-w-xs mx-2 space-y-2 text-xs">
                                <div>
                                    @if ($message->image)
                                    <img src="{{ url('/images') }}/{{$message->image}}" alt="" class="w-100 h-100 sm:w-16 sm:h-16">
                                
                                   @endif
                                   @if ($message->message)
                                   <span
                                   class="inline-block px-4 py-2 text-white bg-blue-600 rounded-lg rounded-br-none ">{{ $message->message ?? ""}}</span>
                                  </span>
                                    @endif
                                </div>
                            </div>
                            <img src="{{ url('/images') }}/{{ Auth::user()->image ?? 'default_user.jpg' }}"
                                alt="" class="order-2 w-6 h-6 rounded-full">
                        </div>
                    </div>
                @else
                    <div class="chat-message">
                        <div class="flex items-end">
                            <div class="flex flex-col items-start order-2 max-w-xs mx-2 space-y-2 text-xs">
                                <div>
                                    @if ($message->image)
                                    <img src="{{ url('/images') }}/{{$message->image}}" alt="" class="w-100 h-100 sm:w-16 sm:h-16">
                                
                                   @endif
                                   @if ($message->message)
                                    
                                    <span
                                        class="inline-block px-4 py-2 text-gray-600 bg-gray-300 rounded-lg rounded-bl-none">{{ $message->message }}</span>
                                @endif
                                    </div>
                            </div>
                            <img 
                            src="{{ url('/images') }}/{{$recipient->image ?? 'default_user.jpg' }}"
                                alt="" class="order-1 w-6 h-6 rounded-full">
                        </div>
                    </div>
                @endif
            @endforeach


        </div>
    </div>

    <form enctype="multipart/form-data" id="messages" method="POST">
        @csrf
        <div class="px-4 pt-4 mb-2 border-t-2 border-gray-200 sm:mb-0">
            <div class="relative flex">
                <span class="absolute inset-y-0 flex items-center">

                </span>
                <input type="text" name="message" placeholder="Write your message!"
                    class="w-full py-3 pl-12 text-gray-600 placeholder-gray-600 bg-gray-200 rounded-md focus:outline-none focus:placeholder-gray-400">
                <div class="absolute inset-y-0 right-0 items-center hidden sm:flex">
                    <label for="img" class="mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6 text-gray-600">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg> </label>
                    <input class="hidden" id="img" name="img" onchange="readURL(this);" type="file" />




                    <button type="submit" id="send"
                        class="inline-flex items-center justify-center px-4 py-3 text-white transition duration-500 ease-in-out bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none">
                        <span class="font-bold">Send</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-6 h-6 ml-2 transform rotate-90">
                            <path
                                d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
    </form>
    <img id="blah" class="hidden w-10 " alt="" />

    </div>
    </div>

    <style>
        .scrollbar-w-2::-webkit-scrollbar {
            width: 0.25rem;
            height: 0.25rem;
        }

        .scrollbar-track-blue-lighter::-webkit-scrollbar-track {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity));
        }

        .scrollbar-thumb-blue::-webkit-scrollbar-thumb {
            --bg-opacity: 1;
            background-color: #edf2f7;
            background-color: rgba(237, 242, 247, var(--bg-opacity));
        }

        .scrollbar-thumb-rounded::-webkit-scrollbar-thumb {
            border-radius: 0.25rem;
        }
    </style>
    {{-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
    <script>
        const el = document.getElementById('imessages')
        el.scrollTop = el.scrollHeight


        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result);
                    $('#blah').removeClass("hidden");


                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <script type="text/javascript">
        $('#messages').on('submit', function(e) {
            e.preventDefault();

            console.log($('#messages').serialize());

            $.ajax({
                url: location.href,
                type: "POST",
                // enctype:"multipart/form-data",

                data: new FormData($('#messages')[0]),

                contentType: false,
                cache: false,
                processData: false,

                success: function(response) {
                    console.log(response);
                    if (response) {
                        $('#success-message').text(response.success);
                        $("#messages")[0].reset();
                        $('#blah').addClass("hidden");

                    }
                },
                //  error: function(response) {
                //      $('#message-error').text(response.responseJSON.errors.message);
                //  }
            });

        });
    </script>



</body>

</html>
