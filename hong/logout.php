<?php
session_start();
if(isset($_SESSION['youname']))
{
    unset($_SESSION['youname']);
    echo "<script>alert('注销成功');location.href='index.php'</script>";  
}
?>

