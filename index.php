<?php
error_reporting(0);
isset($_COOKIE['nc'])?$nc = $_COOKIE['nc']:$nc = null;
?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网页微型聊天源码</title>
<meta name="keywords" content="网页微型聊天源码" />
<meta name="description" content="网页微型聊天源码 " />
<link type="text/css" href="index.css" rel="stylesheet" />
<script src="jquery-1.11.1.min.js"></script>
<script src="index.js"></script>
</head>
<body>
<title>在线聊天室</title>
<div id="title">在线聊天室</div>
<div id="chat">
<div class="window"></div>
<div class="bottom"><marquee>请大家注意文明用语并且尊守国家法律法规!</marquee></div>
</div>
<div id="shuru"><textarea style="width: 100%;height:50px;resize:none;" id="content"></textarea></div>
<div id="form"><input type="submit" value="发送" id="send" class="send" /><input type="hidden" id="nicheng" class="nicheng" value="<?php echo $nc;?>" /></div>
<div id="form"><input type="button" class="fanhui" value="重设昵称" id="reset"  /></div>
<div id="bottom">Copyright 2018-2020 复习、总结、实例  All Rights Reserved. </div>
<div id="bg"></div>
<div id="window">
<div class="t">
<div class="title">设置我的昵称</div>
<div class="nc">

<input type="text" value="<?php echo $nc;?>" id="nc" style="width: 60%;height:30px;text-align:center;" /><br /><br />
<input type="button" id="setting" value="设置" style="width: 60%;height:30px;" />

</div>
</div>
</div>

</body>