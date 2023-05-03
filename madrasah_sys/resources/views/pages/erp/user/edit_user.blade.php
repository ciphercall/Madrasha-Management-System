@extends('layout.erp.home')
@section('page')
<?php
//print_r($user);
?>
<form action="{{route('users.update',$user->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <input type="hidden" name="txtId" value="{{$user->id}}" />
    <div>
      Role<br>
      <select name="cmbRole">
          @foreach($roles as $role)
              
             @if($role->id==$user->role_id)
               <option value="{{$role->id}}" selected>{{$role->name}}</option>
             @else
              <option value="{{$role->id}}">{{$role->name}}</option>
             @endif

          @endforeach
      </select>
   </div>
    <div>
      Username<br><input type="text" name="txtUsername" value="{{$user->username}}" />
   </div>
   <div>
      Email<br><input type="text" name="txtEmail" value="{{$user->email}}" />
   </div>
   <div>Photo<br>
      <input type="file" name="filePhoto" />
    </div>
   <div>
    <input type="submit" name="btnSubmit" value="Update" />
   </div>
</form>
@endsection

