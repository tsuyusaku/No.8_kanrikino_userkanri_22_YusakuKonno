<?php

session_start();
require_once('funcs.php');
loginCheck();

?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>本ブックマーク</title>
    <script src="js/jquery-2.1.3.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
    <!-- <link href="css/bootstrap-theme.css" rel="stylesheet"> -->

    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="bm_select.php">本の感想一覧へ</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="bm_insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>本の感想を書いておくぞ</legend>
                <label>
                    タイトル：<input type="text" name="title" id="book_title">
                    <input type="button" value="検索" id="search">
                </label><br>
                <label>URL：<input type="text" name="url"></label><br>
                <label>ISBN（13桁）：<input type="text" name="isbn"></label><br>
                <label><textArea name="comment" rows="4" cols="40"></textArea></label><br>
                <input type="submit" value="送信" class='btn-primary'>
            </fieldset>
        </div>
    </form>


    <a href="bm_select.php">本の感想一覧へ</a>

    <!-- Main[End] -->


</body>

<script>

$("#search").on("click", function(){
    // window.location.href = "http://www.google.com";
    const title = $("#book_title").val();
    // const url = 'https://www.google.com/search?tbm=bks&q='+title
    const url = 'https://www.amazon.co.jp/s?k='+title+'&i=stripbooks'

    window.open(url, '_blank');
})


</script>


</html>
