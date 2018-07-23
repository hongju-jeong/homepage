<?php
  $mbuser=$_POST['mbid'];
  $db = mysqli_connect('localhost','root','autoset','dasom');
  if(mysqli_connect_errno()){
    echo "연결에러";
  }
  $table_name = "user";
  $sql = "SELECT password FROM $table_name WHERE name='$mbuser'";

  if($result = mysqli_query($db, $sql))//????
  {
      if(mysqli_num_rows($result) == 0)
      {
          echo "<script>alert('가능한 아이디 입니다!');</script>";
          echo "<script>document.f.mbid.focus();</script>";
      }
      else
      {
        echo"<script>alert('이미 존재하는 아이디입니다.');</script>";
        echo "<script>window.location.replace('../join.html');</script>";
      }
  }
  mysqli_free_result($result);
  mysqli_close($db);

 ?>
