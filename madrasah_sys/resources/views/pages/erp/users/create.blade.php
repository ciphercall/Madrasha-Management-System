@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Users</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        @include('adminlte-templates::common.errors')

        <div class="card">
            <div class="card-body">
                   <div class="row">
                       {!! Form::open(['route' => 'users.store']) !!}

                       @include('users.fields')

                       {!! Form::close() !!}
                   </div>

            </div>

        </div>
    </div>
@endsection
