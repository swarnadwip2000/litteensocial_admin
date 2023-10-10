

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List News Feed</a></li>
                                            <li class="breadcrumb-item active">News Feed</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">News Feed</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                           

                            <div class="col-lg-12 col-xl-12">
                                <div class="card-box">
                                    <div class="tab-content">
                                      
                                        <!-- end about me section content -->

                                        <div class="tab-pane show active" id="timeline">

                                         

                                         

                                            <!-- Story Box-->

                                            <div class="border border-light p-2 mb-3">
                                                <div class="media">
                                                    <img class="mr-2 avatar-sm rounded-circle" src="{{$data[0]['profile_picture']}}"
                                                        alt="Generic placeholder image">
                                                    <div class="media-body">
                                                     <h5 class="m-0">

  <?php

    
    if (!empty($data[0]['username'])) {
        $username = $data[0]['username'];
        echo  $username;
        
       
    } else {
        
         $firstname = $data[0]['firstname'] . ' ' . $data[0]['lastname'];
        echo  $firstname ;
    }

    
    


?>
  
    

                                                    </h5>

                                                        <p class="text-muted"><small>
                                                            <?php
                                                        $date = \Carbon\Carbon::parse($data[0]['created_at']);
$formatted_date = $date->format('m-d-y h:i:a');
echo $formatted_date;?>

</small></p>
                                                    </div>
                                                </div>
                                                <div class="font-16 text-center font-italic text-dark">
                                                     <p style="text-align:left;">  {{$data[0]['description'] }}</p>
                                                   @if (strpos($data[0]['file_type'], 'image') !== false)

                                                    <div class="row filterable-content">

                            <div class="col-sm-12 col-xl-12 filter-item all web illustrator" style="text-align:left;">
                            
                                <div class="gal-box" style="text-align:left;">
                             
                                    <a href="{{ url($data[0]['file']) }}" class="image-popup" title="Screenshot-1" height="260" width="250">
                                        <img src="{{ url($data[0]['file']) }}" class="img-fluid" alt="work-thumbnail" height="260" width="250">
                                    </a>
                                
                                </div> 
                            </div> 

                                       
                                                    
                                

                            @elseif (strpos($data[0]['file_type'], 'video') !== false)                      

                            
                            
                            <a href="{{ url($data[0]['file']) }}"  title="Screenshot-1" height="1460" >
                                   <iframe src="{{ url($data[0]['file']) }}" height='300' width="500" style="text-align:left;"></iframe>
                                

                                 
                                 
                                   @endif

                                                    
                                                </div>
@if(!empty($data[0]['message']))
                                                <div class="post-user-comment-box">
                                                    <div class="media">
                                                        <img class="mr-2 avatar-sm rounded-circle" src="{{$data[0]['message']['profile_picture'] }}"
                                                            alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h5 class="mt-0">{{$data[0]['message']['firstname'] }} <small class="text-muted">3 hours ago</small></h5>
                                                            {{$data[0]['message']['description'] }}
 <a href="deletenewsfeedcomment/{{ $data[0]['parent_id'] }}" class="action-icon" onclick="return confirm('Are you sure you want to delete?')"> <i class="mdi mdi-delete"></i></a>
                                                            <br/>
                                                            <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2"><i
                                                                class="mdi mdi-reply"></i> Reply</a>
@foreach($data[0]['message']['reply'] as $dt)
 
                                                            <div class="media mt-3">
                                                                <a class="pr-2" href="#">
                                                                    <img src="{{$dt['profile_picture']}}" class="avatar-sm rounded-circle"
                                                                        alt="Generic placeholder image">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">{{$dt['firstname'] }}  <small class="text-muted">5 hours ago</small></h5>
                                                                    {{$dt['description'] }}<a href="deletenewsfeedcomment/{{ $dt['id'] }}" class="action-icon" onclick="return confirm('Are you sure you want to delete?')"> <i class="mdi mdi-delete"></i></a>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
@endif
                                                    <!-- <div class="media mt-2">
                                                        <a class="pr-2" href="#">
                                                            <img src="assets/images/users/user-1.jpg" class="rounded-circle"
                                                                alt="Generic placeholder image" height="31">
                                                        </a>
                                                        <div class="media-body">
                                                            <input type="text" id="simpleinput" class="form-control border-0 form-control-sm" placeholder="Add comment">
                                                        </div>
                                                    </div> -->
                                                </div>

                                                <!-- <div class="mt-2">
                                                    <a href="javascript: void(0);" class="btn btn-sm btn-link text-danger"><i
                                                            class="mdi mdi-heart"></i> Like (28)</a>
                                                    <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                                            class="mdi mdi-share-variant"></i> Share</a>
                                                </div> -->
                                            </div>

                                            <!-- Story Box-->
                                            <!-- <div class="border border-light p-2 mb-3">
                                                <div class="media">
                                                    <img class="mr-2 avatar-sm rounded-circle" src="assets/images/users/user-6.jpg"
                                                        alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h5 class="m-0">Jeremy Tomlinson</h5>
                                                        <p class="text-muted"><small>15 hours ago</small></p>
                                                    </div>
                                                </div>
                                                <p>The parallax is a little odd but O.o that house build is awesome!!</p>

                                               
                                            </div> -->

                                            <!-- <div class="text-center">
                                                <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading mr-1"></i> Load more </a>
                                            </div> -->

                                        </div>
                                        <!-- end timeline content-->

                                        <!-- <div class="tab-pane" id="settings">
                                            <form>
                                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstname">First Name</label>
                                                            <input type="text" class="form-control" id="firstname" placeholder="Enter first name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastname">Last Name</label>
                                                            <input type="text" class="form-control" id="lastname" placeholder="Enter last name">
                                                        </div>
                                                    </div> 
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="userbio">Bio</label>
                                                            <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..."></textarea>
                                                        </div>
                                                    </div> 
                                                </div> 

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="useremail">Email Address</label>
                                                            <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                                                            <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="userpassword">Password</label>
                                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                                            <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span>
                                                        </div>
                                                    </div> 
                                                </div> 

                                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Company Info</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="companyname">Company Name</label>
                                                            <input type="text" class="form-control" id="companyname" placeholder="Enter company name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="cwebsite">Website</label>
                                                            <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url">
                                                        </div>
                                                    </div> 
                                                </div> 

                                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i> Social</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="social-fb">Facebook</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" id="social-fb" placeholder="Url">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="social-tw">Twitter</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" id="social-tw" placeholder="Username">
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div> 

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="social-insta">Instagram</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" id="social-insta" placeholder="Url">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="social-lin">Linkedin</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" id="social-lin" placeholder="Url">
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="social-sky">Skype</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fab fa-skype"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" id="social-sky" placeholder="@username">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="social-gh">Github</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fab fa-github"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" id="social-gh" placeholder="Username">
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div> 
                                                
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                                </div>
                                            </form>
                                         </div> -->
                                        <!-- end settings content-->

                                    </div> <!-- end tab-content -->
                                </div> <!-- end card-box-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->


            </div>

   

        @include('include/footer') 