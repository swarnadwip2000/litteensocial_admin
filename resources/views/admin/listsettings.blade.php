

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List Settings</a></li>
                                           
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Settings</h4>
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
                                                 </div>
                                            </div><!-- end col-->
                                        </div>
                
                                        <div >
                                            <table class="table table-centered table-striped" id="table_id">
                                                <thead>
                                                    <tr>
                                                    <th style="display:none;">Id</th>
                                            <th>Background Image</th> 
                                            <th>Navbar Background</th> 
                                            <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($data as $data)
                                    <tr>
                                     
                                        <td style="display:none;">{{ $data->id }}</td>
                                        <td><img  src="{{ url($data->background_image) }}" style="width: 85px; height: calc(2.25rem + 2px);"></td>
                                        <td><img  src="{{ url($data->nav_bar_background) }}" style="width: 85px; height: calc(2.25rem + 2px);"></td>
                                        
                                        <td><a href="view_settings?pid={{ $data->id }}" class="action-icon"><i style="font-size: 18px;" class="fa fa-eye" aria-hidden="true"></i></a>
                                                            <a href="update_settings?pid={{ $data->id }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                           
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

        <!-- Modal -->
        <div id="custom-modal" class="modal-demo longEnough">
            <button type="button" class="close" onclick="Custombox.modal.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title">Add User Management</h4>
            <div class="custom-modal-text text-left">
            <form method="post" action="/saveadvertiser" class="form-horizontal">
                    @csrf
                    <input type="hidden" id="idhf" name="idhf" value="0" />
                                                                  <div class="row">
    <div class="col">
    <label for="name">First Name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name" value=""><br/>
                        <label for="exampleInputEmail1">Email ID</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value=""><br/>
                       
                          <label for="image">Profile Picture</label>
                        <input type="file" class="form-control"  name="profile_picture">
 
</br>
<label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter City " value=""><br/>
                        
<label for="example-select">Choose Interests</label>
                                                        <select class="form-control" id="choose_interests">
                                                        <option>--Choose--</option>    
                                                        <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select><br/>
                                                       
                                                        

                                                        <label for="category">Whatsapp Link</label>
                        <input class="form-control"  name="whatsapp_link" id="whatsapp_link" placeholder="Enter Whatsapp Link" value=""><br/><br/><br/>
                
                       
                                                        
                        <label for="premium">user as premium</label>
                        <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small" name="premium" id="premium"/>









    </div>

    <div class="col">
    <label for="name">Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name" value=""><br/>
                        <label for="exampleInputEmail1">Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Email" value=""><br/>
                      
            
                        <label for="image">Background Image</label>
                        <input type="file" class="form-control"  name="background_image">
  <?php
                        if(!empty ($data->background_image)){
                        ?>
                        <img src="{{('assets/images/usermanagement/<?php if(!empty ($data->background_image)){echo $data->background_image;}?>')}}" style=" height: 50px; width: 50px"/>
                        <?php
                        }
                        ?>
</br>                                           
<label for="position">Pin</label>
                        <input type="text" class="form-control" name="pin" id="pin" placeholder="Enter Pin Number" value=""><br/>
  
                        
                        <label for="example-select">Choose School</label>
                                                        <select class="form-control" id="choose_school" name="choose_school">
                                                        <option>--Choose--</option>    
                                                        <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select><br/>

                                                        <label for="category">Youtube Link</label>
                        <input class="form-control"  name="youtube_link" id="youtube_link" placeholder="Enter Youtube Link" value=""><br/><br/><br/>
                        <label for="bgc">user as BGC verified</label>
                        <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small" id="bgc_verified" name="bgc_verified"/>
           
</div>





    <div class="col">
    <label for="name">User Name</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter User Name" value=""><br/>
                        <label for="position">Birthday</label>
                        <input type="text" class="form-control" name="birthday" id="birthday" placeholder="Enter Birthday" value=""><br/>
                       
                       
                      

<label for="category">Address</label>
                        <textarea class="form-control"  name="address" id="address" placeholder="Enter Location" value=""></textarea><br/>

                        
<label for="example-select">Choose Country</label>
                                                        <select class="form-control" id="country" name="country">
                                                        <option>--Choose--</option>    
                                                        <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select><br/>

                                                        <label for="category">Facebook Link</label>
                        <input class="form-control"  name="facebook_link" id="facebook_link" placeholder="Enter Facebook Link" value=""><br/>
               
                        <label for="category">Snapchat Link</label>
                        <input class="form-control"  name="snapchat_link" id="snapchat_link" placeholder="Enter Snapchat Link" value=""><br/>
               
                      
                        <label for="example-select">Status</label>
                                                        <select class="form-control" id="status" name="status">
                                                        <option>--Choose--</option>    
                                                        <option>Active</option>
                                                            <option>In Active</option>
                                                           
                                                        </select><br/> 
                       
    </div>

  </div>
                    
                


                    <div class="text-right">
                        <button type="submit" class="btn btn-success waves-effect waves-light" id="savebutton" value="Submit">Save</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" onclick="Custombox.close();">Cancel</button>
                    </div>
                </form>
            </div>
        </div> 

        @include('include/footer') 