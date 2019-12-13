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
echo "<tr id='tr2-".$r['id']."'>";
echo "<td><input type='text' name='sen' value=".$r['sen']."></td>";
echo "<td><input type='text' name='job_type' value=".$r['job_type']."></td>";
echo "<td><input type='text' name='salary' value=".$r['salary']."></td>";
echo "<td><input type='text' name='job_offr' value=".$r['job_offr']."></td>";
echo "<td><input type='text' name='job_site' value=".$r['job_site']."></td>";
echo "<td><input type='text' name='lan' value=".$r['lan']."></td>";
echo "<td><input type='text' name='skill' value=".$r['skill']."></td>";
echo "<td>";
echo "<button class='edit-user2 btn btn-primary' data-edit='".$r['id']."'>編輯</button>";
echo "</td>";
echo "</tr>";
}
?>