<?php
//подключаем файл с настройками сервера use PDO

$connection = new PDO("mysql:host=localhost;dbname=myBlog;charset=utf8", "root", "");

//запись данных
$query = "INSERT INTO test (name, content) VALUES ('alex', 'content alex')";

$count = $connection->exec($query);

echo $count;

