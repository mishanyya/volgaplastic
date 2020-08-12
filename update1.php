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
<link rel="stylesheet" type=KUTup1lYVy"text/css" href="okno.css"/>
<script src="okno.js" type="text/javascript"></script>
<script src="zakladka.js"></script>
<script src="time.js"></script>
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

                  
                    

?> 

  <form  action="update2.php"  method="post">
<?php

session_start();//инициируем сессию   
$login22=$_SESSION['email'];

//if($login22!=$login_user) exit();



$mass=$_POST["dfile"];  

if(empty($mass[0])){Header("Location:update.php");}
 
$ww=$mass[0];//имя  в базе данных
$query=$pdo->prepare("SELECT * FROM $userstable WHERE nazvanie=? ");
$result =$query->execute(array($ww));

while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
{


$naz=$line[0];//присвоено название
$fot=$line[1];//присвоено фото


session_start();//инициируем сессию   
$_SESSION['naz']=$naz; 

?>
<p> Название: <?php echo "$naz" ; ?> </p>
<p>Введите Длина:</p>
<input type="text" name=dlina maxlength=50 size=50 value="<?php echo "$line[2]" ; ?>">
<p>Введите Ширина:</p>
<input type="text" name=shirina maxlength=50 size=50 value="<?php echo "$line[3]" ; ?>">
<p>Введите Высота:</p>
<input type="text" name=vysota maxlength=50 size=50 value="<?php echo "$line[4]" ; ?>">
<p>Введите Пассажировместимость:</p>
<input type="text" name=passaziro maxlength=50 size=50 value="<?php echo "$line[5]" ; ?>">
<p>Введите Нагрузка:</p>
<input type="text" name=nagruzka maxlength=50 size=50 value="<?php echo "$line[6]" ; ?>">
<p>Введите Рекомендуемая мощность п.м.:</p>
<input type="text" name=moshnost maxlength=50 size=50 value="<?php echo "$line[7]" ; ?>">
<p>Введите Вес:</p>
<input type="text" name=ves maxlength=50 size=50 value="<?php echo "$line[8]" ; ?>">
<p>Введите Цена:</p>
<input type="text" name=tcena maxlengths=50 size=50 value="<?php echo "$line[9]" ; ?>">
<a href="updatefoto.php">Изменить фото</a>

<?php

}


?>
<br>





<img src="<?php echo $folder1.$fot; /* фото рисунка */      ?>  "  />                                                     


<input  type="submit" name="update2" value="Обновить"/>

  </form>

<br>


<a href="vibor.php">Назад</a><br>




</body>
</html>
