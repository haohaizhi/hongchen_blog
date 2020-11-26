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
<meta name="keywords" content="博客,程序员,代码分享,技术博客,学习平台" />
<meta name="description" content="红尘客栈-程序员实用网站，无论是想学习知识，还是想分享技术，这都是一个很好的平台，同时网站也需要不断" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
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
                    <li class="b-nav-cname ">
                        <?php
                        if(isset($_SESSION['youname']))
                          {
                              echo '<a href="edit.php">我要发贴</a>';

                          }
                        ?>          
                        
                    </li>
            </ul>
         
            <ul id="b-login-word" class="nav navbar-nav navbar-right">
                     
                    <li class="b-nav-cname b-nav-login">
                        <div class="hidden-xs b-login-mobile" ></div>                       
                        <!-- <a href="sign.html"> -->
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
<div style="height:60px;" style="width:600px"></div>


<section class="container">
<div class="content-wrap">
<div class="content">

  <div id="focusslide" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	  <li data-target="#focusslide" data-slide-to="0" class="active"></li>
	  <li data-target="#focusslide" data-slide-to="1"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
	  <div class="item active">
	  <a href="#" target="_blank" title="程序员" >
	  <img src="images//2.jpg" alt="程序员" class="img-responsive"></a>
	  </div>
	  <div class="item">
	  <a href="#" target="_blank" title="专业办公" >
	  <img src="images//3.jpg" alt="专业办公" class="img-responsive"></a>
	  </div>
	</div>
	 </div>

  <article class="excerpt-minic excerpt-minic-index">
		<h2><span class="red">【置顶】</span><a target="_blank" href="#" title="红尘客栈：站长宣言" >红尘客栈：本站通告
		</h2>
		<p class="note">本站致力于搭建一个良好的编程人员交流平台，在这里，您可以分享自己的技术，发表学术性的文章，学习丰富的知识，还可以利用本站工具提高工作效率，偶尔还能放松一下身心。本站严禁打广告，不允许发表牵涉黄赌毒及违法内容，一经发现，永久封号！如果您有其他好的建议，可以联系站长哦！</p>
	</article>
  <div class="title">
	<h3>技术分享</h3>
  </div>


<?php
    include("config.php");
    if (!$conn) {
      printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
      exit;
    }
    mysqli_set_charset($conn, 'utf8');

    $sql = "select id,kind,title,dates,view,chat,txt from artcles order by id desc";
     $result = $conn->query($sql);
     if($result && mysqli_num_rows($result)){
            
            while ($row = mysqli_fetch_assoc($result)) {
              
            echo '<article class="excerpt excerpt-1" style="">';
            echo '<a class="focus" href="show.php?id='.$row['id'].'" title="红尘客栈" target="_blank" ><img class="thumb" data-original="images/hong.png" src="images/hong.png" style="display: inline;"></a>';
            echo '<header><a class="cat" href="#">'.$row['kind'].'<i></i></a>';
            echo '<h2><a href="show.php?id='.$row['id'].'" target="_blank" >'.$row['title'].'</a>
                  </h2></header>';
            echo '<p class="meta">
                  <time class="time"><i class="glyphicon glyphicon-time"></i>'.$row['dates'].'</time>
                  <span class="views"><i class="glyphicon glyphicon-eye-open"></i>'.$row['view'].'</span> <a class="comment" href="##comment" title="评论" target="_blank" ><i class="glyphicon glyphicon-comment"></i>'.$row['chat'].'</a></p>';
            echo '<p class="note">'.substr($row['txt'],0,400).'</p>';
            echo '</article>';
        }
      
      }
      $conn->close();
?>

 




</div>

</div>

<aside class="sidebar">
<div class="fixed">


