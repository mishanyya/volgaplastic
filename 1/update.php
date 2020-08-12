<!DOCTYPE html>
<html>
<meta http-equiv="content-language" content="ru" />
<head>
    <meta charset="utf-8"><!-- при открытии файла этот тег показывает кодировку-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body class="bg-warning">
<div class="container-fluid">
<?php
include('../config.php');
session_start();//инициируем сессию   
$login=$_SESSION['email']; 
$parol=$_SESSION['parol']; 
$userstable='parol';
$userstable1="lodki";
$query=$pdo->query("SELECT COUNT(*) FROM $userstable WHERE login='$login' AND parol='$parol'");//запрос на выбор всех записей из таблицы 
$ro = $query->fetchColumn();
if ($ro>0)
 {
echo"<form action='update1.php' method='POST' >";
$query=$pdo->query("SELECT * FROM $userstable1");
echo "<table width='100%'   class=\"table table-striped text-center bg-light\">";

echo "<thead>
<tr class='table-warning'>
<th class='align-middle'> Выбрать     </th>
<th class='align-middle'>  Название     </th>
<th class='align-middle'>  Длина      </th>
<th class='align-middle'> Ширина      </th>
<th class='align-middle'> Высота     </th>
<th class='align-middle'> Пассажировмесимость      </th>
<th class='align-middle'>  Нагрузка      </th>
<th class='align-middle'>  Мощность      </th>
<th class='align-middle'> Вес      </th>
<th class='align-middle'> Фото      </th>
<th class='align-middle'>  Цена      </th>
</tr>
  </thead>
  <tbody>";


while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
{
$v=$line[0]; //строка с названием
?>

<tr><td class="align-middle"><input type="radio" name=dfile[] value= "<?php echo $v ?> "></td>


<td class="align-middle"> <p><?php echo "$line[0]" ; ?></p>    </td>
<td class="align-middle"> <p><?php echo "$line[2]" ; ?></p>    </td>
<td class="align-middle"> <p><?php echo "$line[3]" ; ?></p>    </td>
<td class="align-middle"> <p><?php echo "$line[4]" ; ?></p>    </td>
<td class="align-middle"> <p><?php echo "$line[5]" ; ?></p>    </td>
<td class="align-middle"> <p><?php echo "$line[6]" ; ?></p>    </td>
<td class="align-middle"> <p><?php echo "$line[7]" ; ?></p>    </td>
<td class="align-middle"> <p><?php echo "$line[8]" ; ?></p>    </td>
<td class="align-middle"> <p><?php echo "<img src='/fotki/$line[1]' class='w-75 rounded'>" ; ?></p>    </td>
<td class="align-middle"> <p><?php echo "$line[9]" ; ?></p>    </td></tr>

<?php
}
?>
    </tbody>
</table>

<input type="submit"  value="Внести изменения" class="btn btn-primary mb-2" name="obnov">

<a href="vibor.php">Назад</a>
</form>


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