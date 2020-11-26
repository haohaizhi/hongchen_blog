<?php

session_start();

?>


<head>
<meta charset="utf-8">
<title>红尘客栈-发贴</title>
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="editormd/css/editormd.css" />
<script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="editormd/editormd.min.js"></script>
</head>


<div>

<form action="add.php" method="post"  accept-charset="UTF-8">        
    
        文章标题：<input type="text" id="articleTitle" name="youtitle" style="width:500px;height:30px;"/>
		&nbsp;&nbsp;类别：<input type="text" id="articlekind" name="youkind" style="width:200px;height:30px;"/>
		<div id="my-editor" class="form-group">
    	<textarea style="display:none;" class="form-control" id="my-editor-markdown-doc" name="my-editor-markdown-doc"></textarea>
		</div>
        <input type="submit" value="发布文章" />
        </from>

</div>



<script type="text/javascript">
    $(function() {
        var editor = editormd("my-editor", {
            // width  : "100%",
            // height : "100%",
            //启动本地图片上传功能
			syncScrolling : "single",
            path    : "/editormd/lib/",//下边特别讲解
            saveHTMLToTextarea: true,    // 保存 HTML 到 Textarea
            searchReplace: true,
            /**上传图片相关配置如下*/	
        });
    });
    editor.getMarkdown();
    
</script>



