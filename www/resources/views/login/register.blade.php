@extends('layout')
@section('title','Logdy - Register HTML5 Template')
@push('styles')
    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="/assets/css/skins/default.css">
@endpush
@push('scripts')
    <script>
        console.log('This is "@yield('title')" page');
    </script>
@endpush



@section('content')
<h3>Create an account</h3>
<form action="" method="POST">
    <div class="form-group">
        <input type="text" name="fullname" class="input-text" placeholder="Full Name">
    </div>
    <div class="form-group">
        <input type="email" name="email" class="input-text" placeholder="Email Address">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="input-text" placeholder="Password">
    </div>
    <div class="checkbox clearfix">
        <div class="form-check checkbox-theme">
            <input class="form-check-input" type="checkbox" value="" id="termsOfService" name="termsOfService">
            <label class="form-check-label" for="termsOfService">
                I agree to the<a href="#" class="terms">terms of service</a>
            </label>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn-md btn-theme btn-block">Login</button>
    </div>
    <p class="none-2">Already a member?<a href="/login"> Login here</a></p>
</form>
@endsection

@section('right-bar-title','We make spectacular')
@section('right-bar-content')
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
@endsection