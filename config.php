<?php
//error_reporting(0);
$config = mysqli_connect("127.0.0.1","root","")or die("Mysql Connect Error");//设置数据库IP，账号，密码
mysqli_select_db($config,"chat");//数据库库名
//mysqli_query("SET NAMES UTF8");
?>