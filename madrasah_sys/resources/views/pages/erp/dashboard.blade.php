@extends('layout.erp.home')
@section('page')

  <style>
      .th{
        color: black;
        background-color: rgb(0, 0, 0);
width: 25px;
      }
  </style>

		 <!--**********************************
            Content body start
        ***********************************-->
        
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h2 style="text-align: center ;colour:rgb(28, 1, 41);">Money Exchange</h2>
                    </div>
             
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="crypto-ticker card">
                            <div class="ticker-overview">Over View</div>
                        <!-- EXCHANGERATES.ORG.UK LIVE CURRENCY RATES TICKER START -->
                        <iframe src="//www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=1100&s=1&mc=BDT&mbg=F0F0F0&bs=no&bc=000044&f=verdana&fs=12px&fc=000044&lc=000044&lhc=FE9A00&vc=FE9A00&vcu=008000&vcd=FF0000&" width="1100" height="30" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
                        <!-- EXCHANGERATES.ORG.UK LIVE CURRENCY RATES TICKER END -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-xl-5">
                        <div class="card bg-dpink text-white widget-media-bordered">
                            <div class="card-body">
                                <div class="media py-3 align-items-center media-colored">
                                    <img class="mr-3" src="{{asset('asset')}}/assets/images/icons/55.png" alt="">
                                    <div class="media-body">
                                        <p class=" mb-1">Total Customers</p>
                                        <h2 class="text-white m-0">{{$customer}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-10 col-xl-5">
                        <div class="card widget-media-bordered">
                            <div class="card-body">
                                <div class="media py-3 align-items-center">
                                    <img class="mr-3" src="{{asset('asset')}}/assets/images/icons/56.png" alt="">
                                    <div class="media-body">
                                        <p class="text-pale-sky mb-1">Currency Type</p>
                                        <h2 class="text-dpink m-0">{{$curre}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-xl-5">
                        <div class="card bg-lgreen text-white widget-media-bordered">
                            <div class="card-body">
                                <div class="media py-3 align-items-center media-colored">
                                    <img class="mr-3" src="{{asset('asset')}}/assets/images/icons/57.png" alt="">
                                    <div class="media-body">
                                        <p class=" mb-1">Total Sales</p>
                                         {{-- //////////////// --}}
                                                <input type="hidden" value="{{$sub_total=0}}{{$vat=0}}{{$g_total=0}}"/>
                                                   @foreach ($totals as $item)

                                                    <tr>         
                                                        <input type="hidden" value="
                                                        {{$sub_total+=$item->rate*$item->s_qty-$item->discount}}
                                                        {{$vat+=$sub_total*0.05}}
                                                        >
                                                     ">
                                                
                                                   @endforeach
                                                <h2 class="text-white m-0">{{$sub_total}}</h2>

                    {{-- ////////////////// --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-10 col-xl-5">
                        <div class="card widget-media-bordered">
                            <div class="card-body">
                                <div class="media py-3 align-items-center">
                                    <img class="mr-3" src="{{asset('asset')}}/assets/images/icons/58.png" alt="">
                                    <div class="media-body">
                                        <p class="text-pale-sky mb-1">Total Purchase</p>
                                    <input type="hidden" value="{{$tot=0}}"/>

                                        @foreach ($p_totals as $pur)
                                      
                                         <tr>         
                                             <input type="hidden" value="
                                             {{$tot+=$pur->c_rate*$pur->n_qty-$pur->discount}}
                                             {{$vat=$tot*0.05}}
                                             {{$sub_t=$tot+$vat}}">
                                            
                                        
                                        @endforeach
                                        <h2 class="text-lgreen m-0">{{$tot}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="card bg-dpink text-white widget-media-bordered">
                            <div class="card-body">
                                <div class="media py-3 align-items-center media-colored">
                                    <img class="mr-3" src="{{asset('asset')}}/assets/images/icons/55.png" alt="">
                                    <div class="media-body">
                                        <p class=" mb-1">Total Customers</p>
                                        <h2 class="text-white m-0">{{$customer}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card bg-dpink text-white widget-media-bordered">
                            <div class="card-body">
                                <div class="media py-3 align-items-center media-colored">
                                    <img class="mr-3" src="{{asset('asset')}}/assets/images/icons/55.png" alt="">
                                    <div class="media-body">
                                        <p class=" mb-1">Total Customers</p>
                                        <h2 class="text-white m-0">{{$customer}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card widget-media-bordered">
                            <div class="card-body">
                                <div class="media py-3 align-items-center">
                                    <img class="mr-3" src="{{asset('asset')}}/assets/images/icons/56.png" alt="">
                                    <div class="media-body">
                                        <p class="text-pale-sky mb-1">Currency Type</p>
                                        <h2 class="text-dpink m-0">{{$curre}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card bg-dpink text-white widget-media-bordered">
                            <div class="card-body">
                                <div class="media py-3 align-items-center media-colored">
                                    <img class="mr-3" src="{{asset('asset')}}/assets/images/icons/55.png" alt="">
                                    <div class="media-body">
                                        <p class=" mb-1">Total Customers</p>
                                        <h2 class="text-white m-0">{{$customer}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card bg-dpink text-white widget-media-bordered">
                            <div class="card-body">
                                <div class="media py-3 align-items-center media-colored">
                                    <img class="mr-3" src="{{asset('asset')}}/assets/images/icons/55.png" alt="">
                                    <div class="media-body">
                                        <p class=" mb-1">Total Customers</p>
                                        <h2 class="text-white m-0">{{$customer}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card widget-media-bordered">
                            <div class="card-body">
                                <div class="media py-3 align-items-center">
                                    <img class="mr-3" src="{{asset('asset')}}/assets/images/icons/56.png" alt="">
                                    <div class="media-body">
                                        <p class="text-pale-sky mb-1">Currency Type</p>
                                        <h2 class="text-dpink m-0">{{$curre}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card bg-lgreen text-white widget-media-bordered">
                            <div class="card-body">
                                <div class="media py-3 align-items-center media-colored">
                                    <img class="mr-3" src="{{asset('asset')}}/assets/images/icons/57.png" alt="">
                                    <div class="media-body">
                                        <p class=" mb-1">Total Sales</p>
                                         {{-- //////////////// --}}
                                                <input type="hidden" value="{{$sub_total=0}}{{$vat=0}}{{$g_total=0}}"/>
                                                   @foreach ($totals as $item)

                                                    <tr>         
                                                        <input type="hidden" value="
                                                        {{$sub_total+=$item->rate*$item->s_qty-$item->discount}}
                                                        {{$vat+=$sub_total*0.05}}
                                                        >
                                                     ">
                                                
                                                   @endforeach
                                                <h2 class="text-white m-0">{{$sub_total}}</h2>

                    {{-- ////////////////// --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-6 col-xl-3">
                        <div class="card widget-media-bordered">
                            <div class="card-body">
                                <div class="media py-3 align-items-center">
                                    <img class="mr-3" src="{{asset('asset')}}/assets/images/icons/58.png" alt="">
                                    <div class="media-body">
                                        <p class="text-pale-sky mb-1">Total Purchase</p>
                                    <input type="hidden" value="{{$tot=0}}"/>

                                        @foreach ($p_totals as $pur)
                                      
                                         <tr>         
                                             <input type="hidden" value="
                                             {{$tot+=$pur->c_rate*$pur->n_qty-$pur->discount}}
                                             {{$vat=$tot*0.05}}
                                             {{$sub_t=$tot+$vat}}">
                                            
                                        
                                        @endforeach
                                        <h2 class="text-lgreen m-0">{{$tot}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body stat-widget-four">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="cc BTC" title="BTC"></i>
                                    </span>
                                    <div class="media-body">
                                        <h4 class="mb-3">USD</h4>
                                        <h5 class="text-pale-sky">$ 267.87</h5>
                                    </div>
                                    <div class="media-body text-right">
                                        <h4 class="text-pale-sky mb-3">$ 8 456.87</h4>
                                        <h5 class="text-danger">- 1.81% <i class="fa fa-level-down"></i>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-warning">
                                <div id="crypto-btc-card"></div>
                                <p class="text-white text-right mr-4 ">Last 07 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body stat-widget-four">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="cc ETH" title="BTC"></i>
                                    </span>
                                    <div class="media-body">
                                        <h4 class="mb-3">EURO</h4>
                                        <h5 class="text-pale-sky"> 2.51</h5>
                                    </div>
                                    <div class="media-body text-right">
                                        <h4 class="text-pale-sky mb-3"> 8 456.87</h4>
                                        <h5 class="text-success">- 1.81% <i class="fa fa-level-up"></i>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-success">
                                <div id="crypto-eth-card"></div>
                                <p class="text-white text-right mr-4 ">Last 07 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body stat-widget-four">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="cc XRP" title="BTC"></i>
                                    </span>
                                    <div class="media-body">
                                        <h4 class="mb-3">INR</h4>
                                        <h5 class="text-pale-sky">INR 0.87</h5>
                                    </div>
                                    <div class="media-body text-right">
                                        <h4 class="text-pale-sky mb-3"> 8 456.87</h4>
                                        <h5 class="text-danger">- 1.81% <i class="fa fa-level-down"></i>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-primary">
                                <div id="crypto-rpl-card"></div>
                                <p class="text-white text-right mr-4 ">Last 07 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body stat-widget-four">
                                <div class="media">
                                    <div class="mr-3">
                                        <i class="cc LTC" title="BTC"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="mb-3">TAKA</h4>
                                        <h5 class="text-pale-sky"> 2.49</h5>
                                    </div>
                                    <div class="media-body text-right">
                                        <h4 class="text-pale-sky mb-3">TK 8 456.87</h4>
                                        <h5 class="text-success">- 1.81% <i class="fa fa-level-up"></i>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-info">
                                <div id="crypto-ltc-card"></div>
                                <p class="text-white text-right mr-4 ">Last 07 days</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
               

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="wallet-card">
                                    <div class="wallet-logo">
                                        
								{{-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}
                                        <h4>Update Currency Price</h4>
                                    </div>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                    <div class="wallet-address mt-5">
                                        <h4>Buy Rate 
                                            {{-- <small class="text-muted ml-5">Minimum value 0.00001BTC</small> --}}
                                        </h4>
                                        <form action="#"  method="post" enctype="multipart/form-data">
                                            
                                            @csrf

                                            <input type="hidden" name="txtId" id="n_id" >

                                        <div class="input-group mb-5">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text flex-column justify-content-center text-pale-sky">
                                                    <span><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <input type="text" name="txtBuy" class="form-control" id="buy_rate" aria-label="Text input with dropdown button" placeholder="Enter Buy Rate">
                                            <div class="input-group-append">
                                                <select  class="selectpicker" data-width="auto" id="cmbCurrency" name="txtId" style="width: 255px">
                                                    <option selected value="">EXP..</option>
                                                    {{-- <option value="">ETH</option> --}}
                                                                @foreach ($currency as $user)
                                                              <option value="{{ $user->id }}">{{ $user->c_country }} | {{ $user->n_type }}</option>
                                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <h4>Sale Rate</h4>
                                        <div class="input-group mb-5">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text flex-column justify-content-center text-pale-sky">
                                                    <span><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <input type="text" name="txtSale" class="form-control" id="sale_rate" placeholder="Enter Sale Rate..." >
                                        </div>
                                        <button id="btnUpdate" type="submit" class="btn btn-outline-primary btn-sl-sm">Update</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="wallet-card">
                                    <div class="wallet-logo">
                                        <h4>Wallet Address</h4>
                                    </div>
                                    <div class="wallet-address mt-5">
                                        <h5>USD Account No*</h5>
                                        <div class="input-group mb-5">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text flex-column justify-content-center text-pale-sky">
                                                    <span class="text-primary"><i class="cc BTC"></i></span>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="2xsD12F42xvR2deD4..." readonly="readonly">
                                            <div class="input-group-append">
                                                <div class="input-group-text flex-column justify-content-center text-pale-sky c-pointer">
                                                    <span><i class="fa fa-file-text"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <h5>Euro Wallet Address*</h5>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text flex-column justify-content-center text-pale-sky">
                                                    <span class="text-primary"><i class="cc ETH"></i></span>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="2xsD12F42xvR2deD4..." readonly="readonly">
                                            <div class="input-group-append">
                                                <div class="input-group-text flex-column justify-content-center text-pale-sky c-pointer">
                                                    <span><i class="fa fa-file-text"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wallet-info">
                                        <a href="javascript:void()" class="btn btn-outline-primary btn-sl-sm">View All</a>
                                        <a href="javascript:void()" class="btn btn-primary btn-sl-sm">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="wallet-card">
                                    <h4 class="pb-4">Current Currency Exchange Rate </h4>
                                    <div class="row mt-5">
                                        <div class="col-lg-12">
                                            <form  id="inputCurr"> 
                                                <h4>Select Currency
                                                  
                                                </h4>

                                                <div class="input-group input-group-prepend-big mb-4">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text flex-column justify-content-center text-pale-sky px-5">
                                                            
                                                           
                                                                <select  class="m-0 " data-width="auto" id="currency">
                                                                    <option selected value="">$$$</option>
                                                                    <option value="USD">USD</option>
                                                                    <option value="BDT">BDT</option>
                                                                    <option value="INR">INR</option>
                                                                    <option value="EUR">EUR</option>
                                                                    <option value="GBP">GBP</option>
                                                                    <option value="CAD">CAD</option>
                                                                    <option value="NZD">NZD</option>


                                                                </select>
                                                         
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control bg-white pl-5" aria-label="Text input with dropdown button" placeholder="1.00" id="c">
                                                </div>

                                                <div class="text-center">
                                                    <img src="{{asset('asset')}}/assets/images/icons/18.png" alt="">
                                                </div>
                                                <h4>Tergate Currency
                                                    
                                                </h4>
                                                <div class="input-group input-group-prepend-big mt-4 mb-0">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text flex-column justify-content-center text-pale-sky px-5">
                                                            <select  class="m-0 " data-width="auto"  id="targetCurrency">
                                                                <option selected value="">$$$</option>
                                                                <option value="USD">USD</option>
                                                                <option value="BDT">BDT</option>
                                                                <option value="INR">INR</option>
                                                                <option value="EUR">EUR</option>
                                                                <option value="GBP">GBP</option>
                                                                <option value="CAD">CAD</option>
                                                                <option value="NZD">NZD</option>

                                                            </select>
                                                           
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control bg-white pl-5" aria-label="Text input with dropdown button" placeholder="0.25" id="showRes">
                                                </div>
                                                <div class="text-center">
                                                    <p class="muted-text my-2 " ></p>
                                                    <button type="submit" class="btn btn-outline-primary mb-4 btn-sl-sm">Exchange</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="wallet-card">
                                   
                                    <div class="row mt-5">
                                        <!-- Currency Converter Script - EXCHANGERATEWIDGET.COM -->
                                        <div style="width:500px;border:3px solid #2D6AB4;border-radius:5px;height:300px" ><div style="text-align:center;background-color:#2D6AB4;font-size:14px;font-weight:bold;height:32px;"><a href="https://www.exchangeratewidget.com/"  rel="nofollow"><h2 style="color:#FFFFFF;text-decoration:none;">Currency Converter</h2></a></div><script type="text/javascript" src="//www.exchangeratewidget.com/converter.php?l=en&f=USD&t=EUR&a=1&d=F0F0F0&n=FFFFFF&o=000000&v=3"></script></div>
                                        <!-- End of Currency Converter Script -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            
                <div class="row pt-5 pt-sm-0">
                    <div class="col-xl-6">
                        <div class="card transparent-card mb-0">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h4 class="card-title"> Sell Order</h4>
                                <div class="table-action">
                                    <div class="form-group mb-0 mr-3">
                                        <select class="selectpicker show-tick" data-width="auto">
                                            <option selected="selected">Sort By</option>
                                            <option>Ascending</option>
                                            <option>Descending</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-padded selling-order-table">
                                        <thead>
                                            <tr>
                                                <th>Price per USD</th>
                                                <th>USD Amount</th>
                                                <th>Total ($)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>$2042.6487</td>
                                                <td>2.253482</td>
                                                <td>$2745.25</td>
                                            </tr>
                                            <tr>
                                                <td>$5042.6487</td>
                                                <td>0.353482</td>
                                                <td>$2745.25</td>
                                            </tr>
                                            <tr>
                                                <td>$3042.6487</td>
                                                <td>0.253482</td>
                                                <td>$2745.25</td>
                                            </tr>
                                            <tr>
                                                <td>$1042.6487</td>
                                                <td>0.253482</td>
                                                <td>$5745.25</td>
                                            </tr>
                                            <tr>
                                                <td>$1042.6487</td>
                                                <td>0.253482</td>
                                                <td>$3745.25</td>
                                            </tr>
                                            <tr>
                                                <td>$1042.6487</td>
                                                <td>0.253482</td>
                                                <td>$1745.25</td>
                                            </tr>
                                            <tr>
                                                <td>$1042.6487</td>
                                                <td>0.253482</td>
                                                <td>$2745.25</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card transparent-card ">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h4 class="card-title"> Buy Order</h4>
                                <div class="table-action">
                                    <div class="form-group mb-0 mr-3">
                                        <select class="selectpicker show-tick" data-width="auto">
                                            <option selected="selected">Sort By</option>
                                            <option>Ascending</option>
                                            <option>Descending</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-padded buying-order-table">
                                        <thead>
                                            <tr>
                                                <th>Price per EURO</th>
                                                <th>BTC Amount</th>
                                                <th>Total ($)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>$4042.6487</td>
                                                <td>0.253482</td>
                                                <td>$2745.25</td>
                                            </tr>
                                            <tr>
                                                <td>$3042.6487</td>
                                                <td>0.253482</td>
                                                <td>$2745.25</td>
                                            </tr>
                                            <tr>
                                                <td>$5042.6487</td>
                                                <td>0.253482</td>
                                                <td>$2745.25</td>
                                            </tr>
                                            <tr>
                                                <td>$2042.6487</td>
                                                <td>0.253482</td>
                                                <td>$2745.25</td>
                                            </tr>
                                            <tr>
                                                <td>$1042.6487</td>
                                                <td>0.253482</td>
                                                <td>$2745.25</td>
                                            </tr>
                                            <tr>
                                                <td>$4023.6487</td>
                                                <td>0.253482</td>
                                                <td>$2745.25</td>
                                            </tr>
                                            <tr>
                                                <td>$3045.6487</td>
                                                <td>0.253482</td>
                                                <td>$2745.25</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5">
                        <div class="card transparent-card ">
                            <div class="card-header pb-0">
                                <h2 class="card-title mb-3">Currency Stock OverView</h2>
                                {{-- <p class="font-medium">Todays Currency Price and Changes</p> --}}
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    {{-- <table class="table table-padded market-capital-dt"> --}}
                                    <table class="table trading-activity table-padded table-responsive-fix">

                                        <thead >
                                            <tr class="th">
                                                <th >Currency</th>
                                                <th >Note</th>
                                                <th >Stock</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- <td>{{ $user->c_name }}</td>
                                                <td><img src="{{asset('img')}}/{{$user->c_image}}" alt="" width='50px' hight='50px' ></td> --}}
                                                @forelse ($stocks as $user)
                                                {{-- <tr style="color: black">
                                                   
                                                    <td>{{ $user->c_name }}</td>
                                                    <td>{{ $user->n_type }}</td>
    
                                                    <td>{{ $user->qty }}</td> --}}
                                            <tr>
                                                <td><img src="{{asset('img')}}/{{$user->c_image}}" alt="" width='50px' hight='50px' >  {{ $user->c_country }}
                                                </td>
                                                <td>
                                                    {{ $user->n_type }}
                                                </td>
                                                <td >{{ $user->qty }}
                                                </td>
                                            </tr>
                                            @empty
                                            <tr><td colspan="3">No users</td></tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="card transparent-card ">
                            <div class="card-header pb-0">
                                <h2 class="card-title mb-3">Recent New Coustomer </h2>
                                {{-- <p class="font-medium">Trading Currency Activities</p> --}}
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table trading-activity table-padded table-responsive-fix">
                                        <thead>
                                            <tr class="th">
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($customers as $user)
                                            <tr>
                                                {{-- id, name, f_name, mobile, email, photo, address, n_id, created_at, updated_at --}}
                                                <td>
                                                   {{$user->name}}
                                                </td>
                                                <td>{{$user->mobile}}</td>
                                                <td>
                                                    {{$user->email}}
                                                </td>
                                                <td>
                                                    {{-- <span class="label label-xl label-rounded label-danger">Cancel</span>
                                                     --}}
                                                     {{$user->address}}
                                                </td>
                                            </tr>
                                            {{-- <tr>
                                                <td>
                                                    DID 4654784520
                                                </td>
                                                <td><span class="text-muted font-weight-semi-bold">16:25:59</span></td>
                                                <td>
                                                    $4,85,650
                                                </td>
                                                <td><span class="label label-xl label-rounded label-success">Delivery</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    DID 1655784520
                                                </td>
                                                <td><span class="text-muted font-weight-semi-bold">-7:25:59</span></td>
                                                <td>
                                                    $2,85,650
                                                </td>
                                                <td><span class="label label-xl label-rounded label-warning">Hold</span>
                                                </td>
                                            </tr> --}}
                                            @empty
                                            <tr><td colspan="3">No users</td></tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
  <script>
     $(function() {

        $("#cmbCurrency").on("change",function(){
            // alert($(this).val());
           $.ajax({
             url:"<?php echo url("getcurrency")?>",
             type:'GET',
             data:{"id":$(this).val()},
             success:function(res){
              let a_note=JSON.parse(res);
                console.log(a_note);
               $("#buy_rate").val(a_note.buy_rate);
               $("#sale_rate").val(a_note.sell_rate);
               $("#n_id").val(a_note.id);

           



             }
           });
        });  
        $("#btnUpdate").on("click",function(e){
            e.preventDefault();   
            // let token = $("input[name='_token']").val();
            // let method = $("input[name='_method']").val();         
           let id=$('#cmbCurrency').val();
           let sale_rate=$('#sale_rate').val();
           let buy_rate=$('#buy_rate').val();   
              alert(id);

           $.ajax({
            url:"{{route('dashboard.update')}}",
             type:'get',
             data:{"id":id,"buy_rate":buy_rate,"sale_rate":sale_rate},
             success:function(res){

             console.log(res)
            //  alert();
             }
           });
        });  
     });

    //  /////////////////////////////
          function apiCall(e) {
            e.preventDefault(); 
            var currency = document.querySelector('#currency').value; 
            $.ajax({
                url: "https://v6.exchangerate-api.com/v6/b4e26eeac59d8ef978fdd3b2/latest/"+currency,
                type:'GET',
                data:{

                },
                success:function(res){
                  console.log(res);
                const cr = res.conversion_rates;
                const targetCurrency = document.querySelector('#targetCurrency').value;
                document.querySelector('#showRes').value = cr[targetCurrency]; 
                // console.log(cr.USD)

                }
            });
        }

        
        document.getElementById('inputCurr').addEventListener('submit', apiCall);
  </script>
        <!--**********************************
            Content body end
        ***********************************-->
<!-- 
@if(session('sess_role_id')==5)
                     Admin Dashboard
 @elseif(session('sess_role_id')==6)
                     Editor Dashboard
                  @endif -->
  @endsection
   {{-- <div class="col-lg-12"> --}}
                                          
                                        {{-- </div> --}}