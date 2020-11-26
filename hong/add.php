<?php 
session_start();
include("config.php");

$title = $kind = $txt = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$title = test_input($_POST["youtitle"]);
	$author = $_SESSION['youname'];
	$kind = test_input($_POST["youkind"]);
	$txt = test_input($_POST["my-editor-markdown-doc"]);
	$date = date("Y-m-d");
}

$sql = "INSERT INTO artcles (title,author,kind,txt,dates,view,chat) VALUES ('$title','$author','$kind','$txt','$date',0,0)";

 $result = $conn->query($sql);

 if ($result){
 	echo "<script>alert('文章发表成功！');location.href='index.php'</script>";

 }else{
 		echo "<script>alert('文章内容有部分不合法，无法发表!');</script>";
 }



$conn->close();


?>

