@extends('layouts.auth')

@section('content')
<!--begin::Signup-->
<div class="login-form">
    <!--begin::Form-->
    <form class="form" method="POST" action="{{ route('register') }}">
        @csrf
        <!--begin::Title-->
        <div class="pb-13 pt-lg-0 pt-5">
            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Sign Up</h3>
            <p class="text-muted font-weight-bold font-size-h4">Enter your details to create your account</p>
        </div>
        <!--end::Title-->
        <!--begin::Form group-->
        <div class="form-group">
            <input
                class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6 @error('name') is-invalid @enderror"
                name="name" value="{{ old('name') }}" id="name" type="text" placeholder="Fullname"
                required autocomplete="name" />
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!--end::Form group-->
        <!--begin::Form group-->
        <div class="form-group">
            <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6 @error('email') is-invalid @enderror" id="email"
                type="email"  name="email" value="{{ old('email') }}"
                placeholder="Email" required autocomplete="email" />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!--end::Form group-->
        <!--begin::Form group-->
        <div class="form-group">
            <input
                class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6 @error('password') is-invalid @enderror"
                id="password" type="password" placeholder="Password" name="password" required
                autocomplete="new-password" />
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!--end::Form group-->
        <!--begin::Form group-->
        <div class="form-group">
            <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6"
                id="password-confirm" type="password" placeholder="Confirm password" name="password_confirmation"
                required autocomplete="new-password" />

        </div>
        <!--end::Form group-->
        <!--begin::Form group-->
        <!--end::Form group-->
        <!--begin::Form group-->
        <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
            <button type="submit"
                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
        </div>
        <!--end::Form group-->
    </form>
    <!--end::Form-->
</div>
<!--end::Signup-->
@endsection