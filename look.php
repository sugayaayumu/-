<?php
//�f�[�^�x�[�X�ڑ�
$pdo=new PDO($dsn,$user,$pass);

	
//�����e�[�u�����Ȃ��ꍇ�A�쐬
	$sql='CREATE TABLE IF NOT EXISTS look_24ch1
	(
	id int auto_increment primary key,
	nickname varchar(20),
	password varchar(30),
	comment  varchar(300),
	date     varchar(30)
	);';
	$result=$pdo->query($sql);

//���M�f�[�^�̎󂯎��
	$nickname=$_POST['nickname'];
	$comment=$_POST['comment'];
	$date=date("Y/m/d/H:i" );
	
	session_start();//�Z�b�V�����J�n
	$password=$_SESSION['password_rogin'];

if(!empty($nickname) and !empty($comment))
{
//���M�f�[�^�̑}��
	$sql="INSERT INTO look_24ch1 (nickname,password,comment,date) VALUES(:nickname,:password,:comment,:date)";
	$stmt=$pdo->prepare($sql);//���s����
	$stmt->bindParam(':nickname',$nickname,PDO::PARAM_STR);
	$stmt->bindParam(':password',$password,PDO::PARAM_STR);
	$stmt->bindParam(':comment',$comment,PDO::PARAM_STR);
	$stmt->bindValue(':date', $date, PDO::PARAM_STR);

	$stmt->execute();//���s
}
?>

<html>
<head>
<title>24ch</title>
</head>
<body>
<h1>24ch</h1>
<!--���o���̍쐬-->
<h2>�f����</h2>
<?php
//���M�f�[�^�̕\��
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
	<input type="submit"name="submit"value="��������">
	<!--���M�{�^�����쐬-->
</form>
</body>
</html>

