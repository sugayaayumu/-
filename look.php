<?php
//データベース接続
$pdo=new PDO($dsn,$user,$pass);

	
//同名テーブルがない場合、作成
	$sql='CREATE TABLE IF NOT EXISTS look_24ch1
	(
	id int auto_increment primary key,
	nickname varchar(20),
	password varchar(30),
	comment  varchar(300),
	date     varchar(30)
	);';
	$result=$pdo->query($sql);

//送信データの受け取り
	$nickname=$_POST['nickname'];
	$comment=$_POST['comment'];
	$date=date("Y/m/d/H:i" );
	
	session_start();//セッション開始
	$password=$_SESSION['password_rogin'];

if(!empty($nickname) and !empty($comment))
{
//送信データの挿入
	$sql="INSERT INTO look_24ch1 (nickname,password,comment,date) VALUES(:nickname,:password,:comment,:date)";
	$stmt=$pdo->prepare($sql);//実行準備
	$stmt->bindParam(':nickname',$nickname,PDO::PARAM_STR);
	$stmt->bindParam(':password',$password,PDO::PARAM_STR);
	$stmt->bindParam(':comment',$comment,PDO::PARAM_STR);
	$stmt->bindValue(':date', $date, PDO::PARAM_STR);

	$stmt->execute();//実行
}
?>

<html>
<head>
<title>24ch</title>
</head>
<body>
<h1>24ch</h1>
<!--見出しの作成-->
<h2>掲示板</h2>
<?php
//送信データの表示
	$sql='SELECT * FROM look_24ch1';
	$result=$pdo->query($sql);
foreach($result as $row)
{
echo"---------------------------------------------".'<br>';
	echo $row['id'].'/';
	echo $row['nickname'].'/';
	//echo $row['password'].',';
	echo $row['date'].'<br>';
	echo $row['comment'].'<br>';
//echo"---------------------------------------------".'<br>';
}
?>
<form action="write.php" method="POST">
	<input type="submit"name="submit"value="書き込む">
	<!--送信ボタンを作成-->
</form>
</body>
</html>

