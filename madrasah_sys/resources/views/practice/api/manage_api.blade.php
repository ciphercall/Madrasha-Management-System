@extends('layout.erp.home')
@section('page')
										
<style>
    th{
        background-color: aqua;
        font-weight: bold;

    }
    td{
        color: black;
        font-weight: bold;

    }
</style>
											
 

        
                                               <!-- ///////////////////////////////////////////// -->
          <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h3><span>Country List</span></h3>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Customer List</li>
                        </ol>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <!-- <h4 class="card-title">Customer List</h4> -->
                                <span> <a href="{{route('orders.create')}}"><button type="button" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i> </span>Add Country</button></a></span>
 
                            </div>
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example-api-1" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer </th>
                                                <th>Address</th>
                                                <th>Total Price</th>
                                                <th>Status</th>
                                               
                                                
                                                <th>Sale Date</th>

                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
									 @forelse ($orders as $user)
                                          
                                        <tr>
                                        <td>{{ $user->id }}</td>

                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->total_p }}</td>
                                        <td>{{ $user->status }}</td>

                                        <td>{{ $user->sale_date }}</td>
                                                <td>
												<div style="display:flex">
                    										
                                                <a style="padding-right: 20px;font-size:25px" href="{{route('orders.edit',$user->id)}}"><i class='mdi mdi-account-edit'></i><a>
                                                    
                                                
												<a style="flex:1 1 0;font-size:25px" href="{{route('orders.show',$user->id)}}"><i class='mdi mdi-eye'></i><a> 


                                                <form style="flex:1 1 0" action="{{route('orders.destroy',$user->id)}}" method="post" style='float:left'>
                                                    @csrf
                                                    @method("DELETE")     
                                                    <input type="submit" onclick="return confirm('Are you sure to delete this data?')" name="btnDelete" value="Delete" />
                                                    <!-- <span><i class='bx bxs-trash'></i></span>        -->
                                                </form>
													
												
                                                <!-- <a style="flex:1 1 0;font-size:25px" href="{{route('addcountry.show',$user->id)}}"><i class='bx bx-clipboard'></i><a>  -->
                                               
                                        </div>	
												</td>
												
                                            </tr>
											@empty
                                        <tr><td colspan="3">No users</td></tr>
                                    @endforelse
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer </th>
                                                <th>Address</th>
                                                <th>Total Price</th>
                                                <th>Status</th>
                                               
                                                
                                                <th>Sale Date</th>

                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
  @endsection