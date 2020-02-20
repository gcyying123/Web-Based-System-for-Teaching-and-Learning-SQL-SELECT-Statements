<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="login-page-header">
    <h1>SQL Learning Portal</h1>
</div>
@if($errors->any())
    <div class="login-page-error">
            Incorrect role, username or password.
    </div>
@endif
<div class="login-page">
    <div class="form">
      <form class="login-form" method="POST" action="{{route('login')}}">
        @csrf
        <select id="role" name="role">
            <option value="" disabled selected>Select role</option>
            <option value="1">Admin</option>
            <option value="2">Instructor</option>
            <option value="3">Student</option>
        </select>
        <input id="email" type="email" name="email" placeholder="Email" autofocus>
        <input id="password" type="password" name="password" placeholder="Password">
        <button>LOGIN</button>
        @if (Route::has('password.request'))
            <p class="message"><a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a></p>
        @endif
      </form>
    </div>
</div>
</body>
</html>

