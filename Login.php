<?php
    //Create Connection
    $conn = mysqli_connect("localhost","root","","arstoryplace");
    
    //Check Connection
    if(mysqli_connect_errno($con)){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    mysqli_set_charset($conn,"utf8"); // db와 데이터를 주고 받을 때 사용할 기본 문자

    $userid = $_POST["userID"];
    $userpw = $_POST["userPW"];

    $sql = "SELECT * FROM UserInfo WHERE userID = '$userid' AND UserPW = '$userpw'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            if($row['userID'] = $userid && $row['userPW'] = $userpw){
                echo "Login Successfully";
            }else{
                echo "Login Failed";
            }
        }
    }
    mysqli_close($conn);
?>