<link rel="stylesheet" type="text/css" href="style.css"/>
<meta charset="utf-8">


<?php


include "time.php";//присоединить файл с реальными датой и временем       //общий модуль                   
include "config.php";//присоединить файл для подключения к серверу
$userstable = "parol";//табл с паролями и логинами
$link = mysql_connect($sdb_name,$user_name,$user_password)
or die("Could not connect");//соединение с сервером
mysql_select_db($db_name) or die("не могу выбрать мою бд");//соединение с бд
mysql_query("SET CHARACTER SET 'utf8';"); //для кодировки
mysql_query("SET SESSION collation_connection = 'utf8_general_ci';"); //для кодировки                                            //модуль с полями для ввода пароля и логина
?>
<?php
/*Здесь мы проверяем существуют ли переменные, которые передала форма обратной связи. Если не существуют, то создаем */

 if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['message'])) {$message = $_POST['message'];}



$address = "volgaplastic@mail.ru"; 
$sub = "Это сообщение с  сайта www.";
$mes = "Автор указал такое имя: $name \nОставил такой E-mail: $email \nСодержание письма: \n$message";
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
if ($send == 'true')
{
echo "Сообщение отправлено!";
}
else 
{
echo "Сообщение не отправлено!";
}

?>


<?php
/*
                                             //модуль ввода данных в переменные 


$text1 = $_POST['text1'];//передает значение из поля в переменную
$text1=trim($text1);//убирает пробелы из начала и конца поля
$text1=htmlspecialchars($text1);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$text1=substr($text1,0,10);   //обработка при вводе не больше 10 символов

$text2 = $_POST['text2'];//передает значение из поля в переменную
$text2=trim($text2);//убирает пробелы из начала и конца поля
$text2=htmlspecialchars($text2);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$text2=substr($text2,0,10);   //обработка при вводе не больше 10 символов
   
$email = $_POST['email'];//передает значение из поля в переменную
$email=trim($email);//убирает пробелы из начала и конца поля
$email=htmlspecialchars($email);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$email=substr($email,0,50);   //обработка при вводе не больше 50 символов

                                        //модуль отправки на email

if(($email=="volgaplastic@mail.ru")&($text1=="два")&($text2=="2"))
{
echo"введеный и настощий email совпадают";




$address = "volgaplastic@mail.ru"; 

$sub = "Это сообщение с моего сайта www.volgaplastic-a.ru";
$mes = "Автор указал такое имя: $name \nОставил такой E-mail и телефон: $email и $tlf \nСодержание письма: \n$message";
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
if ($send == 'true')
{
echo "<b>Сообщение отправлено!<br><a href=\"index.php\">Нажмите сюда для возврата на сайт</a></b>";
}
else 
{
echo "<b>Сообщение не отправлено!<br><a href=\"index.php\">Нажмите сюда для возврата на сайт</a></b>";
}


}//окончание цикла
 else echo"введеный и настощий email не совпадают";

//если логин вписан и пароли в полях совпадают
          
*/

?>
