﻿<!DOCTYPE html>

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
$userstable = "lodki";//табл лодки
                             //$userstable = "polzovateli";//табл с паролями и логинами


session_start();//инициируем сессию   
$login22=$_SESSION['email'];
//if($login22!=$login_user) exit();
   //echo"$login_user";
?>
 
  <form  enctype="multipart/form-data" action="insertpole1.php"  method="post">
  <input  type="hidden" name="MAX_FILE_SIZE" value="10240000"  />
  <input  type="file" name="uploadFile"/>
Введение фотографии обязательно!!!

<p>Введите Название:</p>
<input type="text" name=nazvanie maxlength=50 size=50>
<p>Введите Длину:</p>
<input type="text" name=dlina maxlength=50 size=50>
<p>Введите Ширину:</p>
<input type="text" name=shirina maxlength=50 size=50>
<p>Введите Высоту борта:</p>
<input type="text" name=vysota maxlength=50 size=50>
<p>Введите Пассажировместимость:</p>
<input type="text" name=passaziro maxlength=50 size=50>
<p>Введите Нагрузку:</p>
<input type="text" name=nagruzka maxlength=50 size=50>
<p>Введите рекомендуемую мощность п.м.:</p>
<input type="text" name=moshnost maxlength=50 size=50>
<p>Введите Вес:</p>
<input type="text" name=ves maxlength=50 size=50>
<p>Введите Цену:</p>
<input type="text" name=tcena maxlength=50 size=50>


<a href="vibor.php">Назад</a><br>
Выбранная фотография будет размером 400*210


  <input  type="submit" name="upload" value="Загрузить"/>
  </form>


</body>

</html>
