<?php session_start();?>
<html>
<link rel="stylesheet" href="">
<head>
<title>24ch</title>
</head>
<body>
<h1>24ch</h1>
<!--見出しの作成-->
同一の会員情報があり、登録出来ません。別の名前もしくはパスワードを設定してください。
<form action="new.php" method="POST">
	<input type="hidden" name="username" value=<?php echo$_SESSION['usermiss']; ?>><br>
	<!--名前の入力テキストを作成-->
	<input type="submit"name="submit"value="登録画面へ">
	<!--送信ボタンを作成-->
</form>
</body>
</html>

<?php
//echo$_SESSION['usermiss'];
unset($_SESSION['usermiss']);
?>