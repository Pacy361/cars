<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
   if(isset($_POST["submit"])&& $_POS["submit"] == "��½"){//�ж��Ƿ�Ϊpost�ύ��ʽ
		$user = $_POST["username"];//��ȡ�ύ���˺�
		$psw = $_POST["password"];//��ȡ�ύ������
		if($user == " "||$psw == ""){//�ж��˺������Ƿ�Ϊ��
			//Ϊ����ʾ����������һ���¼ҳ��
			echo "<script>alert ('�������û��������룡')��history.go(-1);</script>";
			}
			  else{//����Ϊ��
			  mysql_connect("localhost","root","11111111");//�������ݿ�
			  mysql_select_test("test");
			  $sql = "select username,pw from user where username = '$_POST[username]'and pw = '$_POST[pw]'";
			  $result = mysql_query($sql);
			    if($result){
			    echo "��½�ɹ�"��}
			       else{
			         echo"<script>alert('�û��������벻��ȷ��')��history.go(-1);</script>";
			  }
			 }
			 }
			 else{
			 echo"<script>alert('�ύδ�ɹ���')��history.go(-1);</script>";
			 }
?>
</body>
</html>