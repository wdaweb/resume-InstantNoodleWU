<?php

//處理更新資料的請求
include_once "../base.php";

$id=$_POST["id"];
$sen=$_POST["sen"];
$job_type=$_POST["job_type"];
$salary=$_POST["salary"];
$job_offr=$_POST["job_offr"];
$job_site=$_POST["job_site"];
$lan=$_POST["lan"];
$skill=$_POST["skill"];


$sql="update status 
      set
         `id`='$id', 
         `sen`='$sen', 
         `job_type`='$job_type', 
         `salary`='$salary', 
         `job_offr`='$job_offr', 
         `job_site`='$job_site',
         `lan`='$lan',
         `skill`='$skill'
      where
          id='$id'";

echo $pdo->exec($sql);

?>