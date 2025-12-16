<!-- <!DOCTYPE html>
<html charset="utf-8">
<head>
    <meta charset="UTF-8">
    <title>验证码</title>
    <style>
        #login {
            border:2px solid #ff0000; width:360px; height:160px;
        }
    </style>
</head>
<body>
<form method="post" action="">
    <fieldset>
        <legend>用户登录</legend>
        <dl>
            <dt>验证码：</dt>
            <dd><input type="text" name="captcha" id="login" /></dd>
            <dd>
                <br>
                <img src="yzm.php" id="code_img" />
                <a href="#" id="change">看不清，换一张</a>
            </dd>
            <dd>
                <input type="submit" value="验证"/>
            </dd>
        </dl>
    </fieldset>
</form>
<script>
    var change = document.getElementById('change');
    var img = document.getElementById('code_img');
    change.onclick = function(){
        img.src = 'yzm.php?rand='+Math.random();
        return false;
    }
</script>
</body>
</html> -->



<?php
//session_start(); // 启动会话，用于存储验证码

// 处理表单提交
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['captcha'])) {
    $userInput = trim($_POST['captcha']);
    // 验证验证码
    if (empty($userInput)) {
        $message = '<span style="color:red">请输入验证码</span>';
    } elseif (strtolower($userInput) !== strtolower($_SESSION['captcha_code'])) {
        $message = '<span style="color:red">验证码错误</span>';
    } else {
        $message = '<span style="color:green">验证码正确</span>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>验证码登录</title>
    <style>
        .login-box {
            border: 2px solid #ccc;
            width: 360px;
            padding: 20px;
            margin: 50px auto;
        }
        .captcha-input {
            width: 200px;
            height: 30px;
            padding: 5px;
            margin: 10px 0;
        }
        .captcha-img {
            vertical-align: middle;
            margin-left: 10px;
            cursor: pointer;
        }
        .change-link {
            margin-left: 10px;
            color: #0066cc;
            text-decoration: none;
        }
        .change-link:hover {
            text-decoration: underline;
        }
        .submit-btn {
            margin-top: 15px;
            padding: 8px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <fieldset>
            <legend>用户登录</legend>
            <?php echo $message; ?>
            <form method="post" action="">
                <dl>
                    <dt>验证码：</dt>
                    <dd>
                        <input type="text" name="captcha" class="captcha-input" 
                               placeholder="请输入验证码" />
                    </dd>
                    <dd>
                        <img src="yzm.php" id="code_img" class="captcha-img" 
                             title="点击刷新验证码" />
                        <a href="#" id="change" class="change-link">看不清，换一张</a>
                    </dd>
                    <dd>
                        <input type="submit" value="验证" class="submit-btn" />
                    </dd>
                </dl>
            </form>
        </fieldset>
    </div>

    <script>
        // 刷新验证码
        document.getElementById('change').addEventListener('click', function(e) {
            e.preventDefault();
            const img = document.getElementById('code_img');
            // 加随机数防止缓存
            img.src = 'yzm.php?rand=' + Math.random();
        });

        // 点击图片也可刷新
        document.getElementById('code_img').addEventListener('click', function() {
            this.src = 'yzm.php?rand=' + Math.random();
        });
    </script>
</body>
</html>