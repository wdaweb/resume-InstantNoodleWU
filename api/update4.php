<?php

//處理更新資料的請求
include_once "../base.php";

$id=$_POST["id"];
$school=$_POST["school"];
$education=$_POST["education"];
$major=$_POST["major"];
$from_year=$_POST["from_year"];
$to_year=$_POST["to_year"];
$text=$_POST["text"];




$sql="update education 
      set
         `id`='$id', 
         `school`='$school', 
         `education`='$education', 
         `major`='$major', 
         `from_year`='$from_year', 
         `to_year`='$to_year', 
         `text`='$text'
      where
          id='$id'";

echo $pdo->exec($sql);

?>