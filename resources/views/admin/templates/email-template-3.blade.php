@include('include/header')


<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Send Email Template</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Template 3
                                    </a></li>

                            </ol>
                        </div>
                        <h4 class="page-title">Email Template 3</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-12">
                    <div class="card" style="box-shadow: 0px 1px 10px 1px rgba(0, 0, 0, 0.15); border-radius: 13px;">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-sm-4">

                                </div>
                                <div class="col-sm-8">
                                    <div class="text-sm-right">
                                        <a href="{{route('send-promotionl-email',['type'=>3])}}" style="float:right;"
                                            class="btn btn-danger waves-effect waves-light" data-animation="fadein"
                                            data-overlaycolor="#38414a"><i class="fas fa-paper-plane mr-1"></i> Send Mail</a>
                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="row">
                               <div class="col-md-12">
                                <!doctype html>
                                <html lang="en-US">
                                   <head>
                                      <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
                                      <title>Email Template - Upgrade</title>
                                      <meta name="description" content="Email Template.">
                                      <link rel="preconnect" href="https://fonts.googleapis.com">
                                      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                                      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
                                      <style type="text/css">
                                        .container {
                                         padding-right: 15px;
                                         padding-left: 15px;
                                         margin-right: auto;
                                         margin-left: auto;
                                         font-family: 'Roboto', sans-serif;
                                      }
                                      .wrapper {
                                        text-align: center;
                                        height: 100vh;
                                      }
                                      .header-sec {
                                        background: #98ed98;
                                padding: 30px 0;
                                border-radius: 8px;
                                position: relative;
                                      }
                                      .header-sec a {
                                        position: absolute;
                                        right: 40px;
                                        font-size: 35px;
                                        top: 20px;
                                        font-weight: bold;
                                        color: #fff;
                                        text-decoration: none;
                                      }
                                      h1 {
                                       /*  margin: 45px;
                                         font-size: 40px;
                                         color: #000;
                                         font-weight: 500;*/
                                         margin: 10px;
                                font-size: 36px;
                                color: #000;
                                font-weight: 500;
                                      }
                                      .header-sec::after {
                                           content: '';
                                border-top: 25px solid #98ed98;
                                border-left: 25px solid transparent !important;
                                border-right: 25px solid transparent;
                                position: absolute;
                                bottom: -20px;
                                left: 50%;
                                           transform: translateX(-50%);
                                         }
                                      .all-wrp {
                                         margin-top: 40px;
                                         margin-bottom: 40px;
                                         display: -ms-flexbox;
                                         display: flex;
                                         -ms-flex-wrap: wrap;
                                         flex-wrap: wrap;
                                         margin-right: -15px;
                                         margin-left: -15px;
                                      }
                                      .col-4 {
                                        -ms-flex: 0 0 33.33333%;
                                        flex: 0 0 33.33333%;
                                        max-width: 33.33333%;
                                        margin-bottom: 25px;
                                      }
                                      .user-wrp img {
                                        width: auto;
                                        margin: 0 auto;
                                        height: 150px;
                                      }
                                      .m-content ul {
                                        /*list-style: none;*/
                                        padding: 0;
                                        margin: 5px 0 0;
                                      }
                                      .m-content ul li:first-child {margin-right: 5px;}
                                      .m-content ul li:first-child::after {content: "•";margin-left: 8px;}
                                      .m-content ul li {display: inline-block;}
                                      .m-content {
                                         color: #646464;
                                         font-size: 18px;
                                         /*margin-top: -30px;*/
                                         background-color: white;
                                         position: relative;
                                         padding: 10px 0;
                                      }
                                      .m-content p {margin: 0;}
                                      .m-content ul li:first-child::after {}
                                      .btn-wrp {margin-bottom: 40px;}
                                      .btn-wrp a {
                                        background: #98ed98;
                                        color: #000;
                                        font-size: 20px;
                                        font-weight: 500;
                                        padding: 22px 0;
                                        width: 100%;
                                        display: block;
                                        text-decoration: none;
                                        border-radius: 8px;
                                        letter-spacing: 0.5px;
                                      }
                                      .store-btn li {display: inline-block;}
                                      .store-btn li img {height: 40px;}
                                      .store-btn li:first-child {margin-right: 7px;}
                                      .store-btn  {
                                        list-style: none;
                                        padding: 0;
                                        margin: 40px 0;
                                      }
                                      </style>
                                   </head>
                                   <body>
                                      <section class="wrapper">
                                         <div class="container">
                                            <div class="header-sec">
                                               <a href="#"><span>&#10005;</span></a>
                                               <h1>Make New Friends <img src="{{asset('assets/email/heart-full-red.png')}}" alt="heart-icon" style="width: 40px;
                                vertical-align: sub;"></h1>
                                               <h1>With Friend Matches</h1>
                                               <h1>Send Likes Now</h1>
                                            </div>
                                            <div class="all-wrp">
                                               <div class="col-4">
                                                  <div class="user-wrp">
                                                     <img src="{{URL::asset('assets/email/user.png')}}">
                                                  </div>
                                                  <div class="m-content">
                                                     <p>Name <img src="{{URL::asset('assets/email/heart-full.png')}}" alt="heart-icon" style="width: 18px;
                                vertical-align: middle;"></p>
                                                     <ul>
                                                        <li>61</li>
                                                        <li>France</li>
                                                     </ul>
                                                  </div>
                                               </div>
                                               <div class="col-4">
                                                  <div class="user-wrp">
                                                     <img src="{{URL::asset('assets/email/user.png')}}">
                                                  </div>
                                                  <div class="m-content">
                                                     <p>Name <img src="{{URL::asset('assets/email/heart-full.png')}}" alt="heart-icon" style="width: 18px;
                                vertical-align: middle;"></p>
                                                     <ul>
                                                        <li>61</li>
                                                        <li>France</li>
                                                     </ul>
                                                  </div>
                                               </div>
                                               <div class="col-4">
                                                  <div class="user-wrp">
                                                     <img src="{{URL::asset('assets/email/user.png')}}">
                                                  </div>
                                                  <div class="m-content">
                                                     <p>Name <img src="{{URL::asset('assets/email/heart-full.png')}}" alt="heart-icon" style="width: 18px;
                                vertical-align: middle;"></p>
                                                     <ul>
                                                        <li>61</li>
                                                        <li>France</li>
                                                     </ul>
                                                  </div>
                                               </div>
                                               <div class="col-4">
                                                  <div class="user-wrp">
                                                     <img src="{{URL::asset('assets/email/user.png')}}">
                                                  </div>
                                                  <div class="m-content">
                                                     <p>Name <img src="{{URL::asset('assets/email/heart-full.png')}}" alt="heart-icon" style="width: 18px;
                                vertical-align: middle;"></p>
                                                     <ul>
                                                        <li>61</li>
                                                        <li>France</li>
                                                     </ul>
                                                  </div>
                                               </div>
                                               <div class="col-4">
                                                  <div class="user-wrp">
                                                     <img src="{{URL::asset('assets/email/user.png')}}">
                                                  </div>
                                                  <div class="m-content">
                                                     <p>Name <img src="{{URL::asset('assets/email/heart-full.png')}}" alt="heart-icon" style="width: 18px;
                                vertical-align: middle;"></p>
                                                     <ul>
                                                        <li>61</li>
                                                        <li>France</li>
                                                     </ul>
                                                  </div>
                                               </div>
                                               <div class="col-4">
                                                  <div class="user-wrp">
                                                     <img src="{{URL::asset('assets/email/user.png')}}">
                                                  </div>
                                                  <div class="m-content">
                                                     <p>Name <img src="{{URL::asset('assets/email/heart-full.png')}}" alt="heart-icon" style="width: 18px;
                                vertical-align: middle;"></p>
                                                     <ul>
                                                        <li>61</li>
                                                        <li>France</li>
                                                     </ul>
                                                  </div>
                                               </div>
                                               <div class="col-4">
                                                  <div class="user-wrp">
                                                     <img src="{{URL::asset('assets/email/user.png')}}">
                                                  </div>
                                                  <div class="m-content">
                                                     <p>Name <img src="{{URL::asset('assets/email/heart-mt.png')}}" alt="heart-icon" style="width: 18px;
                                vertical-align: middle;"></p>
                                                     <ul>
                                                        <li>61</li>
                                                        <li>France</li>
                                                     </ul>
                                                  </div>
                                               </div>
                                               <div class="col-4">
                                                  <div class="user-wrp">
                                                     <img src="{{URL::asset('assets/email/user.png')}}">
                                                  </div>
                                                  <div class="m-content">
                                                     <p>Name <img src="{{URL::asset('assets/email/heart-mt.png')}}" alt="heart-icon" style="width: 18px;
                                vertical-align: middle;"></p>
                                                     <ul>
                                                        <li>61</li>
                                                        <li>France</li>
                                                     </ul>
                                                  </div>
                                               </div>
                                               <div class="col-4">
                                                  <div class="user-wrp">
                                                     <img src="{{URL::asset('assets/email/user.png')}}">
                                                  </div>
                                                  <div class="m-content">
                                                     <p>Name <img src="{{URL::asset('assets/email/heart-mt.png')}}" alt="heart-icon" style="width: 18px;
                                vertical-align: middle;"></p>
                                                     <ul>
                                                        <li>61</li>
                                                        <li>France</li>
                                                     </ul>
                                                  </div>
                                               </div>
                                            </div>
                                            <div class="btn-wrp">
                                               <a href="#">Download Now </a>
                                            </div>
                                            <ul class="store-btn">
                                                <li>
                                                   <a href="#"><img src="{{URL::asset('assets/email/apple-store.png')}}"></a>
                                                </li>
                                                <li>
                                                   <a href="#"><img src="{{URL::asset('assets/email/google-play.png')}}"></a>
                                                </li>
                                             </ul>
                                         </div>
                                      </section>
                                   </body>
                                   </html>
                               </div>

                            </div>



                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->



</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->



@include('include/footer')
