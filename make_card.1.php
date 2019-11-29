
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>图书管理系统</title>
    <link href="css/normal.css" type="text/css" rel="stylesheet" >
	<link rel="stylesheet" href="css/page.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js" ></script>
	<script type="text/javascript" src="js/index.js" ></script>
	<script src="js/bootstrap.min.js" ></script>


</head>
<body>
<?php
try {
    $dsn = 'mysql:dbname=library;host=localhost';
    $user = 'root';
    $password = '123456';
    $db = new PDO($dsn, $user, $password);
    $result = $db->query('SELECT * FROM record')->fetchAll();
}   catch(PDOException $e){
    die('程序出错');
}
?>
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
		<div class="content"><form action="make_card_action.1.php" method="POST">
    <span>姓名：</span><input type="text" name="username"/>
    <br>
    <span>学号：</span><input type="text" name="id">
    <br>
    <span>性别：</span><input type="text" name="sex">
    <br>
    <span>电话：</span><input type="text" name="telephone">
    <br><br>
    <button type="reset" style="background-color: #00a4ac;width: 120px;height: 60px">修改</button>
    <button type="submit" style="background-color: #00a4ac;width: 120px;height: 60px">确定</button>
</form></div>
		
</body>
</html>
