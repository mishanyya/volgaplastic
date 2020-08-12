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
$userstable = "parol";//табл с паролями и логинами

 
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

?>

<form action="insertparol1.php" method="POST" >

<p>Введите email:</p>
<input type="text" name='login' maxlength='70' size='70'></p>

<p>Введите  пароль:</p>
<input type="password" name='parol' maxlength='50' size='50'></p>


<div><input type="submit"  value="Ввод"></div>


</form>

<!--<a href="parolvsp.php">Вспомнить пароль</a>-->
</body>
</html>
