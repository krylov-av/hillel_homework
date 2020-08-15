@extends('layout')
@section('title','Logdy - Login HTML5 Template')

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
    <h3>Sign into your account</h3>
    <form action="" method="POST">
        <div class="form-group">
            <input type="email" name="email" class="input-text" placeholder="Email Address">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="input-text" placeholder="Password">
        </div>
        <div class="checkbox clearfix">
            <div class="form-check checkbox-theme">
                <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                <label class="form-check-label" for="rememberMe">
                    Remember me
                </label>
            </div>
            <a href="/forgot-password.php">Forgot Password</a>
        </div>
        <div class="form-group">
            <button type="submit" class="btn-md btn-theme btn-block">Login</button>
        </div>
        <p class="none-2">Don't have an account?<a href="/register"> Register here</a></p>
    </form>
@endsection

@section('right-bar-title','We make spectacular')
@section('right-bar-content')
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
@endsection