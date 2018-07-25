<?

$db = mysqli_connect('127.0.0.1', 'root', 'autoset', 'dasom'); //서버주소, php 아이디, 비번, 스키마 이름
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL!";
}
$table_name = "user";
$get_info = "SELECT `name`, `password`, `phone` 'isVerify'FROM `user` WHERE 1";
$result = mysqli_query($db, $get_info);

$row = mysqli_fetch_array($result, MYSQL_BOTH);//어드민인 devleti는 목록에 안나오게
$row = mysqli_fetch_array($result, MYSQL_BOTH);
$row = mysqli_fetch_array($result, MYSQL_BOTH);




echo "<script>document.getElementById('information_table').innerHTML=
'<tr><td>이름</td><td>비밀번호</td><td>전화번호</td></tr>";

$name = $row[0];
setcookie($name);

while($row[0] != "") //이름이 ""이면 break;
{
  echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td><form method=\'Get\' action=\'./apis/isVerify.php\'><button type=\'submit\' name=\'name\' value = \'$row[0]\'>승인</button></form></td><td><form method = \'GET\' action = \'./apis/del_user.php\'><button type=\'submit\' name = \'name\' value = \'$row[0]\'>삭제</button></form></td></tr>";
  $row = mysqli_fetch_array($result, MYSQL_BOTH);
}
  echo "';</script>";

?>
