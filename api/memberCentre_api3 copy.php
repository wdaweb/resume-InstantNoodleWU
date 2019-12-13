<?php
  include_once "../base.php";

$sql="select * from experience where id";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($rows);


echo "<tr>";
echo "<td>工作名稱</td>";
echo "<td>公司名稱</td>";
echo "<td>工作內容</td>";
echo "<td colspan=2>從..</td>";
echo "<td colspan=2>到..</td>";
echo "<td></td>";
echo "</tr>";

foreach ($rows as $r) {
echo "<tr>";
echo "<td>".$r['job_name']."</td>";
echo "<td>".$r['com_name']."</td>";
echo "<td>".$r['job_content']."</td>";
echo "<td>".$r['from_year']."</td>";
echo "<td>".$r['from_mon']."</td>";
echo "<td>".$r['to_year']."</td>";
echo "<td>".$r['to_mon']."</td>";
echo "<td>";
echo "</td>";
echo "</tr>";
}
?>