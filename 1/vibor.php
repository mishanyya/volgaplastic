<!DOCTYPE html>
<html>
<meta http-equiv="content-language" content="ru" />
<head>
    <meta charset="utf-8"><!-- при открытии файла этот тег показывает кодировку-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">



</head>
<body class="bg-warning">

<?php

include('../config.php');
session_start();//инициируем сессию
$login=$_SESSION['email'];
$parol=$_SESSION['parol'];
$userstable='parol';
$query=$pdo->query("SELECT COUNT(*) FROM $userstable WHERE login='$login' AND parol='$parol'");//запрос на выбор всех записей из таблицы
$ro = $query->fetchColumn();
/*if ($ro>0) только на локальном сервере, так как пароль забыл!!!
 {*/
echo"<div class=\"container mt-3\">
<div class='row'>
<div class='col-md-4 bg-light border border-primary rounded'>
<p><a href='update.php'>Редактировать запись и/или изменить фото</a></p>
<p><a href='delete.php'>Удалить запись</a></p>
<p><a href='insertpole.php'>Внести запись</a></p>
<p><a href='osnova.php'>Редактировать основные данные и телефоны</a></p>
<p><a href='/index.php'>Выход на сайт</a></p>
</div></div></div>";
/*}
else{echo"логин и пароль не совпали <br><a href='index.php'>на страницу ввода логина и пароля</a>";}
*/
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
