
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
		<div class="content"><form action="select_name_book_action.php" method="post">
        <div class="row">
            <div class="col-md-3">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">书名检索</span>
                    <input  name="name" type="text" class="form-control" placeholder="bookname" aria-describedby="basic-addon1">
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-1">
                <div class="btn-group" role="group" aria-label="...">
                    <button type="submit" class="btn btn-default">查询</button>

                </div>
            </div>
        </div>
        </form>
        <form action="select_author_book_action.php" method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">作者检索</span>
                        <input  name="author" type="text" class="form-control" placeholder="author" aria-describedby="basic-addon1">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-1">
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="submit" class="btn btn-default">查询</button>

                    </div>
                </div>
            </div>
        </form>

        <form action="select_single_user.php" method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">单个用户记录</span>
                        <input  name="user" type="text" class="form-control" placeholder="single_user" aria-describedby="basic-addon1">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-1">
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="submit" class="btn btn-default">查询</button>

                    </div>
                </div>
            </div>
        </form>
        <form action="select_single_book.php" method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">单本书的状态</span>
                        <input  name="book" type="text" class="form-control" placeholder="single_book" aria-describedby="basic-addon1">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-1">
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="submit" class="btn btn-default">查询</button>

                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-12"><a href="index.php">返回主界面</a><br></div>
        </div></div>
		
</body>
</html>
