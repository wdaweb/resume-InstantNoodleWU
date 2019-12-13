<?php

//處理更新資料的請求
include_once "../base.php";

$job_name=$_POST["job_name"];
$com_name=$_POST["com_name"];
$job_content=$_POST["job_content"];
$from_year=$_POST["from_year"];
$from_mon=$_POST["from_mon"];
$to_year=$_POST["to_year"];
$to_mon=$_POST["to_mon"];


$sql="INSERT INTO `experience`(`job_name`, `com_name`, `job_content`, `from_year`, `from_mon`, `to_year`, `to_mon`) 
VALUES ('$job_name','$com_name','$job_content','$from_year','$from_mon','$to_year','$to_mon')";

echo $pdo->exec($sql);
header("location:../memberCentre.php")
?>