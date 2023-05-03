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
    </style>									
<div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h3>Invoice Create</h3>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a>
                            </li> -->
                            <li class="breadcrumb-item active">Invoice Create</li>
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
                                                          <h4 class="text-primary mb-2">Select Customer <span><button type="button" class="btn btn-primary my-1" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Customer</button></span></h4>

                                                          </div>
                                                          
                                                          <select class="multi-select"   name="cmbCustomer" id="cmbCustomer">
                                                              <!-- <option value="AL" data-select2-id="2">Alabama</option> -->
                                                                   <option >Chose Customer...</option>
                                                                   @foreach ($customer as $user)
                                                              <option value="{{ $user->id }}" >{{ $user->name }} | {{ $user->mobile }}</option>
                                                                @endforeach  

                                                          </select>

                     
                                                          
                                                <h4 class="text-primary mb-2">Customer Details</h4>
                                                
                                                <b class="text-primary mb-2">Name:</b><span class="customer-info"></span> <br>
                                                <b class="text-primary mb-2">Mobile : </b><span class="customer-mobile"></span><br>
                                                <b class="text-primary mb-2">E-mail : </b><span class="customer-email"></span> <br>
                                                <b class="text-primary mb-2">Address : </b><span class="customer-address"></span> </b>


                                                
                                            </div>
                                            </div>
                                           
                                            <?php //echo $last_order_id+1;?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 mb-5">
                                        <div class="invoice-info-right">
                                            <div class="invoice-id">
                                         
                                                <table class="text-primary mb-5">
                                                  <tr><td><b>Invoice ID:</b></td><td><input type="text" style="width:60px" value="<?php //echo $lastid; ?>"  readonly/></td></tr>
                                                  <tr><td><b>Order Date:</b></td><td><input type="text" id="txtOrderDate" value=<?php echo date("d-m-Y");?> /></td></tr>
                                                  <tr><td><b>Due Date:</b></td><td><input type="text" id="txtDueDate" value=<?php echo date("d-m-Y");?> /></td></tr>
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
                                                        <td>4500</td>
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
                                            <table class="table invoice-details-table" >
                                                <thead>
                                                    <tr class="inv">
                                                    <th>SN</th>
                                                    <th> Notes</th>
                                                    <th class="text-center">Rate</th>
                                                    <th class="text-center">Qty</th>                     
                                                    <th class="text-center">Discount</th>
                                                    <th>Subtotal</th>
                                                    <th><input type="button" id="clearAll" value=" Clear " /></th>
                                  
                                                    </tr>
                                                    <tr>
                                                          <th></th>
                                        

                                                          <th>
                                                       <span >
                                                       <select class="multi-select" placeholder="Select Sub Category" id="cmbProduct" style="width: 150px;border-radius: 20px;">
                                                             <!-- <option value="AL" data-select2-id="2">Alabama</option> -->
                                                             <option value="0" disabled selected >Chose Currency...</option>
                                                                   @foreach ($note as $use)
                                                              <option value="{{ $use->id }}" >{{ $use->currency }} | {{ $use->n_type }} </option>
                                                                @endforeach   

                                                         </select>
                                                         </span>
                                                         </th>
                                                            <th><input type="text" id="txtPrice" style="width:150px;border-radius: 15px;" /></th>
                                                            <th><input type="text" id="txtQty" style="width:150px;border-radius: 15px;" /></th>
                                                            <th><input type="text" id="txtDiscount" style="width:150px;border-radius: 15px;" /></th>
                                                            <th></th>
                                                            <th><input type="button" id="btnAddToCart" value=" + " /></th>
                                                       </tr>
                                                   </thead>
                                                        <tbody  id="items">                    
                                                      
                                                        </tbody>
                                               
                                                   
                                                   
                                            </table>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table invoice-details-table" style="min-width: 300px;">
                                                    <tr  >
                                                        <td></td>
                                                        <td class="text-center border-0">Subtotal Amount</td>
                                                        <td class="text-primary text-center border-0" id="subtotal"><span>0</span>
                                                        </td>
                                                    </tr>
                                                    <tr >
                                                        <td></td>
                                                        <td class="text-center">VAT</td>
                                                        <td class="text-primary text-center" id="tax"> <span>0</span>
                                                        </td>
                                                    </tr>
                                                    <tr  >
                                                        <td></td>
                                                        <td class="text-center border-0">Shipping :</td>
                                                        <td class="text-primary text-center border-0" id="shopping-cost"><span>0</span>
                                                        </td>
                                                    </tr>
                                                    <tr >
                                                        <td></td>
                                                        <td class="text-center">Grand Total</td>
                                                        <td class="text-primary text-center" id="net-total" class="txtTotal"> <span>0</span>
                                                        </td>
                                                    </tr>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-end my-4">
                                 

                                            <button class="btn btn-primary btn-sl-lg mr-3">Generate PDF</button>
                                            <!-- <button class="btn btn-light btn-sl-lg text-dark">Submit Payment</button> -->
                                            <input type="submit" value="submit" id="btnProcessOrder" class="btn btn-light btn-sl-lg text-dark">
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>

   
  <!-- //////////////////////// Modal-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                            aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Full Name:</label>
                                                            <input type="text" class="form-control" id="recipient-name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Moblile:</label>
                                                            <input type="text" class="form-control" id="recipient-name">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Moblile:</label>
                                                            <input type="text" class="form-control" id="recipient-name">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Moblile:</label>
                                                            <input type="text" class="form-control" id="recipient-name">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Moblile:</label>
                                                            <input type="text" class="form-control" id="recipient-name">

                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                             </div>
      


     
     
     
                             {{-- <div class="row mt-5">
                                <div class="col-lg-8 offset-lg-2">
                                    <form id="inputCurr">
                                        <div class="input-group mb-4">
                                            {{-- ////////////////// --}}
                                            {{-- <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="0.25" id="currency"> --}}
                                            {{-- <div class="input-group-append"> --}}
                                                {{-- <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BDT</button> --}}
                                                {{-- <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(509px, 40px, 0px);">
                                                    <a class="dropdown-item">USD</a>
                                                    <a class="dropdown-item">EUR</a>
                                                    <a class="dropdown-item">INR</a>
                                                    <a class="dropdown-item">AUD</a>
                                                    <a class="dropdown-item">GBP</a>
                                                    <a class="dropdown-item">CAD</a>
                                                </div> --}}
                                                {{-- /////////////// --}}
                                                {{-- <select  data-width="auto" id="currency">
                                                    <option value="USD">USD</option>
                                                    <option value="INR">INR</option>
                                                    <option value="">XRP</option>
                                                    <option value="">NEO</option>
                                                    <option value="">ETC</option>
                                                    <option value="">EOS</option>
                                                </select>
                                            
                                        </div>
                                        <div class="text-center">
                                            <img src="../../assets/images/icons/18.png" alt="">
                                        </div>
                                        <div class="input-group mt-4 mb-4">
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="0.25" id="showRes">
                                            <select  data-width="auto" id="targetCurrency">
                                                <option value="BDT">BDT</option>
                                                <option value="EUR">EUR</option>
                                                <option value="">XRP</option>
                                                <option value="">NEO</option>
                                                <option value="">ETC</option>
                                                <option value="">EOS</option>
                                            </select>
                                        </div>
                                        <div class="text-center pt-5">
                                            <button type="submit" class="btn btn-primary btn-sl-sm">Exchange</button>
                                            <p class="muted-text">You could save up to $45,42</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
      --}}
     
     
     <script>
      $(function() {  
        
        //Show calander in textbox
        //  $("#txtOrderDate").datepicker({dateFormat: 'dd-mm-yy'});
        //  $("#txtDueDate").datepicker({dateFormat: 'dd-mm-yy'});

        printCart();

        //Save into database table
        $("#btnProcessOrder").on("click",function(e){

           

            e.preventDefault();            

            let customer_id=$("#cmbCustomer").val();
                var token = $("input[name='_token']").val();
                var method = $("input[name='_method']").val();
              let order_date=$("#txtOrderDate").val();
              let due_date=$("#txtDueDate").val();
              let discount=$("#txtDiscount").val();
              let vat=0;
              let total_p=$(".txtTotal").val();

              let products=JSON.parse(localStorage.getItem("cart"));

              $.ajax({
                url: "{{route('orders.store')}}",
                type:'POST',
                data:{
                  _token:token,
                  _method:method,
                  "cmbCustomer":customer_id,
                  "txtOrderDate":order_date,
                  "txtDueDate":due_date,
                  "txtTotal":total_p,
                  "txtDiscount":discount,
                  "txtVat":vat,
                  "txtProducts":products
                },
                success:function(res){
                  console.log(res);
                  clearCart();
                  location.reload();
                }
            });

        });       


        //Show customer other information
        $("#cmbCustomer").on("change",function(){
           $.ajax({
             url:"<?php echo url("getcustomer")?>",
             type:'GET',
             data:{"id":$(this).val()},
             success:function(res){
              let customer=JSON.parse(res);
                console.log(customer);
               $(".customer-info").html(customer.name);
               $(".customer-mobile").html(customer.mobile);
               $(".customer-email").html(customer.email);
               $(".customer-address").html(customer.address);



             }
           });
        }); 

       $("#cmbProduct").on("change",function(){          
          
          
           $.ajax({
             url:"<?php echo url("getaddcurrency")?>",
             type:'GET',
             data:{"id":$(this).val()},
             success:function(res){
               //console.log(res);
              let product=JSON.parse(res);
               //console.log(product);
              $("#txtPrice").val(product.sell_rate);
             $("#txtQty").val(1);

             }
           });
        });  
       




        //Add item to bill temporarily
        $("#btnAddToCart").on("click",function(){

        let item_id=$("#cmbProduct").val(); 
        let name=  $("#cmbProduct option:selected").text();          
        let price=$("#txtPrice").val();
        let qty=$("#txtQty").val();
        let discount=$("#txtDiscount").val();
        let total_discount=discount*qty;
        let subtotal=price*qty-total_discount;

        let item={"name":name,"item_id":item_id,"price":price,"qty":parseFloat(qty),"discount":discount,'total_discount':total_discount,"subtotal":subtotal}; 

        save(item);
        printCart();        
        // clearCart();

        });




        $("body").on("click",".delete",function(){
        let id=$(this).data("id");        
        delItem(id)
        printCart();
        });

        $("#clearAll").on("click",function(){
        clearCart();
        });


//------------------Cart Functions----------//      


        function printCart(){
        let cart= localStorage.getItem("cart");
        cart=JSON.parse(cart);
        let sn=1;          
        let $bill="";  
        let subtotal=0;
        $.each(cart,function(i,item){
            //console.log(item.name);
        subtotal+=item.price*item.qty-item.discount;
        let $html="<tr>";            
        $html+="<td>";
        $html+=sn;
        $html+="</td>";
        $html+="<td>";
        $html+=item.name;
        $html+="</td>";
        $html+="<td data-field='price'>";
        $html+=item.price;
        $html+="</td>";
        $html+="<td data-field='qty'>";
        $html+=item.qty;
        $html+="</td>";
        $html+="<td data-field='discount'>";
        $html+=item.total_discount;
        $html+="</td>";
        $html+="<td data-field='subtotal'>";
        $html+=item.subtotal;
        $html+="</td>";
        $html+="<td>";
        $html+="<input type='button' class='delete' data-id='"+item.item_id+"' value=' X '/>";
        $html+="</td>";
        $html+="</tr>";
        $bill+=$html;
        sn++;
        });      
                
        $("#items").html($bill); 

        //Order Summary
        $("#subtotal").html(subtotal);
        let tax=(subtotal*0.05).toFixed(2);
        $("#tax").html(tax);
        $("#net-total").html(parseFloat(subtotal)+parseFloat(tax));
        }






        });

        // function apiCall(e) {
        //     e.preventDefault(); 
        //     var currency = document.querySelector('#currency').value; 
        //     $.ajax({
        //         url: "https://v6.exchangerate-api.com/v6/b4e26eeac59d8ef978fdd3b2/latest/"+currency,
        //         type:'GET',
        //         data:{

        //         },
        //         success:function(res){
        //           console.log(res);
        //         const cr = res.conversion_rates;
        //         const targetCurrency = document.querySelector('#targetCurrency').value;
        //         document.querySelector('#showRes').value = cr[targetCurrency]; 
        //         // console.log(cr.USD)

        //         }
        //     });
        // }

        
        // document.getElementById('inputCurr').addEventListener('submit', apiCall);
        </script>
                                    
        @endsection
        <!-- ///////////////// -->

        