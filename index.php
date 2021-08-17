<?php
//подключаем файл с настройками сервера use PDO

$connection = new PDO("mysql:host=localhost;dbname=myBlog;charset=utf8", "root", "");

//запись данных / прямой запрос
//$query = "INSERT users (name, content) VALUES ('alex', 'content alex')";
//$count = $connection->exec($query);
//echo $count;

//запись данных / подготовленный запрос

//$name = 'Evgen12';
//$age = 3012;
//$login = 'user12';
//
//$param = [
//    'n' => $name,
//    'age' => $age,
//    'login' => $login
//];
//
//$sql = "INSERT users (name, age, login) VALUE (:n, :age, :login)";
//$query = $connection->prepare($sql);
//
//$query->execute($param);

//удаление данных, где id четное / подготовленный запрос
$data = $connection->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $k => $v){
    echo 'Category name: '.$v['name'].'<br>';
    $id = $v['id'];
    if(((int)$id % 2) === 0) {
        $param = [
           ':id' => $id
        ];

        $sql = "DELETE FROM `users` WHERE `id` = $id";
        $query = $connection->prepare($sql);
        $query->execute($param);
    }
}

