@extends('components.agentDashboard')
@section('content')
<div class="container mt-5">
        <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
          <h3 class="text-center mb-5 text-blue-900 font-bold">Upload Legal Document</h3>
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif
          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
            <div class="custom-file">
                <input type="file" name="file" class="custom-file-input
                 block w-56 mt-16 ml-32 mb-10 text-sm text-gray-900 bg-gray-50 rounded-lg border
                  border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none
                   dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="chooseFile">
               
            </div>
            <button type="submit" name="submit" class="btn btn-primary h-10 w-36 ml-32 rounded-full
             btn-block mt-4 bg-black text-white">
                Upload Files
            </button>
        </form>
    </div>
    @endsection