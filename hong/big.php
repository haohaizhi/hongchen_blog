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


<body class="user-select">
<div style="height:60px;"></div> 

<section class="container">
<div class="content-wrap">
<div class="container">
          <div style="height:60px;"></div> 
            <div class="inbound-link">
                <a href="http://www.xmcve.com/" target="_blank">
                    <div class="alert alert-info" role="alert">
            <strong>星盟安全团队 </strong>很强很厉害 www.xmcve.com
            </div>    
        </a>

                <a href="https://www.cnblogs.com/H4lo" target="_blank">
                    <div class="alert alert-success" role="alert">
            <strong>H4lo大佬的博客 </strong>Linux Pwner &amp;&amp; IOT Security Researcher. www.cnblogs.com/H4lo
            </div>    
        </a>

               

                <a href="https://thunderjie.github.io/" target="_blank">
                    <div class="alert alert-info" role="alert">
            <strong>Thunder_J大佬的博客 </strong>又是一位很强的pwn师傅。 thunderjie.github.io
            </div>    
        </a>

                <a href="https://carlstar.club/" target="_blank">
                    <div class="alert alert-success" role="alert">
            <strong>carlstar大佬的博客 </strong> Pwner &amp;&amp; Penetration test  carlstar.club
            </div>    
        </a>


                <a href="https://baijunyao.com/" target="_blank">
                    <div class="alert alert-info" role="alert">
            <strong>白俊遥大佬的博客 </strong> https://baijunyao.com/
            </div>    
        </a>
                        <a href="https://www.awaimai.com/" target="_blank">
                    <div class="alert alert-success" role="alert">
            <strong>歪麦大佬的博客 </strong> 歪麦 &amp;&amp;https://www.awaimai.com/
            </div>    
        </a>

                             <a href=" https://baagee.vip/" target="_blank">
                    <div class="alert alert-info" role="alert">
            <strong>baagee大佬的博客 </strong> baagee &amp;&amp; https://baagee.vip/
            </div>    
        </a>           <a href="http://chenxuhou.com/" target="_blank">
                    <div class="alert alert-success" role="alert">
            <strong>chenxuhou大佬的博客 </strong> 程序猴 &amp;&amp; http://chenxuhou.com/
            </div>    
        </a>
                        <a href="https://www.hotxf.com/" target="_blank">
                    <div class="alert alert-info" role="alert">
            <strong>小风大佬的博客 </strong>小风 &amp;&amp;https://www.hotxf.com/
            </div>    
        </a>
            </div>            

        </div>
</div>


</section>

<footer class="footer">
<div class="container">
 <p>Copyright &copy; 2020.Company name All rights reserved.<a target="_blank" href="https://blog.csdn.net/qq_37076942">blog.csdn.net</a> </p>
</div>
<div id="gotop"><a class="gotop"></a></div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.ias.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
