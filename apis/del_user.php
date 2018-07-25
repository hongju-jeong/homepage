<?php

$name = $_GET['name']; //받은 값 : TEST05

$db = mysqli_connect('127.0.0.1', 'root', 'autoset', 'dasom'); //서버주소, php 아이디, 비번, 스키마 이름
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL!";
}


//DELETE FROM `user` WHERE `name` = '$name'
echo("DELETE FROM `user` WHERE `name` = '$name'");

$sql = "DELETE FROM `user` WHERE `name` = '$name'";

mysqli_query($db, $sql);

echo("<script>alert('삭제되었습니다');history.go(-1);</script>");



 ?>
