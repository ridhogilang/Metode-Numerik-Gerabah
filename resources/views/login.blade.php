@extends('layouts.main')
@push('header')
  <link rel="stylesheet" href="css/login.css">
@endpush

@section('container')
<section class="forms-section">
  <h1 class="section-title">Silahkan Login</h1>
  @if (session()->has ('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div> 
  @endif

  @if (session()->has ('loginError'))
  <div class="alert alert-danger" role="alert">
    {{ session('LoginError') }}
  </div> 
  @endif
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Login
        <span class="underline"></span>
      </button>
      <form action="/login" method="POST" class="form form-login">
        @csrf
        <fieldset>
          <legend>Please, enter your email and password for login.</legend>
          <div class="input-block">
            <label for="email">E-mail</label>
            <input name ="email" id="email" type="email" required autofocus>
          <div class="input-block">
            <label for="password">Password</label>
            <input name ="password"id="password" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
    <div class="form-wrapper">
      <a href="/register" class="switcher2 switcher2-signup ml-5">
        Sign Up
      </a>
      <form class="form form-signup">
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="signup-password" type="password" required>
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Confirm password</label>
            <input id="signup-password-confirm" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-signup">Continue</button>
      </form>
    </div>
  </div>
</section>
@endsection