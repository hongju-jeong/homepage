<?

$db = mysqli_connect('127.0.0.1', 'root', 'autoset', 'dasom'); //서버주소, php 아이디, 비번, 스키마 이름
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL!";
}
$table_name = "user";
$get_info = "SELECT `name`, `password`, `phone` FROM `user` WHERE 1";
$result = mysqli_query($db, $get_info);

$row = mysqli_fetch_array($result, MYSQL_BOTH);//어드민인 devleti는 목록에 안나오게
$row = mysqli_fetch_array($result, MYSQL_BOTH);
$row = mysqli_fetch_array($result, MYSQL_BOTH);




echo "<script>document.getElementById('information_table').innerHTML=
'<tr><td>名字</td><td>电话号码</td><td>邮箱</td><td>登录允许状态</td><td>允许状态变更</td><td>删除</td></tr>";

$name = $row[0];
setcookie($name);

while($row[0] != "") //이름이 ""이면 break;
{
  echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td><button>状态变更</button></td><td><button>删除</button></td></tr>";
  $row = mysqli_fetch_array($result, MYSQL_BOTH);
}
  echo "';</script>";

 ?>
