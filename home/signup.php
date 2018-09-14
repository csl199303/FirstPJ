<!doctype html> 
<html> 
<head> 
  <meta charset="UTF-8"> 
  <title>用户注册</title> 
</head> 
<body> 
  <?php   
    session_start();//登录系统开启一个session内容 
    $username=$_REQUEST["username"];//获取html中的用户名（通过post请求） 
    $password=$_REQUEST["password"];//获取html中的密码（通过post请求） 
 
    $conn = new mysqli("localhost", "root", "csl1993", "test");
    if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	} 
	$conn->query("SET NAMES 'UTF8'");
	$sql = "select * from user where username ='{$username}';";
	$result = $conn->query($sql); 
    $dbusername=null; 
    $dbpassword=null; 
    while ($row=mysqli_fetch_array($result)) {//while循环将$result中的结果找出来 
      $dbusername=$row["username"]; 
      $dbpassword=$row["password"]; 
    } 
    if (!is_null($dbusername)) {//用户名在数据库中不存在时跳回signup.html界面 
  ?> 
  <script type="text/javascript"> 
    alert("用户已存在！！！"); 
    window.location.href="signup.html"; 
  </script> 
  <?php  
    }else{
	$nsql="insert into user (username,password) values('{$username}','{$password}')";
	if(($conn->query($nsql))>0) {
  ?> 	
	<script type="text/javascript"> 
		alert("注册成功！！！");
		window.location.href="../home.html";
	</script> 
   <?php
	}
	else{
	?>
	<script type="text/javascript"> 
		alert("数据库写入失败！！！"); 
		window.location.href="signup.html";
	</script> 
	<?php
	} 
	}    
	$conn->close();//关闭数据库连接，如不关闭，下次连接时会出错 
	?> 
</body> 
</html> 