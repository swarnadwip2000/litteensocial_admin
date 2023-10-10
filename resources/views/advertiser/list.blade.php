@include('advertiser/include/header')


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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Advertiser Section</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">List Advertiser Section</a>
                                </li>

                            </ol>
                        </div>
                        <h4 class="page-title">Advertiser Section</h4>
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
                                        <a href="{{ route('advertisment.add') }}" style="float:right;"
                                            class="btn btn-danger waves-effect waves-light" data-animation="fadein"
                                            data-overlaycolor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Add
                                            Advertisment</a>
                                    </div>
                                </div> <!-- end col-->
                            </div>

                            <div>
                                <table class="table table-centered table-striped" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Sl. Id</th>
                                            <th>Plan Name</th>
                                            <th>Plan Expiry Date</th>
                                            <th>Plan Amount</th>
                                            <th>Advertisment Image</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($advertisments as $key => $advertisment)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $advertisment['plan']['name'] }}</td>
                                                <td>{{ $advertisment['plan_expiry_date'] }}</td>
                                                <td>{{ $advertisment['amount'] }}</td>
                                                <td><img src="{{ $advertisment['image'] }}" alt=""
                                                        srcset="" style="height:80px; width:80px;"></td>
                                                <td>{{ $advertisment['type'] }} </td>
                                                <td>
                                                    @if ($advertisment['status'] == 0)
                                                        <p class="text-success">Pending</p>
                                                    @else
                                                        <p class="text-success">Approve</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('advertisment.delete', $advertisment['id']) }}"
                                                        class="action-icon"
                                                        onclick="return confirm('Are you sure you want to delete?')"> <i
                                                            class="mdi mdi-delete"></i></a>
                                                            <a href="{{route('advertisment.edit',$advertisment['id'] )}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            {{-- <a href=""></a> --}}
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



@include('advertiser/include/footer')
