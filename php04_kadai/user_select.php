<?php

session_start();
require_once('funcs.php');
loginCheck();
kanriloginCheck();


//1.  DB接続します
$pdo = db_conn();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT*FROM gs_user_table");
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
    sql_error($stmt);
    // $error = $stmt->errorInfo();
    // exit('ErrorQuery:' . print_r($error, true));
}else{
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $update = '<a href=user_update_view.php?id='.$result['id'].'>更新修正</a>';
        $delete = '<a href=user_delete.php?id='. $result['id'].'>削除</a>';

        if (($result['kanri_flg']) == 1) {
            $kanri_flg="管理者";
        }else{
            $kanri_flg="平社員";
        }

        if (($result['life_flg']) == 0) {
            $life_flg="退職";
        }else{
            $life_flg="現役";
        }

        $view .='<p>'.
                '名前:　'.
                h($result['name']).'<br>'.
                'ID :　'.
                h($result['lid']).'<br>'.
                'PWD:　'.
                h($result['lpw']).'<br>'.
                h($result['kanri_flg']).
                $kanri_flg.'<br>'.
                h($result['life_flg']).
                $life_flg.'<br>'.
                $update.'　　　'.
                $delete.'<br>'.
                '</p>';
    }//おまじない .=は追加ってこと　＋＝と同じやね


}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>会員一覧</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="user_index.php">会員データ登録へ</a>
        </div>
    </div>
    </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron">
    <h3>会員データ一覧</h3>
    <?= $view ?></div>
</div>

<a href="user_index.php">会員データ登録へ</a>
<!-- Main[End] -->

</body>


<style>
img{
    height:100px;
}


</style>
</html>
