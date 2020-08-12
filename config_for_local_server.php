<?php

//для подключения к локальному хостингу
$sdb_name = "volgaplastic";
$user_name = "mishanyya_admin";
$db_name="volgaplastic";
$user_password = "10132031";
$folder = '/home/mishanyya/public_html/volgaplastic/fotki/';//папка для загрузки файлов for ubuntu
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
