<?php

session_start();
require_once('funcs.php');
loginCheck();

//2. DB接続します
$pdo = db_conn();

$title = $_POST['title'];
$url = $_POST['url'];
$isbn_old = $_POST['isbn'];
$isbn = str_replace('-', '', $isbn_old);
$comment = $_POST['comment'];
$id = $_POST['id'];

//３．データ登録SQL作成
// 1. SQL文を用意
$stmt = $pdo->prepare("UPDATE gs_bm_table SET 
                            title=:title, 
                            url=:url,
                            isbn=:isbn,
                            comment=:comment,
                            indate= sysdate()
                        WHERE
                            id =:id
                            ;");

//  2. バインド変数を用意
$stmt->bindValue(':title', $title, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':isbn', $isbn, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("bm_select.php");

}
?>
