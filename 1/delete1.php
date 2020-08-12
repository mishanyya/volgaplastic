 <html>  
<head>
<title> Удалить</title>
</head>
<body>
<?php

include('../config.php');
session_start();//инициируем сессию   
$login=$_SESSION['email']; 
$parol=$_SESSION['parol']; 
$userstable='parol'; 

$userstable1='lodki';
$query=$pdo->query("SELECT COUNT(*) FROM $userstable WHERE login='$login' AND parol='$parol'");//запрос на выбор всех записей из таблицы 
$ro=$query->fetchColumn();

if ($ro>0){
	
if($_POST["dfile"]) 
{ 
$mass=$_POST["dfile"];   
$qq=$mass[0];//название в базе данных
}

$rr=$_POST["udal"];


$query=$pdo->prepare("SELECT * FROM $userstable1 WHERE nazvanie=:qq");
$query->bindParam(':qq',$qq);
$query->execute();

while($line=$query->fetch(PDO::FETCH_NUM))//выводит строки пока они не кончатся в бд

{
$naz=$line[0];//имя в переменную
$fot=$line[1];//фото в переменную
}

unlink($folder1.$fot);//удаление фотографии

$query=$pdo->query("DELETE FROM $userstable1 WHERE nazvanie='$naz'");
echo"Удалено<br><a href='vibor.php'>Далее</a>";

 }
else{echo"<br>логин и пароль не совпали <br><a href='index.php'>на страницу ввода логина и пароля</a>";} 

?>


</body>
</html>