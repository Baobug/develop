<?php if(!defined('APP')) die('error!'); ?>
<html>
<head>
    <meta charset="utf-8">
    <title>读书廊书屋</title>
    <style type="text/css">
       /* body{
            background-color: #eee;
            margin: 0;
            padding: 0;
        }
        .box{
            width: 400px;
            margin: 15px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
        }
        .box h2{
            font-size: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        .box p{
            font-size: 18px;
            text-align: left;
            color: #06f;
        }
        .box p span{
            color: #ff0000;
        }
        .box a{
            color:#0000ff; 
            text-decoration: none; 
            font-weight: bolder;
        }  */
    body{background-color:#eee;margin:0;padding:0;}
    .box{width:600px;margin:15px;padding:20px;border:1px solid #ccc;background-color:#fff;}
    .box h2{font-size:24px;text-align:center;margin-bottom:20px;}
    .box p{ font-size:18px; text-align:center; color:#363636; letter-spacing: 2px; background-color: #d6d6d6;height:40px;line-height:40px;}
    .box p span{color:#ff0000;}
    .box p a{color:#0000ff; text-decoration: none; font-weight: bolder;}
    </style>
</head>
<body>
    <div class="box"> 
        <h2>今天你读书了吗？</h2>
        <hr size="2px" color="#06f">
    <?php if($longin){ ?>
        <p><span><?php echo $userinfo['name'] ?></span> 欢迎回家！<a href="?action=logout">退出</a></p>
    <?php }else{ ?>
        <p>您还为登陆，请先<a href="login.php">登陆</a>或<a href="reg.php">注册</a>新用户</p>

    <?php } ?>

    </div>
    
   
</body>

</html>