<?php //if(!defined('APP')) die('error!');?>
<html>
<head>
<meta charset="utf-8">
<title>新增用户信息</title>
<style>
body{background-color:#eee;margin:0;padding:0;}
.box{width:400px;margin:10px auto;padding:15px;border:1px solid #ccc;background-color:#fff;}
.box h2{font-size:20px;text-align:center;}
.profile-table{margin:0 auto;}
.profile-table th{font-weight:normal;text-align:right;font-size:16px;}
.profile-table input[type="text"]{width:180px;border:1px solid #ccc;height:22px;padding-left:4px;}
.profile-table input[type="password"]{width:180px;border:1px solid #ccc;height:22px;padding-left:4px;}
.profile-table .button{background-color:#0099ff;border:1px solid #0099ff;color:#fff;width:80px;height:25px;margin:0 5px;cursor:pointer;}
.profile-table .td-btn{text-align:center;padding-top:10px;}
.profile-table th,.profile-table td{padding-bottom:10px;}
.profile-table td{font-size:16px;}
.profile-table .txttop{vertical-align:top;}
.profile-table select{border:1px solid #ccc;min-width:80px;height:25px;}
.profile-table .description{font-size:13px;width:250px;height:60px;border:1px solid #ccc;}
</style>
<script>
	//检查两次输入密码是否一致
	function checkForm(){
		var pw1 = document.getElementById("pw1").value;
		var pw2 = document.getElementById("pw2").value;
		if(pw1 !== pw2){
			alert('两次输入密码不一致！请重新输入！！！');
			return false;
		}
		return true;
	}
</script>
</head>
<body>
<div class="box">
<h2>新用户注册</h2>
<form action="./register.php" method="POST" onsubmit="return checkForm()" >
  <table class="profile-table">
    <tr><th>用户名：</th><td><input type="text" name="username"/></td></tr>
    <tr><th>密码：</th><td><input type="password" name="userpw"  id="pw1"/></td></tr>
    <tr><th>确认密码：</th><td><input type="password" id="pw2"></td></tr>
    <tr><th>用户邮箱：</th><td><input type="text" name="useremail"/></td></tr>
    <tr><td colspan="2" class="td-btn">
       <input class="button" type="submit" value="提交注册">&nbsp&nbsp
       <input class="button" type="reset" value="重新填写">
       </td></tr>
</table>
</form>