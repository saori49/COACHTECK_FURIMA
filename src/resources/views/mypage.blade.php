@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage__content">
  <div class="mypage__content--top">
    <div class="mypage__user">
      <div class="mypage__user--photo">
        <img src="/storage/images/star.jpg" alt="profile-img">
      </div>
      <div class="mypage__user--name">
        <h2>ユーザー名</h2>
      </div>
      <a class="edit-profile" href="{{ route('profile') }}">プロフィールを編集</a>
    </div>
    <div class="mypage__content--nav">
      <a href="" class="recommend--btn">出品した商品</a>
      <a href="" class="mylist--btn">購入した商品</a>
    </div>
  </div>
  <div class="mypage__content--main">
    <div class="grid">
      
      <div class="item-card">
        <a href="">
          <img class="item-card__img" src="" alt="shop-img" />
        </a>
      </div>
      
    </div>
  </div>
</div>
@endsection