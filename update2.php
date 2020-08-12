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

                 
                  //session_start();//инициируем сессию   
                     //$login=$_SESSION['login'];   

session_start();//инициируем сессию   
$naz=$_SESSION['naz']; 



                 //$mass=$_POST["dfile"];   
               //$ww=$mass[0];//имя  в базе данных
                 //$query="SELECT * FROM $userstable WHERE nazvanie='$ww' ";
                         //$result = mysql_query($query) or die("Query не получилось");

session_start();//инициируем сессию   
$login22=$_SESSION['email'];
//if($login22!=$login_user) exit();



?>


<p> nazvanie: <?php echo "$naz" ; ?> </p>                                                    
<?php


                                             //модуль ввода данных в переменные 


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


$query2=$pdo->prepare("UPDATE $userstable SET dlina=?,shirina=?,vysota=?,passaziro=?,nagruzka=?,moshnost=?,ves=?,tcena=?  WHERE nazvanie=?");
$rezt=$query2->execute(array($dlina,$shirina,$vysota,$passaziro,$nagruzka,$moshnost,$ves,$tcena,$naz));

       
            //Если запрос пройдет успешно то в переменную result вернется true
  
if($rezt == 'true') 
{
echo "ok";
Header("Location:vibor.php");
}

else {Header("Location:vibor.php");}
 

?>

<input  type="submit"  value="Обновить"/>

  

<br>
 <?php    mysql_close();   ?>

<a href="vibor.php">Назад</a>



</form>
