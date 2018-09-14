<!doctype html> 
<html> 
<head> 
  <meta charset="UTF-8"> 
  <title>登录系统的后台执行过程</title> 
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
    if (is_null($dbusername)) {//用户名在数据库中不存在时跳回index.html界面 
  ?> 
  <script type="text/javascript"> 
    alert("用户名不存在"); 
    window.location.href="../home.html"; 
  </script> 
  <?php  
    } 
    else { 
      if ($dbpassword!=$password){//当对应密码不对时跳回home.html界面 
  ?> 
  <script type="text/javascript"> 
    alert("密码错误"); 
    window.location.href="../home.html"; 
  </script> 
  <?php  
      } 
      else { 
        $_SESSION["username"]=$username; 
        $_SESSION["code"]=mt_rand(0, 100000);//给session附一个随机值，防止用户直接通过调用界面访问 
  ?> 
  <script type="text/javascript"> 
    window.location.href="../center.html"; 
  </script> 
  <?php  
      } 
    } 
  $conn->close();//关闭数据库连接，如不关闭，下次连接时会出错 
  ?> 
</body> 
</html> 