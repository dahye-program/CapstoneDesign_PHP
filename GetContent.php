<?php
$con=mysqli_connect("localhost","root","","arstoryplace");

if(mysqli_connect_errno($con)){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_set_charset($con,"utf8"); // db와 데이터를 주고 받을 때 사용할 기본 문자

	$query= "SELECT userContent FROM UserContent";
	//content 값 select
	$result = mysqli_query($conn, $query);
	if(mysqli_num_row($result)>0)
	{
		while($row = mysqli_fetch_assoc($result)){
			echo "내용:".$row['userContent'].";";
		}
	}
	mysqli_close($conn); // close
?>