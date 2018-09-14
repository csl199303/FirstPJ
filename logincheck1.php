<?php
    $username=$_POST['username'];//获取html中的用户名（通过post请求） 
    $password=$_POST['password'];//获取html中的密码（通过post请求）
	echo $username,'fff',$password;	
    $conn = new mysqli("localhost", "root", "csl1993", "test");
	$username='admin123';
    if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	} 
 
	$sql = "select * from user where username ='{$username}';";
	$result = $conn->query($sql); 
    $dbusername=null; 
    $dbpassword=null; 
    while ($row=mysqli_fetch_array($result)) {//while循环将$result中的结果找出来 
      $dbusername=$row["username"]; 
      $dbpassword=$row["password"]; 
	  #echo $dbusername,$dbpassword;
    } 
	$conn->close();
?>