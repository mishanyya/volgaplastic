<!doctype html>
<html lang="en">
<head>
<script type="text/javascript" src="/ajax.js"></script>
<script type="text/javascript" src="osnovasend.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/50DC0694-7F10-5C4A-A652-57423F546CB7/main.js" charset="UTF-8"></script><script async src="https://www.googletagmanager.com/gtag/js?id=UA-37829730-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-37829730-2');
    </script>

    <meta name='wmail-verification' content='6772213564db917b'/>
 <meta charset="text/html;utf-8"/>
 <meta name="document-state" content="Dynamic"/>
 <meta http-equiv="content-language" content="ru"/>
 <meta name="robots" content="all"/>
 <meta name="description" content="Производим и ремонтируем в Астрахани лодки и бударки, катера и охотничьи куласы из стеклопластика">
<meta name="keywords" content="лодки, бударки, куласы из пластика"/>
<meta charset="utf-8"/><!-- при открытии файла этот тег показывает кодировку-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="style.css"/>
 <link href="https://fonts.googleapis.com/css?family=Lobster|PT+Sans|Roboto+Slab" rel="stylesheet">
        <title>Пластиковые лодки Астрахань</title>
</head>
<body class="bg-warning">
  <script>alert("При редактировании текста будьте аккуратны - это может повлиять на позицию сайта в поисковых системах!");</script>
<div class="container">

  <h6>При редактировании текста будьте аккуратны - это может повлиять на позицию сайта в поисковых системах!</h6>
  <a href="index.php" class="btn btn-danger">Выйти</a>
