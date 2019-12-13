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
echo "<tr>";
echo "<td>".$r['school']."</td>";
echo "<td>".$r['education']."</td>";
echo "<td>".$r['major']."</td>";
echo "<td>".$r['from_year']."</td>";
echo "<td>".$r['to_year']."</td>";
echo "<td>".$r['text']."</td>";
echo "<td>";
echo "</td>";
echo "</tr>";
}
?>