@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__content">

  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  @if(session('login_error'))
        <div class="alert alert-danger">
          {{session('login_error')}}
        </div>
      @endif
  @if(session('logout'))
    <div class="alert alert-success">
      {{session('logout')}}
    </div>
  @endif

  <div class="login-form__content">
    <div class="login-form__heading">
      <p class="login-form__title">ログイン</p>
    </div>
    <div class="login-form__body">
      <form class="form" action="/login" method="post">
        @csrf
        <div class="form__group">
            <p class="form__group--ttl">メールアドレス</p>
            <input class="form__group--input" type="email" name="email" value="{{ old('email') }}" />
          <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
          </div>
        </div>

        <div class="form__group">
          <p class="form__group--ttl">パスワード</p>
          <input class="form__group--input" type="password" name="password"/>
          <div class="form__error">
            @error('password')
            {{ $message }}
            @enderror
          </div>
        </div>

        <div class="form__button">
          <button class="form__button-submit" type="submit">ログイン</button>
          <a href="{{ route('register') }}" class="registration-button">会員登録はこちら</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection