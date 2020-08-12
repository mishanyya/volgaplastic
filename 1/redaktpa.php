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



 
$vremenproverka=kro2nvbl; //временный пароль 


                                                //модуль с полями для ввода пароля и логина
?>
Введите временный пароль


<form action="redaktpar.php" method="POST" >



Введите  временный пароль<input type="text" name='vremparol' maxlength='10' size='10'><br>
Введите  адрес электронной почты <input type="text" name='email' maxlength='70' size='70'><br>

Введите  число "2" буквами<input type="text" name='text1' maxlength='10' size='10'><br>
Введите  число "2" цифрами<input type="text" name='text2' maxlength='10' size='10'><br>



<div><input type="submit"  value="Ввести временный пароль"></div>

<?php
//email-пользователя
                                             //модуль ввода данных в переменные 


$text1 = $_POST['text1'];//передает значение из поля в переменную
$text1=trim($text1);//убирает пробелы из начала и конца поля
$text1=htmlspecialchars($text1);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$text1=substr($text1,0,10);   //обработка при вводе не больше 10 символов

$text2 = $_POST['text2'];//передает значение из поля в переменную
$text2=trim($text2);//убирает пробелы из начала и конца поля
$text2=htmlspecialchars($text2);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$text2=substr($text2,0,10);   //обработка при вводе не больше 10 символов


$vremparol = $_POST['vremparol'];//передает значение из поля в переменную
$vremparol=trim($vremparol);//убирает пробелы из начала и конца поля
$vremparol=htmlspecialchars($vremparol);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$vremparol=substr($vremparol,0,10);   //обработка при вводе не больше 30 символов


$email = $_POST['email'];//передает значение из поля в переменную
$email=trim($email);//убирает пробелы из начала и конца поля
$email=htmlspecialchars($email);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$email=substr($email,0,70);   //обработка при вводе не больше 70 символов


if(($text1=="два")&($text2=="2")&($vremparol==$vremenproverka)&($email=="volgaplastic@mail.ru"))
{

                                     //модуль внесения логина и пароля из переменной в сессию
session_start();//инициируем сессию   
$_SESSION['email']=$email;//создается сессия логина

Header("Location: zamenapa.php");
}
      else exit();  


?>
</form>
</body>

