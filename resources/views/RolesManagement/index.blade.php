@extends('layouts.dashboardmaster')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left font-bold">

            <h2>Role Management</h2>

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

    <th scope="col" class="px- py-3">
        No
    </th>

    <th scope="col" class="px-6 py-3">
        Name
    </th>

     <th scope="col" class="px-6 py-3" width="280px">Action</th>

  </tr>
  
</thead>
    @foreach ($roles as $key => $role)

    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

        <td class="px-6 py-4">{{ ++$i }}</td>

        <td class="px-6 py-4">{{ $role->name }}</td>

        <td class="flex px-6 py-4 space-x-2 ">

            <a class="px-4 py-2 font-semibold text-blue-700 bg-transparent border border-blue-500 rounded hover:bg-blue-500 hover:text-white hover:border-transparent"
             href="{{ route('roles.show',$role->id) }}">Show</a>

            @can('role-edit')

                <a class="btn btn-primary px-4 py-2 font-semibold text-green-700 bg-transparent border border-green-500 rounded hover:bg-green-500 hover:text-white hover:border-transparent" href="{{ route('roles.edit',$role->id) }}">Edit</a>

            @endcan

            @can('role-delete')

                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger px-4 py-2 font-semibold text-green-700 bg-transparent border border-red-500 rounded hover:bg-green-500 hover:text-white hover:border-transparent']) !!}

                {!! Form::close() !!}

            @endcan

        </td>

    </tr>

    @endforeach

</table>


{!! $roles->render() !!}




@endsection