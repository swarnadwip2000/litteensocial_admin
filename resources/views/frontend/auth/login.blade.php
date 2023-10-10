@extends('frontend.layout.master')
@section('meta_title')
@endsection
@section('title')
Login
@endsection

@push('styles')

@endpush

@section('content')
<div class="login-wrp default-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Login</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="login-form" action="{{route('login.check')}}" method="POST">
                    @csrf
                    <input class="form-control" name="email" placeholder="Email address*" type="text" />
                    @if($errors->has('email'))
                      <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                    @endif
                    <input id="password-field" type="password" class="form-control" name="password" value="secret">
                    {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                    @if($errors->has('password'))
                    <div class="error" style="color:red;">{{ $errors->first('password') }}</div>
                    @endif
                    <input type="checkbox"> <label for="rememberMe">Remember me</label><br>
                    <button type="submit">Login</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>

</script>
@endpush
