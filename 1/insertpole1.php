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

                                             //модуль ввода данных в переменные 

$nazvanie = $_POST['nazvanie'];//передает значение из поля в переменную
$nazvanie=trim($nazvanie);//убирает пробелы из начала и конца поля
$nazvanie=htmlspecialchars($nazvanie);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$nazvanie=substr($nazvanie,0,50);   //обработка при вводе не больше 50 символов

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
 



$query=$pdo->query("SELECT COUNT(*) FROM $userstable1 WHERE nazvanie='$nazvanie'");
$row=$query->fetchColumn();
  }

if((!empty($nazvanie))&&($row>0)) {
exit("Такая модель уже введена- ее можно отредактировать <a href='update.php'>здесь</a><br> Если вы загрузили только фото -его можно удалить <a href=delete.php>здесь</a>");
}

  



if(isset($_FILES[uploadFile])){//start of part 1
//if($_FILES[uploadFile][error]=='0') {echo"ошибок нет<br>";}
if($_FILES[uploadFile][error]=='1') {echo"большой размер файла-выберите файл меньшего размера<br>";}
if($_FILES[uploadFile][error]=='2') {echo"неправильный размер формы файла<br>";}
if($_FILES[uploadFile][error]=='3') {echo"не загружен из-за ошибки соединения<br>";}
if($_FILES[uploadFile][error]=='4') {
	echo"фото не выбрано<br>";
//	если не выбрано фото
	}

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
}
// может почему то не срабатывать на некоторые фото с фотоаппарата
else if ($_FILES['uploadFile']['type'] == 'image/png')
{
$imyafaila=$U.".png";
$_FILES['uploadFile']['name']=$imyafaila;// переименование файла при загрузке
}
else if ($_FILES['uploadFile']['type'] == 'image/gif')
{
$imyafaila=$U.".gif";
$_FILES['uploadFile']['name']=$imyafaila;// переименование файла при загрузке
}
else
{
goto ifnofotka;//
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
  if(isset($_POST['upload']))
{
 
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
  }
  
 

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
// Ограничение по ширине в пикселях
// Качество изображения по умолчанию
if ($quality == null)
$quality = 75;
 //echo "Качество изображения после $quality<br>";
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
 // переименовать файл в индивидуальное имя
$foto=$imya;   

ifnofotka: ;

}//end of part 1  

if($nazvanie!=''){

if($foto==''){$foto='nofoto.png';} 	
 	
$query=$pdo->prepare("INSERT INTO $userstable1 (nazvanie,foto,dlina,shirina,vysota,passaziro,nagruzka,moshnost,ves,tcena) VALUES (?,?,?,?,?,?,?,?,?,?)");
$qq=$query->execute(array($nazvanie,$foto,$dlina,$shirina,$vysota,$passaziro,$nagruzka,$moshnost,$ves,$tcena));         
echo"<br>запись добавлена <a href='vibor.php'>далее</a>";    
    }       


else{echo"<br>логин и пароль не совпали <br><a href='index.php'>на страницу ввода логина и пароля</a>";}               

?>










</body>

</html>