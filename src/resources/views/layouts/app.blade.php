<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>coachtechフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('css')
</head>

<body class="container">
    <header class="header">
        <div class="header__content">
            <div class="header__logo">
                <img class="header__logo--img" src="/storage/images/CoachTech_logo.jpg" alt="">
            </div>
            @unless(Route::is('login')|| Route::is('register'))
            <div class="header__search">
                <input class="header__search--input" type="text" placeholder="なにをお探しですか？">
            </div>
            <div class="header__nav">
            @if (Auth::check())
                <form class="header__nav--item" name="logout" action="{{ route('logout') }}" method="POST">
                @csrf
                    <a onclick="document.logout.submit();">ログアウト</a>
                </form>
                <a class="header__nav--item" href="/mypage">マイページ</a>
                <a class="header__nav--item" href="">出品</a>
            @else
                <a class="header__nav--item" href="{{ route('login') }}">ログイン</a>
                <a class="header__nav--item" href="{{ route('register') }}">会員登録</a>
                <a class="header__nav--item" href="">出品</a>
            @endif
            </div>
            @endunless
        </div>
    </header>

    <main class="main">
    @yield('content')
    </main>

</body>
</html>
