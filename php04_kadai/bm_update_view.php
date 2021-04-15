<?php

session_start();
require_once('funcs.php');
loginCheck();

$pdo=db_conn();
$id =$_GET['id'];

//1.  DB接続します

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT*FROM gs_bm_table WHERE id=".$id.";");
$status = $stmt->execute();

//３．データ表示
if ($status == false) {
    sql_error($status);
}else{
    $result = $stmt->fetch();
}
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
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="bm_update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>本の感想を加筆修正</legend>
                <label>
                    タイトル：<input type="text" name="title" id="book_title" value="<?=$result['title'] ?>">
                    <input type="button" value="検索" id="search">
                </label><br>
                <label>URL：<input type="text" name="url" value="<?=$result['url'] ?>"></label><br>
                <label>ISBN（13桁）：<input type="text" name="isbn" value="<?=$result['isbn'] ?>"></label><br>
                <label><textArea name="comment" rows="4" cols="40"><?=$result['comment'] ?></textArea></label><br>
                <!-- <input type="submit" value="更新・修正" class='btn-primary'> -->
                <input type="hidden" name="id" value="<?=$result['id'] ?>">

            </fieldset>
        </div>
    </form>


    <a href="bm_select.php">本の感想一覧へ</a>

    <!-- Main[End] -->


</body>
