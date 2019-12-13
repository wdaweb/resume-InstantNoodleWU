<?php
//處理刪除資料的請求
include_once "../base.php";

$id=$_POST['id'];
$sql="delete from `experience` where id='$id'";
echo $pdo->exec($sql);
echo "你刪除的是ID".$id."的使用者";
// header("location:../memberCentre.php");
?>