<?php

session_start();
require_once('funcs.php');
loginCheck();
kanriloginCheck();


$pdo=db_conn();
$id =$_GET['id'];

//1.  DB接続します

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT*FROM gs_user_table WHERE id=".$id.";");
$status = $stmt->execute();


//３．データ表示
if ($status == false) {
    sql_error($status);
}else{
    $result = $stmt->fetch();
}


//チェックボックスにチェックしておきたい
if ($result['kanri_flg']==1){
    $kanri_checked="checked='checked'";
}else{
    $kanri_checked="";
}

if (($result['life_flg'])==0){
    $life_checked="checked='checked'";
}else{
    $life_checked="";
}


?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>会員情報更新</title>
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
    <form method="post" action="user_update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>会員データ更新</legend>

                <label>名前：<input type="text" name="name" value="<?=$result['name'] ?>"></label><br>
                <label>ID：<input type="text" name="lid" value="<?=$result['lid'] ?>"></label><br>
                <label>Password：<input type="text" name="lpw" value="<?=$result['lpw'] ?>"></label><br>
                <label>管理者：
                    <input type="hidden" name="kanri_flg" value="0">
                    <input type="checkbox" name="kanri_flg" value="1" <?=$kanri_checked ?>></label><br>
                <label>退職者：
                    <input type="hidden" name="life_flg" value="1">
                    <input type="checkbox" name="life_flg" value="0" <?=$life_checked ?>></label><br>

                <input type="submit" value="更新・修正" class='btn-primary'>
                <input type="hidden" name="id" value="<?=$result['id'] ?>">



                <!-- <label>
                    タイトル：<input type="text" name="title" id="book_title" value="<?=$result['title'] ?>">
                    <input type="button" value="検索" id="search">
                </label><br>
                <label>URL：<input type="text" name="url" value="<?=$result['url'] ?>"></label><br>
                <label>ISBN（13桁）：<input type="text" name="isbn" value="<?=$result['isbn'] ?>"></label><br>
                <label><textArea name="comment" rows="4" cols="40"><?=$result['comment'] ?></textArea></label><br>
                <input type="submit" value="更新・修正" class='btn-primary'>
                <input type="hidden" name="id" value="<?=$result['id'] ?>"> -->

            </fieldset>
        </div>
    </form>


    <a href="user_select.php">会員データ一覧へ</a>

    <!-- Main[End] -->


</body>
