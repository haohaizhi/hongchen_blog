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
<title>红尘客栈</title>
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

<script src="editormd/examples/js/jquery-min.js"></script>
<script src="editormd/lib/flowchart.min.js"></script>
<script src="editormd/lib/jquery.flowchart.min.js"></script>
<script src="editormd/lib/marked.min.js"></script>
<script src="editormd/lib/prettify.min.js"></script>
<script src="editormd/lib/raphael.min.js"></script>
<script src="editormd/lib/sequence-diagram.min.js"></script>
<script src="editormd/lib/underscore.min.js"></script>
<script src="editormd/editormd.min.js"></script>
<!-- <script src="js/jquery.lazyload.min.js"></script> -->

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

<div style="height:60px;"></div>
<section class="container">
<div class="content-wrap">
<div class="content">
  <header class="article-header">

  <?php
    include("config.php");
    if (!$conn) {
      printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
      exit;
    }
    mysqli_set_charset($conn, 'utf8');    
 
    $id_now = $_GET['id'];
    $_SESSION['ID']=$id_now;
    $sql1 = "update artcles set view=view+1 where id=$id_now";
    $sql2 = "select title,author,kind,txt,dates,view,chat from artcles where id=$id_now";
    $sql3 = "select count(*) from user";
    $sql4 = "select count(*) from artcles";
    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);
    $user_num = mysqli_fetch_row($conn->query($sql3));
    $art_num = mysqli_fetch_row($conn->query($sql4));
    while($row = mysqli_fetch_array($result2))
    {
        echo '<h1 class="article-title"><a href="#" title="'.$row['title'].'" >'.$row['title'].'</a></h1>';
        echo '<div class="article-meta"> <span class="item article-meta-time">
              <time class="time" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="发表时间"><i class="glyphicon glyphicon-time"></i>'.$row['dates'].'</time>
                </span> <span class="item article-meta-source" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="作者"><i class="glyphicon glyphicon-globe"></i>'.$row['author'].'</span> <span class="item article-meta-category" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="主题"><i class="glyphicon glyphicon-list"></i> <a href="#" title="主题" >'.$row['kind'].'</a></span> <span class="item article-meta-views" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="浏览量"><i class="glyphicon glyphicon-eye-open"></i>'.$row['view'].'</span> <span class="item article-meta-comment" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="评论量"><i class="glyphicon glyphicon-comment"></i>'.$row['chat'].'</span> </div>';

        echo '</header>';
        $blog = $row['txt'];
    }
    
  ?>
  <link rel="stylesheet" href="editor.md-master/css/editormd.min.css"/>
  <div id="doc-content">
  <textarea style="display:none;">
  <?php echo $blog; ?>   
  </textarea>
  </div>
  <script type="text/javascript">
    var testEditor;
    $(function () {
        testEditor = editormd.markdownToHTML("doc-content", {//注意：这里是上面DIV的id
            htmlDecode: "style,script,iframe",
            emoji: true,
            taskList: true,
            tex: true, // 默认不解析
            flowChart: true, // 默认不解析
            sequenceDiagram: true, // 默认不解析
            codeFold: true,
    });});
 </script>



	<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a></div>

		  <script>                  window._bd_share_config = { "common": { "bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "1", "bdSize": "32" }, "share": {} }; with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=0.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
  </article>
  


  <div class="title" id="comment">
	<h3>评论</h3>
  </div>
  <div id="respond">
		<form id="comment-form" name="comment-form" action="chat.php" method="POST">
			<div class="comment">
				
				<div class="comment-box">
					<textarea placeholder="您的评论或留言（必填）" required="required" name="comment-textarea" id="comment-textarea" cols="100%" rows="3" tabindex="3"></textarea>
					<div class="comment-ctrl">
					
						<div class="comment-success" style="display: none;"> <i class="fa fa-check"></i> <span class="comment-prompt-text">评论提交成功...</span> </div>
						<button type="submit" name="comment-submit" id="comment-submit" tabindex="4">评论</button>
					</div>
				</div>
			</div>
		</form>	
	</div>

  <?php
     $get_chat = "select username,said,dates from chats where artcle_id='$id_now' order by id desc";
     $res = $conn->query($get_chat);
     if($res && mysqli_num_rows($res)){
            
            while ($rows = mysqli_fetch_assoc($res)) {
              echo '<div id="postcomments">
                    <ol id="comment_list" class="commentlist">  ';
              echo '<li class="comment-content"><span class="comment-f">#2</span><div class="comment-main"><p><a class="address" href="#" rel="nofollow" target="_blank">'.$rows['username'].'</a><span class="time">('.$rows['dates'].')</span><br>'.$rows['said'].'</p></div></li>';

              echo '</ol></div>';
        }
      
      }
      $conn->close();
?>

</div>
</div>

<aside class="sidebar">
<div class="fixed">
  <div class="widget widget-tabs">
	<ul class="nav nav-tabs" role="tablist">
	  <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab" draggable="false">统计信息</a></li>
	  <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab" draggable="false">联系站长</a></li>
	</ul>
	<div class="tab-content">
	  <div role="tabpanel" class="tab-pane contact active" id="notice">
		<h2><?php echo "文章总数:".$art_num[0]; ?> 
		  </h2>
		  <h2><?php echo "用户数:".$user_num[0]; ?> 
		  <span id="sitetime"></span></h2>
	  </div>
		<div role="tabpanel" class="tab-pane contact" id="contact">
		  <h2>QQ:
			  <a href="" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title="" draggable="false" data-original-title="QQ:2584456944">2584456944</a>
		  </h2>
		  <h2>Email:
		  <a href="mailto:864384773@qq.com" target="_blank" data-toggle="tooltip" rel="nofollow" data-placement="bottom" title="" draggable="false" data-original-title="Email:2584456944@qq.com">2584456944@qq.com</a></h2>
	  </div>
	</div>
  </div>
  <div class="widget widget_search">
	<form class="navbar-form" action="list.php" method="get">
	  <div class="input-group">
		<input type="text" name="name" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
		<span class="input-group-btn">
		<button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
		</span> </div>
	</form>
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
