<?php
//подключаем файл с настройками сервера
require_once 'settings.php';

//создаем новое подключение к базе данных
$connection = new mysqli($host, $user, $pass, $data);
if($connection->connect_error) {
    die('error connection');
}

//запрос с базы данных
$query = "SELECT * FROM users";
$result = $connection->query($query);

if(!$result) {
    die('no result');
}

echo '<pre>';
print_r($result);
echo '</pre>' . '<hr>';

$rows = $result->num_rows;

echo '<pre>';
print_r($rows);
echo '</pre>' . '<hr>';

for($i = 0; $i < $rows; ++$i) {
    $result->data_seek($i);
    echo 'Name: ' . $result->fetch_assoc()['name'] . '<hr>';
}

$result->close();
$connection->close();