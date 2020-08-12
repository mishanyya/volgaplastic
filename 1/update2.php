<!DOCTYPE html>
<html>
<meta http-equiv="content-language" content="ru" />
<head>
    <meta charset="utf-8"><!-- при открытии файла этот тег показывает кодировку-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body class="bg-warning">
<div class="container">
<?php
include('../config.php');
session_start();//инициируем сессию   
$login=$_SESSION['email']; 
$parol=$_SESSION['parol']; 
$userstable='parol'; 
$userstable1='lodki';
$query=$pdo->query("SELECT COUNT(*) FROM $userstable WHERE login='$login' AND parol='$parol'");//запрос на выбор всех записей из таблицы 
$ro = $query->fetchColumn();
if ($ro>0){
$naz=$_SESSION['naz']; 
 echo "<p class='h5 text-info'>$naz</p>";
                                             //модуль ввода данных в переменные

$dlina = $_POST['dlina'];//передает значение из поля в переменную
$dlina=trim($dlina);//убирает пробелы из начала и конца поля
$dlina=htmlspecialchars($dlina);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$dlina=substr($dlina,0,50);   //обработка при вводе не больше 50 символов

$shirina = $_POST['shirina'];//передает значение из поля в переменную
$shirina=trim($shirina);//убирает пробелы из начала и конца поля
$shirina=htmlspecialchars($shirina);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$shirina=substr($shirina,0,50);   //обработка при вводе не больше 50 символов

$vysota = $_POST['vysota'];//передает значение из поля в переменную
$vysota=trim($vysota);//убирает пробелы из начала и конца поля
$vysota=htmlspecialchars($vysota);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$vysota=substr($vysota,0,50);   //обработка при вводе не больше 50 символов

$passaziro = $_POST['passaziro'];//передает значение из поля в переменную
$passaziro=trim($passaziro);//убирает пробелы из начала и конца поля
$passaziro=htmlspecialchars($passaziro);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$passaziro=substr($passaziro,0,50);   //обработка при вводе не больше 50 символов

$nagruzka = $_POST['nagruzka'];//передает значение из поля в переменную
$nagruzka=trim($nagruzka);//убирает пробелы из начала и конца поля
$nagruzka=htmlspecialchars($nagruzka);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$nagruzka=substr($nagruzka,0,50);   //обработка при вводе не больше 50 символов

$moshnost = $_POST['moshnost'];//передает значение из поля в переменную
$moshnost=trim($moshnost);//убирает пробелы из начала и конца поля
$moshnost=htmlspecialchars($moshnost);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$moshnost=substr($moshnost,0,50);   //обработка при вводе не больше 50 символов

$ves = $_POST['ves'];//передает значение из поля в переменную
$ves=trim($ves);//убирает пробелы из начала и конца поля
$ves=htmlspecialchars($ves);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$ves=substr($ves,0,50);   //обработка при вводе не больше 50 символов

$tcena = $_POST['tcena'];//передает значение из поля в переменную
$tcena=trim($tcena);//убирает пробелы из начала и конца поля
$tcena=htmlspecialchars($tcena);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$tcena=substr($tcena,0,50);   //обработка при вводе не больше 50 символов 

   //модуль вставки данных в таблицу 

//$query=$pdo->query("UPDATE $userstable1 SET dlina='$dlina',shirina='$shirina',vysota='$vysota',passaziro='$passaziro',nagruzka='$nagruzka',moshnost='$moshnost',ves='$ves',tcena='$tcena'  WHERE nazvanie='$naz'"); 

$query=$pdo->prepare("UPDATE $userstable1 SET dlina=?,shirina=?,vysota=?,passaziro=?,nagruzka=?,moshnost=?,ves=?,tcena=?  WHERE nazvanie=?"); 
$q=$query->execute(array($dlina,$shirina,$vysota,$passaziro,$nagruzka,$moshnost,$ves,$tcena,$naz));

            //Если запрос пройдет успешно то в переменную result вернется true
 
if($q == 'true') 
{
echo "<p>Изменение внесено </p><a href='vibor.php'>Далее</a>";
}
else {echo "<p>Изменение не внесено </p><a href='index.php'>Далее</a>";}

?>


<?php
}
else{echo"логин и пароль не совпали <br><a href='index.php'>на страницу ввода логина и пароля</a>";}
?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>



 




