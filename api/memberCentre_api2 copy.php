<?php
  include_once "../base.php";

$sql="select * from status where id";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($rows);


echo "<tr>";
echo "<td>年資</td>";
echo "<td>尋求職務類別</td>";
echo "<td>希望待遇</td>";
echo "<td>希望獲得職位</td>";
echo "<td>希望工作地點</td>";
echo "<td>語言能力</td>";
echo "<td>技能專長</td>";
echo "<td></td>";
echo "</tr>";

foreach ($rows as $r) {
echo "<tr>";
echo "<td>".$r['sen']."</td>";
echo "<td>".$r['job_type']."</td>";
echo "<td>".$r['salary']."</td>";
echo "<td>".$r['job_offr']."</td>";
echo "<td>".$r['job_site']."</td>";
echo "<td>".$r['lan']."</td>";
echo "<td>".$r['skill']."</td>";
echo "<td>";
echo "</td>";
echo "</tr>";
}
?>