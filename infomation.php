<?php
session_start();
?>
<html>
<head>
<title>24ch</title>
</head>
<body>
<h1>24ch</h1>
<!--見出しの作成-->
<h2>登録情報</h2>
はじめまして<?php echo $_SESSION['username']; ?>さん<br>
あなたの会員情報は以下になります。<br>
ID:<?php echo $_SESSION['id']; ?><br>
username:<?php echo $_SESSION['username']; ?><br>
password:<?php echo $_SESSION['password']; ?>
<form action="look.php" method="POST">
	<input type="submit"name="submit"value="閲覧ページへ">
	<!--送信ボタンを作成-->
</form>
</body>
</html>
