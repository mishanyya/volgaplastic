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
include('../time.php');
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
 


?>





<?php

//if($_FILES[uploadFile][error]=='0') {echo"ошибок нет<br>";}
if($_FILES[uploadFile][error]=='1') {echo"большой размер файла<br>";}
if($_FILES[uploadFile][error]=='2') {echo"неправильный размер формы файла<br>";}
if($_FILES[uploadFile][error]=='3') {echo"не загружен изза соединения<br>";}
if($_FILES[uploadFile][error]=='4') {echo"файл же не выбран<br>";}

$blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm");
  foreach ($blacklist as $item)
    if(preg_match("/$item\$/i", $_FILES['uploadFile']['name'])) {echo" файл опасен выберите другой файл- этот не подходит для системы"; 
exit;}
  $type = $_FILES['uploadFile']['type'];


// имя файла должно быть на латинице
//Узнаем тип файла

if ($_FILES['uploadFile']['type'] == 'image/jpeg')
{

$imyafaila=$U.".jpg";
$_FILES['uploadFile']['name']=$imyafaila;// переименование файла при загрузке

//echo" тип === jpeg        ";
}
// может почему то не срабатывать на некоторые фото с фотоаппарата
else if ($_FILES['uploadFile']['type'] == 'image/png')
{

$imyafaila=$U.".png";
$_FILES['uploadFile']['name']=$imyafaila;// переименование файла при загрузке

//echo" тип === png";
}
else if ($_FILES['uploadFile']['type'] == 'image/gif')
{

$imyafaila=$U.".gif";
$_FILES['uploadFile']['name']=$imyafaila;// переименование файла при загрузке

//echo" тип === gif";
}
else
{

exit();
}
//проверка загружаемых файлов
$types = array('image/jpg','image/jpeg','image/gif','image/png');//тип файла
$size = 1024000;//размер файла в байтах
// Проверяем тип файла
if (!in_array($_FILES['uploadFile']['type'], $types)) //проверка значений в массиве
die('<br>Запрещённый тип файла.');
// Проверяем размер файла
if ($_FILES['uploadFile']['size'] > $size)

die('<br>Слишком большой размер файла.');



  $uploadedFile = $folder.basename($_FILES['uploadFile']['name']); //.basename возвращает имя файла

  if(is_uploaded_file($_FILES['uploadFile']['tmp_name']))
{
  if(move_uploaded_file($_FILES['uploadFile']['tmp_name'],    $uploadedFile)) //(из какого места, в какое место =пути)

  {
     echo" Файл загружен";
  }
  else
  {
     echo " Во  время загрузки файла произошла ошибка";
  }
  }
  else
  {
   echo 'Файл не  загружен';
  } 


  ?>


<?php 

// получаем массив, содержащий размеры изображения 
$size = getimagesize ($folder.basename($_FILES['uploadFile']['name'])); 

// Значение флага,  
// возвращаемого функцией getimagesize() под индексом 2 
// после определения размера изображения 
$flag = array(1=>'GIF', 
             2=>'JPG', 
             3=>'PNG', 
             4=>'SWF', 
             5=>'PSD', 
             6=>'BMP', 
             7=>'TIFF(байтовый порядок intel)', 
             8=>'TIFF(байтовый порядок motorola)', 
             9=>'JPC', 
             10=>'JP2', 
             11=>'JPX'); 


//отсюда не работает изменение размера

$file=$_FILES['uploadFile'];


if ($quality == null)
$quality = 75;

 
// Cоздаём исходное изображение на основе исходного файла

if ($_FILES['uploadFile']['type'] == 'image/jpeg')

$source = imagecreatefromjpeg($folder.basename($_FILES['uploadFile']['name']));

else if ($_FILES['uploadFile']['type'] == 'image/png')

$source = imagecreatefrompng($folder.basename($_FILES['uploadFile']['name']));

else if ($_FILES['uploadFile']['type'] == 'image/gif')

$source = imagecreatefromgif($folder.basename($_FILES['uploadFile']['name']));

else

return false;




$imya=$file['name'];// внесение имени файла в переменную для отправки в базу данных 

// Поворачиваем изображение

if ($rotate != null)

$src = imagerotate($source, $rotate, 0);

else

$src = $source;



// Определяем ширину и высоту изображения

$w_src = imagesx($src);

$h_src = imagesy($src);


// В зависимости от типа (эскиз или большое изображение) устанавливаем ограничение по ширине.


$h=210;
$w=400;// установили высоту и ширину которую надо






// Создаём пустую картинку
$dest = imagecreatetruecolor($w, $h);
// Копируем старое изображение в новое с изменением параметров
imagecopyresampled($dest, $src, 0, 0, 0, 0, $w, $h, $w_src, $h_src);//копирует и изменяет размеры части изображения
// Вывод картинки и очистка памяти
imagejpeg($dest,$folder.basename($_FILES['uploadFile']['name']), $quality);
imagedestroy($dest);//очистка памяти
imagedestroy($src);//очистка памяти
 

?>




<?php 

// переименовать файл в индивидуальное имя


 

$foto=$imya;   

 

                                     
   //модуль вставки данных в таблицу 

//session_start();//инициируем сессию   
//$foto=$_SESSION['imya'];   //создание  сессии





$query=$pdo->prepare("SELECT * FROM $userstable1 WHERE nazvanie=:naz");
$query->bindParam(':naz',$naz);
$query->execute();
while($line1=$query->fetch(PDO::FETCH_NUM))  //выводит строки пока они не кончатся в бд
{
$fot=$line1[1];//присвоен адрес старой фото

}


unlink($folder1.$fot);//удаление фотографии




$query=$pdo->prepare("UPDATE $userstable1 SET foto=:foto WHERE nazvanie=:naz");
$query->bindParam(':foto',$foto);
$query->bindParam(':naz',$naz);
$q=$query->execute();
echo"= $foto =";
      
            //Если запрос пройдет успешно то в переменную result вернется true

if($q == 'true') 
{
echo "<br>Фото заменено";
echo"<br><a href='vibor.php'>Далее</a>";
}
else {

echo"<br><a href='vibor.php'>Далее</a>";
}
 
?>



<br>
 <?php   
 }
else{echo"<br>логин и пароль не совпали <br><a href='index.php'>на страницу ввода логина и пароля</a>";} 
 ?>



</body>
</html>