<?php
  $mbuser=$_POST['mbid'];
  $mbpw=$_POST['mbpw'];
  $mbphone=$_POST['mbphone'];
  echo "아이디 : $mbuser<br> 비번 : $mbpw<br> 핸드폰 : $mbphone";
                                                      //스키마
  $db = mysqli_connect('localhost','root','autoset','dasom');
  if(mysqli_connect_errno()){
    echo "연결에러";
  }
$pw_encode = md5($mbpw);
$table_name = "user";

$sql = "INSERT INTO `user`(`name`, `password`, `phone`) VALUES ('$mbuser','$pw_encode','$mbphone')";
mysqli_query($db, $sql);
mysqli_close($db);
?>
