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
	$result=$db->query('select * from users')->fetchAll();
	foreach($result as $value){
	    if($value['id']==$_POST['user_id'])
	        $flag=true;
	}
	if(!$flag) {
	    echo "卡号不存在、还书失败" . "<br>";
	    echo "<a href=\"return_book.1.php\">返回还书界面</a>";
	}
	$a=false;
	$result=$db->query('select * from books')->fetchAll();
	foreach($result as $value){
	    if($value['id']==$_POST['book_id'])
	        $a=true;
	}
	if(!$a) {
	    echo "书籍编号不存在、还书失败" . "<br>";
	    echo "<a href=\"return_book.1.php\">返回还书界面</a>";
	}
	$b=false;
	$statement= $db->prepare('select * from books where id=:id ');
	$statement->execute([':id'=>$_POST['book_id']]);
	$result =$statement->fetch();
	if($result['status']) {
	    echo "书籍已在库、还书失败" . "<br>";
	    echo "<a href=\"return_book.1.php\">返回还书界面</a>";
	}
	else
	    $b=true;
	if($flag and $a and $b) {
	    $statement= $db->prepare('select * from record where usersid=:usersid AND status=0');
	    $statement->execute([':usersid'=>$_POST['user_id']]);
	    $result =$statement->fetch();
	    if($result['booksid']==$_POST['book_id']) {
	        echo "还书成功，欢迎再来！";
	        echo "<a href=\"index.php\">返回主界面</a>";
	        $status = 1;
	        $returntime = date('Y-m-d');
	        $id = $_POST['user_id'];
	        $book = $_POST['book_id'];
	        $db->exec("update record set returntime=' $returntime',status=$status where usersid = $id and booksid = $book");
	        $statement = $db->prepare('update books set status=:status where id=:id ');
	        $statement->execute([':id' => $_POST['book_id'], ':status' => '1']);
	    }
	    else{
	        echo "该用户未借此书，请归还本人所借书的编号".'<br>';
	        echo "<a href=\"return_book.1.php\">返回还书界面</a>";
	    }
	}
	?>
</div>
</body>
</html>
