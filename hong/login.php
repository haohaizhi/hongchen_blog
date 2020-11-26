<?php 
session_start();
include("config.php");

$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username = test_input($_POST["user1"]);
	$password = test_input($_POST["pwd1"]);
}

if (!$conn) {
	printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
	exit;
}

$sql = "select * from user where username='$username' and password='$password' limit 1";

$result = $conn->query($sql);

if(mysqli_fetch_row($result)){
	$_SESSION['youname']=$username;

	echo "<script>alert('登陆成功');location.href='index.php'</script>";  
} else {  
	echo "<script>alert('用户名或密码错误！');location.href='sign.html'</script>";
}  

$conn->close();


?>

