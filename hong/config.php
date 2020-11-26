<?php

$db_host = "localhost:3306";
$db_type = "mysql";
$db_user = "root";
$db_pwd = "123456";
$db_name = "hong";
 
// 创建连接
$conn = mysqli_connect($db_host, $db_user, $db_pwd,$db_name);
 
function test_input($data)

{

  $data = trim($data);

  $data = stripslashes($data);

  $data = htmlspecialchars($data);

  return $data;

}

?>




