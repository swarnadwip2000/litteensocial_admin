

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List Advertisers Management</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Add Advertisers Management</a></li>

                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Advertisers Management</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="box-shadow: 0px 1px 10px 1px rgba(0, 0, 0, 0.15); border-radius: 13px;">
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
    <label for="name">First Name <span class="star">*</span></label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name" value="<?php if (!empty($data->firstname)) {
echo $data->firstname;
} ?>" required><br/>
                        <label for="exampleInputEmail1">Email ID <span class="star">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="<?php if (!empty($data->email)) {
echo $data->email;
} ?>" required><br/>

                          <label for="image">Billing Address <span class="star">*</span></label>
                          <textarea class="form-control"  name="billing_address" id="billing_address" placeholder="Enter Billing Address" style="height: 38px;"  required><?php if (!empty($data->billing_address)) {
echo $data->billing_address;
} ?></textarea>
<br/>

</br>


    </div>

    <div class="col">
    <label for="name">Last Name <span class="star">*</span></label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name" value="<?php if (!empty($data->lastname)) {
echo $data->lastname;
} ?>" required><br/>
                        <label for="exampleInputEmail1">Mobile <span class="star">*</span></label>
                        <input type="text" class="form-control" name="mobile" id="mobile" pattern="[6789][0-9]{9}" title="Please enter valid phone number" placeholder="Enter Mobile" value="<?php if (!empty($data->mobile)) {
echo $data->mobile;
} ?>" required>
      {{-- <h3 class="mt-2">  Credit Card Information: </h3> --}}

                                        <div class="row">
    <!--<div class="col">
    <label for="name">Card Number <span class="star">*</span></label>
                        <input type="number" class="form-control" name="card_number" id="card_number" placeholder="Enter Card Number" value="<?php if (!empty($data->card_number)) {
echo $data->card_number;
} ?>" required><br/>


    </div>

    <div class="col">
    <label for="name">Expiration Date <span class="star">*</span></label>
                        <input type="text" class="form-control inputCard" name="expiry_date"  placeholder="Enter Expiry Date" value="<?php if (!empty($data->expiry_date)) {
echo $data->expiry_date;
} ?>" required><br/>






</div>





    <div class="col">
    <label for="name">CVV <span class="star">*</span></label>
                        <input type="password" class="form-control" name="cvv" id="cvv" pattern="[0-9]{3}" placeholder="Enter CVV" value="<?php if (!empty($data->cvv)) {
echo $data->cvv;
} ?>" required><br/>






    </div>

  </div>-->

        {{-- <div class="credit-card-input no-js" id="skeuocard">
         <!--    <p class="no-support-warning">
              Either you have Javascript disabled, or you're using an unsupported browser, amigo! That's why you're seeing this old-school credit card input form instead of a fancy new Skeuocard. On the other hand, at least you know it gracefully degrades...
            </p> -->
            <label for="cc_type">Card Type</label>
            <select name="cc_type" >
              <option value="">...</option>
              <option value="visa">Visa</option>
              <option value="discover">Discover</option>
              <option value="mastercard">MasterCard</option>
              <option value="maestro">Maestro</option>
              <option value="jcb">JCB</option>
              <option value="unionpay">China UnionPay</option>
              <option value="amex">American Express</option>
              <option value="dinersclubintl">Diners Club</option>
            </select>
            <label for="cc_number">Card Number</label>
            <input type="text" name="cc_number" id="cc_number" placeholder="XXXX XXXX XXXX XXXX" maxlength="19" size="19" >
            <label for="cc_exp_month">Expiration Month</label>
            <input type="text" name="cc_exp_month" id="cc_exp_month" placeholder="00" >
            <label for="cc_exp_year">Expiration Year</label>
            <input type="text" name="cc_exp_year" id="cc_exp_year" placeholder="00" >
            <label for="cc_name">Cardholder's Name</label>
            <input type="text" name="cc_name" id="cc_name" placeholder="John Doe" >
            <label for="cc_cvc">Card Validation Code</label>
            <input type="text" name="cc_cvc" id="cc_cvc" placeholder="123" maxlength="3" size="3" >
          </div>           --}}
</div>






</div>





    <div class="col">
    <label for="name">Company Name <span class="star">*</span></label>
                        <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter Company Name" value="<?php if (!empty($data->company_name)) {
echo $data->company_name;
} ?>" required><br/>





<label for="category">Company Address <span class="star">*</span></label>
                        <textarea class="form-control"  name="company_address" id="company_address" placeholder="Enter Company Address" style="height: 38px;"  required><?php if (!empty($data->company_address)) {
echo $data->company_address;
} ?></textarea>

Same as company address: <input type="checkbox" onchange="sendcompdata()" data-plugin="switchery" data-color="#64b0f2" data-size="small" name="sendcompanyaddress" id="sendcompanyaddress" value="1" <?php if (!empty($data->sendcompanyaddress)) {
  if ($data->sendcompanyaddress == '1') {
  echo 'checked';
  }
  } ?>/>
  <br/>




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