<div class="row">

  <?php
  include('../config.php');
  $userstable2="osnova";
  session_start();//инициируем сессию
  $count=0;
  $massiv=array();
  $query1=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h1'");//запрос на выбор всех записей из таблицы
  echo "<form class='border border-secondary rounded w-100 my-2 bg-light'><label for='' class='pl-1 text-danger'>Название:</label>";
  while($line=$query1->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
  {
  echo "<div class='form-group border border-secondary rounded'><input type='text' class='w-100 my-2 form-control text-dark' name='$line[0]' value='$line[1]'><a href='#'  name='$line[0]' onclick='save(this);return false;' class='btn btn-info'>Обновить</a></div>"; //строка с названием
  $massiv[$count]=$line[0];
  $count++;
  }
  echo "</form>";
  $count=0;
  $massiv=array();
  $query1=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h21'");//запрос на выбор всех записей из таблицы
  echo "<form class='border border-secondary rounded w-100 my-2 bg-light'><label for='' class='pl-1 text-danger'>Описание главной страницы:</label>";
  while($line=$query1->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
  {
  echo "<div class='form-group border border-secondary rounded'><input type='text' class='w-100 my-2 form-control text-dark' name='$line[0]' value='$line[1]'><a href='#'  name='$line[0]' onclick='save(this);return false;' class='btn btn-info'>Обновить</a></div>"; //строка с названием
  $massiv[$count]=$line[0];
  $count++;
  }
  echo "</form>";
  $count=0;
  $massiv=array();
  $query1=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h22'");//запрос на выбор всех записей из таблицы
  echo "<form class='border border-secondary rounded w-100 my-2 bg-light'><label for='' class='pl-1 text-danger'>Описание страницы прайс-листа:</label>";
  while($line=$query1->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
  {
  echo "<div class='form-group border border-secondary rounded'><input type='text' class='w-100 my-2 form-control text-dark' name='$line[0]' value='$line[1]'><a href='#'  name='$line[0]' onclick='save(this);return false;' class='btn btn-info'>Обновить</a></div>"; //строка с названием
  $massiv[$count]=$line[0];
  $count++;
  }
  echo "</form>";
  $count=0;
  $massiv=array();
  $query1=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h31'");//запрос на выбор всех записей из таблицы
  echo "<form class='border border-secondary rounded w-100 my-2 bg-light'><label for='' class='pl-1 text-danger'>город:</label>";
  while($line=$query1->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
  {
  echo "<div class='form-group border border-secondary rounded'><input type='text' class='w-100 my-2 form-control text-dark' name='$line[0]' value='$line[1]'><a href='#'  name='$line[0]' onclick='save(this);return false;' class='btn btn-info'>Обновить</a></div>"; //строка с названием
  $massiv[$count]=$line[0];
  $count++;
  }
  echo "</form>";
  $count=0;
  $massiv=array();
  $query1=$pdo->query("SELECT * FROM $userstable2 WHERE metka='tlf'");//запрос на выбор всех записей из таблицы
  echo "<form class='border border-secondary rounded w-100 my-2 bg-light'><label for='' class='pl-1 text-danger'>Телефоны:(номер должен быть указан без первой цифры 8 или без +7!!!)</label>";
  while($line=$query1->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
  {
  echo "<div class='form-group border border-secondary rounded'><input type='text' class='w-100 my-2 form-control text-dark' name='$line[0]' value='$line[1]'><a href='#'  name='$line[0]' onclick='save(this);return false;' class='btn btn-info'>Обновить</a></div>"; //строка с названием
  $massiv[$count]=$line[0];
  $count++;
  }
  echo "</form>";
  $count=0;
  $massiv=array();
  $query1=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h3'");//запрос на выбор всех записей из таблицы
  echo "<form class='border border-secondary rounded w-100 my-2 bg-light'><label for='' class='pl-1 text-danger'>Общее:</label>";
  while($line=$query1->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
  {
  echo "<div class='form-group border border-secondary rounded'><input type='text' class='w-100 my-2 form-control text-dark' name='$line[0]' value='$line[1]'><a href='#'  name='$line[0]' onclick='save(this);return false;' class='btn btn-info'>Обновить</a></div>"; //строка с названием
  $massiv[$count]=$line[0];
  $count++;
  }
  echo "</form>";
  $count=0;
  $massiv=array();
  $query1=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h4'");//запрос на выбор всех записей из таблицы
  echo "<form class='border border-secondary rounded w-100 my-2 bg-light'><label for='' class='pl-1 text-danger'>Общее:</label>";
  while($line=$query1->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
  {
  echo "<div class='form-group border border-secondary rounded'><input type='text' class='w-100 my-2 form-control text-dark' name='$line[0]' value='$line[1]'><a href='#'  name='$line[0]' onclick='save(this);return false;' class='btn btn-info'>Обновить</a></div>"; //строка с названием
  $massiv[$count]=$line[0];
  $count++;
  }
  echo "</form>";
  $count=0;
  $massiv=array();
  $query1=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h5'");//запрос на выбор всех записей из таблицы
  echo "<form class='border border-secondary rounded w-100 my-2 bg-light'><label for='' class='pl-1 text-danger'>Общее:</label>";
  while($line=$query1->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
  {
  echo "<div class='form-group border border-secondary rounded'><input type='text' class='w-100 my-2 form-control text-dark' name='$line[0]' value='$line[1]'><a href='#'  name='$line[0]' onclick='save(this);return false;' class='btn btn-info'>Обновить</a></div>"; //строка с названием
  $massiv[$count]=$line[0];
  $count++;
  }
  echo "</form>";
  $count=0;
  $massiv=array();
  $query1=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h6'");//запрос на выбор всех записей из таблицы
  echo "<form class='border border-secondary rounded w-100 my-2 bg-light'>";
  while($line=$query1->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
  {
  echo "<div class='form-group border border-secondary rounded'><input type='text' class='w-100 my-2 form-control text-dark' name='$line[0]' value='$line[1]'><a href='#'  name='$line[0]' onclick='save(this);return false;' class='btn btn-info'>Обновить</a></div>"; //строка с названием
  $massiv[$count]=$line[0];
  $count++;
  }
  echo "</form>";
  ?>

</div>
<a href="index.php" class="btn btn-danger">Выйти</a>
</div>




<!-- /Yandex.Metrika counter -->


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
