<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>图书管理系统</title>
    <link href="css/normal.css" type="text/css" rel="stylesheet" >
	<link rel="stylesheet" href="css/page.css" />
	<script type="text/javascript" src="js/jquery.min.js" ></script>
	<script type="text/javascript" src="js/index.js" ></script>


</head>
<body>
<!-- <div id="all">
    <div class="top">
        <div class="left" style="background-size:100%;width: 200px;height:80px;-moz-background-size:100%;background-image: url(images/loginlogo.jpg);">
            <img src="images/loginlogo.jpg">
        </div>
        <div class="right">
            <span style="font-size: 20px;color: #1635af">你好</span>
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
				欢迎进入本图书系统
            </div>
    </div>
</div> -->
<div class="left">
			<div class="bigTitle">图书管理系统</div>
			<div class="lines">
				<div><a href="select_all_books.1.php">图书库</a></div>
				<div><a href="select_user.1.php">用户库</a></div>
				<div><a href="select_record.1.php">记录库</a></div>
				<div></div>
				<div><a href="make_card.1.php">办卡</a></div>
				<div><a href="borrow_book.1.php">借书</a></div>
				<div><a href="return_book.1.php">还书</a></div>
				<div><a href="add_book.1.php">添书</a></div>
				<div><a href="delete_book.1.php">删书</a></div>
				<div><a href="select_action.1.php">查询</a></div>
			</div>
		</div>
		<div class="top">
			<div class="thisUser">当前用户：<?php include 'info.php'?> <a href="login.html">退出</a></div>
		</div>
		<div class="content">欢迎进入本图书系统</div>
		
</body>
</html>
