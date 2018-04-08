<?php
session_start()
?>
<html>
<head>
<title>24ch</title>
</head>
<body>
<h1>24ch</h1>
<!--見出しの作成-->
<h2>掲示板</h2>
こんにちはID<?php echo$_SESSION['id_rogin']."　"; echo $_SESSION['username_rogin'];?>さん
<h3>書き込む</h3>
<form action="look.php" method="POST">
	名前：<input type="text" name="nickname" value=<?php echo $_SESSION['username_rogin'];?>><br>
	<!--名前の入力テキストを作成-->
	コメント：<textarea name="comment" cols="20" rows="3"></textarea><br>
	<!--コメントの入力テキストの作成-->
	<input type="reset"name="reset">
	<!--リセットボタンを作成-->
	<input type="submit"name="submit"value="送信">
	<!--送信ボタンを作成-->
</form>
</body>
</html>
