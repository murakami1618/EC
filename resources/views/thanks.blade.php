<header>
    <h1>へっだー</h1>
    <form class="form" action="/order" method="get">
        @csrf
        <input class="btn" type="submit" value="購入手続">
    </form>

    <form class="form" action="/top" method="post">
        @csrf
        <input class="btn" type="submit" value="トップページ">
    </form>
    <form class="form" action="/cart" method="post">
        @csrf
        <input class="btn" type="submit" value="カート">
    </form>
</header>
<link rel="stylesheet" href="/css/style.css">
<title>ありがとうございました</title>
<h1 class="ty">注文ありがとうございました。</h1>

<form class="tyb" action="/top" method="post">
    <?= csrf_field()?>
    <input type="submit" value="トップページに戻る">
</form>