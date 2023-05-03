<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
input:read-only
{
background-color:teal;
border:none;
border-color:transparent;
}

</style>

<div class="table-responsive">
    <table class="table table-striped" id="users-table">
        <thead>
        <tr style="background-color: #6495ED;">
        <th>Name</th>
        <th>Email</th>
        <th>Role Id</th>
        <th>Password</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $users)
            <tr>
                <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->role_id }}</td>
            <!-- <td>{{ $users->email_verified_at }}</td> -->
            <td>{{ $users->password }}</td>
            <!-- <td>{{ $users->remember_token }}</td> -->
                <td class="project-actions text-right" width="220">
                    {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
            <!---------------------------------------toggle--------------------------------->
                        <a data-toggle="modal" data-target="#user-view" data-id="{{ $users->id }}"
                        data-name="{{ $users->name }}" data-email="{{ $users->email }}"
                        data-role_id="{{ $users->role_id }}" data-password="{{ $users->password }}"
                        class='btn btn-primary btn-sm'>
                            <i class="fas fa-folder">&nbsp;View</i>
                        </a>
                        &nbsp;
            <!-------------------------------------------------End toggle--------------------------------->
                        <a href="{{ route('users.edit', [$users->id]) }}"
                           class='btn btn-info btn-sm'>
                            <i class="fas fa-pencil-alt">&nbsp;Edit</i>
                        </a>
                        &nbsp;
                        {!! Form::button('<i class="far fa-trash-alt">&nbsp;Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<!---------------------------------------End-------------------------------------->
<!-----------------------------Modal--------------------------------------->
<div class="modal fade bd-example-modal-lg" id="user-view" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background-color:#008080;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-user">&nbsp;User</i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
      <input type="hidden" name="id" id="id">

        <div class="row">
            <!-- Name Field -->
            <div class="form-group col-lg-6 col-md-8 col-sm-12">
                {!! Form::label('name', 'Name:') !!}
                <input type="text" name="name" id="name" readonly>
            </div>

        
            <!-- Role Id Field -->
            <div class="form-group col-lg-6 col-md-8 col-sm-12">
                {!! Form::label('role_id', 'Role Id:') !!}
                <input type="text" name="role_id" id="role_id" readonly>
            </div>
        </div>

        <div class="row">
            <!-- Email Field -->
            <div class="form-group col-lg-6 col-md-8 col-sm-12">
                {!! Form::label('email', 'Email:') !!}
                <input type="text" name="email" id="email" readonly>
            </div>

            <!-- Password Field -->
            <div class="form-group col-lg-6 col-md-8 col-sm-12">
                {!! Form::label('password', 'Password:') !!}
                <input type="text" name="password" id="password" readonly>
            </div>

            </div>      

    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
    </div>
  </div>
</div>
</div>

<script>
    $('#user-view').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget)
      var name = button.data('name')
      var role_id = button.data('role_id')
      var email = button.data('email')
      var password = button.data('password')
      var id = button.data('id')

      var modal = $(this)

      modal.find('.modal-title').text('VIEW USER INFORMATION');
      modal.find('.modal-body #name').val(name);
      modal.find('.modal-body #role_id').val(role_id);
      modal.find('.modal-body #email').val(email);
      modal.find('.modal-body #password').val(password);
      modal.find('.modal-body #id').val(id);
      });
</script>
