

@include('include/header') 


            <div class="content-page">
                <div class="content" >

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List Interests </a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Add Interests</a></li>
                                           
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Interests</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="box-shadow: 0px 1px 10px 1px rgba(0, 0, 0, 0.15); border-radius: 13px;">
                                    <div class="card-body">
                                       
                
                                        <div >
                                        <form method="post" action="/saveinterests" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                    <input type="hidden" id="idhf" name="idhf" value="<?php if (!empty($data->interest_id)) {
                                                                    echo $data->interest_id;
                                                                } else {
                                                                    echo "0";
                                                                } ?>" />
                                                                
                                                                  <div class="row">
    <div class="col">
    <label for="name">Interests <span class="star">*</span></label>
                        <input type="text" class="form-control" name="interest" id="interest" placeholder="Enter Interests" value="<?php if (!empty($data->interest)) {
echo $data->interest;
} ?>" required>

    </div>

   
  </div><br/>
                    
                


                    <div class="text-right">
                        <button type="submit" class="btn btn-success waves-effect waves-light" style="border-radius: 13px;" name="submit" value="Submit">Save</button>
                        <a href="/listinterests" class="btn btn-danger waves-effect waves-light m-l-10" >Back</a>
                    </div>
                </form>




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