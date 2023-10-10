

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Application Management</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List Application Management</a></li>
                                           
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Application Management</h4>
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
} ?>" readonly><br/>
                        <label for="exampleInputEmail1">Email ID <span class="star">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email ID" value="<?php if (!empty($data->email)) {
echo $data->email;
} ?>" readonly><br/>
                       
                          <label for="image">Profile Picture</label>
                     
                        <img  class="form-control" src="{{ url('images/usermanagement/'.$data->profile_picture) }}" style="width: 85px; height: calc(2.25rem + 2px);">
                        
</br>
<label for="image">Choose Interests</label>
<select  placeholder="Select Interests" data-search="false" class="form-control" name="interest" id="interest" data-toggle="1select2" data-select2-id="1" tabindex="-1" aria-hidden="true" readonly>

@foreach($data3 as $data3)
@php
if(!empty($data->interest)){
    $interest=$data->interest;
}
else{
    $interest='';
}

@endphp
@if($data3->interest_id==$interest)
<OPTION VALUE="{{$data3->interest_id}}" selected>{{$data3->interest}}</OPTION>
@else
<OPTION VALUE="{{$data3->interest_id}}">{{$data3->interest}}</OPTION>
@endif
@endforeach
</select>
 
</br>

<label for="name">Facebook Link <span class="star">*</span></label>
                        <input type="text" class="form-control" name="fb_link" id="fb_link" placeholder="Enter Facebook Link" value="<?php if (!empty($data->fb_link)) {
echo $data->fb_link;
} ?>" readonly><br/>



<label for="name">Youtube Link <span class="star">*</span></label>
                        <input type="text" class="form-control" name="youtube_link" id="youtube_link" placeholder="Enter Youtube Link" value="<?php if (!empty($data->youtube_link)) {
echo $data->youtube_link;
} ?>" readonly><br/>
                                                        
                        









    </div>

    <div class="col">
    <label for="name">Last Name <span class="star">*</span></label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name" value="<?php if (!empty($data->lastname)) {
echo $data->lastname;
} ?>" readonly><br/>
                        <label for="exampleInputEmail1">Mobile <span class="star">*</span></label>
                        <input type="text" class="form-control" name="mobile" id="mobile" pattern="[6789][0-9]{9}" title="Please enter valid Mobile number" placeholder="Enter Mobile" value="<?php if (!empty($data->mobile)) {
echo $data->mobile;
} ?>" readonly><br/>
                      
            
                        <label for="image">Background Image</label>
                        <img  class="form-control" src="{{ url('images/usermanagement/'.$data->background_image) }}" style="width: 85px; height: calc(2.25rem + 2px);">
                        
                                          

                        <label for="image">Choose School</label>
<select readonly placeholder="Select School" data-search="false" class="form-control" name="school" id="school" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true">

@foreach($data4 as $data4)
@php
if(!empty($data->school)){
    $school=$data->school;
}
else{
    $school='';
}

@endphp
@if($data4->school_id==$school)
<OPTION VALUE="{{$data4->school_id}}" selected>{{$data4->school}}</OPTION>
@else
<OPTION VALUE="{{$data4->school_id}}">{{$data4->school}}</OPTION>
@endif
@endforeach
</select><br/>
<label for="name">Instagram Link </label>
                        <input type="text" class="form-control" name="instagram_link" id="instagram_link" placeholder="Enter Instagram Link" value="<?php if (!empty($data->instagram_link)) {
echo $data->instagram_link;
} ?>" readonly><br/><br/><br/>


<label for="premium">User as premium</label>&nbsp;&nbsp;
                        
                        <input type="checkbox" disabled data-plugin="switchery" data-color="#3db9dc" data-size="small" name="premium" id="premium" value="1" <?php if (!empty($data->premium)) {
  if ($data->premium == '1') {
  echo 'checked';
  }
  else if ($data->premium == ''){
    echo '';
  }
  } ?>/>                
                       
                       
           
</div>





    <div class="col">
    <label for="name">User Name</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter User Name" value="<?php if (!empty($data->username)) {
echo $data->username;
} ?>" readonly><br/>
                        
                       
                     
    <label for="name">Birthdate <span class="star">*</span></label>
              <input type="text" class="form-control flatpickr-input active" placeholder="Enter Birthdate" name="birthday" id="basic-datepicker"  value="<?php if (!empty($data->birthday)) {
echo $data->birthday;
} ?>" readonly><br/>                       
                      
                   


                        
<label for="example-select">Choose Country <span class="star">*</span></label>
<select readonly placeholder="Select Country"  class="form-control" name="country" id="country" data-search="false" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true">

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
<br/><br/>

            
<label >Choose Status</label>

<select readonly placeholder="Select Status" class="form-control" name="status" >

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
<label for="name">Tik Tok Link </label>
                        <input type="text" class="form-control" name="tiktok_link" id="tiktok_link" placeholder="Enter Tik Tok Link" value="<?php if (!empty($data->tiktok_link)) {
echo $data->tiktok_link;
} ?>" readonly><br/><br/><br/>

<label for="bgc">User as BGC verified</label>&nbsp;&nbsp;
                        <input type="checkbox" disabled  data-plugin="switchery" data-color="#3db9dc" data-size="small" id="bgc_verified" name="bgc_verified" value="1" <?php if (!empty($data->bgc_verified)) {
  if ($data->bgc_verified == '1') {  echo 'checked';  }  } ?>/><br/><br/>
                                     
    </div>

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