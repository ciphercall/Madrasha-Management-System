@extends('layout.erp.home')
@section('page')
<h1>Manage User</h1>
<a href="{{route('users.create')}}">Create</a>
<table>
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Role</th>
    <th>Action</th>
</tr>

@forelse ($users as $user)
   <tr>
    <td> {{ $user->username }}</td>
    <td> {{ $user->email }}</td>
    <td> {{ $user->role }}</td>
    <td>
        <div style="display:flex">
            <a style="flex:1 1 0" href="{{route('users.edit',$user->id)}}">Edit<a>  
            <a style="flex:1 1 0" href="{{route('users.show',$user->id)}}">Details<a> 
            <form style="flex:1 1 0" action="{{route('users.destroy',$user->id)}}" method="post" style='float:left'>
                @csrf
                @method("DELETE")            
                <input type="submit" name="btnDelete" value="Delete" />
            </form>
      </div>
    </td>
   </tr>
@empty
    <tr><td colspan="3">No users</td></tr>
@endforelse
</table>

@endsection