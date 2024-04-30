@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="register-form__content">
        <div class="register-form__heading">
            <p class="register-form__title">会員登録</p>
        </div>
        <div class="register-form__body">
            <form class="form" action="/register" method="post">
            @csrf
            <div class="form__group">
                <p class="form__group--ttl">名前</p>
                <input class="form__group--input" type="text" name="name" value="{{ old('name') }}" />
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>

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
                <button class="form__button-submit" type="submit">登録する</button>
                <a href="{{ route('login') }}" class="registration-button">ログインはこちら</a>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection