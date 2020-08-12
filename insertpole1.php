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

                     
include "time.php";//присоединить файл с реальными датой и временем       //общий модуль                   
include "config.php";//присоединить файл для подключения к серверу
$userstable = "lodki";//табл лодки
                             //$userstable = "polzovateli";//табл с паролями и логинами



session_start();//инициируем сессию   
$login22=$_SESSION['email'];
//if($login22!=$login_user) exit();
  // echo"$login_user";
?>
 









<?php
if(isset($_FILES['uploadFile'])){//start of part 1
if($_FILES['uploadFile']['error']=='0') {echo"Ошибок нет<br>";}
if($_FILES['uploadFile']['error']=='1') {echo"Большой размер файла-выберите файл меньшего размера<br>";}
if($_FILES['uploadFile']['error']=='2') {echo"Неправильный размер формы файла<br>";}
if($_FILES['uploadFile']['error']=='3') {echo"Не загружен из-за ошибки соединения<br>";}
if($_FILES['uploadFile']['error']=='4') {echo"Файл  не выбран<br><a href='insertpole.php'>Назад</a>";}

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
  if(isset($_POST['upload']))
{
 $uploadedFile = $folder.$imyafaila;//.basename возвращает имя файла
  $uploadedFile = $folder.basename($_FILES['uploadFile']['name']); //.basename возвращает имя файла
  if(is_uploaded_file($_FILES['uploadFile']['tmp_name']))
{
  if(move_uploaded_file($_FILES['uploadFile']['tmp_name'],    $uploadedFile)) //(из какого места, в какое место =пути)
  {
     echo" Файл загружен";
  }
  else
  {
     echo "Во  время загрузки файла произошла ошибка";
  }
  }
  else
  {
   echo 'Файл не  загружен';
  }
  }

  ?>
<img src="<?php echo $folder1.basename($_FILES['uploadFile']['name']); /* фото рисунка */      ?>  "  />
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
{
echo "<a href='vibor.php'>Назад</a>";
}


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
}//end of part 1
?>
                                                 
<?php
                  

                                             //модуль ввода данных в переменные 

$nazvanie = $_POST['nazvanie'];//передает значение из поля в переменную
$nazvanie=trim($nazvanie);//убирает пробелы из начала и конца поля


$dlina = $_POST['dlina'];//передает значение из поля в переменную
$dlina=trim($dlina);//убирает пробелы из начала и конца поля


$shirina = $_POST['shirina'];//передает значение из поля в переменную
$shirina=trim($shirina);//убирает пробелы из начала и конца поля


$vysota = $_POST['vysota'];//передает значение из поля в переменную
$vysota=trim($vysota);//убирает пробелы из начала и конца поля


$passaziro = $_POST['passaziro'];//передает значение из поля в переменную
$passaziro=trim($passaziro);//убирает пробелы из начала и конца поля


$nagruzka = $_POST['nagruzka'];//передает значение из поля в переменную
$nagruzka=trim($nagruzka);//убирает пробелы из начала и конца поля


$moshnost = $_POST['moshnost'];//передает значение из поля в переменную
$moshnost=trim($moshnost);//убирает пробелы из начала и конца поля


$ves = $_POST['ves'];//передает значение из поля в переменную
$ves=trim($ves);//убирает пробелы из начала и конца поля


$tcena = $_POST['tcena'];//передает значение из поля в переменную
$tcena=trim($tcena);//убирает пробелы из начала и конца поля

                                       
   //модуль вставки данных в таблицу 

//session_start();//инициируем сессию   
//$foto=$_SESSION['imya'];   //создание  сессии

$row1=$pdo->prepare("SELECT COUNT(*) FROM $userstable WHERE nazvanie=?");
$row1->execute(array($nazvanie));
$row=$row1->fetchColumn();//количество строк


if((!empty($nazvanie))&&($row>0)) {
echo "Такая модель уже введена- ее можно отредактировать <a href=update.php>здесь</a><br> Если вы загрузили только фото -его можно удалить <a href=delete.php>здесь</a><br>";

}
if(empty($nazvanie)){echo"<a href='insertpole.php'>Одно из полей не заполнено- попробуйте еще раз</a>";}
 
$query=$pdo->prepare("INSERT INTO $userstable (nazvanie,foto,dlina,shirina,vysota,passaziro, nagruzka, moshnost,ves,tcena) VALUES (?,?,?,?,?,?, ?, ?,?,?)");
$result=$query->execute(array($nazvanie,$foto,$dlina,$shirina,$vysota,$passaziro,$nagruzka,$moshnost,$ves,$tcena));
//echo $result;

         
            //Если запрос пройдет успешно то в переменную result вернется true

if ($result == 'true')
 {
echo "Пункт добавлен <a href='vibor.php'>далее</>";
 	}

echo "<br><a href='vibor.php'>Назад</a>";


?>

</body>

</html>
