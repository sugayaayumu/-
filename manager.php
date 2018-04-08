<html>
<head>
<title>24ch</title>
</head>
<body>
<h1>24ch</h1>
<!--見出しの作成-->
<h2>管理者ページ</h2>
<form action="manager.php" method="POST">
	管理者名と管理用パスワードを入力してください<br>
	名前：<input type="text" name="username_manager" ><br>
	<!--名前の入力テキストを作成-->
	パスワード：<input type="password" name="password_manager" ><br>
	<!--パスワードの入力テキストを作成-->
	<input type="reset"name="reset">
	<!--リセットボタンを作成-->
	<input type="submit"name="submit"value="新規登録">
	<!--送信ボタンを作成-->
</form>
</body>
</html>
<?php
//データベース接続
$pdo=new PDO($dsn,$user,$pass);

//同名テーブルがない場合、作成
	$sql='CREATE TABLE IF NOT EXISTS rogin_24ch
	(
	id int auto_increment primary key,
	username varchar(20),
	password varchar(30)
	);';
	$result=$pdo->query($sql);
?>
<?php
//新規登録時

//送信データの受けとり
	$username=$_POST["username"];
	$password=$_POST["password"];
if(!empty($username) and !empty($password))//最低限必要な送信データが送られてきたときのみ実行
{
//送信データと既存データの照らし合わせ
	$sql='SELECT * FROM rogin_24ch';//データ取得
	$result=$pdo->query($sql);//クエリ実行
foreach($result as $row)
{
	$line=explode(",",$row);

if($password==$row['password'] && $username==$row['username'])//パスワードと番号が一致するとき
{

	session_start();//セッション開始
	$_SESSION['usermiss']=$username;
	header('location:again_new.php');
	exit;
}
}

//送信データの挿入
	$sql="INSERT INTO rogin_24ch (username,password) VALUES(:username,:password)";
	$stmt=$pdo->prepare($sql);//実行準備
	$stmt->bindParam(':username',$username,PDO::PARAM_STR);
	$stmt->bindParam(':password',$password,PDO::PARAM_STR);
	$stmt->execute();//実行

	$id = $pdo->lastInsertId();
	session_start();
	$_SESSION['id']=$id;
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	header('location:infomation.php');
}
?>

<?php
//管理者ログイン機能
	$username_manager=$_POST['username_manager'];
	$password_manager=$_POST['password_manager'];
if(!empty($username_manager) and !empty($password_manager))//最低限必要な送信データが送られてきたときのみ実行
{
if($username_manager=="***" && $password_manager=="***")//パスワードと名前が一致するとき
{
//送信データの表示
	$sql='SELECT * FROM rogin_24ch';
	$result=$pdo->query($sql);
	echo "登録データ"."<br>";
foreach($result as $row)
{
	echo $row['id'].',';
	echo $row['username'].',';
	echo $row['password'].'<br>';
}
}
}
?>

<?php
//ログイン時
//送信データの受け取り
	$username_rogin=$_POST["username_rogin"];
	$password_rogin=$_POST["password_rogin"];
//データの照合開始
if(isset($username_rogin,$password_rogin))
{
	$sql='SELECT * FROM rogin_24ch';
	$result=$pdo->query($sql);
foreach($result as $row)
{
	$line=explode(",",$row);
if($password_rogin==$row['password'] && $username_rogin==$row['username'])//パスワードと番号が一致するとき
{
	session_start();
	$_SESSION['id_rogin']=$row['id'];
	$_SESSION['username_rogin']=$username_rogin;
	$_SESSION['password_rogin']=$password_rogin;
	header('location:write.php');
	exit;
}
}
	header('location:again_new.php');
}
?>
