<?php if(!defined('APP')) die('error!'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户登录页面</title>
<style>
body{background-color:#eee;margin:0;padding:0;}
.reg{width:400px;margin:15px;padding:20px;border:1px solid #ccc;background-color:#fff;}
.reg .title{text-align:center;padding-bottom:10px;}
.reg th{font-weight:normal;text-align:right;}
.reg input{width:180px;border:1px solid #ccc;height:20px;padding-left:4px;}
.reg .td-auto-login{font-size:14px;text-align:left;padding-left:90px;padding-top:5px;}
.reg .checkbox{width:auto;vertical-align:middle;}
.reg label{vertical-align:middle;}
.reg .button{background-color:#0099ff;border:1px solid #0099ff;color:#fff;width:80px;height:25px;margin:0 5px;cursor:pointer;}
.reg .td-btn{text-align:center;padding-top:5px;}
</style>
</head>
<body>
<form action="" method="post" name="">
<table class="reg">
	<tr><td class="title" colspan="2">欢迎登录</td></tr>
	<tr><th>用户名：</th><td><input type="text" name="username" /></td></tr>
	<tr><th>密码：</th><td><input type="password" name="userpassword" /></td></tr>
	<tr><td colspan="2" class="td-btn">
	   <input type="submit" value="登录" class="button" />
	   <input type="button" value="立即注册" class="button" onclick="location.href='reg.php'" />
	</td></tr>
</table>
</form>
</body>
</html>
