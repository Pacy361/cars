<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
   if(isset($_POST["submit"])&& $_POS["submit"] == "注册"){//判断是否为post提交方式
		$username = $_POST["username"];//获取提交的账号
		$pw = $_POST["password"];//获取提交的密码
		if($username == " "||$pw == " "){//判断账号密码是否为空
			//为空提示，并返回上一层注册页面
			echo "<script>alert ('请重新输入用户名和密码！')history.go(-1);</script>";
			}
			  else{//若不为空
			  mysql_connect("localhost","root","11111111");//连接数据库
			  mysql_select_test("test");
			  $sql = "insert intoINSERT INTO `user` (`username`, `pw`) VALUES
                      ($uesrname,$pw);"
			  $result = mysql_query($sql);
			    if($result){
			    echo "注册成功"；
					echo "<script>alert ('请输入用户名和密码！')；history.go(-1);</script>";}
			       else{
			         echo"<script>alert('注册失败！')；history.go(-1);</script>";
			  }
			 }
}
?>
</body>
</html>