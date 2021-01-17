<?php
$con=mysqli_connect("localhost","root","","arstoryplace");

if(mysqli_connect_errno($con)){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_set_charset($con,"utf8"); // db와 데이터를 주고 받을 때 사용할 기본 문자

$userName=$_POST['username'];
$userID=$_POST['id'];
$userPW=$_POST['pw'];
$userSex=$_POST['sex'];


$sql="INSERT INTO UserInfo(username, id, pw, sex)VALUES('$userName','$userID','$userPW','$userSex')";
//TODO 비밀번호는 해시값으로 보내자
if($con->query($sql)==TRUE){
    echo "New record create successfully";
}else{
    echo "Error: ".$sql."".$con->error;
}

mysqli_close($con);

?>