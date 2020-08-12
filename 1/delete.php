<!DOCTYPE html>
<html>
<meta http-equiv="content-language" content="ru" />
<head>
    <meta charset="utf-8"><!-- при открытии файла этот тег показывает кодировку-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body class="bg-warning">
<div class="container-fluid">

<script>
function del(f){
var d=confirm('Удалить?');
if(d==true){f.submit();
}
}
</script>


<form action="delete1.php" method="POST"  onSubmit='del(this);return false;'> 
<?php

include('../time.php');
include('../config.php');
session_start();//инициируем сессию   
$login=$_SESSION['email']; 
$parol=$_SESSION['parol']; 
$userstable='parol'; 

$userstable1='lodki';
$query=$pdo->query("SELECT COUNT(*) FROM $userstable WHERE login='$login' AND parol='$parol'");//запрос на выбор всех записей из таблицы 
$ro=$query->fetchColumn();

if ($ro>0){


$query=$pdo->query("SELECT * FROM $userstable1");

echo "<table width='100%'   class=\"table table-striped text-center bg-light\">";

echo "<thead><tr class='table-warning'><th class='align-middle'>Удалить</th>";

echo "<th class='align-middle'>Название </th>";

echo "<th class='align-middle'>Фото </th>";

echo "<th class='align-middle'>Длина</th>";
echo "<th class='align-middle'>Ширина</th>";
echo "<th class='align-middle'>Высота</td>";
echo "<th class='align-middle'>Пассажировмесимость</th>";
echo "<th class='align-middle'>Нагрузка</th>";
echo "<th class='align-middle'>Мощность</th>";
echo "<th class='align-middle'>Вес</th>";
echo "<th class='align-middle'>Цена</th></tr></thead><tbody>";


while($line=$query->fetch(PDO::FETCH_NUM))//выводит строки пока они не кончатся в бд
{
$v=$line[0]; 
?>
<tr>
<td class='align-middle'><input type="radio" name=dfile[] value= "<?php echo $v ?> "> </td>
<td class='align-middle'><?php echo "$line[0]" ; ?> </td>
<td class='align-middle'><?php echo "<img src='/fotki/$line[1]' class='w-75 rounded'>" ; ?></td>
<td class='align-middle'><?php echo "$line[2]" ; ?> </td>
<td class='align-middle'><?php echo "$line[3]" ; ?></td>
<td class='align-middle'><?php echo "$line[4]" ; ?></td>
<td class='align-middle'><?php echo "$line[5]" ; ?></td>
<td class='align-middle'><?php echo "$line[6]" ; ?></td>
<td class='align-middle'><?php echo "$line[7]" ; ?></td>
<td class='align-middle'><?php echo "$line[8]" ; ?></td>
<td class='align-middle'><?php echo "$line[9]" ; ?></td>
</tr>

<?php
}

?>
        </tbody></table>
<?php
 }
else{echo"<br>логин и пароль не совпали <br><a href='index.php'>на страницу ввода логина и пароля</a>";} 
?>
<input type="submit"  value="Удалить" name="udal"  class="btn btn-primary mb-2">
<a href="vibor.php">Назад</a>

</form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>