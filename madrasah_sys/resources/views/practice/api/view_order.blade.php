@extends('layout.erp.home')
@section('page')
	<style>
      .inv{
background-color: rgb(6, 218, 255);
color: black;
border-radius: 20px;


  }
  tr {
    border-bottom: black;


}
.customer{
color: black;
font-weight: bold;

}
    </style>									


  <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h4>Invoice Info</h4>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a>
                            </li> -->
                            <li class="breadcrumb-item active">Invoice Info</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card invoice-info-card">
                            <div class="card-header">
                                <h4>Invoice Info</h4>
                            </div>
                            <form action="#" method="post" >
                                 @csrf
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="col-md-6 col-xl-9">
                                        <div class="invoice-info-left">
                                            <div class="distributors">
                                            <div class="mb-4">
                                                    <h2 class="text-primary mb-2">T&S Currency Distributors</h2>
                                                    <a href="www.distributors.com" class="text-muted">www.shibli.intels.co</a>
                                                </div>
                                                
                                                <div class="mb-4">
                                                    <h5>440/2, Mipur-6</h5>
                                                    <h5>Dhaka-1216, IN Bangladesh</h5>
                                                   

                                                   

                                                </div>

                                                <div class="mb-4">
                                                    <h5>Telephone: <span class="text-muted">(+88) 017-652-3143</span></h5>
                                                    <h5>Fax: <span class="text-muted">803-524-8398</span></h5>
                                                </div>
                                                <div class="invoice-to">
                                              
                                                          <div class="mb-4">
                                                          <h3 class="text-primary mb-2">Select Customer </h3>

                                                          </div>
                                                          
                                                         

          


                     
                                                          
                                                      <h4 class="text-primary mb-2">Customer Details</h4>
                                                      
                                                      <b class="text-primary mb-2">Name:</b><span class="customer">{{$order[0]->name}}</span> <br>
                                                      <b class="text-primary mb-2">Mobile : </b><span class="customer">{{$order[0]->mobile}}</span><br>
                                                      <b class="text-primary mb-2">E-mail : </b><span class="customer">{{$order[0]->email}}</span> <br>
                                                      <b class="text-primary mb-2">Address : </b><span class="customer">{{$order[0]->address}}</span>

                                                      <!-- id, c_id, sale_date, status, d_date, discount, vat -->
                                                      <!-- name, c_country, sale_date, n_type, discount, vat, s_qty, rate -->
                                            </div>
                                            </div>
                                           
                                            <?php //echo $last_order_id+1;?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 mb-5">
                                        <div class="invoice-info-right">
                                        <div class="invoice-id">
                                         
                                         <table class="text-primary mb-5">
                                           <tr><td><b>Invoice ID:</b></td><td><input type="text" style="width:60px" value="{{$order[0]->order_id}}"  readonly/></td></tr>
                                           <tr><td><b>Order Date:</b></td><td><input type="text" id="txtOrderDate" value="{{$order[0]->created_at}}" /></td></tr>
                                           <tr><td><b>Due Date:</b></td><td><input type="text" id="txtDueDate" value="{{$order[0]->updated_at}}" /></td></tr>
                                         </table>
                                     </div>
                                        </div>
                                        <div class="payment-details">
                                            <h4 class="text-primary mb-2">Payment Details</h4>
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>Total Due</td>
                                                        <td>:</td>
                                                        <td>Jun 08, 2018</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Name</td>
                                                        <td>:</td>
                                                        <td>Bank of the West</td>
                                                    </tr>
                                             
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table invoice-details-table" style="min-width: 500px;">
                                                <thead style="background-color: blanchedalmond;color:black; font:bold">
                                                    <tr>
                                                        <th>Notes Country</th>
                                                        <th>Notes</th>
                                                        
                                                        <th class="text-center">Unit Price</th>
                                                        <th class="text-center">Quantity</th>
                                                        <th class="text-center">Discount</th>


                                                        <th class="text-center">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <input type="hidden" value="{{$sub_total=0}}{{$vat=0}}>{{$g_total=0}}">
                                                   @foreach ($order as $item)

                                                    <tr>         
                                                        <input type="hidden" value="
                                                        {{$sub_total+=$item->rate*$item->s_qty-$item->discount}}
                                                        {{$vat+=$sub_total*0.05}}
                                                        >{{$g_total=$sub_total+$vat}}
                                                     ">
                                                       
                                                        <td>{{ $item->c_country}} </td>
                                                        <td>{{ $item->n_type }}</td>
                                                        <td class="text-center"> <span>{{ $item->rate }}</span> 
                                                        </td>
                                                        <td class="text-center"><span>{{ $item->s_qty }}</span> 
                                                        </td>
                                                        <td class="text-primary text-center"><span>{{ $item->discount }}</span>
                                                        </td>
                                                        <td class="text-primary text-center"><span>{{$item->rate*$item->s_qty-$item->discount}}</span>
                                                        </td>
                                                    </tr>
                                                   @endforeach
                                                 
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                        <td class="text-center border-0">Subtotal Amount</td>
                                                        <td class="text-primary text-center border-0"> <span>
                                                          
                                                            {{$sub_total}}
                                                             
                                                        
                                                        </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                        <td class="text-center">VAT(5%)</td>
                                                        <td class="text-primary text-center"> <span>   {{$vat}}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                        <td class="text-center">Grand Total</td>
                                                        <td class="text-primary text-center"><span>{{$g_total}}
</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-end my-4">
                                            <button class="btn btn-primary btn-sl-lg mr-3">Print Invoice</button>
                                            <!-- <button class="btn btn-light btn-sl-lg text-dark">Submit Payment</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

  @endsection
  