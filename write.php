<?php
session_start()
?>
<html>
<head>
<title>24ch</title>
</head>
<body>
<h1>24ch</h1>
<!--���o���̍쐬-->
<h2>�f����</h2>
����ɂ���ID<?php echo$_SESSION['id_rogin']."�@"; echo $_SESSION['username_rogin'];?>����
<h3>��������</h3>
<form action="look.php" method="POST">
	���O�F<input type="text" name="nickname" value=<?php echo $_SESSION['username_rogin'];?>><br>
	<!--���O�̓��̓e�L�X�g���쐬-->
	�R�����g�F<textarea name="comment" cols="20" rows="3"></textarea><br>
	<!--�R�����g�̓��̓e�L�X�g�̍쐬-->
	<input type="reset"name="reset">
	<!--���Z�b�g�{�^�����쐬-->
	<input type="submit"name="submit"value="���M">
	<!--���M�{�^�����쐬-->
</form>
</body>
</html>
