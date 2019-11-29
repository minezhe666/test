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
	$str=$db->query("select * from users ");
	$result = $str->fetchAll(PDO::FETCH_ASSOC);
	$flag=false;
	foreach($result as $value){
	    if($value['id'] == $_POST['id']){
	        echo "学号已存在!请重新输入："."<br>";
	        echo "<a href=\"make_card.php\">返回办卡页面</a>";
	        }
	    else
	       $flag=true;
	}
	if($flag){
	    $statement = $db->prepare('insert into users(id,name,sex,telephone) values (:id,:name,:sex,:telephone)');
	    $result = $statement->execute([':id' => $_POST['id'], ':name' => $_POST['username'], ':sex' => $_POST['sex'], ':telephone' => $_POST['telephone']]);
	    if ($result) {
	        echo "办卡成功！"."&nbsp;";
	        echo "您的卡号为：".$_POST['id']."<br>";
	        echo "<a href=\"index.php\">返回主页面</a>";
	    }
	    else{
	        echo "输入格式不对，请重新输入："."<br>";
	        echo "<a href=\"make_card.php\">返回办卡页面</a>";
	    }
	}
	?>
</div>
</body>
</html>
