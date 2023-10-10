

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List Settings</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Update Settings</a></li>
                                           
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Update Settings</h4>
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
    @if ($data->background_image)
        <img src="{{ $data->background_image }}" class="img1" style="width: 32px;">
        <a onclick="deletedata('{{ $data->id }}',2)" class="action-icon img1" > <i class="mdi mdi-delete"></i></a>
    
    @endif

                        <input type="file" class="form-control"  name="background_image"><br/> 
    </div>
    <div class="col">
    
                        
                       
    <label for="image">Navbar Background</label>
    @if ($data->nav_bar_background)
        <img src="{{ $data->nav_bar_background }}" class="img2" style="width: 32px;">
        <a onclick="deletedata('{{ $data->id }}',1)" class="action-icon img2" > <i class="mdi mdi-delete"></i></a>
    
    @endif

                        <input type="file" class="form-control"  name="nav_bar_background"><br/> 
    </div>
  </div>
   
                    <div class="text-right">
                        <input type="submit" class="btn btn-success waves-effect waves-light" name="submit" value="Save">
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script type="text/javascript">
      function deletedata(id,type) {
         if(confirm('Are you sure? you want to delete')){ 
      $.ajax({url: "settingdelete_pic/"+id+"/"+type, success: function(result){
    if(type==1){
$('.img2').hide();
       } else{
$('.img1').hide();
       }
  }});
  }
}
</script>