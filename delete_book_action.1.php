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
	$flag=false;
	$db = new PDO('mysql:host=localhost;dbname=library','root','123456');
	$result=$db->query('select * from books')->fetchAll();
	foreach($result as $value){
	    if($value['id']==$_POST['id'])
	        $flag=true;
	}
	if(!$flag) {
	    echo "图书编号不存在，无法删除！" . "<br>";
	    echo "<a href=\"delete_book.1.php\">返回删书界面</a>";
	}
	$a=false;
	$statement= $db->prepare('select * from books where id=:id ');
	$statement->execute([':id'=>$_POST['id']]);
	$result =$statement->fetch();
	if(!$result['status']) {
	    echo "书籍不在库、无法删除！" . "<br>";
	    echo " <a href=\"delete_book.1.php\">返回删书界面</a>";
	}
	else
	    $a=true;
	if($flag and $a) {
	    $statement = $db->prepare('delete from books WHERE id=:id and status=:status');
	    $result = $statement->execute([':id' => $_POST['id'], ':status' => 1]);
	    if ($result) {
	        echo "删书成功";
	        echo "<a href=\"index.php\">返回主页面</a>";
	    }
	}
	?>
</div>
</body>
</html>
