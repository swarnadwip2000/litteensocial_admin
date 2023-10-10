

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Interests</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List Interests</a></li>
                                           
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Interests</h4>
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
                                                <a href="/addinterests" style="float:right;" class="btn btn-danger waves-effect waves-light" data-animation="fadein"  data-overlaycolor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Add Interests</a>
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                
                                        <div >
                                            <table class="table table-centered table-striped" id="table_id">
                                                <thead>
                                                    <tr>
                                            <th style="display:none;">Id</th>
                                            <th>Interests</th>  
                                            <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($data as $data)
                                    <tr>
                                     
                                        <td style="display:none;">{{ $data->interest_id }}</td>
                                        <td>{{ $data->interest}}</td>
                                     
                                       
                                    
                                         
                                      
                                        <td>
                                                            <a href="update_interests?pid={{ $data->interest_id }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="delete_interests/{{ $data->interest_id }}" class="action-icon" onclick="return confirm('Are you sure you want to delete?')"> <i class="mdi mdi-delete"></i></a>
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