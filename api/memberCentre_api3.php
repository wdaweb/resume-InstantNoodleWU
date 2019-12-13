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
echo "<tr id='tr3-".$r['id']."'>";
echo "<td><input type='text' name='job_name' value=".$r['job_name']."></td>";
echo "<td><input type='text' name='com_name' value=".$r['com_name']."></td>";
echo "<td><input type='text' name='job_content' value=".$r['job_content']."></td>";
echo "<td><input type='text' name='from_year' value=".$r['from_year']."></td>";
echo "<td><input type='text' name='from_mon' value=".$r['from_mon']."></td>";
echo "<td><input type='text' name='to_year' value=".$r['to_year']."></td>";
echo "<td><input type='text' name='to_mon' value=".$r['to_mon']."></td>";
echo "<td>";
echo "<button class='edit-user3 btn btn-primary' data-edit='".$r['id']."'>編輯</button>";
echo "<button class='del-user3 btn btn-light' data-del='".$r['id']."'>刪除</button>";
echo "</td>";
echo "</tr>";
}
?>