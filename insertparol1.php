<!DOCTYPE html>

<html>
    <head>
<meta name='wmail-verification' content='6772213564db917b' />
        <meta charset="text/html;utf-8" />
            <meta name="document-state" content="Dynamic" />
 <meta http-equiv="content-language" content="ru" />
 <meta name="robots" content="all" />
        <title>Пластиковые лодки Астрахань</title>
<head>
<meta charset="utf-8"><!-- при открытии файла этот тег показывает кодировку-->

<link rel="stylesheet" type="text/css" href="zakladka.css"/>
<link rel="stylesheet" type="text/css" href="zakspis.css"/>
<link rel="stylesheet" type="text/css" href="okno.css"/>
<script src="okno.js" type="text/javascript"></script>
<script src="zakladka.js"></script>

<script src="time.js"></script>
</head>
<body>
<?php

include ("time.php");//присоединить файл с реальными датой и временем       //общий модуль                   
include ("config.php");//присоединить файл для подключения к серверу
$userstable ='parol';//табл с паролями и логинами
 
                                                //модуль с полями для ввода пароля и логина
//соединение через PDO

$dsn = "mysql:host=$sdb_name;dbname=$db_name;charset=utf8";
$opt = array(
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //разобраться с этими обозначениями
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM ,//выдает по умолчанию по номеру столбцов
PDO::ATTR_PERSISTENT => true//постоянное подключение pdo
);

try {//подключение и создание объекта pdo
$pdo = new PDO($dsn, $user_name, $user_password, $opt);
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}                                     
 //модуль ввода данных в переменные 
$login=$_POST['login'];//передает значение из поля в переменную
$login=trim($login);//убирает пробелы из начала и конца поля
$parol=$_POST['parol'];//передает значение из поля в переменную
$parol=sha1($parol);// зашифровка  пароля
                                        //модуль вставки данных в таблицу 
session_start();//инициируем сессию   
$_SESSION['email']=$login; 
$query=$pdo->prepare("SELECT login,parol FROM $userstable WHERE login=?");//запрос на выбор всех записей из таблицы 
$query->execute(array($login));
while($row =$query->fetch(PDO::FETCH_LAZY))
{
$ro_0=$row[0];
$ro_1=$row[1];
}
if (($ro_0==$login)&($ro_1==$parol))
 {
Header("Location: vibor.php");//на главную страницу администратора
}
  else{echo "Вы ввели неверный логин или пароль. Попробуйте <a href='insertparol.php'>еще раз</a>"; }
?>
</body>
</html>
