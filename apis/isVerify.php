<?php

$name = $_GET['name']; //받은 값 : TEST0

$db = mysqli_connect('127.0.0.1', 'root', 'autoset', 'dasom'); //서버주소, php 아이디, 비번, 스키마 이름
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL!";
}



//echo("UPDATE `user` SET `isVerify`=1 WHERE `name` = '$name'");

$sql_true = "UPDATE `user` SET `isVerify`=1 WHERE `name` = '$name'";

mysqli_query($db, $sql_true);

echo "<script>alert('승인되었습니다.'); history.go(-1);</script>";
 ?>
