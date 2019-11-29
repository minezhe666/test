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
    $result = $db->query('SELECT * FROM users')->fetchAll();
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
		<div class="content"><div class="container-fluid">
    <div class="row"style="margin-top: -130px;font-size: 16px;">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>卡号</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>电话</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($result as $value) {
                    echo '<tr class= "info">';
                    echo "<td>" . $value['id'] . "</td>";
                    echo "<td>" . $value['name'] . "</td>";
                    echo "<td>" . $value['sex'] . "</td>";
                    echo "<td>" . $value['telephone'] . "</td>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<nav aria-label="...">
    <ul class="pagination">
        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li ><a href="#">2 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
    </ul>
</nav>


<div class="container-fluid">

    <div class="btn-group" role="group" aria-label="...">
        <div class="col-md-12"></div> <a href="index.php"> <button type="button" class="btn btn-default">返回主页</button></a></div>
</div>
</div></div>
		
</body>
</html>
