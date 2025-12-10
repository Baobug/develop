<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title>文件上传测试</title>
    </head>
    <style>
        body{
            background: #ccc;
            font-family: "华文中宋";
            .box{
                width: 320px;
                border: solid #ccc 1px;
                background: #fff;
                margin: 0 auto;
                padding: 0 0 10px 60px;
            }
            .exist{
                float: left;
            }
            .upload{
                clear: both;
                padding: top 15px; ;
            }
            h2{
                padding: left 60px;
                font-size: 20px;
            }
            .sub{
                margin-left: 85px;
                background: #0099ff;
                border: 1px solid #55BBFF;
            }
        }
    </style>
    <body>
        <div class="box">
            <h2>文件上传测试</h2>
            <form action=""method="POST"enctype="multipart/form-data"> 
                <p class="upload">学号：<input name="xuehao"type="text"/></p>
                <p class="upload">姓名：<input name="xingming"type="text"/></p>
                <p class="upload">上传文件：<input name="wjname"type="file"/></p>
                <p><input class="sub" type="submit"value="提交"></p>
            </form>



</html>