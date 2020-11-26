<?php 

include("config.php");

$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username = test_input($_POST["user2"]);
	$password = test_input($_POST["pass"]);
}

$len =  mb_strlen($username,'UTF8'); 
if ($len > 10) {
	echo "<script>alert('用户名过长，无法注册！');location.href='index.php'</script>";
}else{

	$len2 = mb_strlen($password,'UTF8'); 
	if ($len2 < 6) {
		echo "<script>alert('密码过于简单，注册失败！');location.href='index.php'</script>";
		return 0;
	}

	if (!$conn) {
		printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
		exit;
	}

	$sql1 = "select * from user where username='$username'";

	$result1 = $conn->query($sql1);

	if(mysqli_fetch_row($result1)){	

		echo "<script>alert('用户名已存在！无法注册');location.href='index.php'</script>";  
	}else{
		$sql = "INSERT INTO user (username,password) VALUES ('$username','$password')";

		$result = $conn->query($sql);

		if ($result){
			echo "<script>alert('注册成功！可返回进行登录！');location.href='index.php'</script>";

		}else{
			echo "<script>alert('注册过程中遇到未知错误！请重新注册');</script>";
		}
	}	
}



$conn->close();


?>

