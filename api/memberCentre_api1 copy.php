<?php
  include_once "../base.php";

$sql="select * from self where id";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($rows);


echo "<tr>";
echo "<td>電話</td>";
echo "<td>信箱</td>";
echo "<td>地址</td>";
echo "<td></td>";
echo "</tr>";

foreach ($rows as $r) {
echo "<tr>";
echo "<td>".$r['tel']."</td>";
echo "<td>".$r['email']."</td>";
echo "<td>".$r['addr']."</td>";
echo "<td>";
echo "</td>";
echo "</tr>";
}
?>