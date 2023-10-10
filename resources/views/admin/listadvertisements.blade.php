@include('include/header')
<style>
    /* Start Toogle */

.button-switch {
    font-size: 1.5em;
    height: 1.875em;
    margin-bottom: 0.625em;
    position: relative;
    width: 4.5em;
}
.button-switch .lbl-off,
.button-switch .lbl-on {
    cursor: pointer;
    display: block;
    font-size: 0.9em;
    font-weight: bold;
    line-height: 1em;
    position: absolute;
    top: 0.5em;
    transition: opacity 0.25s ease-out 0.1s;
    text-transform: uppercase;
}
.button-switch .lbl-off {
    right: 0.4375em;
}
.button-switch .lbl-on {
    color: #fefefe;
    opacity: 0;
    left: 0.4375em;
}
.button-switch .switch {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    height: 0;
    font-size: 1em;
    left: 0;
    line-height: 0;
    outline: none;
    position: absolute;
    top: 0;
    width: 0;
    margin-top: 21px;
}
.button-switch .switch:before,
.button-switch .switch:after {
    content: "";
    font-size: 1em;
    position: absolute;
}
.button-switch .switch:before {
    border-radius: 1.25em;
    background: #bdc3c7;
    height: 1.1em;
    left: -0.25em;
    top: -0.1875em;
    transition: background-color 0.25s ease-out 0.1s;
    width: 2.6em;
}
.button-switch .switch:after {
    box-shadow: 0 0.0625em 0.375em 0 #666;
    border-radius: 50%;
    background: #fefefe;
    height: 0.7em;
    transform: translate(0, 0);
    transition: transform 0.25s ease-out 0.1s;
    width: 0.7em;
}
.button-switch .switch:checked:after {
    transform: translate(1.3em, 0);
}
.button-switch .switch:checked ~ .lbl-off {
    opacity: 0;
}
.button-switch .switch:checked ~ .lbl-on {
    opacity: 1;
}
.button-switch .switch#switch-orange:checked:before {
    background: #088379;
}
.button-switch .switch#switch-blue:checked:before {
    background: #088379;
}

/* End Toogle   */
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Advertiser Section</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">List Advertiser Section</a>
                                </li>

                            </ol>
                        </div>
                        <h4 class="page-title">Advertiser Section</h4>
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
                                </div> <!-- end col-->
                            </div>

                            <div>
                                <table class="table table-centered table-striped" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Sl. Id</th>
                                            <th>Advertiser Name</th>
                                            <th>Advertiser Email</th>
                                            <th>Plan Name</th>
                                            <th>Plan Expiry Date</th>
                                            <th>Plan Amount</th>
                                            <th>Advertisment Image</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($advertisments as $key => $advertisment)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $advertisment['advertiser']['firstname'] }} {{ $advertisment['advertiser']['lastname'] }}</td>
                                                <td>{{ $advertisment['advertiser']['email'] }}</td>
                                                <td>{{ $advertisment['plan']['name'] }}</td>
                                                <td>{{ $advertisment['plan_expiry_date'] }}</td>
                                                <td>{{ $advertisment['amount'] }}</td>
                                                <td><img src="{{ $advertisment['image'] }}" alt=""
                                                        srcset="" style="height:80px; width:80px;"></td>
                                                <td>{{ $advertisment['type'] }} </td>
                                                <td>
                                                    @if($advertisment->status == 1)
                                                    <div class="button-switch"><input type="checkbox" id="switch-orange" disabled class="switch toggle-class" data-id="{{$advertisment['id']}}" {{($advertisment->status ? 'checked' : '')}}/><label for="switch-orange" class="lbl-off"></label><label for="switch-orange" class="lbl-on"></label></div>
                                                    @else
                                                    <div class="button-switch"><input type="checkbox" id="switch-orange" class="switch toggle-class" data-id="{{$advertisment['id']}}" {{($advertisment->status ? 'checked' : '')}}/><label for="switch-orange" class="lbl-off"></label><label for="switch-orange" class="lbl-on"></label></div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.advertisment.delete', $advertisment['id']) }}"
                                                        class="action-icon"
                                                        onclick="return confirm('Are you sure you want to delete?')"> <i
                                                            class="mdi mdi-delete"></i></a>
                                                            {{-- <a href="{{route('advertisment.edit',$advertisment['id'] )}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a> --}}
                                                            {{-- <a href=""></a> --}}
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



@include('include/footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>


<script>
    $(document).on('change', '.toggle-class', function(e) {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var user_id = $(this).data('id');

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('admin.advertiser.change-status') }}',
            data: {
                'status': status,
                'user_id': user_id
            },
            success: function(resp) {
                console.log(resp.success);
                if (resp.user.status == 1) {
                    // button disable
                    $(".toggle-class").prop('disabled', true);
                }
            }
        });
    });
</script>
