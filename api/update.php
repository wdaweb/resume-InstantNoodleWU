<?php

//處理更新資料的請求
include_once "../base.php";

$id=$_POST["id"];
$name=$_POST["name"];
$username=$_POST["username"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$self_text=$_POST["self_text"];
$addr=$_POST["addr"];


$sql="update self 
      set
         `id`='$id', 
         `name`='$name', 
         `username`='$username', 
         `tel`='$tel', 
         `email`='$email', 
         `self_text`='$self_text',
         `addr`='$addr'
      where
          id='$id'";

echo $pdo->exec($sql);

?>