<Script LANGUAGE="JavaScript">
 var months = new Array("一", "二", "三","四", "五", "六", "七", "八", "九","十", "十一", "十二");
 var daysInMonth = new Array(31, 28, 31, 30, 31, 30, 31, 31,30, 31, 30, 31);
 var days = new Array("日","一", "二", "三","四", "五", "六");
 var classTemp;
 var today=new getToday();
 var year=today.year;
 var month=today.month;
 var newCal; 

 function getDays(month, year) {
  if (1 == month) return ((0 == year % 4) && (0 != (year % 100))) ||(0 == year % 400) ? 29 : 28;
  else return daysInMonth[month];
 }

 function getToday() {
  this.now = new Date();
  this.year = this.now.getFullYear();
  this.month = this.now.getMonth();
  this.day = this.now.getDate();
 }

 function Calendar() {
  newCal = new Date(year,month,1);
  today = new getToday();   
  var day = -1;
  var startDay = newCal.getDay();
  var endDay=getDays(newCal.getMonth(), newCal.getFullYear());
  var daily = 0;
  if ((today.year == newCal.getFullYear()) &&(today.month == newCal.getMonth()))
  {
   day = today.day;
  }
  var caltable = document.all.caltable.tBodies.calendar;
  var intDaysInMonth =getDays(newCal.getMonth(), newCal.getFullYear());

  for (var intWeek = 0; intWeek < caltable.rows.length;intWeek++)
   for (var intDay = 0;intDay < caltable.rows[intWeek].cells.length;intDay++)
   {
    var cell = caltable.rows[intWeek].cells[intDay];
    var montemp=(newCal.getMonth()+1)<10?("0"+(newCal.getMonth()+1)):(newCal.getMonth()+1);         
    if ((intDay == startDay) && (0 == daily)){ daily = 1;}
    var daytemp=daily<10?("0"+daily):(daily);
    var d="<"+newCal.getFullYear()+"-"+montemp+"-"+daytemp+">";
    if(day==daily) cell.className="DayNow";
    else if(intDay==6) cell.className = "DaySat";
    else if (intDay==0) cell.className ="DaySun";
    else cell.className="Day";
    if ((daily > 0) && (daily <= intDaysInMonth))
    {
     cell.innerText = daily;
     daily++;
    } else
    {
     cell.className="CalendarTD";
     cell.innerText = "";
    }
  }
  document.all.year.value=year;
  document.all.month.value=month+1;
 }

 function subMonth()
 {
  if ((month-1)<0)
  {
   month=11;
   year=year-1;
  } else
  {
   month=month-1;
  }
  Calendar();
 }

 function addMonth()
 {
  if((month+1)>11)
  {
   month=0;
   year=year+1;
  } else
  {
   month=month+1;
  }
  Calendar();
 }

 function setDate() 
 {
  if (document.all.month.value<1||document.all.month.value>12)
  {
   alert("月的有效范围在1-12之间!");
   return;
  }
  year=Math.ceil(document.all.year.value);
  month=Math.ceil(document.all.month.value-1);
  Calendar();
 }
</Script>

<Script>
function buttonOver()
{
 var obj = window.event.srcElement;
 obj.runtimeStyle.cssText = "background-color:#FFFFFF";
// obj.className="Hover";
}

function buttonOut()
{
 var obj = window.event.srcElement;
 window.setTimeout(function(){obj.runtimeStyle.cssText = "";},300);
}
</Script>

