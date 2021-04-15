<?php

session_start();
require_once('funcs.php');
loginCheck();
kanriloginCheck();


?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>会員登録</title>
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
                <div class="navbar-header"><a class="navbar-brand" href="user_select.php">会員データ一覧へ</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="user_insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>会員データ登録</legend>
                <label>名前：<input type="text" name="name" ></label><br>
                <label>ID：<input type="text" name="lid"></label><br>
                <label>Password：<input type="text" name="lpw"></label><br>
                <label>管理者：
                    <input type="hidden" name="kanri_flg" value="0">
                    <input type="checkbox" name="kanri_flg" value="1">
                    </label><br>
                <label>退職者：
                    <input type="hidden" name="life_flg" value="1">
                    <input type="checkbox" name="life_flg" value="0"></label><br>

                <input type="submit" value="送信" class='btn-primary'>
            </fieldset>
        </div>
    </form>


    <a href="user_select.php">会員データ一覧へ</a>

    <!-- Main[End] -->


</body>

<script>

// $("#search").on("click", function(){
//     // window.location.href = "http://www.google.com";
//     const title = $("#book_title").val();
//     // const url = 'https://www.google.com/search?tbm=bks&q='+title
//     const url = 'https://www.amazon.co.jp/s?k='+title+'&i=stripbooks'

//     window.open(url, '_blank');
// })


</script>


</html>
