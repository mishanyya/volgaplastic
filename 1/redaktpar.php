
<?php
                                             //модуль ввода данных в переменные
include('../config.php');

$kod = $_GET['kod'];//передает значение из поля в переменную
$kod=trim($kod);//убирает пробелы из начала и конца поля
$kod=substr($kod,0,10);   //обработка при вводе не больше 10 символов

$mail = $_GET['mail'];//передает значение из поля в переменную
$mail=trim($mail);//убирает пробелы из начала и конца поля
$mail=substr($mail,0,100);   //обработка при вводе не больше 100 символов

session_start();//инициируем сессию
$_SESSION['email']=$mail;

$userstable='parol';
$query=$pdo->query("SELECT COUNT(*) FROM $userstable WHERE login='$mail' AND vrem_parol='$kod'");
$amount=$query->fetchColumn();

if ($amount>0) {
?>

    <!DOCTYPE html>

<html>
    <head>

        <meta charset="text/html;utf-8" />


<head>


</head>

<body>

    <form action="zamenapa.php" method="POST" >

        <p>Введите новый пароль:</p>
        <p><input type='password' name='parol' maxlength='50' size='50' required></p>
        <p>Подтвердите пароль :</p>
        <p><input type='password' name='parol1' maxlength='50' size='50' required></p>

        <div><input type="submit"   value="Обновить пароль"></div>
    </form>

</body>
</html>





 <?php
}
else{
exit();
}

?>



