<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>图书管理系统</title>
    <link href="css/action.css" type="text/css" rel="stylesheet" >
		<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/supersized.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/jquery-1.8.2.min.js"></script>
	<script src="assets/js/supersized.3.2.7.min.js"></script>
	<script src="assets/js/supersized-init.js"></script>
	<script src="assets/js/majs.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script language="javascript">
		$(document).ready(ready);
	</script> 
</head>
<body>
<!-- <div id="all">
    <div class="a">
        <p style="font-size: 25px;color: #1635af">图书管理系统欢迎你</p>

    </div>
</div> -->
<div class="abc" style="margin-top: 200px;font-size: 30px;">
	<?php
	$db = new PDO('mysql:host=localhost;dbname=library','root','123456');
	$str=$db->query("select * from books ");
	$result = $str->fetchAll(PDO::FETCH_ASSOC);
	$flag=false;
	foreach($result as $value){
	    if($value['id'] == $_POST['id']){
	        echo "图书编号已存在!请重新输入："."<br>";
	        echo "<a href=\"add_book.1.php\">返回添书页面</a>";
	    }
	    else {
	        $flag = true;
	    }
	}
	if($flag){
	    $statement = $db->prepare('insert into books(id,name,author,price,status) values (:id,:name,:author,:price,:status)');
	    $result = $statement->execute([':id' => $_POST['id'], ':name' => $_POST['name'], ':author' => $_POST['author'], ':price' => $_POST['price'], ':status' => '1']);
	    if ($result) {
	        echo "添书成功";
	        echo "书的编号：".$_POST['id']."书名：".$_POST['name']."<br>";
	        echo "<a href=\"index.php\">返回主页面</a>";
	    } else {
	        echo "输入格式信息不对，添书失败"."<br>";
	        echo "<a href=\"add_book.1.php\">返回添书界面</a>";
	    }
	}
	?>
</div>
</body>
</html>
