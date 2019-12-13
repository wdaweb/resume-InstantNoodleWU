<?php
  include_once "../base.php";

$sql="select * from self where id";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($rows);


echo "<tr>";
echo "<td>姓名</td>";
echo "<td>使用者名稱</td>";
echo "<td>電話</td>";
echo "<td>信箱</td>";
echo "<td>簡介</td>";
echo "<td>地址</td>";
echo "</tr>";

foreach ($rows as $r) {
echo "<tr id='tr-".$r['id']."'>";
echo "<td><input type='text' name='name' value=".$r['name']."></td>";
echo "<td><input type='text' name='username' value=".$r['username']."></td>";
echo "<td><input type='text' name='tel' value=".$r['tel']."></td>";
echo "<td><input type='text' name='email' value=".$r['email']."></td>";
echo "<td><input type='text' name='self_text' value=".$r['self_text']."></td>";
echo "<td><input type='text' name='addr' value=".$r['addr']."></td>";
echo "<td>";
echo "<button class='edit-user btn btn-primary' data-edit='".$r['id']."'>編輯</button>";
echo "</td>";
echo "</tr>";
}
?>