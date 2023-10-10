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
                                <li class="breadcrumb-item"><a href="{{route('plans.index')}}">List Plans</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Update Plans</a></li>

                            </ol>
                        </div>
                        <h4 class="page-title">Update Plans</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-12">
                    <div class="card" style="box-shadow: 0px 1px 10px 1px rgba(0, 0, 0, 0.15); border-radius: 13px;">
                        <div class="card-body">


                            <div>
                                <form method="post" action="{{ route('plans.update') }}" class="form-horizontal"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$plan->id}}">
                                    <div class="row">
                                        <div class="col">
                                            <label for="image">Plan Name</label>
                                            <input type="text" class="form-control" name="name" value="{{$plan->name}}"><br />
                                            @if ($errors->has('name'))
                                                <div class="error" style="color:red;">{{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col">
                                            <label for="type">Plan Types</label>
                                            <select name="type" id="type" class="form-control">
                                                <option value="">Select A Type</option>
                                               <option value="deals" {{($plan->type == 'deals') ? 'selected' : ''}}>Deals</option>
                                               <option value="banner" {{($plan->type == 'banner') ? 'selected' : ''}}>Banners</option>
                                            </select>
                                            @if ($errors->has('type'))
                                                <div class="error" style="color:red;">{{ $errors->first('type') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col">
                                            <label for="image">Plan Duration (Day)
                                            </label>
                                            <input type="text" class="form-control" name="duration" value="{{$plan->duration}}"><br />
                                            @if ($errors->has('duration'))
                                                <div class="error" style="color:red;">{{ $errors->first('duration') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col">
                                            <label for="image">Plan Amount
                                            </label>
                                            <input type="text" class="form-control" name="amount" value="{{$plan->amount}}"><br />
                                            @if ($errors->has('amount'))
                                                <div class="error" style="color:red;">{{ $errors->first('amount') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <input type="submit" class="btn btn-success waves-effect waves-light"
                                            name="submit" value="Update">
                                        <a href="{{ route('plans.index') }}"
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


