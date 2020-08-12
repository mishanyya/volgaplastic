<!doctype html>
<html lang="en">
<head>

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
<body>
  <?php
  include_once('config.php');
  $userstable2="osnova";
  ?>

<div class="container">
    <div class="row my-5">

      <?php
      $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h1'");//запрос на выбор всех записей из таблицы
      while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
      {
      echo "<h1 class='col-md-12 text-center'>$line[1]</h1>";
      }
      ?>

        <div class="col-md-12"><script src="time.js"></script></div>
    </div>
</div>





<div class="container">
  <?php
  $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h21'");//запрос на выбор всех записей из таблицы
  while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
  {
  echo "<h2 class='text-center'>$line[1]</h2>";
  }

  $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h31'");//запрос на выбор всех записей из таблицы
  while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
  {
  echo "<h3 class='text-right'>$line[1]</h3>";
  }
  ?>

    <div class="row my-2">

      <?php
      $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='tlf'");//запрос на выбор всех записей из таблицы
      while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
      {
      echo "<div class='col-md-6 h4 text-center text-danger d-none d-sm-block'><span class='text-info mr-1'>&#9742;</span>8{$line[1]}</div>";
      }
      ?>

    </div>

    <?php
    $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h3'");//запрос на выбор всех записей из таблицы
    while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
    {
    echo "<h3 class='text-left my-2 h5'>$line[1]</h3>";
    }

    $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h4'");//запрос на выбор всех записей из таблицы
    while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
    {
    echo "<h4 class='text-center text-black'>$line[1]</h4>";
    }
    ?>

    <div class="row">
    <div class="col-md-8"></div>
    <div class="col-md-4  border-top border-bottom border-danger">
      <?php
      $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h5'");//запрос на выбор всех записей из таблицы
      while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
      {
      echo "<h4 class='my-2 py-2 h6 text-center'>$line[1]</h4>";
      }
      ?>
    </div>



    </div>
    <div class="row my-2 d-block d-sm-none">

      <?php
      $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='tlf'");//запрос на выбор всех записей из таблицы
      while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
      {
      echo "<div class='col-md-4 h4 text-center'><a href='tel:+7{$line[1]}' title='нажмите для звонка'><span class='text-danger'>&#128222;&nbsp;</span>8{$line[1]}</a></div>";
      }
      ?>

    </div>
</div>


<div class="container my-3 py-3">

<?php
include ("config.php");//соединение через PDO
$dsn = "mysql:host=$sdb_name;dbname=$db_name;charset=utf8";
$opt = array(
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //разобраться с этими обозначениями
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM ,//выдает по умолчанию по номеру столбцов
PDO::ATTR_PERSISTENT => true//постоянное подключение pdo
);
try {//подключение и создание объекта pdo
$pdo = new PDO($dsn, $user_name, $user_password, $opt);
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}
$userstable="lodki";
$query=$pdo->query("SELECT foto FROM $userstable");
$fotografii=array();
$i=0;

echo "<div class='row my-3'>";
while($line=$query->fetch(PDO::FETCH_OBJ)) {
echo"<div class='col-md-2 my-3 text-center d-none d-md-block'><a href='#' class='smallfotki$i' onclick='clicks(this);return false;' title='выбрать'><img src='/fotki/$line->foto' class='w-75 rounded smallfotki' alt='пластиковая лодка'/></a></div>";//ссылки
$i++;
}
echo "<div class='col-md-2 my-3 d-flex justify-content-center'><a href='pricelist.php' target='_blank' class='bg-dark text-white p-4 rounded text-center'>ПРАЙСЛИСТ<p class='d-block d-sm-none text-white'>с фотографиями</p></a></div>";
echo "</div>";

$query=$pdo->query("SELECT * FROM $userstable");
$i=0;
while($line1=$query->fetch()) {
                                                  //информация
echo "<div class='row py-3 my-2 fotka fotki$i'><!--блоки с фотками-->";
echo "<div class='col-md-6 text-center float-left d-none d-md-block'>";
echo "<h4 class='text-light bg-dark rounded py-1'>&laquo;$line1[0]&raquo;</h4>";
echo "<img src='/fotki/$line1[1]' class='w-75 rounded my-2'/>";
echo "</div>";
echo "<div class='col-md-6 float-right bg-white pt-2 border-left d-none d-md-block'>";
echo "<p>длина                                 <i class='text-danger'>$line1[2] </i>м.   </p>";
echo "<p>ширина                                <i class='text-danger'>$line1[3] </i>м.   </p>";





if($line1[6]==true){
echo "<p>полезная нагрузка                     <i class='text-danger'>$line1[6] </i>кг.  </p>";
}
if($line1[7]==true){
echo "<p>мощность подвесного мотора реком.     <i class='text-danger'>$line1[7] </i>л.с. </p>";
}









echo "<p>пассажировместимость                  <i class='text-danger'>$line1[5] </i>чел. </p>";
echo "<p>вес                                   <i class='text-danger'>$line1[8] </i>кг.  </p>";
echo "<p>цена                                  <i class='text-danger'>$line1[9] </i>руб. </p>";
echo"</div>";
echo "</div>";
$i++;
}
?>



<div class="d-md-none d-sm-block row">
    <div class="col-sm-12">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
<?php
$query=$pdo->query("SELECT foto FROM $userstable");
$i=0;
    while($line=$query->fetch(PDO::FETCH_OBJ)) {
//start loop
?>
    <div class='carousel-item <?php if($i==0){echo 'active';}?>'>
<?php
    echo"<img src='/fotki/$line->foto' class='d-block w-100 rounded'/>";
?>
    </div>
        <?php
        $i++;
//end loop
        }
?>
    </div>
    </div>
    </div>
</div>



</div>











<script src="zakladki.js"></script>

<!-- Rating@Mail.ru counter -->
<script type="text/javascript">//<![CDATA[
var _tmr = _tmr || [];
_tmr.push({id: "2402937", type: "pageView", start: (new Date()).getTime()});
(function (d, w) {
   var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true;
   ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
   var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window);
//]]>
</script>



<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter22468570 = new Ya.Metrika({id:22468570,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });
    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>

<!-- /Yandex.Metrika counter -->


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<div class="row">
    <a href="http://metropoldog.ru"></a>
    <a href="http://metropoldog.ru/dressirovka/"></a>
   </div>
</body>
</html>
