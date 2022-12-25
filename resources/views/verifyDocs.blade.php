@extends('layouts.dashboardmaster')
@section('content')
<div class="flex justify-center space-x-2">
  <div class="block max-w-full mx-auto text-sm bg-white rounded-lg shadow-lg pointer-events-auto w-96 bg-clip-padding" id="static-example" role="alert" aria-live="assertive" aria-atomic="true" data-mdb-autohide="false">
    <div class="flex items-center justify-between px-3 py-2 bg-white border-b border-gray-200 rounded-t-lg bg-clip-padding">
      <p class="font-bold text-gray-500">Documents</p>
      <div class="flex items-center">
        <p class="text-xs text-gray-600">11 mins ago</p>
        <button type="button" class="box-content w-4 h-4 ml-2 text-black border-none rounded-none opacity-50 btn-close focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-mdb-dismiss="toast" aria-label="Close">x</button>
      </div>
    </div>
    <div class="p-3 text-gray-700 break-words bg-white rounded-b-lg">
      <div class="flex flex-wrap justify-center">
          <img src="{{url('/docs')}}/{{$agent->doc->last()->documents}}" class="mr-5 rounded-full w-52" alt="">

        </div>
    </div>
    <div class="flex items-center justify-center mb-3">
                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                  <form action="{{ route('agent.approve', $agent->id) }}" method="post"> @csrf <button type="submit" class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-blue-500 rounded-l hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-700">Approve</button></form>
                
                    <button type="button" class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-red-500 rounded-r hover:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-0 active:bg-red-700">Reject</button>
                    <a href="{{url('/docs')}}/{{$agent->doc->last()->documents}}"  target="_blank" style="display: inline-block; width: 50px; height; 50px; background-image: {{url('/docs')}}/{{$agent->doc->last()->documents}}');">
                      <button type="button" class="inline-block px-6 py-3 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-green-500 rounded-r hover:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-0 active:bg-red-700">View</button>
                    </a>
                    </div>
            </div>
  </div>
</div>

@endsection