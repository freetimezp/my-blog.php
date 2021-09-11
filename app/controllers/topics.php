<?php

include( SITE_ROOT . '/app/database/db.php');

$msg = '';
$id = '';
$name = '';
$description = '';

$successMsg = '';

$topics = selectAll('topics');


// создание категории

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])) {

//    tt($_POST);
//    exit();

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if($name === '' || $description === '') {
        $msg = "Не все поля заполнены!";
    }elseif(mb_strlen($name, 'UTF-8') < 3 ){
        $msg = "Категория должна содержать 3 или более символов!";
    }else{
        $existance = selectOne('topics', ['name' => $name]);
        //tt($existance);

        if($existance['name'] === $name) {
            $errMsg = "Такая категория уже существует!";
        }else{
            $post = [
                'name' => $name,
                'description' => $description
            ];

            $id = insert('topics', $post);
            $successMsg = "Категория $name успешно создана!";

            $topic = selectOne('topics', ['id' => $id]);
            header('location: ' . BASE_URL . 'admin/topics/index.php');
        }
        //tt($post);
    }
    //$lastRow = selectOne('users', ['id' => $id]);
}else{
    $name = '';
    $description = '';
}

// редактирование категории

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne('topics', ['id' => $id]);

    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])) {

//    tt($_POST);
//    exit();

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if($name === '' || $description === '') {
        $msg = "Не все поля заполнены!";
    }elseif(mb_strlen($name, 'UTF-8') < 3 ){
        $msg = "Категория должна содержать 3 или более символов!";
    }else{
        $existance = selectOne('topics', ['name' => $name]);
        //tt($existance);

        if($existance['name'] === $name) {
            $errMsg = "Такая категория уже существует!";
        }else{
            $topic = [
                'name' => $name,
                'description' => $description
            ];

            $id = $_POST['id'];
            $successMsg = "Категория $name успешно изменена!";

            $topic_id = update('topics', $id, $topic);
            header('location: ' . BASE_URL . 'admin/topics/index.php');
        }
        //tt($post);
    }
    //$lastRow = selectOne('users', ['id' => $id]);
}


// удаление категории

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    delete('topics', $id);
    header('location: ' . BASE_URL . 'admin/topics/index.php');
}