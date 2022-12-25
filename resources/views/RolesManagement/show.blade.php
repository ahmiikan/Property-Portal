@extends('layouts.dashboardmaster')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left font-bold">

            <h2> Show Role</h2>

        </div>
<br>
        <div class="pull-right pull-right w-16 px-1 py-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-md rounded-lg  hover:bg-blue-700 focus:outline-none"
        data-mdb-ripple="true" data-mdb-ripple-color="light ">

            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>

        </div>

    </div>

</div>
<br>

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Name:</strong>

            {{ $role->name }}

        </div>

    </div>
<br>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Permissions:</strong>
<br><br>
            @if(!empty($rolePermissions))

                @foreach($rolePermissions as $v)

                    <label class="label label-success">{{ $v->name }}</label>
<br>
<br>
                @endforeach

            @endif

        </div>

    </div>

</div>

@endsection