<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
   if(isset($_POST["submit"])&& $_POS["submit"] == "ע��"){//�ж��Ƿ�Ϊpost�ύ��ʽ
		$username = $_POST["username"];//��ȡ�ύ���˺�
		$pw = $_POST["password"];//��ȡ�ύ������
		if($username == " "||$pw == " "){//�ж��˺������Ƿ�Ϊ��
			//Ϊ����ʾ����������һ��ע��ҳ��
			echo "<script>alert ('�����������û��������룡')history.go(-1);</script>";
			}
			  else{//����Ϊ��
			  mysql_connect("localhost","root","11111111");//�������ݿ�
			  mysql_select_test("test");
			  $sql = "insert intoINSERT INTO `user` (`username`, `pw`) VALUES
                      ($uesrname,$pw);"
			  $result = mysql_query($sql);
			    if($result){
			    echo "ע��ɹ�"��
					echo "<script>alert ('�������û��������룡')��history.go(-1);</script>";}
			       else{
			         echo"<script>alert('ע��ʧ�ܣ�')��history.go(-1);</script>";
			  }
			 }
}
?>
</body>
</html>