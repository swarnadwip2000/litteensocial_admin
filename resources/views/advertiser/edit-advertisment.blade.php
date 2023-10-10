@include('advertiser/include/header')

<style>
    .hide{
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Your Advertisment</a>
                                </li>

                            </ol>
                        </div>
                        <h4 class="page-title">Edit Your Advertisment</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-12">
                    <div class="card" style="box-shadow: 0px 1px 10px 1px rgba(0, 0, 0, 0.15); border-radius: 13px;">
                        <div class="card-body">


                            <div>
                                <form action="{{route('advertisment.update')}}" method="post" enctype="multipart/form-data">

                                    @csrf
                                    <input type="hidden" name="id" value="{{$advertisment['id']}}">
                                    <div class='form-row row'>
                                        <div class='col-md-6 form-group  required'>

                                            <label class='control-label'>Image (Size of image should not be less than 350 X 600)</label>
                                            <input autocomplete='off'
                                                class='form-control ' size='20' type='file' name="image" onchange="readURL(this);">
                                                @if($errors->has('image'))
                                                <div class="error" style="color:red;">{{ $errors->first('image') }}</div>
                                              @endif
                                        </div>
                                        <div class='col-md-6 form-group  required'>

                                            @if ($advertisment['image'])

                                            <img src="{{$advertisment['image']}}" alt=""  id="blah" srcset="" style="width:200px; height:200px;">
                                            @else
                                            <img src="" alt=""  id="blah" srcset="" style="width:200px; height:200px;">
                                            @endif
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-xs-12">

                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>

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

