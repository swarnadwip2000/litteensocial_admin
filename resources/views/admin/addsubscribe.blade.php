

@include('include/header') 
  <link rel="stylesheet" href="card/styles/skeuocard.reset.css" />
    <link rel="stylesheet" href="card/styles/skeuocard.css" />
    <link rel="stylesheet" href="card/styles/demo.css">
    <script src="card/javascripts/vendor/cssua.min.js"></script>

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List Subscribe Management</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Add Subscribe Management</a></li>
                                           
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Subscribe Management</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="box-shadow: 0px 1px 10px 1px rgba(0, 0, 0, 0.15); border-radius: 13px;">
                                    <div class="card-body">
                                       
                
                                        <div >
                                        <form method="post" action="/savesubscribe" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                    <input type="hidden" id="idhf" name="idhf" value="<?php if (!empty($data->id)) {
                                                                    echo $data->id;
                                                                } else {
                                                                    echo "0";
                                                                } ?>" />
                                                                
                                                                  <div class="row">
    <div class="col">
    <label for="name">Subscription Title <span class="star">*</span></label>
                        <input type="text" class="form-control" name="subscribe_title" id="subscribe_title" placeholder="Enter Subscribe Title" value="<?php if (!empty($data->subscribe_title)) {
echo $data->subscribe_title;
} ?>" required><br/>
                        <label for="exampleInputEmail1"> Duration(Days) <span class="star">*</span></label>
                        <input type="text" class="form-control" name="days" id="days" placeholder="Enter Subscribe Days" value="<?php if (!empty($data->days)) {
echo $data->days;
} ?>" required><br/>
                       
                      

 
</br>

    </div>

    <div class="col">
    <label for="name">Description <span class="star">*</span></label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description" value="<?php if (!empty($data->description)) {
echo $data->description;
} ?>" required><br/>
      <label for="exampleInputEmail1"> Price ($)<span class="star">*</span></label>
                        <input type="text" class="form-control" name="subscribe_price" id="subscribe_price" placeholder="Enter Subscribe Price" value="<?php if (!empty($data->subscribe_price)) {
echo $data->subscribe_price;
} ?>" required>                
                        
            
                      
                        
                       
                        
</div>





 

  
                    

           
            
                      
                        
                       
                        








  </div>
                    
 
                                        </div>

                                
                                        

                                
                    <div class="text-right">
                        <button type="submit" class="btn btn-success waves-effect waves-light" name="submit" value="Submit">Save</button>
                        <a href="/listadvertiser" class="btn btn-danger waves-effect waves-light m-l-10" >Cancel</a>
                    </div>
                </form><br/><br/>




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

<script src="card/javascripts/vendor/demo.fix.js"></script>
    <script src="card/javascripts/vendor/jquery-2.0.3.min.js"></script>
    <script src="card/javascripts/skeuocard.js"></script>
    <script>

      $(document).ready(function(){
        var isBrowserCompatible = 
          $('html').hasClass('ua-ie-10') ||
          $('html').hasClass('ua-webkit') ||
          $('html').hasClass('ua-firefox') ||
          $('html').hasClass('ua-opera') ||
          $('html').hasClass('ua-chrome');

        if(isBrowserCompatible){
          window.card = new Skeuocard($("#skeuocard"), {
            debug: false
          });
        }
      });
function sendcompdata(){
	var add=$('#company_address').val();
	if($('#sendcompanyaddress').prop('checked')==true){
	$('#billing_address').val(add);
	}
	else{
		$('#billing_address').val('');
	}
}
    </script>
        </div>
        <!-- END wrapper -->

  
 

        @include('include/footer') 