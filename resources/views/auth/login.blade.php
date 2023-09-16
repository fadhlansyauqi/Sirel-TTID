@extends('layouts.auth')

@section('content')
<!--begin::Signin-->
<div class="login-form login-signin py-11">
    <!--begin::Form-->
    <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
        <!--begin::Title-->
        <div class="text-center pb-8">
            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h2>
            <span class="text-muted font-weight-bold font-size-h4">Or
            <a href="{{ route('register') }}" class="text-primary font-weight-bolder" id="kt_login_signup">Create An Account</a></span>
        </div>
        <!--end::Title-->
        <!--begin::Form group-->
        <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email" type="email" name="email"  />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!--end::Form group-->
        <!--begin::Form group-->
        <div class="form-group">
            <div class="d-flex justify-content-between mt-n5">
                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
            </div>
            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  id="password" type="password" />
        </div>
        <!--end::Form group-->
        <!--begin::Action-->
        <div class="text-center pt-2">
            <button id="kt_login_signin_submit" class="btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3">Sign In</button>
        </div>
        <!--end::Action-->
    </form>
    <!--end::Form-->
</div>
<!--end::Signin-->
@endsection
