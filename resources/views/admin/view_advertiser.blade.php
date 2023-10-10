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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">List Advertisers Management</a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">View Advertisers
                                        Management</a></li>

                            </ol>
                        </div>
                        <h4 class="page-title">View Advertisers Management</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-12">
                    <div class="card" style="box-shadow: 0px 1px 10px 1px rgba(0, 0, 0, 0.15); border-radius: 13px;">
                        <div class="card-body">


                            <div>
                                <form method="post" action="/saveadvertiser" class="form-horizontal"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" id="idhf" name="idhf" value="<?php if (!empty($data->id)) {
                                        echo $data->id;
                                    } else {
                                        echo '0';
                                    } ?>" />

                                    <div class="row">
                                        <div class="col">
                                            <label for="name">First Name <span class="star">*</span></label>
                                            <input type="text" class="form-control" name="firstname" id="firstname"
                                                placeholder="Enter First Name" value="<?php if (!empty($data->firstname)) {
                                                    echo $data->firstname;
                                                } ?>"
                                                readonly><br />
                                            <label for="exampleInputEmail1">Email ID <span
                                                    class="star">*</span></label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Enter Email" value="<?php if (!empty($data->email)) {
                                                    echo $data->email;
                                                } ?>" readonly><br />

                                            <label for="image">Billing Address <span class="star">*</span></label>
                                            <textarea class="form-control" name="billing_address" id="billing_address" placeholder="Enter Billing Address"
                                                style="height: 38px;" readonly><?php if (!empty($data->billing_address)) {
                                                    echo $data->billing_address;
                                                } ?></textarea>
                                            Send as company address: <input type="checkbox" disabled
                                                data-plugin="switchery" data-color="#64b0f2" data-size="small"
                                                name="sendcompanyaddress" id="sendcompanyaddress" value="1"
                                                <?php if (!empty($data->sendcompanyaddress)) {
                                                    if ($data->sendcompanyaddress == '1') {
                                                        echo 'checked';
                                                    }
                                                } ?> /><br />

                                            </br>


                                        </div>

                                        <div class="col">
                                            <label for="name">Last Name <span class="star">*</span></label>
                                            <input type="text" class="form-control" name="lastname" id="lastname"
                                                placeholder="Enter Last Name" value="<?php if (!empty($data->lastname)) {
                                                    echo $data->lastname;
                                                } ?>"
                                                readonly><br />
                                            <label for="exampleInputEmail1">Mobile <span class="star">*</span></label>
                                            <input type="text" class="form-control" name="mobile" id="mobile"
                                                pattern="[6789][0-9]{9}" title="Please enter valid phone number"
                                                placeholder="Enter Mobile" value="<?php if (!empty($data->mobile)) {
                                                    echo $data->mobile;
                                                } ?>" readonly><br />






                                        </div>





                                        <div class="col">
                                            <label for="name">Company Name <span class="star">*</span></label>
                                            <input type="text" class="form-control" name="company_name"
                                                id="company_name" placeholder="Enter Company Name"
                                                value="<?php if (!empty($data->company_name)) {
                                                    echo $data->company_name;
                                                } ?>" readonly><br />





                                            <label for="category">Company Address <span class="star">*</span></label>
                                            <textarea class="form-control" name="company_address" id="company_address" placeholder="Enter Company Address"
                                                style="height: 38px;" readonly><?php if (!empty($data->company_address)) {
                                                    echo $data->company_address;
                                                } ?></textarea><br />




                                        </div>

                                    </div>


                            </div>




                            {{-- <h3> Credit Card Information: </h3>

                            <div class="row">
                                <div class="col">
                                    <label for="name">Card Number <span class="star">*</span></label>
                                    <input type="text" class="form-control" name="card_number" id="card_number"
                                        placeholder="Enter Card Number" value="<?php if (!empty($data->card_number)) {
                                            echo $data->card_number;
                                        } ?>" readonly><br />


                                </div>

                                <div class="col">
                                    <label for="name">Expiration Date <span class="star">*</span></label>
                                    <input type="text" class="form-control flatpickr-input active"
                                        name="expiry_date" id="expiry_date" placeholder="Enter Expiry Date"
                                        value="<?php if (!empty($data->expiry_date)) {
                                            echo $data->expiry_date;
                                        } ?>" readonly><br />






                                </div>





                                <div class="col">
                                    <label for="name">CVV <span class="star">*</span></label>
                                    <input type="password" class="form-control" name="cvv" id="cvv"
                                        placeholder="Enter CVV" value="<?php if (!empty($data->cvv)) {
                                            echo $data->cvv;
                                        } ?>" readonly><br />






                                </div>

                            </div> --}}


                            <div class="text-right">

                                <a href="/listadvertiser"
                                    class="btn btn-danger waves-effect waves-light m-l-10">Cancel</a>
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
