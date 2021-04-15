<?php

session_start();
require_once('funcs.php');
loginCheck();
kanriloginCheck();


$pdo=db_conn();
$id =$_GET['id'];

//1.  DB接続します

//２．データ取得SQL作成
$stmt = $pdo->prepare("DELETE FROM gs_user_table WHERE id=:id");

$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute();

//３．データ表示
if ($status == false) {
    sql_error($status);
}else{
    redirect('user_select.php');
}
?>




