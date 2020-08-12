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

?>
 
 
 <form   action="insertpole1.php"  enctype="multipart/form-data"  method="POST">

     <div class="form-group col-md-12">
         <label>Введите Название:</label>
         <input type="text" class="form-control" name="nazvanie" required>
     </div>

     <div class="form-group col-md-12">
         <label>Введите длину:</label>
         <input type="text" class="form-control" name="dlina">
     </div>

     <div class="form-group col-md-12">
         <label>Введите ширину:</label>
         <input type="text" class="form-control" name="shirina">
     </div>

     <div class="form-group col-md-12">
         <label>Введите высоту борта:</label>
         <input type="text" class="form-control" name="vysota">
     </div>

     <div class="form-group col-md-12">
         <label>Введите пассажировместимость:</label>
         <input type="text" class="form-control" name="passaziro">
     </div>

     <div class="form-group col-md-12">
         <label>Введите нагрузку:</label>
         <input type="text" class="form-control" name="nagruzka">
     </div>

     <div class="form-group col-md-12">
         <label>Введите рекомендуемую мощность п.м.:</label>
         <input type="text" class="form-control" name="moshnost">
     </div>

     <div class="form-group col-md-12">
         <label>Введите вес:</label>
         <input type="text" class="form-control" name="ves">
     </div>

     <div class="form-group col-md-12">
         <label>Введите цену:</label>
         <input type="text" class="form-control" name="tcena">
     </div>

     <div class="form-group col-md-12 text-center">
         <label class="p-2 text-danger bg-white h5">Введение фотографии обязательно!!!</label>
     </div>





 
 
  <input  type="hidden" name="MAX_FILE_SIZE" value="10240000"  />
  <input  type="file" name="uploadFile"  class='btn btn-info' />
  
  <input  type="submit" name="upload" value="Загрузить"  class='btn btn-primary' />

</form>
<?php
 }
else{echo"<br>логин и пароль не совпали <br><a href='index.php'>на страницу ввода логина и пароля</a>";} 

?>

    </div>

    <a href="vibor.php">Назад</a>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>