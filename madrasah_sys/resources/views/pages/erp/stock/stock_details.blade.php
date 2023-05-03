@extends('layout.erp.home')
@section('page')


<!-- ////////////////////////////////////////////////////////// -->
  <!--**********************************
            Content body start
        ***********************************-->
	
		<div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h3><span>Transaction List</span></h3>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Transaction List</li>
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
                                  <table class="table primary-table-bordered">
                                    <thead class="thead-primary">
                                        <tr>
                                            <th scope="col">TID</th>
                                            <th scope="col">Transaction Type</th>
                                            <th scope="col">QTY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <input type="hidden" value="
                                        {{$tot=0}}
                                        "/>
                                    
									    @forelse ($tde as $user)

                                        <tr>
                                            <th>{{$user->id}}</th>
                                            <td>{{$user->name}}</td>
                                             <input type="hidden" value="
                                                {{$tot+=$user->qty}}
                                                "/>
                                                
                                            <td>{{$user->qty}}</td>

                                           
        
                                        </tr>
                                        @empty
                                        <tr><td colspan="3">No users</td></tr>
                                    @endforelse
                                    <tr>
                                      <th></th>
                                      <td><b>Total Stock :-</b> </td>
                                      <td>{{$tot}}</td>
                                     
  
                                  </tr>
                                    </tbody>
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
  {{-- /////////////////////
     <td>
											                          	<div style="display:flex">
											                          @if(session('sess_role_id')==5)
                    										
                                                <a style="padding-right: 20px;font-size:25px" href="{{route('customer.edit',$user->id)}}"><i class='mdi mdi-account-edit'></i><a>  
												<!-- <a style="flex:1 1 0;font-size:25px" href="{{route('customer.show',$user->id)}}"><i class='mdi mdi-eye'></i><a>  -->
                                                <form style="flex:1 1 0" action="{{route('customer.destroy',$user->id)}}" method="post" style='float:left'>
                                                    @csrf
                                                    @method("DELETE")     
                                                    <input type="submit" onclick="return confirm('Are you sure to delete this data?')" name="btnDelete" value="Delete" />
                                                    <!-- <span><i class='bx bxs-trash'></i></span>        -->
                                                </form>
											                          	@elseif(session('sess_role_id')==6)
													
												
                                                <a style="flex:1 1 0;font-size:25px" href="{{route('customer.show',$user->id)}}"><i class='bx bx-clipboard'></i><a> 
                                               
											                    	@endif
                                        </div>	
												                  </td>
												
                                            </tr>
										                    	@empty
                                        <tr><td colspan="3">No users</td></tr>
                                    @endforelse
                                        </tbody>
    
    --}}