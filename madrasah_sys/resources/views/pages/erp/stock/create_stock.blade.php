@extends('layout.erp.home')
@section('page')
<!-- ///////////////////// -->

<!-- /////////////////////////////////////////////////////////////// -->
<div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
					<span> <a href="{{url('/stocks')}}"><button type="button" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i> </span>Manage Stock</button></a></span>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript:void()">Forms</a>
                            </li>
                            <li class="breadcrumb-item active">Manage Stock
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                 

                    <div class="col-lg-12">
                        <div class="card forms-card">
                            <div class="card-body">
							
                                <h1 style="text-align: center">Add Stock </h1>
								
                                <div class="basic-form">
                                    <form action="{{route('stocks.store')}}"  method="post" enctype="multipart/form-data">
									@csrf

                                        <div class="form-group">
                                            {{-- <label  class="text-label"> --}}
                                             <h3><span class="label label-primary">Select Currency </span></h3>   
                                            {{-- </label> --}}
                                            <div class="input-group" style="color: black;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend2"> <i class="fa fa-user" aria-hidden="true"></i> </span>
                                                </div>
                                              
                                                <select class="multi-select form-control input-rounded" name="cmbProduct" id="cmbProduct" >
                                                    <option value="0" disabled selected >Chose Currency...</option>
                                                          @foreach ($note as $use)
                                                     <option value="{{ $use->id }}" >{{ $use->currency }} | {{ $use->n_type }} </option>
                                                       @endforeach   

                                                </select>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="validationDefaultUsername10" class="text-label"><span class="label label-primary">Quantity </span> </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend2"> <i class="fa fa-user" aria-hidden="true"></i> </span>
                                                </div>
                                                <input type="text" class="form-control input-rounded" id="validationDefaultUsername10" placeholder="Quantity" aria-describedby="inputGroupPrepend2"  name="txtQty" required>
                                               
                                            </div>
                                        </div>
									
										<div class="form-group">
                                            <label for="validationDefaultUsername10" class="text-label "><span class="label label-primary">Transaction Type</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend2"> <i class="fa fa-user" aria-hidden="true"></i> </span>
                                                </div>
                                                <select class="form-control input-rounded"  id="cmbT_type" name="cmbT_type">
                                                    <option value="0" disabled selected >Chose Transaction...</option>
                                                          @foreach ($t_type as $use)
                                                     <option value="{{ $use->id }}" >{{ $use->name }} </option>
                                                       @endforeach   

                                                </select>
                                            </div>
                                        </div>
									
									
								
										
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input styled-checkbox" type="checkbox" id="inlineFormCheck09">
                                                <label class="form-check-label mr-sm-5" for="inlineFormCheck09">Check me out</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-form">Submit</button>
                                        <button type="submit" class="btn btn-light btn-form">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    


                </div>

            </div>


  @endsection
