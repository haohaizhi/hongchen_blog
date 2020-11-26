<?php

session_start();

?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>红尘客栈-程序员的网站</title>
<meta name="keywords" content="">
<meta name="description" content="">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/nprogress.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" href="images/icon.png">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="lib/layui/css/layui.css">

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/nprogress.js"></script>
<script src="js/jquery.lazyload.min.js"></script>
<!--[if gte IE 9]>
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/html5shiv.min.js" type="text/javascript"></script>
<script src="js/respond.min.js" type="text/javascript"></script>
<script src="js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
<script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
</head>

<header id="b-public-nav" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                    <a class="navbar-brand" href="#">
                    <img src="images/logo.jpg">
                
                </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav b-nav-parent">
                <li class="hidden-xs b-nav-mobile"></li>
                <li class="b-nav-cname   b-nav-active ">
                    <a href="index.php">首页</a>
                </li>
                    <li class="b-nav-cname ">
                        <a href="list.php?name=Java">Java</a>
                    </li>
                    <li class="b-nav-cname ">
                        <a href="list.php?name=PHP">PHP</a>
                    </li>
                    <li class="b-nav-cname ">
                        <a href="list.php?name=Linux">Linux</a>
                    </li>
                    <li class="b-nav-cname ">
                        <a href="list.php?name=C/C++">C/C++</a>
                    </li>
                    <li class="b-nav-cname ">
                        
                        <a href="list.php?name=Python">Python</a>
                    </li>
                    <li class="b-nav-cname ">
                                                 
                        <a href="list.php?name=服务器">服务器</a>
                    </li>
                    <li class="b-nav-cname ">
                                   
                        <a href="https://docs.pythontab.com/">文档</a>
                    </li>
                    <li class="b-nav-cname ">
                                   
                        <a href="big.php">大牛笔记</a>
                    </li>
                    <li class="b-nav-cname ">
                        
                        <a href="https://coderlane.net/sandbox">代码测试</a>
                    </li>
                    <li class="b-nav-cname ">
                                   
                        <a href="game.php">娱乐专区</a>
                    </li>
            </ul>
         
            <ul id="b-login-word" class="nav navbar-nav navbar-right">
                    <li class="b-nav-cname b-nav-login">
                        <div class="hidden-xs b-login-mobile"></div>
                           <?php
                        if(isset($_SESSION['youname']))
                          {
                              echo '<a href="logout.php">注销&nbsp;&nbsp;&nbsp;&nbsp;'.$_SESSION["youname"].'</a>';

                          }else{
                              echo '<a href="sign.html">登录</a>';
                          }
                        ?>
                    </li>
            </ul>
        </div>       
    </div>
</header>



<body>
 
<script LANGUAGE="JavaScript">
<!-- Begin
var hex = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F");
function CKparseInt(n, r) {
for (var i = 0; i < n.length; ++i)
if (n.charAt(i) >= r) {
alert("格式错");
return 0;
}
if (isNaN(M = parseInt(n, r)))
alert ("格式错");
return M;
}//js原生态各种进制之间及时转换特效代码下载
// decimal to any other base 2 to 16
function DecimaltoAnother(A, radix) {
s = "";
while (A >= radix) {
s += hex[A % radix]; // remainder
A = Math.floor(A / radix); // quotient, rounded down
}
return transpose(s += hex[A]);
}
// string reversal
function transpose(s) {
N = s.length;
for (i = 0,t = ""; i < N; i++)
t += s.substring(N-i-1, N-i); // s.substring(from, to)
return t;
}//js原生态各种进制之间及时转换特效代码下载
// convert item.value using radix
function EvalAny(item, r) {
M = CKparseInt(item.value, r); // check this one
for (var i = 0, MyForm = document.forms[0]; i < MyForm.length; ++i) // re-evaluate all
MyForm.elements[i].value = DecimaltoAnother(M, MyForm.elements[i].name.substr(1,3));
}
// End -->
</script>
<div style="height:100px;"></div>




<form method="post">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;二进制:<input name="b002" value="0" onChange="EvalAny(this, 2)" size=27><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;三进制:<input name="t003" value="0" onChange="EvalAny(this, 3)" size=21><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;五进制:<input name="q005" value="0" onChange="EvalAny(this, 5)" size=16><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;八进制:<input name="o008" value="0" onChange="EvalAny(this, 8)" size=12><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;十进制:<input name="d010" value="0" onChange="EvalAny(this, 10)" size=11><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;十六进制:<input name="h016" value="0" onChange="EvalAny(this, 16)" size=8><br>
</form>




<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.ias.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
