<?php //if(!defined("APP")){die("error!");}?>
<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title>读取学生信息数据表中的记录</title>
        <style>
            h2{text-align: center;
                margin-top: 20px;
            }
            .box{
                margin: 20px; 
            }
            .box table{
                width: 100%;
                margin-top: 10px; 
                border-collapse: collapse;
                font-size: 14px;
                border: 1px solid #b5d6e6;
                min-width: 400px;
            }
            .box table th, .box table td{  /* 修正这里的逗号分隔 */
                height: 30px;
                border: 1px solid #b5d6e6;
            }
            .box table th{
                color: rgb(255, 255, 255);
                background-color: #188ae7;
                font-weight: normal;
            }
            .box table td{
                text-align: center;
            }
        </style>
    </head>
    <body> 
        <h2>W24002学生信息列表</h2>
        <form action="./list_search.php" method="post" name="">
            请输入要查询的内容：
            <select name="felid">
                <option value="请选择">-请选择-</option>
                <option value="id">学号</option>
                <option value="name">姓名</option>
                <option value="gender">性别</option>
                <option value="birthday">出生日期</option>
                <option value="class">班级</option>
                <option value="major">专业</option>
                <option value="city">籍贯</option>
            </select>
            <input type="text" name="keyword"/>
            <input type="submit" value="查询" name="chaxun"/>
        </form>

        <div class="box">
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>出生日期</th>
                    <th>班级</th>
                    <th>专业</th>
                    <th>籍贯</th>
                    <th>特长</th>
                    <th>个人简介</th>
                </tr>
                <?php if(!empty($student)) {?>  <!-- 修正条件判断语法 -->
                <?php foreach($student as $row){?>
                    <tr>
                        <td><?php echo $row['id'];?></td>  <!-- 修正闭合标签 -->
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['birthday'];?></td>
                        <td><?php echo $row['class'];?></td>
                        <td><?php echo $row['major'];?></td>
                        <td><?php echo $row['city'];?></td>
                        <td><?php echo $row['skill'];?></td>
                        <td><?php echo $row['intr'];?></td>
                    </tr>
                <?php }?>  <!-- 修正空格 -->
                <?php } else {?>  <!-- 调整格式 -->
                <tr><td colspan="9">数据表中没有学生信息！！！</td></tr>  <!-- 修正闭合标签 -->
                <?php }?>
            </table>    
        </div>  <!-- 补充缺失的div闭合标签 -->
    </body>
</html>
