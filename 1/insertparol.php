<?php
include('../config.php');
$userstable='parol';                                           //модуль ввода данных в переменные

$login=$_POST['login'];//передает значение из поля в переменную
$login=trim($login);//убирает пробелы из начала и конца поля
$login=htmlspecialchars($login);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$login=substr($login,0,70);   //обработка при вводе не больше 70 символов

$parol=$_POST['parol'];//передает значение из поля в переменную
$parol=trim($parol);//убирает пробелы из начала и конца поля
$parol=htmlspecialchars($parol);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$parol=substr($parol,0,50);   //обработка при вводе не больше 50 символов
$parol=sha1($parol);// зашифровка  пароля
                                        //модуль вставки данных в таблицу
session_start();//инициируем сессию
$_SESSION['email']=$login; 
$_SESSION['parol']=$parol; 
$query=$pdo->query("SELECT COUNT(*) FROM $userstable WHERE login='$login' AND parol='$parol'");//запрос на выбор всех записей из таблицы
$ro = $query->fetchColumn();
if ($ro>0)
 {
Header("Location: vibor.php");
}
else{
    echo"<meta charset=\"utf-8\"><!-- при открытии файла этот тег показывает кодировку-->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">

<body class=\"bg-warning\">
<div class=\"container mt-3\">
    <p>логин и пароль не совпали </p><a href='index.php'>на страницу ввода логина и пароля</a>
</div>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>
</body>";
}
?>




