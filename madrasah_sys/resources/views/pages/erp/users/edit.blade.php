@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fa fa-user">Edit Users</i></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        @include('adminlte-templates::common.errors')

        <div class="card">
            {!! Form::model($users, ['route' => ['users.update', $users->id], 'method' => 'patch']) !!}
                <div class="card-body">
                    <div class="row">
                        {!! Form::open(['route' => 'users.store']) !!}  
                        <!-- Name Field -->
                        <div class="form-group col-lg-6 col-md-8 col-sm-12">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                        </div>

                        <!-- Role Id Field -->
                        <div class="form-group col-lg-6 col-md-8 col-sm-12">
                            {!! Form::label('role_id', 'Role Id:') !!}
                            {!! Form::text('role_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                        </div>

                        <!-- Email Field -->
                        <div class="form-group col-lg-6 col-md-8 col-sm-12">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                        </div>

                        <!-- Password Field -->
                        <div class="form-group col-lg-6 col-md-8 col-sm-12">
                            {!! Form::label('password', 'Password:') !!}
                            {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                        </div>

                        </div>
                            <div class="modal-footer">
                                <a class="btn btn-secondary float-right" href="{{ route('users.index') }}">Close</a>
                                {!! Form::submit('Update User', ['class' => 'btn btn-success']) !!} 
                            </div>
                        </div>
                        </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
        </div>
    </div>
@endsection
