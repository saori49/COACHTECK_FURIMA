@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
<div class="home__content">
  <div class="home__content--top">
    <div class="home__content--nav">
      <a href="" class="recommend--btn">おすすめ</a>
      <a href="" class="mylist--btn">マイリスト</a>
    </div>
  </div>
  <div class="home__content--main">
    <div class="grid">
      @foreach($items as $item)
      <div class="item-card">
        <a href="{{ route('item.detail', $item->id) }}">
          <img class="item-card__img" src="{!! $item->img_url !!}" alt="shop-img" />
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection