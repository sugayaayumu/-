<?php session_start();?>
<html>
<link rel="stylesheet" href="">
<head>
<title>24ch</title>
</head>
<body>
<h1>24ch</h1>
<!--���o���̍쐬-->
����̉����񂪂���A�o�^�o���܂���B�ʂ̖��O�������̓p�X���[�h��ݒ肵�Ă��������B
<form action="new.php" method="POST">
	<input type="hidden" name="username" value=<?php echo$_SESSION['usermiss']; ?>><br>
	<!--���O�̓��̓e�L�X�g���쐬-->
	<input type="submit"name="submit"value="�o�^��ʂ�">
	<!--���M�{�^�����쐬-->
</form>
</body>
</html>

<?php
//echo$_SESSION['usermiss'];
unset($_SESSION['usermiss']);
?>