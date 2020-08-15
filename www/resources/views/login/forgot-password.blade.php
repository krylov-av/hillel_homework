@extends('layout')
@section('title','Logdy - Forgot password HTML5 Template')
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
    <h3>Recover your password</h3>
    <form action="" method="GET">
        <div class="form-group">
            <input type="email" name="email" class="input-text" placeholder="Email Address">
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