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
<title>红尘客栈-<?php 
                     
                      $blog_name=$_GET['name'];
                      echo $blog_name; 
                      
                ?></title>
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
<div class="content">
  <div class="title">
	<h3 style="line-height: 1.3"><?php echo $blog_name; ?></h3>
  </div>


<?php
    include("config.php");
    if (!$conn) {
      printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
      exit;
    }
    mysqli_set_charset($conn, 'utf8');

    $sql = "select id,kind,title,dates,view,chat,txt from artcles where title like '%$blog_name%' order by id desc";
    $result = $conn->query($sql);
    if($result && mysqli_num_rows($result)){
        while ($row2 = mysqli_fetch_assoc($result)) {
            echo '<article class="excerpt excerpt-1" style="">';
            echo '<a class="focus" href="show.php?id='.$row2['id'].'" title="红尘客栈" target="_blank" ><img class="thumb" data-original="images/hong.png" src="images/hong.png" style="display: inline;"></a>';
            echo '<header><a class="cat" href="#">'.$row2['kind'].'<i></i></a>';
            echo '<h2><a href="show.php?id='.$row2['id'].'" target="_blank" >'.$row2['title'].'</a>
                  </h2></header>';
            echo '<p class="meta">
                  <time class="time"><i class="glyphicon glyphicon-time"></i>'.$row2['dates'].'</time>
                  <span class="views"><i class="glyphicon glyphicon-eye-open"></i>'.$row2['view'].'</span> <a class="comment" href="##comment" title="评论" target="_blank" ><i class="glyphicon glyphicon-comment"></i>'.$row2['chat'].'</a></p>';
            echo '<p class="note">'.substr($row2['txt'],0,400).'</p>';
            echo '</article>';
      
        }
      
      }
      $conn->close();
?>


</div>
</div>

<aside class="sidebar">
<div class="fixed">
  <div class="widget widget_search">
	<form class="navbar-form" action="list.php" method="get">
	  <div class="input-group">
		<input type="text" name="name" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
		<span class="input-group-btn">
		<button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
		</span> </div>
	</form>
  </div>
  <div class="widget widget_sentence">
	<h3>标签云</h3>
	<div class="widget-sentence-content">
		<ul class="plinks ptags">                
			<li><a href="#list/67/" title="移动统计" draggable="false">移动统计 <span class="badge">1</span></a></li>                
			<li><a href="#list/256/" title="编程" draggable="false">编程<span class="badge">1</span></a></li>      
			<li><a href="#list/252/" title="VS2010" draggable="false">VS2010 <span class="badge">1</span></a></li>                
			<li><a href="#list/162/" title="服务器" draggable="false">服务器 <span class="badge">1</span></a></li>                
			<li><a href="#list/133/" title="html标签" draggable="false">html标签 <span class="badge">1</span></a></li>                
			<li><a href="#list/49/" title="算法" draggable="false">算法 <span class="badge">2</span></a></li>                
			<li><a href="#list/22/" title="爬虫" draggable="false">爬虫 <span class="badge">2</span></a></li>                
			<li><a href="#list/132/" title="socket" draggable="false">socket <span class="badge">6</span></a></li>                
		</ul>
	</div>
  </div>
</div>


<div class="widget widget_hot">
    <h3>程序员工具箱</h3>
</div>


<div class="thumbnail" style="height: 220px;background-color: #fafafa;border:none;box-shadow: rgba(0,0,0,.3) 0 1px 3px 0"><div class="thumbnail-img  tcenter" style="background-color: #005587;"><a href="exchange.php" title="进制转换器" target="_blank"><img class="lazy" src="http://www.yuangongju.com/upload/tool/72_72/53ba067d8e993.png" width="35%"><div class="clear5"></div><em class="h3">进制转换器</em></a></div><div class="caption tcenter"><p class="">二进制、八进制、十进制、十六进制之间相互转换。
</p></div></div>

<div class="thumbnail" style="height: 220px;background-color: #fafafa;border:none;box-shadow: rgba(0,0,0,.3) 0 1px 3px 0"><div class="thumbnail-img  tcenter" style="background-color: #7c868d;"><a href="color.php" title="颜色代码转换" target="_blank"><img class="lazy" src="http://www.yuangongju.com/upload/tool/72_72/53aaa0f4d0b4a.png" width="35%"><div class="clear5"></div><em class="h3">颜色代码转换</em></a></div><div class="caption tcenter"><p class="">RGB转16进制，常用颜色值（hex、rgb、rgba、argb、hsl、hsv）之间互相转换。</p></div></div>
 
<div class="thumbnail" style="height: 220px;background-color: #fafafa;border:none;box-shadow: rgba(0,0,0,.3) 0 1px 3px 0"><div class="thumbnail-img  tcenter" style="background-color: #5b325f;"><a href="ascii.php" title="AscII码表" target="_blank"><img class="lazy" src="http://www.yuangongju.com/upload/tool/72_72/53f06dbd15fbd.png" width="35%"><div class="clear5"></div><em class="h3">AscII码表</em></a></div><div class="caption tcenter"><p class="">查询Ascii码对应的二进制、八进制、十进制、十六进制、字符等数据。
</p></div></div>



 <div class="widget widget_sentence">    
	<a href="#" target="_blank" rel="nofollow" title="红尘客栈" >
	<img style="width: 100%" src="images/hong3.jpg" alt="红尘客栈" ></a>    
 </div>

<div class="widget widget_sentence">
  <h3>友情链接</h3>
  <div class="widget-sentence-link">
  <a href="https://learnku.com/" title="LearnKu学习库" target="_blank" style="color:blue">LearnKu学习库</a>&nbsp;&nbsp;&nbsp;
  <a href="https://gitee.com/explore" title="码云" target="_blank" style="color:red">开源-码云</a>&nbsp;&nbsp;&nbsp;
  <a href="http://c.biancheng.net/" title="C语言中文网" target="_blank" style="color:green">C语言中文网</a>&nbsp;&nbsp;&nbsp;
  <a href="https://www.zhihu.com/" title="知乎" target="_blank" style="color:brown">知乎</a>&nbsp;&nbsp;&nbsp;
  <a href="http://www.lanrentuku.com/" title="懒人图库" target="_blank" style="color:purple">懒人图库</a>&nbsp;&nbsp;&nbsp;
  <a href="https://tool.lu/" title="在线工具" target="_blank" style="color:fuchsia">在线工具</a>&nbsp;&nbsp;&nbsp;
  <a href="https://www.yht7.com/" title="云海天教程" target="_blank" style="color:brown">云海天教程</a>&nbsp;&nbsp;&nbsp;
  </div>
</div>

</aside>
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
