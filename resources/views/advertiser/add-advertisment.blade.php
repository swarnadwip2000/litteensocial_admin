@include('advertiser/include/header')
<link rel="stylesheet" href="{{ asset('card/styles/skeuocard.reset.css') }}" />
<link rel="stylesheet" href="{{ asset('card/styles/skeuocard.css') }}" />
<link rel="stylesheet" href="{{ asset('card/styles/demo.css') }}">
<script src="{{ asset('card/javascripts/vendor/cssua.min.js') }}"></script>
<style>
    .hide {
        display: none;
    }
</style>
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
                                <li class="breadcrumb-item"><a href="{{ route('advertiser.index') }}">List
                                        Advertisment</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Create Your Advertisment</a>
                                </li>

                            </ol>
                        </div>
                        <h4 class="page-title">Create Your Advertisment</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-12">
                    <div class="card" style="box-shadow: 0px 1px 10px 1px rgba(0, 0, 0, 0.15); border-radius: 13px;">
                        <div class="card-body">


                            <div>
                                <form role="form" action="{{ route('advertiser.stripe.payment') }}" method="post"
                                    class="require-validation" data-cc-on-file="false" enctype="multipart/form-data"
                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">

                                    @csrf

                                    <div class='form-row row'>
                                        <div class='col-md-6 form-group required'>

                                            <label class='control-label'>Advertisment Type</label>
                                            <select name="type" id="type" class="form-control">
                                                <option value="">Select A Type</option>
                                                <option value="deals">Deals</option>
                                                <option value="banner">Banners</option>
                                            </select>
                                            @if ($errors->has('type'))
                                                <div class="error" style="color:red;">{{ $errors->first('type') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class='col-md-6 form-group required'>

                                            <label class='control-label'>Plan</label>
                                            <select name="plan_id" id="plan_id" class="form-control">
                                            </select>
                                            @if ($errors->has('plan_id'))
                                                <div class="error" style="color:red;">{{ $errors->first('plan_id') }}
                                                </div>
                                            @endif
                                        </div>


                                    </div>


                                    <div class='form-row row'>
                                        <div class='col-md-6 form-group  required'>

                                            <label class='control-label'>Image (Size of image should not be less than
                                                350 X 600)</label>
                                            <input autocomplete='off' class='form-control ' size='20'
                                                type='file' name="image" onchange="readURL(this);">
                                            @if ($errors->has('image'))
                                                <div class="error" style="color:red;">{{ $errors->first('image') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class='col-md-6 form-group'>

                                            <img id="blah" src=""
                                                style="height: 200px; width:100% border:none;" />

                                        </div>



                                    </div>

                                    <div class='form-row row'>
                                        <div class='col-md-12 form-group'>
                                            <div class="credit-card-input no-js" id="skeuocard">
                                                <!--    <p class="no-support-warning">
                                                     Either you have Javascript disabled, or you're using an unsupported browser, amigo! That's why you're seeing this old-school credit card input form instead of a fancy new Skeuocard. On the other hand, at least you know it gracefully degrades...
                                                   </p> -->
                                                <label for="cc_type">Card Type</label>
                                                <select name="cc_type">
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
                                                <input type="text" name="cc_number" id="cc_number"
                                                    placeholder="XXXX XXXX XXXX XXXX" maxlength="19" size="19">
                                                <label for="cc_exp_month">Expiration Month</label>
                                                <input type="text" name="cc_exp_month" id="cc_exp_month"
                                                    placeholder="00">
                                                <label for="cc_exp_year">Expiration Year</label>
                                                <input type="text" name="cc_exp_year" id="cc_exp_year"
                                                    placeholder="00">
                                                <label for="cc_name">Cardholder's Name</label>
                                                <input type="text" name="cc_name" id="cc_name"
                                                    placeholder="John Doe">
                                                <label for="cc_cvc">Card Validation Code</label>
                                                <input type="text" name="cc_cvc" id="cc_cvc"
                                                    placeholder="123" maxlength="3" size="3">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-xs-12">

                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now
                                                ($<span id="price"></span>)</button>

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



@include('advertiser/include/footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="{{ asset('card/javascripts/vendor/demo.fix.js') }}"></script>
<script src="{{ asset('card/javascripts/vendor/jquery-2.0.3.min.js') }}"></script>
<script src="{{ asset('card/javascripts/skeuocard.js') }}"></script>
@foreach ($plans as $item)
                                                    <option value="{{ $item['id'] }}">{{ $item['name'] }} <b>(validity
                                                            {{ $item['duration'] }} days / ${{ $item['amount'] }})</b>
                                                    </option>
                                                @endforeach
<script>
    $(document).ready(function () {
            $('#type').on('change', function () {
                var idtype = this.value;
                $("#plan_id").html('');
                $.ajax({
                    url: "{{url('advertiser/fetchPlans')}}",
                    type: "GET",
                    data: {
                        type: idtype
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#plan_id').html('<option value="">Select a Plan</option>');
                        $.each(result.plans, function (key, value) {
                            $("#plan_id").append('<option value="' + value
                                .id + '">' + value.name + '<b>(validity '+ value.duration + ' days / $' + value.amount + ')</option>');
                        });
                    }
                });
            });
        });
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script type="text/javascript">
    $(function() {



        /*------------------------------------------

        --------------------------------------------

        Stripe Payment Code

        --------------------------------------------

        --------------------------------------------*/



        var $form = $(".require-validation");



        $('form.require-validation').bind('submit', function(e) {

            var $form = $(".require-validation"),

                inputSelector = ['input[type=email]', 'input[type=password]',

                    'input[type=text]', 'input[type=file]',

                    'textarea'
                ].join(', '),

                $inputs = $form.find('.required').find(inputSelector),

                $errorMessage = $form.find('div.error'),

                valid = true;

            $errorMessage.addClass('hide');



            $('.has-error').removeClass('has-error');

            $inputs.each(function(i, el) {

                var $input = $(el);

                if ($input.val() === '') {

                    $input.parent().addClass('has-error');

                    $errorMessage.removeClass('hide');

                    e.preventDefault();

                }

            });



            if (!$form.data('cc-on-file')) {

                e.preventDefault();

                Stripe.setPublishableKey($form.data('stripe-publishable-key'));

                Stripe.createToken({

                    number: $('#cc_number').val(),

                    cvc: $('#cc_cvc').val(),

                    exp_month: $('#cc_exp_month').val(),

                    exp_year: $('#cc_exp_year').val()

                }, stripeResponseHandler);

            }



        });



        /*------------------------------------------

        --------------------------------------------

        Stripe Response Handler

        --------------------------------------------

        --------------------------------------------*/

        function stripeResponseHandler(status, response) {

            if (response.error) {

                $('.error')

                    .removeClass('hide')

                    .find('.alert')

                    .text(response.error.message);

            } else {

                /* token contains id, last4, and card type */

                var token = response['id'];



                $form.find('input[type=text]').empty();

                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");

                $form.get(0).submit();

            }

        }



    });
</script>
{{-- <script type="text/javascript">
    $(function() {



        /*------------------------------------------

        --------------------------------------------

        Stripe Payment Code

        --------------------------------------------

        --------------------------------------------*/







        // $('form.require-validation').bind('submit', function(e) {

        //     var $form = $(".require-validation"),

        //         inputSelector = ['input[type=email]', 'input[type=password]',

        //             'input[type=text]', 'input[type=file]',

        //             'textarea'
        //         ].join(', '),

        //         $inputs = $form.find('.required').find(inputSelector),

        //         $errorMessage = $form.find('div.error'),

        //         valid = true;

        //     $errorMessage.addClass('hide');



        //     $('.has-error').removeClass('has-error');

        //     $inputs.each(function(i, el) {

        //         var $input = $(el);

        //         if ($input.val() === '') {

        //             $input.parent().addClass('has-error');

        //             $errorMessage.removeClass('hide');

        //             e.preventDefault();

        //         }

        //     });



        // if ($form) {

        // e.preventDefault();
        var $form = $(".require-validation");

        Stripe.setPublishableKey($form.data('stripe-publishable-key'));
        Stripe.createToken({

            number: $('#cc_number').val(),

            cvc: $('#cc_cvc').val(),

            exp_month: $('#cc_exp_month').val(),

            exp_year: $('#cc_exp_year').val()

        }, stripeResponseHandler);



    function stripeResponseHandler(status, response) {

        if (response.error) {

            $('.error')

                .removeClass('hide')

                .find('.alert')

                .text(response.error.message);

        } else {

            /* token contains id, last4, and card type */

            var token = response['id'];

            console.log(response['id']);

            $form.find('input[type=text]').empty();

            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");

            // $form.get(0).submit();

        }

    }
});
</script> --}}

<script>
    $('#plan_id').on('change', function() {
        var id = $(this).val();
        var link = "{{ route('show.plan-price') }}";
        $.ajax({

            url: link,

            type: 'GET',

            dataType: 'json',
            data: {
                id: id
            },

            success: function(resp) {
                // console.log(resp.data.amount);
                $('#price').text(resp.data.amount);

            }
        });
    });
</script>

{{-- <script>
    $('#card-number').on('input propertychange paste', function() {
        var value = $('#card-number').val();
        var formattedValue = formatCardNumber(value);
        $('#card-number').val(formattedValue);
    });

    function formatCardNumber(value) {
        var value = value.replace(/\D/g, '');
        var formattedValue;
        var maxLength;
        // american express, 15 digits
        if ((/^3[47]\d{0,13}$/).test(value)) {
            formattedValue = value.replace(/(\d{4})/, '$1 ').replace(/(\d{4}) (\d{6})/, '$1 $2 ');
            maxLength = 17;
        } else if ((/^3(?:0[0-5]|[68]\d)\d{0,11}$/).test(value)) { // diner's club, 14 digits
            formattedValue = value.replace(/(\d{4})/, '$1 ').replace(/(\d{4}) (\d{6})/, '$1 $2 ');
            maxLength = 16;
        } else if ((/^\d{0,16}$/).test(value)) { // regular cc number, 16 digits
            formattedValue = value.replace(/(\d{4})/, '$1 ').replace(/(\d{4}) (\d{4})/, '$1 $2 ').replace(
                /(\d{4}) (\d{4}) (\d{4})/, '$1 $2 $3 ');
            maxLength = 19;
        }

        $('#card-number').attr('maxlength', maxLength);
        return formattedValue;
    }
</script> --}}

<script>
    $(document).ready(function() {
        var isBrowserCompatible =
            $('html').hasClass('ua-ie-10') ||
            $('html').hasClass('ua-webkit') ||
            $('html').hasClass('ua-firefox') ||
            $('html').hasClass('ua-opera') ||
            $('html').hasClass('ua-chrome');

        if (isBrowserCompatible) {
            window.card = new Skeuocard($("#skeuocard"), {
                debug: false
            });
        }
    });
</script>
