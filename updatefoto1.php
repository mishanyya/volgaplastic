
<html>
<head>
<link rel="stylesheet" type="text/css" href="zakladka.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>

<?php

include "time.php";//присоединить файл с реальными датой и временем       //общий модуль                   
include "config.php";//присоединить файл для подключения к серверу

//соединение через PDO

$dsn = "mysql:host=$sdb_name;dbname=$db_name;charset=utf8";
$opt = array(
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //разобраться с этими обозначениями
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ,
PDO::ATTR_PERSISTENT => true//постоянное подключение pdo
);

try {//подключение и создание объекта pdo
$pdo = new PDO($dsn, $user_name, $user_password, $opt);
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}

$userstable="lodki";

                  

session_start();//инициируем сессию   
$naz=$_SESSION['naz']; 
 
$login22=$_SESSION['email'];
//if($login22!="volgaplastic@mail.ru") exit();

?>







<?php
/*
$query=$pdo->prepare("SELECT * FROM $userstable WHERE nazvanie=? ");
$query->execute(array($naz));

while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
{
$v=$line[0]; //строка с названием

$fot=$line[1];//присвоен адрес старой фото
echo"";

}
*/
?>
<?php
if($_FILES['uploadFile']['error']=='0') {echo"ошибок нет<br>";}
if($_FILES['uploadFile']['error']=='1') {echo"большой размер файла<br>";}
if($_FILES['uploadFile']['error']=='2') {echo"неправильный размер формы файла<br>";}
if($_FILES['uploadFile']['error']=='3') {echo"не загружен изза соединения<br>";}
if($_FILES['uploadFile']['error']=='4') {echo"файл же не выбран<br>";}

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

//echo" тип === jpeg ";
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

exit("<a href='vibor.php'>Назад</a>");
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

 
//echo $foto; //новое имя фото
//echo $naz; //старое название лодки                            
   //модуль вставки данных в таблицу 

//session_start();//инициируем сессию   
//$foto=$_SESSION['imya'];   //создание  сессии




/*

$query1=$pdo->prepare("SELECT * FROM $userstable WHERE nazvanie='$naz' ");
$query1->execute(array($naz));

while($line1=$query1->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
{


$fot=$line1[1];//присвоен адрес старой фото


}

//echo $naz;//название лодки из базы данных

echo  $fot;//старое название лодки
*/
//пока без удаления фото- просто назначается другое
//unlink($fot);//удаление фотографии

$query=$pdo->prepare("UPDATE $userstable SET foto=? WHERE nazvanie=?");
$result=$query->execute(array($foto,$naz));

//echo $result;
      
            //Если запрос пройдет успешно то в переменную result вернется true

if ($result == 'true')
 {

echo "<img src=".$folder1.$foto.">";

echo "<br/>Фото изменено <a href='vibor.php'>далее</>";
 	}
 
?>




<br>

<?php
/*
$query=$pdo->prepare("SELECT * FROM $userstable WHERE nazvanie=? ");
$query->execute(array($naz));

while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
{
$v=$line[0]; //строка с названием

$fot=$line[1];//присвоен адрес старой фото
echo"<input  type='submit' name='upload' value='Загрузить' >";

}
*/
?>
<?php



?>


</body>

</html>
