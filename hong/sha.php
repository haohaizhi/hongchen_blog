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

  <link href="css/concat.css" type="text/css" rel="stylesheet" />
            <script type="text/javascript" src="js/concat.js"></script>
            <script type="text/javascript" src="js/aes.js"></script>
            <script type="text/javascript" src="js/rc4.js"></script>
            <script type="text/javascript" src="js/rabbit.js"></script>
            <script type="text/javascript" src="js/tripledes.js"></script>
                 <script>           
             var ltIe9 = false;
             var _hmt = _hmt || [];
            (   function() {
                    var hm = document.createElement("script");
                    hm.src = "//hm.baidu.com/hm.js?7a35bc9fccb83830d63661053e934c55";
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(hm, s);}
            )();
            </script>
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
           
            <div class="container">
          
            <div class="clear10"></div><div class="row"><div class="wrapper">
            <div class="header"><img class="fleft" src="images/53f06d142c488.png" />
            <h1>加密/解密(Aes/Des/Rc4/Rabbit/TripleDes)<br /></h1><div class="fright">
            </div></div>
            <div class="content">
            <ul class="nav nav-tabs">
            <li class="active"><a>加密/解密(Aes/Des/Rc4)</a></li>
            </ul>
            <div class="clear5"></div><div id="tool_wrapper"><div class="clear5"></div>
            <div><textarea class="form-control" id="con" spellcheck="false" placeholder="请在此输入明文或密文" style="height: 15em"></textarea>
            <div class="clear5"></div>算法:

            <label class="radio-inline"><input type="radio" name="type" id="aes" value="aes" checked="checked" /> Aes
            </label><label class="radio-inline"><input type="radio" name="type" id="des" value="des" /> Des
            </label><label class="radio-inline"><input type="radio" name="type" id="rc4" value="rc4" /> Rc4
            </label><label class="radio-inline"><input type="radio" name="type" id="rabbit" value="rabbit" /> Rabbit
            </label><label class="radio-inline"><input type="radio" name="type"  id="tripledes" value="tripledes" /> TripleDes
            </label><div class="clear10"></div><div class="form-inline">                密钥：<input type="text" class="form-control" id="pwd" /></div><div class="clear10"></div>        <button type="button" class="btn btn-primary" id="encrypt" >
                            <span class="glyphicon glyphicon-transfer"></span> 加密
                        </button>&nbsp;        <button type="button" class="btn btn-primary" id="decrypt" >
                            <span class="glyphicon glyphicon-transfer"></span> 解密
                        </button>&nbsp;<div class="clear5"></div></div><div ><textarea class="form-control" id="result" spellcheck="false" readonly="true"  readonly="readonly" style="height: 15em"></textarea><div class="clear5"></div>        <button type="button" class="btn btn-default" id="copy" >
                            <span class="glyphicon glyphicon-file"></span> 复制
                        </button>&nbsp;</div><script>        $(function(){
            setCopy("#copy",'#result');

            $("#encrypt").click(function(){   //加密
                clearResult();
                var con = $("#con").val();
                if(con.length == 0)
                {
                    notice("请输入明文!" ,"#encrypt");
                    return false;
                }

                var pwd = $("#pwd").val();
                if(pwd.length == 0){
                    notice("请输入密钥!" ,"#encrypt");
                    return false;
                }

                var id =  $("input[name='type']:checked").val();
                if(typeof id == "undefined" || id.length == 0){
                    notice("请选择加密算法!" ,"#encrypt");
                    return false;
                }

                var ret = "";
                switch(id)
                {
                    case "aes":
                        ret = CryptoJS.AES.encrypt(con, pwd);
                        break;
                    case "des":
                        ret = CryptoJS.DES.encrypt(con, pwd);
                        break;
                    case "tripledes":
                        ret = CryptoJS.TripleDES.encrypt(con, pwd);
                        break;
                    case "rc4":
                        ret = CryptoJS.RC4.encrypt(con, pwd);
                        break;
                    case "rabbit":
                        ret = CryptoJS.Rabbit.encrypt(con, pwd);
                        break;
                    case "hmacmd5" :
                        ret = CryptoJS.HmacMD5(con, pwd);
                        break;
                    case "hmacsha1":
                        ret = CryptoJS.HmacSHA1(con, pwd);
                        break;
                    case "hmacsha256":
                        ret = CryptoJS.HmacSHA256(con, pwd);
                        break;
                    case "hmacsha512":
                        ret = CryptoJS.HmacSHA512(con, pwd);
                        break;

                }
                if(ret == "")
                    notice("无法加密！" ,"#encrypt");
                else
                    $("#result").val(ret);

            });

            $("#more").click(function(){
                $("#more-hide").slideToggle();
                setCopy("#copy",'#result');
            });


            $("#decrypt").click(function(){  //解密
                clearResult();
                var con = $("#con").val();
                if(con.length == 0){
                    notice("请输入密文!" ,"#decrypt");
                    return false;
                }

                var pwd = $("#pwd").val();
                if(pwd.length == 0){
                    return notice("请输入密钥!" ,"#decrypt");
                }

                var id =  $("input[name='type']:checked").val();
                if(typeof id == "undefined" || id.length == 0)
                    return notice("请选择解密算法!" ,"#decrypt");

                var ret = "";
                switch(id)
                {
                    case "aes":
                        try{
                            ret = CryptoJS.AES.decrypt(con ,pwd).toString(CryptoJS.enc.Utf8);
                        }
                        catch(ex){}
                        break;
                    case "des":
                        try{
                            ret = CryptoJS.DES.decrypt(con, pwd).toString(CryptoJS.enc.Utf8);
                        }catch(ex){}
                        break;
                    case "tripledes":
                        try{
                            ret = CryptoJS.TripleDES.decrypt(con, pwd).toString(CryptoJS.enc.Utf8);
                        }catch(ex){}
                        break;
                    case "rc4":
                        try{
                        ret = CryptoJS.RC4.decrypt(con, pwd).toString(CryptoJS.enc.Utf8);
                        }catch(ex){}
                        break;
                    case "rabbit":
                        try{
                        ret = CryptoJS.Rabbit.decrypt(con, pwd).toString(CryptoJS.enc.Utf8);
                        }catch(ex){}
                        break;
                }
                if(ret == "")
                    decryptError();

                $("#result").val(ret);
            });



            $("#md5,#sha1,#sha512,#sha256").click(function(){
                clearResult();
                var id = $(this).attr("id");
                var con = $("#con").val();
                if(con.length == 0)
                    return notice("请输入明文!" , "#" + id);

                var ret = "";
                switch(id)
                {
                    case "md5":
                        ret = CryptoJS.MD5(con);
                        break;
                    case "sha1":
                        ret = CryptoJS.SHA1(con);
                        break;
                    case "sha512":
                        ret = CryptoJS.SHA512(con);
                        break;
                    case "sha256":
                        ret = CryptoJS.SHA256(con);
                        break;
                }

                if(ret == "")
                    decryptError();

                $("#result").val(ret);
            });

            function decryptError()
            {
                notice("无法解密，加密算法错误或是密钥错误!" ,"#decrypt");
            }

            function clearResult()
            {
                $("#result").val("");
            }

        });

    </script></div></div></div></div></div>
    
    
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5f2cf54c78f8e894d65e2b9fa8185b6e";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script></body>


</html>
