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




<form action="update1.php" method="POST" > 
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

$query=$pdo->query("SELECT * FROM $userstable");

//session_start();//инициируем сессию   
//$login=$_SESSION['login'];   //н


session_start();//инициируем сессию   
$login22=$_SESSION['email'];

//if($login22!=$login_user) exit();



echo "<table border=1  width=100% rules=rows  bordercolor=#d1fa96>";

echo "<tr><td width=100 height=50 bgcolor=#f4f3bc> <p>Выбрать </p>    </td>";

echo "<td width=100 height=50 bgcolor=#f4f3bc> <p> Название  </p>    </td>";


echo "<td width=100 height=50 bgcolor=#f4f3bc> <p> Длина  </p>    </td>";
echo "<td width=100 height=50 bgcolor=#f4f3bc> <p> Ширина  </p>    </td>";
echo "<td width=100 height=50 bgcolor=#f4f3bc> <p> Высота  </p>    </td>";
echo "<td width=100 height=50 bgcolor=#f4f3bc> <p> Пассажировмесимость  </p>    </td>";
echo "<td width=100 height=50 bgcolor=#f4f3bc> <p> Нагрузка  </p>    </td>";
echo "<td width=100 height=50 bgcolor=#f4f3bc> <p> Мощность  </p>    </td>";
echo "<td width=100 height=50 bgcolor=#f4f3bc> <p> Вес  </p>    </td>";
echo "<td width=100 height=50 bgcolor=#f4f3bc> <p> Цена  </p>    </td></tr>";

while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
{
$v=$line[0]; //строка с названием

?>


<tr><td width=100 height=50 bgcolor=#f4f3bc><input type="radio" name=dfile[] value= "<?php echo $v ?> "    >   </td>



<td width=100 height=50 bgcolor=#f4f3bc> <p><?php echo "$line[0]" ; ?></p>    </td>

<td width=100 height=50 bgcolor=#f4f3bc> <p><?php echo "$line[2]" ; ?></p>    </td>
<td width=100 height=50 bgcolor=#f4f3bc> <p><?php echo "$line[3]" ; ?></p>    </td>
<td width=100 height=50 bgcolor=#f4f3bc> <p><?php echo "$line[4]" ; ?></p>    </td>
<td width=100 height=50 bgcolor=#f4f3bc> <p><?php echo "$line[5]" ; ?></p>    </td>
<td width=100 height=50 bgcolor=#f4f3bc> <p><?php echo "$line[6]" ; ?></p>    </td>
<td width=100 height=50 bgcolor=#f4f3bc> <p><?php echo "$line[7]" ; ?></p>    </td>
<td width=100 height=50 bgcolor=#f4f3bc> <p><?php echo "$line[8]" ; ?></p>    </td>
<td width=100 height=50 bgcolor=#f4f3bc> <p><?php echo "$line[9]" ; ?></p>    </td><tr>


<?php

}

?>
</table>




<br>

<input type="submit"  value="Внести изменения" name="obnov"  ><br>


<a href="vibor.php">Назад</a>
</form>

</body>
</html>
