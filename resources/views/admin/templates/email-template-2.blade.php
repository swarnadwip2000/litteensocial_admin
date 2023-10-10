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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Template 2
                                    </a></li>

                            </ol>
                        </div>
                        <h4 class="page-title">Email Template 2</h4>
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
                                        <a href="{{ route('send-promotionl-email', ['type' => 2]) }}"
                                            style="float:right;" class="btn btn-danger waves-effect waves-light"
                                            data-animation="fadein" data-overlaycolor="#38414a"><i
                                                class="fas fa-paper-plane mr-1"></i> Send
                                            Mail</a>
                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div>
                                <!doctype html>
                                <html lang="en-US">

                                <head>
                                    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
                                    <title>Email Template - Upgrade</title>
                                    <meta name="description" content="Email Template.">
                                    <link rel="preconnect" href="https://fonts.googleapis.com">
                                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                                    <link
                                        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
                                        rel="stylesheet">
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

                                        .download-btn a {
                                            background: #98ed98;
                                            padding: 10px 30px;
                                            border-radius: 30px;
                                            text-decoration: none;
                                            color: #000;
                                            display: inline-block;
                                            position: relative;
                                            width: auto;
                                            margin: 0 auto;
                                            border: 2px solid #242225;
                                        }

                                        .download-btn span {
                                            font-size: 18px;
                                            text-transform: uppercase;
                                            font-weight: 600;
                                            position: relative;
                                            left: auto;
                                            top: -8px;
                                            right: auto;
                                        }

                                        /* .download-btn a::before {
                                         content: "";
                                         display: block;
                                         width: 100%;
                                         background-color: transparent;
                                         height: 50px;
                                         border: 2px solid #242225;
                                         position: absolute;
                                         border-radius: 30px;
                                         top: -4px;
                                         right: 4px;
                                         left: auto;
                                      }*/
                                        .download-btn {
                                            margin-top: 30px;
                                        }

                                        .download-btn img {
                                            height: 30px;
                                            margin-right: 10px;
                                        }

                                        .wrapper ul {
                                            list-style: none;
                                            padding: 0;
                                            margin: 40px 0 0;
                                        }

                                        .wrapper ul li {
                                            display: inline-block;
                                        }

                                        .wrapper ul li img {
                                            height: 40px;
                                        }

                                        .wrapper ul li:first-child {
                                            margin-right: 7px;
                                        }

                                        .wrapper h2 {
                                            margin-top: 50px;
                                            font-weight: 500;
                                        }

                                        h1 {
                                            margin-top: 60px;
                                            margin-bottom: 0;
                                            font-weight: 400;
                                            line-height: 1.6;
                                            font-size: 25px;
                                        }

                                        h1 strong {
                                            font-weight: 600;
                                            line-height: 1.5;
                                        }

                                        .img-wrp {
                                            background: url({{URL::asset('assets/email/bg.png')}});
                                            background-repeat: repeat;
                                            background-repeat: no-repeat;
                                            background-position: center;
                                            padding: 50px 0;
                                        }

                                        .img-wrp img {
                                            border-radius: 50%;
                                        }

                                        p {
                                            font-size: 20px;
                                            margin-top: 10px;
                                            margin-bottom: 30px;
                                            font-weight: 500;
                                        }
                                    </style>
                                </head>

                                <body>
                                    <section class="wrapper">
                                        <div class="container">
                                            <h1>Aren't You curious who is on <br><strong>Lit Teen Social? 😍</strong>
                                            </h1>
                                            <p>Tap to connect with someone new</p>
                                            <div class="img-wrp">
                                                <img
                                                    src="{{URL::asset('assets/email/user-new.jpg')}}">
                                            </div>
                                            <div class="download-btn">
                                                <a href="#"><img
                                                        src="{{ URL::asset('assets/email/logo.png') }}"><span>Upgrade
                                                        now</span></a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#"><img
                                                            src="{{ URL::asset('assets/email/apple-store.png') }}"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src="{{ URL::asset('assets/email/google-play.png') }}"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </section>
                                </body>

                                </html>


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
