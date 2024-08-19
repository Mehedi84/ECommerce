<!--start master layout -->
@extends('backend.layouts.master')
<!--end master layout -->

<!--start content -->
@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid dashboard-3">
    <div class="row"> 
        <div class="col-xl-3 col-sm-6"> 
        <div class="card">
            <div class="card-header card-no-border pb-0">
            <div class="header-top daily-revenue-card">
                <h4>Total Sells</h4>
                <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="userdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                </div>
            </div>
            </div>
            <div class="card-body pb-0 total-sells">
            <div class="d-flex align-items-center gap-3"> 
                <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/icon/coin1.png')}}" alt="icon"></div>
                <div class="flex-grow-1">
                <div class="d-flex align-items-center gap-2"> 
                    <h2>12,463</h2>
                    <div class="d-flex total-icon">
                    <p class="mb-0 up-arrow bg-light-success"><i class="fa fa-arrow-up text-success"></i></p><span class="f-w-500 font-success">+ 20.08% </span>
                    </div>
                </div>
                <p class="text-truncate">Compared to Jan 2024</p>
                </div>
            </div>
            <div id="admissionRatio"></div>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6"> 
        <div class="card">
            <div class="card-header card-no-border pb-0">
            <div class="header-top daily-revenue-card">
                <h4>Orders Value</h4>
                <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="userdropdown2" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown2"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                </div>
            </div>
            </div>
            <div class="card-body pb-0 total-sells-2">
            <div class="d-flex align-items-center gap-3"> 
                <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/icon/shopping1.png')}}" alt="icon"></div>
                <div class="flex-grow-1">
                <div class="d-flex align-items-center gap-2"> 
                    <h2>78,596</h2>
                    <div class="d-flex total-icon">
                    <p class="mb-0 up-arrow bg-light-danger"><i class="fa fa-arrow-down text-danger"></i></p><span class="f-w-500 font-danger">- 10.02%</span>
                    </div>
                </div>
                <p class="text-truncate">Compared to Aug 2024</p>
                </div>
            </div>
            <div id="order-value"></div>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6"> 
        <div class="card">
            <div class="card-header card-no-border pb-0">
            <div class="header-top daily-revenue-card">
                <h4>Daily Orders</h4>
                <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="userdropdown3" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown3"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                </div>
            </div>
            </div>
            <div class="card-body pb-0 total-sells-3">
            <div class="d-flex align-items-center gap-3"> 
                <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/icon/sent1.png')}}" alt="icon"></div>
                <div class="flex-grow-1">
                <div class="d-flex align-items-center gap-2"> 
                    <h2>95,789</h2>
                    <div class="d-flex total-icon">
                    <p class="mb-0 up-arrow bg-light-success"><i class="fa fa-arrow-up text-success"></i></p><span class="f-w-500 font-success">+ 13.23%</span>
                    </div>
                </div>
                <p class="text-truncate">Compared to may 2024</p>
                </div>
            </div>
            <div id="daily-value"></div>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6"> 
        <div class="card">
            <div class="card-header card-no-border pb-0">
            <div class="header-top daily-revenue-card">
                <h4>Daily Revenue</h4>
                <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="userdropdown4" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown4"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                </div>
            </div>
            </div>
            <div class="card-body pb-0 total-sells-4">
            <div class="d-flex align-items-center gap-3"> 
                <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/icon/revenue1.png')}}" alt="icon"></div>
                <div class="flex-grow-1">
                <div class="d-flex align-items-center gap-2"> 
                    <h2>41,954</h2>
                    <div class="d-flex total-icon">
                    <p class="mb-0 up-arrow bg-light-danger"><i class="fa fa-arrow-down text-danger"></i></p><span class="f-w-500 font-danger">- 17.06%</span>
                    </div>
                </div>
                <p class="text-truncate">Compared to july 2024</p>
                </div>
            </div>
            <div id="daily-revenue"></div>
            </div>
        </div>
        </div>
        
        <div class="col-xxl-7 col-xl-8 col-sm-12"> 
        <div class="card">
            <div class="card-header card-no-border pb-0">
            <div class="header-top">
                <h4>Recent Orders</h4>
                <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="userdropdown5" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown5"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                </div>
            </div>
            </div>
            <div class="card-body pt-0 recent-orders px-0">
            <div class="table-responsive theme-scrollbar">
                <table class="table display" id="recent-orders" style="width:100%">
                <thead>
                    <tr>
                    <th>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label"></label>
                        </div>
                    </th>
                    <th>Recent Orders</th>
                    <th>Order Date</th>
                    <th>QTY</th>
                    <th>Customer</th>
                    <th>Price </th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label"></label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/1.png')}}" alt=""></div>
                        <div class="flex-grow-1"><a href="checkout.html">
                            <h6>Decorative Plants</h6></a></div>
                        </div>
                    </td>
                    <td>20 Sep - 03.00AM</td>
                    <td>QTY:12</td>
                    <td class="customer-img">  
                        <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/user/6.png')}}" alt=""></div>
                        <div class="flex-grow-1">
                            <h6>Leonie Green  </h6>
                        </div>
                        </div>
                    </td>
                    <td> 
                        <p>$637.30</p>
                    </td>
                    <td>
                        <div class="status-box">
                        <div class="btn background-light-success font-success f-w-500">Succeed</div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label"></label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/2.png')}}" alt=""></div>
                        <div class="flex-grow-1"><a href="checkout.html">
                            <h6>Sticky Calender</h6></a></div>
                        </div>
                    </td>
                    <td>12 Mar - 08.12AM</td>
                    <td>QTY:14</td>
                    <td class="customer-img">  
                        <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/user/8.png')}}" alt=""></div>
                        <div class="flex-grow-1">
                            <h6>Peter White</h6>
                        </div>
                        </div>
                    </td>
                    <td>
                        <p>$637.30</p>
                    </td>
                    <td>
                        <div class="status-box">
                        <div class="btn background-light-warning font-warning f-w-500">Waiting</div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label"></label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/3.png')}}" alt=""></div>
                        <div class="flex-grow-1"><a href="checkout.html">
                            <h6>Crystal Mug</h6></a></div>
                        </div>
                    </td>
                    <td>Feb 15 - 10.00AM</td>
                    <td>QTY:19</td>
                    <td class="customer-img">  
                        <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/user/7.png')}}" alt=""></div>
                        <div class="flex-grow-1">
                            <h6>Ruby Yang </h6>
                        </div>
                        </div>
                    </td>
                    <td>
                        <p>$637.30</p>
                    </td>
                    <td>
                        <div class="status-box">
                        <div class="btn background-light-success font-success f-w-500">Succeed</div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label"></label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/4.png')}}" alt=""></div>
                        <div class="flex-grow-1"><a href="checkout.html">
                            <h6>Motion Table Lamp</h6></a></div>
                        </div>
                    </td>
                    <td>Jun 10 - 12.30AM</td>
                    <td>QTY:17</td>
                    <td class="customer-img">  
                        <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/user/8.png')}}" alt=""></div>
                        <div class="flex-grow-1">
                            <h6>Visha Long</h6>
                        </div>
                        </div>
                    </td>
                    <td> 
                        <p>$637.30</p>
                    </td>
                    <td>
                        <div class="status-box">
                        <div class="btn background-light-danger font-danger f-w-500">Canceled</div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label"></label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/2.png')}}" alt=""></div>
                        <div class="flex-grow-1"><a href="checkout.html">
                            <h6>Sticky Calender</h6></a></div>
                        </div>
                    </td>
                    <td>12 Mar - 08.12AM</td>
                    <td>QTY:14</td>
                    <td class="customer-img">  
                        <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/user/8.png')}}" alt=""></div>
                        <div class="flex-grow-1">
                            <h6>Peter White</h6>
                        </div>
                        </div>
                    </td>
                    <td>
                        <p>$637.30</p>
                    </td>
                    <td>
                        <div class="status-box">
                        <div class="btn background-light-warning font-warning f-w-500">Waiting</div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label"></label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/3.png')}}" alt=""></div>
                        <div class="flex-grow-1"><a href="checkout.html">
                            <h6>Crystal Mug</h6></a></div>
                        </div>
                    </td>
                    <td>Feb 15 - 10.00AM</td>
                    <td>QTY:19</td>
                    <td class="customer-img">  
                        <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/user/7.png')}}" alt=""></div>
                        <div class="flex-grow-1">
                            <h6>Ruby Yang </h6>
                        </div>
                        </div>
                    </td>
                    <td>
                        <p>$637.30</p>
                    </td>
                    <td>
                        <div class="status-box">
                        <div class="btn background-light-success font-success f-w-500">Succeed</div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label"></label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/4.png')}}" alt=""></div>
                        <div class="flex-grow-1"><a href="checkout.html">
                            <h6>Motion Table Lamp</h6></a></div>
                        </div>
                    </td>
                    <td>Jun 10 - 12.30AM</td>
                    <td>QTY:17</td>
                    <td class="customer-img">  
                        <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-3/user/8.png')}}" alt=""></div>
                        <div class="flex-grow-1">
                            <h6>Visha Long</h6>
                        </div>
                        </div>
                    </td>
                    <td>
                        <p>$637.30</p>
                    </td>
                    <td>
                        <div class="status-box">
                        <div class="btn background-light-danger font-danger f-w-500">Canceled</div>
                        </div>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xxl-5 col-xl-4 col-lg-7 col-sm-12"> 
        <div class="card">
            <div class="card-header card-no-border pb-0">
            <div class="header-top">
                <h4>Sales Overview</h4>
                <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="userdropdown6" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown6"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                </div>
            </div>
            </div>
            <div class="card-body pt-0">
            <div id="salse-overview"></div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
<!--end content -->

<!--start indivisual pages javascript -->
@push('js')

<script src="{{ asset('backend/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('backend/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
<script src="{{ asset('backend/assets/js/chart/apex-chart/moment.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/chart/echart/pie-chart/facePrint.js') }}"></script>
<script src="{{ asset('backend/assets/js/chart/echart/pie-chart/testHelper.js') }}"></script>
<script src="{{ asset('backend/assets/js/chart/echart/pie-chart/custom-transition-texture.js') }}"></script>
<script src="{{ asset('backend/assets/js/dashboard/dashboard_3.js') }}"></script>
@endpush
<!--end indivisual pages javascript -->
