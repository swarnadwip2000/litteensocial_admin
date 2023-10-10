
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{$title}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}">

        <link href="{{asset('assets/libs/jquery-nice-select/nice-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/multiselect/multi-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <!-- Lightbox css -->
        <link href="{{asset('assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />



        <!-- Plugins css -->




        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<style>
    .modal-demo {
    background-color: #fff;
    width: 900px !important;
    border-radius: 4px;
    display: none;
    position: relative;
    margin-top: 52px;
}

.dataTables_wrapper .dataTables_paginate .paginate_button {
    box-sizing: border-box;
    display: inline-block;
    min-width: 1.5em;
    padding: 0.5em 1em;
    margin-left: 2px;
    text-align: center;
    text-decoration: none !important;
    cursor: pointer;
    color: inherit !important;
    border: 1px solid transparent;
    border-radius: 2px;
    background: transparent;
    background: white;
    border: white;
    background: white !important;
    border: white !important;
}

.dataTables_wrapper .dataTables_length select {
    border: 1px solid #aaa;
    border-radius: 3px;
    padding: 5px;
    background-color: transparent;
    padding: 4px;
    width: 51px !important;
}

.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    border-radius: 19px !important;
}

.star{
    color:red;
    font-size:15px;
}

.longEnough {
  max-height: 520px;
  width: 350px;
  overflow: auto;

}
</style>
    </head>
           <!-- Begin page -->
           <div id="wrapper">

<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="d-none d-sm-block">
            <form class="app-search">
                <div class="app-search-box">
                    <div class="input-group">

                        <div class="input-group-append">

                        </div>
                    </div>
                </div>
            </form>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0">
                        <span class="float-right">
                            <a href="" class="text-dark">
                                <small>Clear All</small>
                            </a>
                        </span>Notification
                    </h5>
                </div>

                <div class="slimscroll noti-scroll">







                    <!-- item-->

                </div>



            </div>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{asset('assets/images/logo.png')}}" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">
                    {{Auth::guard('advertiser')->user()->firstname}} <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <!-- <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div> -->

                <!-- item-->
                {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>My Account</span>
                </a> --}}

                <!-- item-->
                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-settings"></i>
                    <span>Settings</span>
                </a> -->

                <!-- item-->
                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-lock"></i>
                    <span>Lock Screen</span>
                </a> -->

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="{{route('logout')}}" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">

            </a>
        </li>


    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo text-center">
            <span class="logo-lg">
                <img src="{{asset('assets/images/logo.png')}}" alt="" width="90" height="58">
                <!-- <span class="logo-lg-text-light">UBold</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-sm-text-dark">U</span> -->
                <img src="{{asset('assets/images/logo.png')}}" alt="" height="24">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
            </button>
        </li>

        <li class="dropdown d-none d-lg-block">
            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">


            </a>
            <div class="dropdown-menu">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">
                    <i class="fe-briefcase mr-1"></i>

                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">
                    <i class="fe-user mr-1"></i>
                    <span>Create Users</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">
                    <i class="fe-bar-chart-line- mr-1"></i>
                    <span>Revenue Report</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">
                    <i class="fe-settings mr-1"></i>
                    <span>Settings</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">
                    <i class="fe-headphones mr-1"></i>
                    <span>Help & Support</span>
                </a>

            </div>
        </li>

        <li class="dropdown dropdown-mega d-none d-lg-block">
            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">


            </a>
            <div class="dropdown-menu dropdown-megamenu">
                <div class="row">
                    <div class="col-sm-8">

                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="text-dark mt-0">UI Components</h5>
                                <ul class="list-unstyled megamenu-list">
                                    <li>
                                        <a href="javascript:void(0);">Widgets</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Nestable List</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Range Sliders</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Masonry Items</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Sweet Alerts</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Treeview Page</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Tour Page</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-4">
                                <h5 class="text-dark mt-0">Applications</h5>
                                <ul class="list-unstyled megamenu-list">
                                    <li>
                                        <a href="javascript:void(0);">eCommerce Pages</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">CRM Pages</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Email</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Calendar</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Team Contacts</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Task Board</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Email Templates</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-4">
                                <h5 class="text-dark mt-0">Extra Pages</h5>
                                <ul class="list-unstyled megamenu-list">
                                    <li>
                                        <a href="javascript:void(0);">Left Sidebar with User</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Menu Collapsed</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Small Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">New Header Style</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Search Result</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Gallery Pages</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Maintenance & Coming Soon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center mt-3">
                            <h3 class="text-dark">Special Discount Sale!</h3>
                            <h4>Save up to 70% off.</h4>
                            <button class="btn btn-primary btn-rounded mt-3">Download Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </li>
    </ul>
</div>
<!-- end Topbar -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">
    <body>


   <!--- Sidemenu -->
   <div id="sidebar-menu">

       <ul class="metismenu" id="side-menu">

           {{-- <li class="menu-title">Navigation</li> --}}

           <!-- <li>
               <a href="/dashboard">
                   <i class="fe-airplay"></i>

                   <span> Dashboards </span>
               </a>

           </li> -->

           <li>
               <a href="{{route('advertiser.index')}}">
               <i class="fas fa-bullhorn"></i>

                   <span> Advertisment</span>
               </a>

           </li>
       </ul>

   </div>
   <!-- End Sidebar -->

   <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
