<?php
//infomation.phpからの受信
$username=$_POST['username'];
?>
<html>
<head>
<title>24ch</title>
</head>
<body>
<h1>24ch</h1>
<!--見出しの作成-->
<h2>新規登録</h2>
<form action="manager.php" method="POST">
	名前とパスワードを入力してください<br>
	名前：<input type="text" name="username" value=<?php if(!empty($username)){echo$username;} ?>><br>
	<!--名前の入力テキストを作成-->
	パスワード：<input type="password" name="password" ><br>
	<!--パスワードの入力テキストを作成-->
	<input type="reset"name="reset">
	<!--リセットボタンを作成-->
	<input type="submit"name="submit"value="新規登録">
	<!--送信ボタンを作成-->
</form>
</body>
</html>

