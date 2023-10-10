

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List View Settings</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">View Settings</a></li>
                                           
                                        </ol>
                                    </div>
                                    <h4 class="page-title">View Settings</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="box-shadow: 0px 1px 10px 1px rgba(0, 0, 0, 0.15); border-radius: 13px;">
                                    <div class="card-body">
                                       
                
                                        <div >
                                        <form method="post" action="/savesettings" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                    <input type="hidden" id="idhf" name="idhf" value="<?php if (!empty($data->id)) {
                                                                    echo $data->id;
                                                                } else {
                                                                    echo "0";
                                                                } ?>" />
                                                                
                                                                  <div class="row">
    <div class="col">
    
                        
                       
    <label for="image">Background Image</label>
                     
                       
                        <img  class="form-control" src="{{ url($data->background_image) }}" style="width: 85px; height: calc(2.25rem + 2px);"><br/>
                        
    </div>

    <div class="col">
    
                        
                       
    <label for="image">Navbar Background</label>
                     
                       
                        <img  class="form-control" src="{{ url($data->nav_bar_background) }}" style="width: 85px; height: calc(2.25rem + 2px);"><br/>
                        
    </div>

  </div>

  <div class="text-right">
                        
                        <a href="/listsettings" class="btn btn-danger waves-effect waves-light m-l-10" >Cancel</a>
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