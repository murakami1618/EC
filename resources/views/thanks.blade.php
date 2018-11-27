<header>
    <h1>　</h1>
</header>
<link rel="stylesheet" href="/css/style.css">
<title>ありがとうございました</title>
<h1 class="ty">注文ありがとうございました。</h1>

<form class="tyb" action="/top" method="post">
    <?= csrf_field()?>
    <input type="submit" value="トップページに戻る">
</form>