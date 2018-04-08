<html>
<link rel="stylesheet" href="">
<head>
<title>24ch</title>
</head>
<body>
<h1>24ch</h1>
<!--見出しの作成-->
入力された会員情報はありませんでした。もう一度入力し直してください。
<form action="rogin.php" method="POST">
	<input type="hidden" name="username"><br>
	<!--名前の入力テキストを作成-->
	<input type="hidden" name="password" ><br>
	<input type="submit"name="submit"value="ログイン画面へ">
	<!--送信ボタンを作成-->
<form action="new.php" method="POST">
	<input type="submit"name="submit"value="登録画面へ">
	<!--送信ボタンを作成-->
</form>
</body>
</html>