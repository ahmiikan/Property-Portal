@extends('layouts.dashboardmaster')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left font-bold">

            <h2>Create New Role</h2>

        </div>
        <!-- <br><br>

        <div class="pull-right w-16 px-1 py-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-md rounded-lg  hover:bg-blue-700 focus:outline-none"
        data-mdb-ripple="true" data-mdb-ripple-color="light ">

            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>

        </div> -->

    </div>

</div>
<br>

@if (count($errors) > 0)

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

        </ul>

    </div>

@endif

<br>
{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Name:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

        </div>

    </div>
    <br>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Permission:</strong>

            <br/>
<br>
            @foreach($permission as $value)

                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}

                {{ $value->name }}</label>

            <br/>
            <br>

            @endforeach

        </div>

    </div>

    <div class="  w-16 px-1 py-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-md rounded-lg  hover:bg-blue-700 focus:outline-none"
    data-mdb-ripple="true" data-mdb-ripple-color="light ">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>

{!! Form::close() !!}




@endsection