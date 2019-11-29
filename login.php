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
	$username=$_POST['username'];
	$password=$_POST['password'];
	$db = new PDO('mysql:host=localhost;dbname=library','root','123456');
	$statement=$db->prepare('select * from admin where username=:username');
	$statement->execute([':username'=>$username]);
	$user=$statement->fetch();
	if(empty($user)){
	    echo "用户不存在！";
	    echo "<a href=\"login.html\">点击重新登录</a>";
	}
	else if($password != $user['password']){
	    echo "密码不正确！";
	    echo "<a href=\"login.html\">点击重新登录</a>";
	}
	else{
	    $_SESSION['user']=$username;
	    echo $username."登录成功！";
	    echo "<a href=\"index.php\">点击进入选择业务主页</a>";
	}
	?>
</div>
</body>
</html>
