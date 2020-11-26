<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>键盘游戏</title>
<link rel="shortcut icon" href="images/favicon.ico">
<style>
body {
    margin: 0;
    padding: 0;
    background: #222;
}
body.light { background: #eee; }
.switch {
    position: absolute;
    top: 35px;
    left: calc(50% + 335px);
    width: 40px;
    height: 15px;
    border-radius: 360px;
    border: 1px solid #ccc;
    cursor: pointer;
}
.switch.on {
    background: rgba(152, 194, 37, 1);
    border: 1px solid rgba(132, 174, 17, 1);
}
.switch .switcher {
    width: 15px;
    height: 15px;
    border-radius: 360px;
    margin-top: -1px;
    background: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 0 2px rgba(0,0,0,0.3);
    cursor: pointer;
}
.switch.on .switcher { margin-left: 24px; }
.wrapper {
    position: absolute;
    top: 50px;
    left: calc(50% - 400px);
    width: 800px;
    height: 200px;
}
.wrapper ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
.wrapper ul li {
    float: left;
    width: 40px;
    height: 40px;
    border: 1px solid #333;
    border-radius: 3px;
    margin-left: 10px;
    margin-top: 10px;
    position: relative;
}
body.light .wrapper ul li { border: 1px solid #ccc; }
body.light .wrapper ul li .text { color: #bbb; }
body.light .wrapper ul li:nth-child(28) .text {
    background: #eee;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
}
body.light .wrapper ul li:nth-child(29) .text:before { background: #bbb; }
.wrapper ul li:nth-child(14) { width: 90px; }
.wrapper ul li:nth-child(15) { width: 70px; }
.wrapper ul li:nth-child(28) {
    width: 60px;
    border-bottom-right-radius: 0px;
}
.wrapper ul li:nth-child(28) .text {
    position: absolute;
    top: 27px;
    right: -1px;
    z-index: 5;
    background: #222;
    border-left: 1px solid #333;
    border-right: 1px solid #333;
    width: 40px;
    height: 40px;
}
.wrapper ul li:nth-child(29) { width: 90px; }
.wrapper ul li:nth-child(43) { width: 65px; }
.wrapper ul li:nth-child(55) { width: 115px; }
.wrapper ul li:nth-child(56) { opacity: 0.5; }
.wrapper ul li:nth-child(43) .text {
    margin-top: 22px !important;
    margin-left: -10px;
}
.wrapper ul li:nth-child(55) .text {
    margin-top: 22px !important;
    margin-left: 85px;
}
.wrapper ul li:nth-child(59) { width: 55px; }
.wrapper ul li:nth-child(60) { width: 260px; }
.wrapper ul li:nth-child(61) { width: 55px; }
.wrapper ul li:nth-child(63) {
    height: 19px;
    margin-top: 30px;
}
.wrapper ul li:nth-child(64) { height: 19px; }
.wrapper ul li:nth-child(65) {
    height: 19px;
    margin-top: 30px;
    margin-left: -42px;
    border-top: 0px solid #fff;
}
.wrapper ul li:nth-child(66) {
    height: 19px;
    margin-top: 30px;
}
.wrapper ul li .text {
    color: #444;
    font-family: Helvetica;
    font-weight: 500;
    font-size: 12px;
    line-height: 17px;
    width: 40px;
    height: 40px;
    margin-top: 5px;
    text-align: center;
}
.wrapper ul li:nth-child(14) .text {
    text-align: right;
    margin-left: 40px;
    font-weight: 100;
    margin-top: 20px !important;
    font-size: 23px;
}
.wrapper ul li:nth-child(15) .text {
    text-align: left;
    margin-left: 4px;
    font-weight: 0;
    margin-top: 20px !important;
    font-size: 23px;
}
.wrapper ul li:nth-child(29) .text.active:before {
    content: '';
    position: absolute;
    top: 5px;
    left: 5px;
    width: 5px;
    height: 5px;
    background: #98c225 !important;
    box-shadow: 0 0 3px #98c225;
    border-radius: 360px;
}
.wrapper ul li:nth-child(29) .text:before {
    content: '';
    position: absolute;
    top: 5px;
    left: 5px;
    width: 5px;
    height: 5px;
    background: #333;
    border-radius: 360px;
}
.wrapper ul li:nth-child(29) .text {
    margin-left: -10px;
    padding-top: 5px;
}
.wrapper ul li.activeKey .finger {
    position: absolute;
    width: 40px;
    height: 40px;
    top: -5px;
    left: -5px;
    margin-top: 5px;
    margin-left: 5px;
    border-radius: 360px;
    background: rgba(28, 171, 233, 0.5);
    opacity: 0;
}
input {
    border: 0px solid #fff;
    background: transparent;
    font-size: 20px;
    font-family: Helvetica;
    font-weight: 100;
    width: 780px;
    height: 40px;
    position: absolute;
    top: 330px;
    color: #ccc;
    left: calc(50% - 390px);
    border-bottom: 1px solid #333;
}
 body ::-webkit-input-placeholder {
 color: #444;
}
 body.light ::-webkit-input-placeholder {
 color: #bbb;
}
body.light input {
    border-bottom: 1px solid #ccc;
    color: #222;
}
body.light input:focus {
    outline: none;
    border-bottom: 1px solid rgba(28, 171, 233, 0.5);
}
body input:focus {
    outline: none;
    border-bottom: 1px solid rgba(28, 171, 233, 0.5);
}
</style>
<script src="js/prefixfree.min.js"></script>
</head>

<body>
<div class='switch'>
    <div class='switcher'></div>
</div>
<div class='wrapper'>
    <ul>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
        <li>
            <div class='text'></div>
            <div class='finger'></div>
        </li>
    </ul>
</div>
<input placeholder='Type Something Creative ;)'>
<script src='js/jquery.js'></script> 
<script src="js/index2.js"></script>
</body>
</html>