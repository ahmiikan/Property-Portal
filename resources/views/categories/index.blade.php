@extends('layouts.dashboardmaster')


@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    @if ($message = Session::get('success'))
        <div class="">
            <p>{{ $message }}</p>
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
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="font-bold pull-left">

                <h2>Categories</h2>

            </div>



        </div>

    </div>
    <br>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>
    @endif


    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="py-3 px-">
                    No
                </th>

                <th scope="col" class="px-6 py-3">
                    Name
                </th>


            </tr>

        </thead>
        @foreach ($categories as $key => $category)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                @php
                    $i = 1;
                @endphp
                <td class="px-6 py-4">{{ ++$i }}</td>

                <td class="px-6 py-4">{{ $category->name }}</td>


            </tr>
        @endforeach

    </table>
    <div class="mb-4">

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <label class="text-xl text-gray-600">Name <span class="text-red-500">*</span></label></br>
    <input type="text" class="p-2 border-2 border-gray-300 w-50" name="name" id="title"
    value="" required>    <button type="submit" class="px-4 py-2 font-semibold text-green-700 bg-transparent border border-green-900 rounded hover:bg-blue-500 hover:text-white hover:border-transparent"
    >Create New Category</button>
</form>
</div>

@endsection
