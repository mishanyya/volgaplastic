<!DOCTYPE html>

<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37829730-2"></script>
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
 <meta name="description" content="Стоимость создания различных пластиковых лодок на заказ">
<meta name="keywords" content="купить лодки, цена бударки, стоимость изготовления куласа по заказу"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<head>
<meta charset="utf-8"><!-- при открытии файла этот тег показывает кодировку-->

<link rel="stylesheet" type="text/css" href="zakladka.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link href="https://fonts.googleapis.com/css?family=Lobster|PT+Sans|Roboto+Slab" rel="stylesheet">
<script src="okno.js" type="text/javascript"></script>
<script src="zakladka.js"></script>
<title>Цены на лодки из стеклопластика</title>
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

  <?php
  $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h22'");//запрос на выбор всех записей из таблицы
  while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
  {
  echo "<h2 class='text-center'>$line[1]</h2>";
  }
  ?>

  </div>
  <div class="row">

    <div class="col-md-6">
      <?php
      $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h4'");//запрос на выбор всех записей из таблицы
      while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
      {
      echo "<p class='col-md-12 my-2 pt-2 h6 text-center border-top border-danger'>$line[1]</p>";
      }
      ?>

      <div class="col-md-12  border-top border-bottom border-danger">
        <?php
        $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h5'");//запрос на выбор всех записей из таблицы
        while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
        {
        echo "<p class='my-2 py-1 h6 text-center'>$line[1]</p>";
        }
        ?>
      </div>









    </div>

    <div class="col-md-6">
      <?php
      $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='h31'");//запрос на выбор всех записей из таблицы
      while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
      {
      echo "<p class='col-md-12 text-right h5'>$line[1]</p>";
      }

      $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='tlf'");//запрос на выбор всех записей из таблицы
      while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
      {
      echo "<div class='col-md-12 h6 text-right text-danger d-none d-sm-block'><span class='text-info mr-1'>&#9742;</span>8{$line[1]}</div>";
      }
      ?>

    </div>



  </div>









    <div class="row my-2 d-block d-sm-none">

      <?php
      $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='tlf'");//запрос на выбор всех записей из таблицы
      while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
      {
      echo "<div class='col-md-6 h4 text-center'><a href='tel:+7{$line[1]}' title='нажмите для звонка'><span class='text-danger'>&#128222;&nbsp;</span>8{$line[1]}</a></div>";
      }
      ?>

    </div>



</div>






<div class="container">

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

while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
{
?>
<div  class='row mt-3 py-2 bg-white rounded'>
<div  class="col-md-6 text-center"> <p class="text-info h6" > <?php echo "$line[0]" ; ?></p><img class="w-50 rounded" src="<?php echo "{$folder1}$line[1]" ; ?>"  > </div>


<div class="col-md-6 text-center">


 <p>  Длина наибольшая  <i class="text-danger"><?php echo "$line[2]" ; ?></i> м.    </p>
 <p>  Ширина наибольшая <i class="text-danger">  <?php echo "$line[3]" ; ?> </i>м.  </p>


 <?php if($line[4]==true){echo "<p>  Высота борта  <i class='text-danger'>$line[4]</i> м.    </p>";}  ?>



 <p>  Пассажировместимость <i class="text-danger">  <?php echo "$line[5]" ; ?> </i>чел.  </p>


 <?php if($line[6]==true){echo "<p>  Полезная нагрузка  <i class='text-danger'>$line[6]</i> кг.    </p>";}  ?>


 <?php if($line[7]==true){echo "<p>  Мощность ПМ рекомендуемая  <i class='text-danger'>$line[7]</i> л.с.    </p>";}  ?>




 <p>  Вес  <i class="text-danger"> <?php echo "$line[8]" ; ?></i> кг.   </p>
 <p>  Цена  <i class="text-danger"> <?php echo "$line[9]" ; ?> </i>руб.  </p>

</div>
</div>
<?php

}

?>



    <div class="row my-2 d-block d-sm-none">

      <?php
      $query=$pdo->query("SELECT * FROM $userstable2 WHERE metka='tlf'");//запрос на выбор всех записей из таблицы
      while($line=$query->fetch(PDO::FETCH_LAZY))//выводит строки пока они не кончатся в бд
      {
      echo "<div class='col-md-6 h4 text-center'><a href='tel:+7{$line[1]}' title='нажмите для звонка'><span class='text-danger'>&#128222;&nbsp;</span>8{$line[1]}</a></div>";
      }
      ?>

    </div>



</div>







<div class="container d-print-none">
    <div class="row my-2">
        <div class="col-md-2 text-center">
        <a href="index.php" class="badge badge-primary p-2 h6">На главную</a>
        <a href="index.php" class="badge badge-primary p-2 h6" onclick="window.print();return false;">Распечатать</a>
        </div>


        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
        <script src="//yastatic.net/share2/share.js"></script>

        <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,viber,whatsapp,skype,telegram"></div>

    </div>

    <div class="row">


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
                //]]></script><noscript><div style="position:absolute;left:-10000px;">
                    <img src="//top-fwz1.mail.ru/counter?id=2402937;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
                </div></noscript>
            <!-- //Rating@Mail.ru counter -->
            <!-- begin of Top100 code -->
            <!-- Rating@Mail.ru logo -->
            <a href="http://top.mail.ru/jump?from=2402937">
                <img src="//top-fwz1.mail.ru/counter?id=2402937;t=479;l=1"
                     style="border:0;" height="31" width="88" alt="Рейтинг@Mail.ru" /></a>
            <!-- //Rating@Mail.ru logo -->



            <!-- begin of Top100 code -->

            <script id="top100Counter" type="text/javascript" src="http://counter.rambler.ru/top100.jcn?2949094"></script>
            <noscript>
                <img src="http://counter.rambler.ru/top100.cnt?2949094" alt="" width="1" height="1" border="0" />

            </noscript>
            <!-- end of Top100 code -->


            <!-- Yandex.Metrika counter -->
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
            <noscript><div><img src="//mc.yandex.ru/watch/22468570" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
<!-- Партнер addscripts.ru -->
<a href="http://addscripts.ru/"><img src="/partnersymbols/addscripts.png" alt="подсказки по программированию" height="31" width="88"></a>
<!-- /Партнер addscripts.ru -->

    </div>
</div>



<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
