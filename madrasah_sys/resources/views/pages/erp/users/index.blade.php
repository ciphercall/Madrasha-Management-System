@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fa fa-user">&nbsp;Users</i></h1>
                </div>
                <div class="col-sm-6">
                    <a data-toggle="modal" data-target="#user" class="btn btn-success float-right"><i class="fa fa-plus-circle">Add New User</i></a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
         <div class="clearfix"></div>

        
         @include('flash::message')
         @include('adminlte-templates::common.errors')

        
         <div class="clearfix"></div>
              <div class="card">
                   <div class="card-body p-0">
                        @include('users.table')
                        
                        {!! Form::open(['route' => 'users.store']) !!}

                        @include('users.fields')

                        {!! Form::close() !!}

                    </div>
                </div>

                <div class="text-center">

                </div>

        
    </div>

@endsection

