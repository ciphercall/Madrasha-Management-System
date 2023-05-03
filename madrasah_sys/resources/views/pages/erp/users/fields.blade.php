<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="user" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background-color:#008080;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-user">&nbsp;User</i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="row">
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
</div>

<div class="row">
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

</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Create User</button>  
      </div>
    </div>
  </div>
</div>
</div>