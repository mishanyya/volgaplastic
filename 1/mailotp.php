
<meta charset="utf-8">




<?php
include('../config.php');
/*Здесь мы проверяем существуют ли переменные, которые передала форма обратной связи. Если не существуют, то создаем */



$text1 = $_POST['text1'];//передает значение из поля в переменную
$text1=trim($text1);//убирает пробелы из начала и конца поля
$text1=htmlspecialchars($text1);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$text1=substr($text1,0,10);   //обработка при вводе не больше 10 символов

$text2 = $_POST['text2'];//передает значение из поля в переменную
$text2=trim($text2);//убирает пробелы из начала и конца поля
$text2=htmlspecialchars($text2);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$text2=substr($text2,0,10);   //обработка при вводе не больше 10 символов

$mail = $_POST['name'];//передает значение из поля в переменную
$mail=trim($mail);//убирает пробелы из начала и конца поля
$mail=htmlspecialchars($mail);//переводит некоторые спецсимволы, которые могут использоваться для кода в другое обозначение
$mail=substr($mail,0,70);   //обработка при вводе не больше 70 символов

$userstable='parol';
$query=$pdo->query("SELECT COUNT(*) FROM $userstable WHERE login='$mail'");//запрос на выбор всех записей из таблицы
$numbers=$query->fetchColumn();

if($text1!='два'){echo "неправильно ввели данные <br/><a href='parolvsp.php'>еще раз</a>";}
else if($text2!='2'){echo "неправильно ввели данные <br/><a href='parolvsp.php'>еще раз</a>";}
else if($numbers<1) {echo "неправильно ввели email <br/><a href='parolvsp.php'>еще раз</a>";}
else {
$kod=rand(111,111111);//пароль в диапазоне от 111 до 111111

$query=$pdo->prepare("UPDATE $userstable SET vrem_parol=?  WHERE login=?");
$query->execute(array($kod,$mail));
    $from='volgaplastic';
$sub = "Это сообщение с сайта ПКФ ООО Волгапластик";
$mes = "Если Вы запрашивали замену пароля, пройдите по ссылке http://volgaplastic-a.ru/1/redaktpar.php?kod=$kod&mail=$mail, если нет, то проигнорируйте это письмо!";
$send = mail ($mail,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$from");
if ($send == 'true')
{
echo "Сообщение отправлено! Пройдите по ссылке в присланном письме!<br/><a href='index.php'>На страницу входа</a><br/>Если сообщения не видно, посмотрите его в папке Спам";
}
else 
{
echo "Сообщение не отправлено!";
echo "<br/><a href='index.php'>Письмо не отправлено! свяжитесь с администратором сайта!</a>";
}

}

?>

