<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>初忆图书管理系统</title>
    <link href="css/normal.css" type="text/css" rel="stylesheet" >
</head>
<body>
<div id="all">
    <div class="top">
        <div class="left">
            <img src="images/loginlogo.png">
        </div>
        <div class="right">
            <span style="font-size: 20px;color: #1635af"><?php include 'info.php'?>你好</span>
            <a href="login.html">退出</a>
        </div>
    </div>
    <div class="center">
        <div class="left">
            <ul style="line-height: 30px; margin-top: 0; text-align: center">
                <li><a href="select_all_books.php">图书库</a></li>
                <li><a href="select_user.php">用户库</a></li>
                <li><a href="select_record.php">记录库</a></li>
            </ul>
            <br><br>
            <ul style="line-height: 30px; margin-top: 0;text-align: center;font-size: 20px">
                <li><a href="make_card.php">办卡</a></li>
                <li><a href="borrow_book.php">借书</a></li>
                <li><a href="return_book.php">还书</a></li>
                <li><a href="add_book.php">添书</a></li>
                <li><a href="delete_book.php">删书</a></li>
                <li><a href="select_action.php">查询</a></li>

            </ul>
        </div>
        <div class="right">
            <div class="middle">
<form action="/make_card_action.php" method="POST">
    <span>姓名：</span><input type="text" name="username"/>
    <br>
    <span>学号：</span><input type="text" name="id">
    <br>
    <span>性别：</span><input type="text" name="sex">
    <br>
    <span>电话：</span><input type="text" name="telephone">
    <br><br>
    <button type="reset" style="background-color: #00a4ac;width: 60px;height: 30px">修改</button>
    <button type="submit" style="background-color: #00a4ac;width: 60px;height: 30px">确定</button>
</form>
            </div>
    </div>
</div>
</body>
</html>
