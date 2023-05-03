@extends('layout.erp.home')
@section('page')


<!-- ////////////////////////////////////////////////////////// -->
  <!--**********************************
            Content body start
        ***********************************-->
		<!-- <a href="{{route('stocks.create')}}"> -->
        <!-- <div class="content-body"> -->
		<div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h2><span>Stocks List</span></h2>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Stocks List</li>
                        </ol>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <!-- <h4 class="card-title">Customer List</h4> -->
								<span> <a href="{{route('stocks.create')}}"><button type="button" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i> </span>Add New Stock</button></a></span>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example-api-1" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr style="background-color: rgb(46, 206, 255);font-weight: bolder;">
                                              <th >ID</th>
                                              <th>Currency Name</th>
                                              <th>Currency Type</th>
                                              <th>Stock</th>
                                              <th>Add Stock Time</th>
                                              <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
									        @forelse ($stocks as $user)
                                            <tr style="color: black">
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->c_name }}</td>
                                                <td>{{ $user->n_type }}</td>

                                                <td>{{ $user->qty }}</td>
                                                <td>{{ $user->created_at}}</td>

                                                <td>
                                              <div style="display:flex">
                                            {{-- @if(session('sess_role_id')==5) --}}
                    										
                                                <a style="padding-right: 20px;font-size:25px" href="{{route('stocks.show',$user->id)}}"><i class='mdi mdi-account-edit'></i><a>  
											
                                                <form style="flex:1 1 0" action="{{route('stocks.destroy',$user->id)}}" method="post" style='float:left'>
                                                    @csrf
                                                    @method("DELETE")     
                                                    <input type="submit" onclick="return confirm('Are you sure to delete this data?')" name="btnDelete" value="Delete" />
                                                    <!-- <span><i class='bx bxs-trash'></i></span>        -->
                                                </form>
										                  		{{-- @elseif(session('sess_role_id')==6) --}}
													
												
                                                <a style="flex:1 1 0;font-size:25px" href="{{route('stocks.show',$user->id)}}"><i class='bx bx-clipboard'></i><a> 
                                               
											          	{{-- @endif --}}
                                        </div>	
											              	</td>
												
                                            </tr>
										              	@empty
                                        <tr><td colspan="3">No users</td></tr>
                                    @endforelse
                                        </tbody>
                                        <tfoot>
                                            <tr>
											                          
										                          	<th>ID</th>
                                                <th>Currency Name</th>
                                                <th>Currency Type</th>
                                                <th>Stock</th>
                                                <th>Add Stock Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>

            
        <!-- </div> -->
        <!--**********************************
            Content body end
        ***********************************-->
		
  @endsection