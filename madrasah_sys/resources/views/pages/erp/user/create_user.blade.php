@extends('layout.erp.home')
@section('page')
<!-- <form action="{{url('user/save')}}" method="post"> -->
 <?php
   //echo isset($_GET["error"])?$_GET["error"]:"";
  
 ?>
 <a href="{{url('/users')}}">Manage</a>
<form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>Role<br>
       <select name="cmbRole">
          @foreach ($roles as $role)
               <option value="{{$role->id}}">{{$role->name}}</option>
          @endforeach
       </select>
    </div>
    <div>Username<br>
      <input type="text" name="txtUsername" />
    </div>
    <div>Email<br>
      <input type="text" name="txtEmail" />
    </div>
    <div>Password<br>
      <input type="text" name="txtPassword" />
    </div>
    <div>Photo<br>
      <input type="file" name="filePhoto" />
    </div>
    <div>
      <input type="submit" name="btnCreate" value="Create" />
   </div>
</form>

@endsection

