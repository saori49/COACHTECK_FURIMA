@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection


@section('content')
<div class="detail__content">
  <div class="detail__content--left">
    <div class="detail--photo">
      <img class="detail--img"src="" alt="">
    </div>
  </div>

  <div class="detail__content--right">
    <div class="detail--inner">
      <div class="item-name">
        <h1 class="item__ttl">商品名</h1>
        <p class="item__bland">ブランド名</p>
        <p class="item__price">¥</p>
        
              <input class="" type="image" src="/storage/images/star.jpg" alt="お気に入り" width="32px" height="32px">
              <input class="" type="image" src="/storage/images/comment.jpg" alt="コメント" width="32px" height="32px">
            
                          
        <button>購入する</button>
      </div>

      <div class="item-explanation">
        <h2>商品説明</h2>
        <p>カラー：グレー</p>
        <p>状態</p>
        <textarea name="" id="" cols="30" rows="10"></textarea>
      </div>

      <div class="item-info">
        <h2>商品の情報</h2>
        <p>カテゴリー</p>
        <p>商品の状態</p>
      </div>

    </div>
  </div>

</div>
@endsection