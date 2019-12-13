<?php
  include_once "../base.php";

$sql="select * from  education where id";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($rows);


echo "<tr>";
echo "<td>學校名稱</td>";
echo "<td>學位</td>";
echo "<td>主修</td>";
echo "<td>從..</td>";
echo "<td>到..</td>";
echo "<td>活動和經歷</td>";
echo "<td></td>";
echo "</tr>";

foreach ($rows as $r) {
echo "<tr id='tr4-".$r['id']."'>";
echo "<td><input type='text' name='school' value=".$r['school']."></td>";
echo "<td><input type='text' name='education' value=".$r['education']."></td>";
echo "<td><input type='text' name='major' value=".$r['major']."></td>";
echo "<td><input type='text' name='from_year' value=".$r['from_year']."></td>";
echo "<td><input type='text' name='to_year' value=".$r['to_year']."></td>";
echo "<td><input type='text' name='text' value=".$r['text']."></td>";
echo "<td>";
echo "<button class='edit-user4 btn btn-primary' data-edit='".$r['id']."'>編輯</button>";
echo "</td>";
echo "</tr>";
}
?>