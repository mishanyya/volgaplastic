


<?php
include('../config.php');

                                             //модуль ввода данных в переменные 
session_start();//инициируем сессию
$email=$_SESSION['email'];

$parol = $_POST['parol'];//передает значение из поля в переменную
$parol=trim($parol);//убирает пробелы из начала и конца поля
$parol=htmlspecialchars($parol);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$parol=sha1($parol);// зашифровка  пароля

$parol1 = $_POST['parol1'];//передает значение из поля в переменную
$parol1=trim($parol1);//убирает пробелы из начала и конца поля
$parol1=htmlspecialchars($parol1);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$parol1=sha1($parol1);// зашифровка  пароля


                                        //модуль вставки данных в таблицу клиента

if(!empty($parol)&($parol1==$parol))
{
$userstable='parol';
$query=$pdo->prepare("UPDATE $userstable SET parol=? WHERE login=?");
$result=$query->execute(array($parol,$email));

if ($result=='true') 
{
echo "Пароль изменен успешно!<a href='index.php'>на страницу входа</a>";

}
else {
    exit("<br/><a href='index.php'>Пароль не изменен! свяжитесь с администратором сайта!</a>");
}
}

?>