<?php

include_once "../base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];

$sql="select id from mydb where acc='$acc' &&  pw='$pw'";
$data=$pdo->query($sql)->fetch();

if (!empty($data)) {
    echo "登入成功";
    header("location:../memberCentre.php");
} else {
    echo "<script>alert('帳號或密碼錯誤'); location.href = '../login_index.php';</script>";    
}
