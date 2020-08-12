<?php
//для подключения к хостингу сайта
$sdb_name = "mysql.hostinger.ru";
$user_name = "u441406049_volgaplasticus";
$db_name="u441406049_volgaplasticdb";
$user_password = "fjibb44gfbgf94xsgl";
$folder = '/home/u441406049/public_html/fotki/';//папка для загрузки файлов to server
$folder1 = '/fotki/';//папка для выгрузки файлов

//соединение через PDO
$dsn = "mysql:host=$sdb_name;dbname=$db_name;charset=utf8";
$opt = array(
   PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //разобраться с этими обозначениями
/*  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ,*/
PDO::ATTR_PERSISTENT => true//постоянное подключение pdo
);

try {//подключение и создание объекта pdo
$pdo = new PDO($dsn, $user_name, $user_password, $opt);
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}


?>
