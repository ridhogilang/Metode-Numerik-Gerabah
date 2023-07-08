@extends('layouts.main')
@push('header')
  <link rel="stylesheet" href="css/login.css">
@endpush

@section('container')
<section class="forms-section">
    <h1 class="section-title">Animated Forms</h1>
    <div class="forms">
      <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
          Sign Up
          <span class="underline"></span>
        </button>
        <form action="/register" method="POST" class="form form-login">
            @csrf
            <fieldset>
                <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                <div class="input-block">
                  <label for="name">Nama</label>
                  <input name="name" id="name" type="text" class="@error('name') is-invalid @enderror" requied>
                </div>
                <div class="input-block">
                  <label for="email">E-mail</label>
                  <input name="email" id="email" type="email" required>
                </div>
                <div class="input-block">
                  <label for="password">Password</label>
                  <input name="password" id="password" type="password" required>
                </div>
              </fieldset>
          <button type="submit" class="btn-login">Sign Up</button>
        </form>
      </div>
      <div class="form-wrapper">
        <a href="/login" class="switcher2 switcher2-signup ml-5">
          Login
        </a>
        <form class="form form-signup">
            <fieldset>
                <legend>Please, enter your email and password for login.</legend>
                <div class="input-block">
                  <label for="login-email">E-mail</label>
                  <input id="login-email" type="email" required>
                </div>
                <div class="input-block">
                  <label for="login-password">Password</label>
                  <input id="login-password" type="password" required>
                </div>
                <div class="input-block">
                  <label for="login-password">Password</label>
                  <input id="login-password" type="password" required>
                </div>
                <div class="input-block">
                  <label for="login-password">Password</label>
                  <input id="login-password" type="password" required>
                </div>
              </fieldset>
          <button type="submit" class="btn-signup">Continue</button>
        </form>
      </div>
    </div>
</section>
@endsection