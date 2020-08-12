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

include "time.php";//присоединить файл с реальными датой и временем       //общий модуль                   
include "config.php";//присоединить файл для подключения к серверу

//соединение через PDO

$dsn = "mysql:host=$sdb_name;dbname=$db_name;charset=utf8";
$opt = array(
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //разобраться с этими обозначениями
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ,
PDO::ATTR_PERSISTENT => true//постоянное подключение pdo
);

try {//подключение и создание объекта pdo
$pdo = new PDO($dsn, $user_name, $user_password, $opt);
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}

$userstable="lodki";

                  

session_start();//инициируем сессию   
$naz=$_SESSION['naz']; 
 
$login22=$_SESSION['email'];
//if($login22!="volgaplastic@mail.ru") exit();

?>
 
  <form  enctype="multipart/form-data" action="updatefoto1.php"  method="post">
  <input  type="hidden" name="MAX_FILE_SIZE" value="10240000"  />
  <input  type="file" name="uploadFile"/>
<br>Не забудьте выбрать фотографию
<br>

Выбранная фотография будет размером 400*210


<input  type='submit' name='upload' value='Загрузить' >
  </form>


<a href="vibor.php">Назад</a>

</body>
</html>
