@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile__content">
    @if(isset($user))
    <div class="profile--form__content">
        <div class="profile--form__heading">
            <p class="profile--form__ttl">プロフィール設定</p>
        </div>

    <div class="profile--form__body">
        <form class="form" action="" method="post">
        @csrf
        <div class="form__group">
            <di class="profile-photo">
                <img class="profile-photo-img" src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('storage/images/gray-circle.png') }}" alt="profile-img">
                <input type="file" name="profile_image" id="profile_image">
                <a class="select-btn" href="">画像を選択する</a>
            </div>
        </div>

        <div class="form__group">
            <p class="form__group--ttl">ユーザー名</p>
            <input class="form__group--input" type="text" name="name" value="{{ old('name') }}" />
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__group">
            <p class="form__group--ttl">郵便番号</p>
            <input class="form__group--input" type="text" name="name" value="{{ old('name') }}" />
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__group">
            <p class="form__group--ttl">住所</p>
            <input class="form__group--input" type="email" name="email" value="{{ old('email') }}" />
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__group">
            <p class="form__group--ttl">建物名</p>
            <input class="form__group--input" type="password" name="password"/>
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">更新する</button>
        </div>
        </form>
    </div>
  </div>
</div>
@endsection