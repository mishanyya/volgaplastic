<!DOCTYPE html>
<html>
<meta http-equiv="content-language" content="ru" />
<head>
    <meta charset="utf-8"><!-- при открытии файла этот тег показывает кодировку-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body class="bg-warning">
<div class="container mt-3">
    <div class="row">
<?php
include('../config.php');
session_start();//инициируем сессию   
$login=$_SESSION['email']; 
$parol=$_SESSION['parol']; 
$userstable='parol';
$userstable1="lodki";
$query=$pdo->query("SELECT COUNT(*) FROM $userstable WHERE login='$login' AND parol='$parol'");//запрос на выбор всех записей из таблицы 
$ro = $query->fetchColumn();
if ($ro>0){
echo"<form  action='update2.php'  method='POST' class='col-md-6 my-2'>";
$mass=$_POST["dfile"];   
$ww=$mass[0];//имя  в базе данных
$query=$pdo->query("SELECT * FROM $userstable1 WHERE nazvanie='$ww'");
while($line=$query->fetch(PDO::FETCH_LAZY))  //выводит строки пока они не кончатся в бд
{
$naz=$line[0];//присвоено название
$fot=$line[1];//присвоено фото
  $_SESSION['naz']=$naz;

?>

    <div class="form-group col-md-10">
        <label>Название:</label>
        <span class="bg-white text-center px-3 py-1 h5 rounded"><?php echo "$naz" ; ?></span>

    </div>

    <div class="form-group col-md-10">
        <label>Длина:</label>
        <input type="text" class="form-control" name="dlina" value="<?php echo "$line[2]" ; ?>">
    </div>

    <div class="form-group col-md-10">
        <label>Ширина:</label>
        <input type="text" class="form-control" name="shirina" value="<?php echo "$line[3]" ; ?>">
    </div>

    <div class="form-group col-md-10">
        <label>Высота:</label>
        <input type="text" class="form-control" name="vysota" value="<?php echo "$line[4]" ; ?>">
    </div>

    <div class="form-group col-md-10">
        <label>Пассажировместимость:</label>
        <input type="text" class="form-control" name="passaziro" value="<?php echo "$line[5]" ; ?>">
    </div>

    <div class="form-group col-md-10">
        <label>Нагрузка:</label>
        <input type="text" class="form-control" name="nagruzka" value="<?php echo "$line[6]" ; ?>">
    </div>

    <div class="form-group col-md-10">
        <label>Рекомендуемая мощность п.м.:</label>
        <input type="text" class="form-control" name="moshnost" value="<?php echo "$line[7]" ; ?>">
    </div>

    <div class="form-group col-md-10">
        <label>Вес:</label>
        <input type="text" class="form-control" name="ves" value="<?php echo "$line[8]" ; ?>">
    </div>

    <div class="form-group col-md-10">
        <label>Цена:</label>
        <input type="text" class="form-control" name="tcena" value="<?php echo "$line[9]" ; ?>">
    </div>


<?php
}

echo"<input  type='submit' class='btn btn-primary' name='update2' value='Обновить текст'/>";
echo"</form>";


?>





 <form  enctype="multipart/form-data" action="updatefoto.php"  method="post"  class='col-md-6 my-2 text-center'>

     <?php echo"<img src='/fotki/$fot' class='w-75 img-thumbnail rounded d-block my-2'/>"; ?>

  <input  type="hidden" name="MAX_FILE_SIZE" value="10240000"  />
     <div class="form-group col-md-4">
     <input  type="file" name="uploadFile" class="btn btn-info"/>
     </div>
     <div class="form-group col-md-4">
         <input  type='submit' name='upload' class="btn btn-primary" value='Загрузить фото'>
     </div>



  </form>
<?php



}
else{echo"логин и пароль не совпали <br><a href='index.php'>на страницу ввода логина и пароля</a>";}
        
                    

?>
    </div>

    <a href="vibor.php">Назад</a>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>