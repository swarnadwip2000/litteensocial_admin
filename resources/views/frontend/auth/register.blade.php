@extends('frontend.layout.master')
@section('meta_title')
@endsection
@section('title')
Register
@endsection

@push('styles')
<style>
    .alert-error{
        color: red;
    }
</style>
@endpush

@section('content')
<div class="breadcrumb-wrp">
    <div class="container">
        <div class="text-center">
            <h1>Register</h1>
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Register</li>
            </ul>
        </div>
    </div>
</div>
<div class="register-wrpper default-padding ">
    <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Register <span>for free</span></h2>
                    <h4>Lorem ipsum dolor sit amet</h4>
                </div>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form action="{{route('register.store')}}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="firstname" value="{{old('firstname')}}" placeholder="First Name*" type="text">
                                @if($errors->has('firstname'))
                                                <div class="alert-error" >{{ $errors->first('firstname') }}</div>
                                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="lastname" value="{{old('lastname')}}" placeholder="Last Name*" type="text">
                                @if($errors->has('lastname'))
                                                <div class="alert-error" >{{ $errors->first('lastname') }}</div>
                                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="email" value="{{old('email')}}" placeholder="Email*" type="email">
                                @if($errors->has('email'))
                                                <div class="alert-error" >{{ $errors->first('email') }}</div>
                                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="mobile" value="{{old('mobile')}}" placeholder="Phone*" type="text">
                                @if($errors->has('mobile'))
                                                <div class="alert-error" >{{ $errors->first('mobile') }}</div>
                                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group comments">
                                <input class="form-control" name="company_name" value="{{old('company_name')}}" placeholder="Company Name*" type="text">
                                @if($errors->has('company_name'))
                                <div class="alert-error" >{{ $errors->first('company_name') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="company_address" value="{{old('company_address')}}" placeholder="Company Address*" type="text">
                                @if($errors->has('company_address'))
                                                <div class="alert-error" >{{ $errors->first('company_address') }}</div>
                                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="billing_address" value="{{old('billing_address')}}" placeholder="Billing Address*" type="text">
                                @if($errors->has('billing_address'))
                                                <div class="alert-error" >{{ $errors->first('billing_address') }}</div>
                                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="password" placeholder="Password*" type="password">
                                @if($errors->has('password'))
                                                <div class="alert-error" >{{ $errors->first('password') }}</div>
                                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="confirm_password" placeholder="Confirm Password*" type="password">
                                @if($errors->has('confirm_password'))
                                                <div class="alert-error" >{{ $errors->first('confirm_password') }}</div>
                                                @endif
                            </div>
                        </div>

                        </div><!-- end row -->
                        <div class="text-center">
                            <button type="submit">Register</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush
