<?php 
session_start();

include("config.php");

$artcle_id = $username = $said = $date ="";
$artcle_id = $_SESSION['ID'];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username = $_SESSION['youname'];
	$said = test_input($_POST["comment-textarea"]);
	$date = date("Y-m-d H:i:s");
}

$sql = "INSERT INTO chats (artcle_id,username,said,dates) VALUES ('$artcle_id','$username','$said','$date')";

$res = $conn->query($sql);

 if ($res){
 	echo '<script>alert("评论发表成功！");location.href="show.php?id='.$artcle_id.'"</script>';
 	$sql2 = "update artcles set chat=chat+1 where id=$artcle_id";
 	$result2 = $conn->query($sql2);

 }else{
 		echo '<script>alert("未知错误，评论发表失败!");location.href="show.php?id='.$artcle_id.'"</script>';
 }

$conn->close();


?>

