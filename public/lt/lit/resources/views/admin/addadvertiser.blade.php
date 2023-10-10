

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Advertiser Management</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List Advertiser Management</a></li>
                                           
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Advertiser Management</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                       
                
                                        <div >
                                        <form method="post" action="/saveadvertiser" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                    <input type="hidden" id="idhf" name="idhf" value="<?php if (!empty($data->id)) {
                                                                    echo $data->id;
                                                                } else {
                                                                    echo "0";
                                                                } ?>" />
                                                                
                                                                  <div class="row">
    <div class="col">
    <label for="name">First Name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name" value="<?php if (!empty($data->firstname)) {
echo $data->firstname;
} ?>" required><br/>
                        <label for="exampleInputEmail1">Email ID</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="<?php if (!empty($data->email)) {
echo $data->email;
} ?>" required><br/>
                       
                          <label for="image">Profile Picture</label>
                        <input type="file" class="form-control"  name="profile_picture">
 
</br>
<label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter City " value="<?php if (!empty($data->city)) {
echo $data->city;
} ?>" required><br/>
                        

                                                       
                                                        

                                                       
                
                       
                                                        
                        <label for="premium">user as premium</label>
                        <input type="checkbox"  data-plugin="switchery" data-color="#64b0f2" data-size="small" name="premium" id="premium" value="1" <?php if (!empty($data->premium)) {
  if ($data->premium == '1') {
  echo 'checked';
  }
  } ?>/>









    </div>

    <div class="col">
    <label for="name">Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name" value="<?php if (!empty($data->lastname)) {
echo $data->lastname;
} ?>" required><br/>
                        <label for="exampleInputEmail1">Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" pattern="[6789][0-9]{9}" title="Please enter valid phone number" placeholder="Enter Email" value="<?php if (!empty($data->mobile)) {
echo $data->mobile;
} ?>" required><br/>
                      
            
                        <label for="image">Background Image</label>
                        <input type="file" class="form-control"  name="background_image"><br/>
                                          
<label for="position">Pin</label>
                        <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Pin Number" value="<?php if (!empty($data->pincode)) {
echo $data->pincode;
} ?>" required><br/>
  
                        
                       
                        <label for="bgc">user as BGC verified</label>
                        <input type="checkbox"  data-plugin="switchery" data-color="#64b0f2" data-size="small" id="bgc_verified" name="bgc_verified" value="1" <?php if (!empty($data->bgc_verified)) {
  if ($data->bgc_verified == '1') {
  echo 'checked';
  }
  } ?>/>
           
</div>





    <div class="col">
    <label for="name">User Name</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter User Name" value="<?php if (!empty($data->username)) {
echo $data->username;
} ?>" required><br/>
                        
                       
                       
                      

<label for="category">Address</label>
                        <textarea class="form-control"  name="address" id="address" placeholder="Enter Location" style="height: 38px;"  required><?php if (!empty($data->address)) {
echo $data->address;
} ?></textarea><br/>

                       
<label for="example-select">Choose Country</label>

<select required placeholder="Select Country" data-search="true" class="form-control select2-hidden-accessible" name="country" id="country" data-select2-id="country" tabindex="-1" aria-hidden="true">

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
<br/>

    
<label >Choose Status</label>

<select required placeholder="Select Status" data-search="true" class="form-control select2-hidden-accessible" name="status" >

@foreach($data2 as $data2)
@php
if(!empty($data->status)){
$status=$data->status;
}
else{
$status='';
}

@endphp
@if($data2->status_id==$status)

<OPTION VALUE="{{$data2->status_id}}" selected>{{$data2->status_type}}</OPTION>
@else
<OPTION VALUE="{{$data2->status_id}}">{{$data2->status_type}}</OPTION>
@endif
@endforeach
</select>
<br/>
        
    </div>

  </div>
                    
                


                    <div class="text-right">
                        <button type="submit" class="btn btn-success waves-effect waves-light" name="submit" value="Submit">Save</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" onclick="Custombox.close();">Cancel</button>
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