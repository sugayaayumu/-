<?php
//infomation.php����̎�M
$username=$_POST['username'];
?>
<html>
<head>
<title>24ch</title>
</head>
<body>
<h1>24ch</h1>
<!--���o���̍쐬-->
<h2>�V�K�o�^</h2>
<form action="manager.php" method="POST">
	���O�ƃp�X���[�h����͂��Ă�������<br>
	���O�F<input type="text" name="username" value=<?php if(!empty($username)){echo$username;} ?>><br>
	<!--���O�̓��̓e�L�X�g���쐬-->
	�p�X���[�h�F<input type="password" name="password" ><br>
	<!--�p�X���[�h�̓��̓e�L�X�g���쐬-->
	<input type="reset"name="reset">
	<!--���Z�b�g�{�^�����쐬-->
	<input type="submit"name="submit"value="�V�K�o�^">
	<!--���M�{�^�����쐬-->
</form>
</body>
</html>

