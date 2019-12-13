<?php

//處理更新資料的請求
include_once "../base.php";

$id=$_POST["id"];
$job_name=$_POST["job_name"];
$com_name=$_POST["com_name"];
$job_content=$_POST["job_content"];
$from_year=$_POST["from_year"];
$from_mon=$_POST["from_mon"];
$to_year=$_POST["to_year"];
$to_mon=$_POST["to_mon"];



$sql="update experience 
      set
         `id`='$id', 
         `job_name`='$job_name', 
         `com_name`='$com_name', 
         `job_content`='$job_content', 
         `from_year`='$from_year', 
         `from_mon`='$from_mon', 
         `to_year`='$to_year',
         `to_mon`='$to_mon'
      where
          id='$id'";

echo $pdo->exec($sql);

?>