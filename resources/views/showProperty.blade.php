@extends('layouts.dashboardmaster')
@section('content')
    <br>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        @if ($message = Session::get('success'))
            <div class="">
                <p>{{ $message }}</p>
            </div>
        @endif
        <form class="flex items-center my-4" action="{{route('property.searchkeyall')}}" method="Post">   
            @csrf    
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" name="searchTerm" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
            </div>
            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                   
                    <th scope="col" class="px-6 py-3">
                        Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Purpose
                    </th>
                   
                    <th scope="col" class="px-6 py-3">
                        Size
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                  
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                   
                </tr>
            </thead>
             <tbody >
                @foreach ($data as $property)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                       
                        <td class="px-6 py-4">
                            {{ $property->id }}
                        </td>
                       
                        <td class="px-6 py-4"> 
                            {{ $property->type }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $property->purpose }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $property->size }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $property->price }}
                        </td>                      
                       

                        <td class="px-6 py-4">
                            {{ $property->status }}
                        </td>
                        <td class="px-6 py-4">
                           
                            <img src="{{url('/images')}}/{{$property->images->first()->image?? 'proprty.png'}}" class="mr-5 rounded-full w-10" alt="">

                         
                        </td>

                        
                        <td class="flex px-6 py-4 space-x-2 "> 
                             <a href="{{ route('property.show',$property->id) }}"> <button
                                    class="px-4 py-2 font-semibold text-blue-700 bg-transparent border border-blue-500 rounded hover:bg-blue-500 hover:text-white hover:border-transparent">
                                    View
                                </button> </a>
                            <a href="{{ route('property.edit',$property->id) }}"><button
                                    class="px-4 py-2 font-semibold text-green-700 bg-transparent border border-green-500 rounded hover:bg-green-500 hover:text-white hover:border-transparent">
                                    Edit
                                </button></a>
                            <form action="{{ route('property.delete', $property->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                 <button
                                    class="px-4 py-2 font-semibold text-green-700 bg-transparent border border-red-500 rounded hover:bg-red-500 hover:text-white hover:border-transparent"
                                    type="submit">
                                    Delete
                            </form> 
                            

                          </td>

                    </tr>

                     
                @endforeach
            </tbody>  
        </table>
        {{-- {{ $data->links() }} --}}
    </div>
    {!! $data->render() !!}
@endsection
