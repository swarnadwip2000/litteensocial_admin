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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Subscriber Section</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">List Subscriber Section</a>
                                </li>

                            </ol>
                        </div>
                        <h4 class="page-title">Subscriber Section</h4>
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

                                    </div>
                                </div> <!-- end col-->
                            </div>

                            <div>
                                <table class="table table-centered table-striped" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Sl. Id</th>
                                            <th>Subscriber Name</th>
                                            <th>Subscriber Email</th>
                                            <th>Plan Name</th>
                                            <th>Plan Expiry Date</th>
                                            <th>Plan Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subscribers as $key => $subscriber)
                                            <tr>
                                                <td>
                                                    {{$key+1}}
                                                </td>
                                                <td>
                                                    {{$subscriber->user->full_name_id}}
                                                </td>
                                                <td>
                                                    {{$subscriber->user->email}}
                                                </td>
                                                <td>
                                                    {{$subscriber->subscribe->subscribe_title}}
                                                </td>
                                                <td>
                                                    {{$subscriber->exp_date}}
                                                </td>
                                                <td>
                                                    ${{$subscriber->subscribe_price}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
