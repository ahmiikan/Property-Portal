@extends('layouts.dashboardmaster')
@section('content')
    <br>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    @if(!$agents->first())
        0 agents verified.
       
            @if ($message = Session::get('success'))
            <div class="">
                <p>{{ $message }}</p>
            </div>
            @endif
        @else
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                     {{-- <th scope="col" class="px-6 py-3">
                        Role
                    </th> --}}
                    {{-- <th scope="col" class="px-6 py-3">
                        Status
                    </th> --}}
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($agents as $key => $agent)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ ++$i }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $agent->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $agent->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $agent->email }}
                            </td>
                           
                            {{-- <td class="px-6 py-4">
                                {{ $agent->agent_status }}
                            </td> --}}
                             <input type="hidden" name="id" value="{{ $agent->id }}">
                             <td class="flex px-6 py-4 space-x-2 " >
                              <a href="{{ route('users.show',$agent->user)}}"> <button 
                                    class="px-4 py-2 font-semibold text-blue-700 bg-transparent border border-blue-500 rounded hover:bg-blue-500 hover:text-white hover:border-transparent">
                                    View
                                </button></a> 
                                {{-- <button href="{{ route('agent.edit', $agent->id) }}"
                                    class="px-4 py-2 font-semibold text-green-700 bg-transparent border border-green-500 rounded hover:bg-green-500 hover:text-white hover:border-transparent">
                                    Edit
                                </button> --}}
                                {{-- <form action=""  method="POST">
                                    @csrf
                                        @method('delete')
                                    <button class="px-4 py-2 font-semibold text-green-700 bg-transparent border border-red-500 rounded hover:bg-green-500 hover:text-white hover:border-transparent"
                                type="submit" >
                                Delete
                                </form> --}}
                               

                            </td> 

                        </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
    {!! $agents->render() !!}
    @endif
@endsection
