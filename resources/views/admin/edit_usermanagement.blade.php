

@include('include/header') 

<style type="text/css">
 dropdown-menu show {
    max-height: 258px;
    overflow: hidden;
    min-height: 153px;
    position: absolute;
    will-change: transform;
    min-width: 17px;
    top: 0px;
    left: 0px;
    transform: translate3d(-296px, -260px, 0px);
}
</style>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List Application Management</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Update Application Management</a></li>
                                           
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Update Application Management</h4>
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
                          @if ($data->profile_picture)
        <img src="{{ $data->profile_picture }}" class="img1" style="width: 32px;">
        <a onclick="deletedata('{{ $data->id }}',2)" class="action-icon img1" > <i class="mdi mdi-delete"></i></a>
    
    @endif
                       

                        <input type="file" class="form-control"  name="profile_picture">
 
</br>
<label for="interest">Choose Interests</label><br/>

<select name="interest[]" id="interest" placeholder="Select Interests"  value="<?php if (!empty($data->interest)) { echo $data->interest; } ?>"  class="selectpicker" multiple data-live-search="true" >
@php
$name='';
@endphp
@foreach($data3 as $data3)
@php

if(!empty($data->interest)){
  $mem=explode(',',$data->interest);
$team=$mem;
}
else{
$team=array();
}
@endphp
@if(in_array($data3->interest_id,$team))
@php
$name=$data3->interest.','.$name;

@endphp
@else
<OPTION VALUE="{{$data3->interest_id}}">{{$data3->interest}}</OPTION>
@endif
@endforeach

</select>


</br></br>

<label for="name">Snapchat Link </label>
                        <input type="text" class="form-control" name="fb_link" id="fb_link" placeholder="Enter Facebook Link" value="<?php if (!empty($data->fb_link)) {
echo $data->fb_link;
} ?>" ><br/>



<label for="name">Youtube Link </label>
                        <input type="text" class="form-control" name="youtube_link" id="youtube_link" placeholder="Enter Youtube Link" value="<?php if (!empty($data->youtube_link)) {
echo $data->youtube_link;
} ?>" ><br/>
                                                        
                        









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
                        @if ($data->background_image)
        <img src="{{ $data->background_image }}" class="img2" style="width: 32px;">
        <a onclick="deletedata('{{ $data->id }}',1)" class="action-icon img2"> <i class="mdi mdi-delete"></i></a>
   
    @endif
                        <input type="file" class="form-control"  name="background_image"><br/>
                                        

<label for="image">Choose School</label>
<input type="text" class="form-control" name="school" id="school" placeholder="Enter School" value="<?php if (!empty($data->school)) {
echo $data->school;
} ?>" >

<br/>
<label for="name">Instagram Link </label>
                        <input type="text" class="form-control" name="instagram_link" id="instagram_link" placeholder="Enter Instagram Link" value="<?php if (!empty($data->instagram_link)) {
echo $data->instagram_link;
} ?>" ><br/><br/><br/>


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
    <label for="name">User Name</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter User Name" value="<?php if (!empty($data->username)) {
echo $data->username;
} ?>" ><br/>
                        
                       
                     
    <label for="name">Birthdate <span class="star">*</span></label>
              <input type="text" class="form-control flatpickr-input active" placeholder="Enter Birthdate" name="birthday" id="basic-datepicker"  value="<?php            
$date = \Carbon\Carbon::parse($data->birthday);
$birthday = $date->format('m-d-Y');
echo $birthday;
?>" required><br/>                       
                      
                   


                        
<label for="example-select">Choose Country <span class="star">*</span></label>

<select required placeholder="Select Country"  class="form-control" name="country" id="country" data-search="false" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true">
<option selected  value="">Choose</option>
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

            
<label >Choose Status <span class="star">*</span></label> &nbsp;&nbsp;

<input type="checkbox"   data-plugin="switchery" data-color="#3db9dc" data-size="small" id="status" name="status" value="0" <?php if (!empty($data)) {
  if ($data->status == '0') {  echo 'checked';  }  } ?>/>
<br/><br/><br/>
<label for="name">Tik Tok Link </label>
                        <input type="text" class="form-control" name="tiktok_link" id="tiktok_link" placeholder="Enter Tik Tok Link" value="<?php if (!empty($data->tiktok_link)) {
echo $data->tiktok_link;
} ?>" ><br/><br/><br/>

<label for="bgc">User as verified</label>&nbsp;&nbsp;
                        <input type="checkbox"   data-plugin="switchery" data-color="#3db9dc" data-size="small" id="bgc_verified" name="bgc_verified" value="1" <?php if (!empty($data->bgc_verified)) {
  if ($data->bgc_verified == '1') {  echo 'checked';  }  } ?>/><br/><br/>
                                     
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script type="text/javascript">
      function deletedata(id,type) {
         if(confirm('Are you sure? you want to delete')){ 
      $.ajax({url: "delete_pic/"+id+"/"+type, success: function(result){
    if(type==1){
$('.img2').hide();
       } else{
$('.img1').hide();
       }
  }});
  }
}
</script>
       <!--  <script type="text/javascript">
 
     function deletedata(id,type) {
     if(confirm('Are you sure? you want to delete')){ 
// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });
$.ajax(
{
    url: "delete_pic",
    type: 'GET', // Just delete Latter Capital Is Working Fine
    dataType: "JSON",
    data: {
        "id": id,
        "type": type  
    },
    success: function (response)
    {
       if(type==1){
$('.img2').hide();
       } else{
$('.img1').hide();
       }
       // see the reponse sent
    },
    error: function(xhr) {
     console.log(xhr.responseText); // this line will save you tons of hours while debugging
    // do something here because of error
   }
});
}
      }
  
</script> -->