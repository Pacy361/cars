<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
   if(isset($_POST["submit"])&& $_POS["submit"] == "登陆"){//判断是否为post提交方式
		$user = $_POST["username"];//获取提交的账号
		$psw = $_POST["password"];//获取提交的密码
		if($user == " "||$psw == ""){//判断账号密码是否为空
			//为空提示，并返回上一层登录页面
			echo "<script>alert ('请输入用户名和密码！')；history.go(-1);</script>";
			}
			  else{//若不为空
			  mysql_connect("localhost","root","11111111");//连接数据库
			  mysql_select_test("test");
			  $sql = "select username,pw from user where username = '$_POST[username]'and pw = '$_POST[pw]'";
			  $result = mysql_query($sql);
			    if($result){
			    echo "登陆成功"；}
			       else{
			         echo"<script>alert('用户名或密码不正确！')；history.go(-1);</script>";
			  }
			 }
			 }
			 else{
			 echo"<script>alert('提交未成功！')；history.go(-1);</script>";
			 }
?>
</body>
</html>