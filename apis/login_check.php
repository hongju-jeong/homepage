<?php
$user_id=$_POST['user_id'];
$user_password=$_POST['user_password'];

$db = mysqli_connect('localhost','root','autoset','dasom');
if(mysqli_connect_errno()){
  echo "연결에러";
}
//echo $user_id.$user_password;

$pass_encode = md5($user_password);

$table_name = "user";
$sql = "SELECT password FROM $table_name WHERE name='$user_id'";

if($result = mysqli_query($db, $sql))//????
{
    if(mysqli_num_rows($result) == 0)
    {
        echo "<script>alert('No matched ID.');</script>";
        echo "<script>window.location.replace('../index.html');</script>";
    }
    else
    {
        $row = mysqli_fetch_assoc($result);
        if($row["password"] == $pass_encode) // 로그인 성공
        {
            // 리디렉션
            echo "<script>alert('Login Succeed.');</script>";
            echo "<script>location.href='http://www.naver.com';</script>";
        }
        else
        {
            echo "<script>alert('Wrong Password.');</script>";
            echo "<script>window.location.replace('../index.html');</script>";
        }
    }
}

mysqli_free_result($result);
mysqli_close($db);

//추가하는건 insert 검색,가져오는건 select 업데잉  update 지우는 delete
//if('test' == $user_id and 'testpw' == $user_password)
//  echo"<script>alert('성공'); location.href='http://www.naver.com';</script>";
//else
//  echo"<script>alert('비밀번호가 틀렸습니다.'); history.go(-1);</script>"


?>
