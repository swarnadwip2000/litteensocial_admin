

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List Application Management </a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Add Application Management</a></li>
                                           
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Application Management</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="box-shadow: 0px 1px 10px 1px rgba(0, 0, 0, 0.15); border-radius: 13px;">
                                    <div class="card-body">
                                       
                
                                        <div >
                                        <form method="post" action="/saveusermanagement" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                    <input type="hidden" id="idhf" name="idhf" value="<?php if (!empty($data->id)) {
                                                                    echo $data->id;
                                                                } else {
                                                                    echo "0";
                                                                } ?>" />
                                                                
                                                                  <div class="row">
    <div class="col">
    <label for="name">First Name <span class="star">*</span></label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name" value="<?php if (!empty($data->firstname)) {
echo $data->firstname;
} ?>" required><br/>
                        <label for="exampleInputEmail1">Email ID <span class="star">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email ID" value="<?php if (!empty($data->email)) {
echo $data->email;
} ?>" required><br/>
                       
                          <label for="image">Profile Picture</label>
                        <input type="file" class="form-control"  name="profile_picture">
 
</br><br/>
  
                                                        
                        <label for="premium">User as premium</label>&nbsp;&nbsp;
                        
                        <input type="checkbox" data-plugin="switchery" data-color="#3db9dc" data-size="small" name="premium" id="premium" value="1" <?php if (!empty($data->premium)) {
  if ($data->premium == '1') {
  echo 'checked';
  }
  else if ($data->premium == ''){
    echo '';
  }
  } ?>/>









    </div>

    <div class="col">
    <label for="name">Last Name <span class="star">*</span></label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name" value="<?php if (!empty($data->lastname)) {
echo $data->lastname;
} ?>" required><br/>
                        <label for="exampleInputEmail1">Mobile <span class="star">*</span></label>
                        <input type="text" class="form-control" name="mobile" id="mobile" pattern="[6789][0-9]{9}" title="Please enter valid Mobile number" placeholder="Enter Mobile" value="<?php if (!empty($data->mobile)) {
echo $data->mobile;
} ?>" required><br/>
                      
            
                        <label for="image">Background Image</label>
                        <input type="file" class="form-control"  name="background_image"><br/></br>
                                          

  
                        
                       
                        <label for="bgc">User as verified</label>&nbsp;&nbsp;
                        <input type="checkbox"   data-plugin="switchery" data-color="#3db9dc" data-size="small" id="bgc_verified" name="bgc_verified" value="1" <?php if (!empty($data->bgc_verified)) {
  if ($data->bgc_verified == '1') {  echo 'checked';  }  } ?>/>
           
</div>





    <div class="col">
    <label for="name">User Name</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter User Name" value="<?php if (!empty($data->username)) {
echo $data->username;
} ?>" ><br/>
                        
                       
                     
    <label for="name">Birthdate <span class="star">*</span></label>
              <input type="text"  class="form-control flatpickr-input active" placeholder="Enter Birthdate" name="birthday" id="basic-datepicker"  value="<?php if (!empty($data->birthday)) {
echo $data->birthday;
} ?>" required><br/>                       
                      
                   


                        
<label for="example-select">Choose Country <span class="star">*</span></label>
<select  placeholder="Select Country" data-search="false" class="form-control" name="country" id="country" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true" required>
<option selected disabled value="">Choose</option>
@foreach($data1 as $data1)
@php
if(!empty($data->country)){
    $country=$data->country;
}
else{
    $country='';
}

@endphp
@if($data1->country_id==$country)
<OPTION VALUE="{{$data1->country_id}}" selected>{{$data1->country}}</OPTION>
@else
<OPTION VALUE="{{$data1->country_id}}">{{$data1->country}}</OPTION>
@endif
@endforeach
</select>
<br/><br/><br/>

    
                       
<label >Choose Status</label>&nbsp;&nbsp;
<input type="checkbox"   data-plugin="switchery" data-color="#3db9dc" data-size="small" id="status" name="status" value="0" <?php if (!empty($data)) {
  if ($data->status == '0') {  echo 'checked';  }  } ?>/>



<br/><br/>

                                     
    </div>

  </div>
                    
                


                    <div class="text-right">
                        <button type="submit" class="btn btn-success waves-effect waves-light" style="border-radius: 13px;" name="submit" value="Submit">Save</button>
                        <a href="/usermanagement" class="btn btn-danger waves-effect waves-light m-l-10" >Back</a>
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