 <html>  
<head>
<title> Удалить</title>
<link rel="stylesheet" type="text/css" href="zakladka.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
include "time.php";//присоединить файл с реальными датой и временем       //общий модуль                  
include "config.php";//присоединить файл для подключения к серверу


$userstable="lodki";
 
session_start();//инициируем сессию   
$login22=$_SESSION['email'];
//if($login22!=$login_user) exit();






if($_POST["dfile"]) 
{ 
$mass=$_POST["dfile"];   
$qq=$mass[0];//название в базе данных
}

$rr=$_POST["udal"];


$query=$pdo->prepare("SELECT * FROM $userstable WHERE nazvanie=? ");
$query->execute(array($qq));

while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
{

$naz=$line[0];//имя в переменную
$fot=$line[1];//фото в переменную
}



//unlink($folder1.$fot);//удаление фотографии пока закомментируем до отработки




$result1=$pdo->prepare("DELETE FROM $userstable WHERE nazvanie=?");
$rezt=$result1->execute(array($naz));
// Header("Location: vibor.php");

echo "Пункт с названием  $qq и фото удалены. <a href='vibor.php'>далее</>";


?>


</body>
</html>