<Style>
Input {font-family: verdana;font-size: 15pt;text-decoration: none;background-color: #FFFFFF;height: 30px;border: 2px solid #666666;color:#000000;}

.Calendar {font-family: verdana;text-decoration: none;width: 170;background-color: #C0D0E8;font-size: 12pt;border:0px dotted #1C6FA5;}
.CalendarTD {font-family: verdana;font-size: 10pt;color: #000000;background-color:#f6f6f6;height: 25px;width:11%;text-align: center;}

.Title {font-family: verdana;font-size: 11pt;font-weight: normal;height: 24px;text-align: center;color: #333333;text-decoration: none;background-color: #A4B9D7;border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;border-left-width: 1px;border-bottom-style:1px;border-top-color: #999999;border-right-color: #999999;border-bottom-color: #999999;border-left-color: #999999;}

.Day {font-family: verdana;font-size: 7pt;color:#243F65;background-color: #E5E9F2;height: 25px;width:11%;text-align: center;}
.DaySat {font-family: verdana;font-size: 7pt;color:#FF0000;text-decoration: none;background-color:#E5E9F2;text-align: center;height: 20px;width: 12%;}
.DaySun {font-family: verdana;font-size: 7pt;color: #FF0000;text-decoration: none;background-color:#E5E9F2;text-align: center;height: 20px;width: 12%;}
.DayNow {font-family: verdana;font-size: 7pt;font-weight: bold;color: #000000;background-color: #FFFFFF;height: 20px;text-align: center;}

.DayTitle {font-family: verdana;font-size: 9pt;color: #000000;background-color: #C0D0E8;height: 25px;width:11%;text-align: center;}
.DaySatTitle {font-family: verdana;font-size: 9pt;color:#FF0000;text-decoration: none;background-color:#C0D0E8;text-align: center;height: 25px;width: 12%;}
.DaySunTitle {font-family: verdana;font-size: 9pt;color: #FF0000;text-decoration: none;background-color: #C0D0E8;text-align: center;height: 25px;width: 12%;}

.DayButton {font-family: Webdings;font-size: 9pt;font-weight: bold;color: #243F65;cursor:hand;text-decoration: none;}

</Style>


<table border="0" cellpadding="0" cellspacing="1" class="Calendar" id="caltable">
<thead>
     <tr align="center" valign="middle"> 
  <td colspan="7" class="Title">
   <a href="javaScript:subMonth();" title="上一月" Class="DayButton">3</a> <input name="year" type="text" size="4" maxlength="4" onKeyDown="if (event.keyCode==13)" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"  onpaste="this.value=this.value.replace(/[^0-9]/g,'')"> 年 <input name="month" type="text" size="1" maxlength="2" onKeyDown="if (event.keyCode==13)" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"  onpaste="this.value=this.value.replace(/[^0-9]/g,'')"> 月 <a href="JavaScript:addMonth();" title="下一月" Class="DayButton">4</a>
  </td>
 </tr>
 <tr align="center" valign="middle"> 
  <Script LANGUAGE="JavaScript">  
   document.write("<TD class=DaySunTitle id=diary >" + days[0] + "</TD>"); 
   for (var intLoop = 1; intLoop < days.length-1;intLoop++) 
    document.write("<TD class=DayTitle id=diary>" + days[intLoop] + "</TD>"); 
    document.write("<TD class=DaySatTitle id=diary>" + days[intLoop] + "</TD>"); 
  </Script>
 </TR> 
</thead>
<TBODY border=1 cellspacing="0" cellpadding="0" ID="calendar" ALIGN=CENTER ONCLICK="getDiary()">
 <Script LANGUAGE="JavaScript">
  for (var intWeeks = 0; intWeeks < 6; intWeeks++)
  {
   document.write("<TR style='cursor:hand'>");
   for (var intDays = 0; intDays < days.length;intDays++) document.write("<TD class=CalendarTD onMouseover='buttonOver();' onMouseOut='buttonOut();'></TD>");
   document.write("</TR>");
  } 
 </Script>
</TBODY>
</TABLE>
<Script  LANGUAGE="JavaScript">
 Calendar();
</Script>


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
	<a href="#" target="_blank" rel="nofollow" title="程序员的网站" >
	<img style="width: 100%" src="images//hong2.png" alt="程序员的网站" ></a>    
 </div>
 <div class="widget widget_sentence">    
	<a href="#" target="_blank" rel="nofollow" title="红尘客栈" >
	<img style="width: 100%" src="images/hong3.jpg" alt="红尘客栈" ></a>    
 </div
 >
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
