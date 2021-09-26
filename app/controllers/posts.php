<?php

include(SITE_ROOT . '/app/database/db.php');

if(!$_SESSION){
    header('location: ' . BASE_URL . 'auth.php');
}

$msg = [];
$id = '';
$title = '';
$content = '';
$img = '';
$topic = '';

$successMsg = '';

$topics = selectAll('topics');
$posts = selectAll('posts');
$postsAdm = selectAllFromPostsWithUsers('posts', 'users');

//tt($postsAdm);

// создание поста

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-post'])) {

    if(!empty($_FILES['img']['name'])) {
        $imgName = time() . '_' . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\assets\images\posts\\" . $imgName;

        if(strpos($fileType, 'image') === false) {
            array_push($msg, "Загружать можно только изображения");
        }else{
            $result = move_uploaded_file($fileTmpName, $destination);

            if($result) {
                $_POST['img'] = $imgName;
            }else{
                array_push($msg, "Ошибка загрузки изображения на сервер!");
            }
        }
    }else{
        array_push($msg, "При желании вы можете добавить изображение к статье!");
    }

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);
    $img = trim($_POST['img']);
    $status = isset($_POST['status']) ? 1 : 0;

    $id_user = trim($_SESSION['id']);

//    tt($_POST);
//    exit();

    if($title === '' || $content === '' || $topic === '') {
        array_push($msg, "Не все поля заполнены!");
    }elseif(mb_strlen($title, 'UTF-8') < 3 ){
        array_push($msg, "Название должно содержать 3 или более символов!");
    }elseif($topic === 'Выберите категорию'){
        array_push($msg, "Выберите категорию!");
    }else{
        $post = [
            'id_user' => $id_user,
            'title' => $title,
            'content' => $content,
            'img' => $img,
            'status' => $status,
            'id_topic' => $topic
        ];

        $post = insert('posts', $post);
        $successMsg = "Статья $title успешно добавлена!";

        $post = selectOne('posts', ['id' => $id]);
        header('location: ' . BASE_URL . 'admin/posts/index.php');

        //tt($post);
    }
    //$lastRow = selectOne('users', ['id' => $id]);
}else{
    $id = '';
    $title = '';
    $content = '';
    $status = '';
    $topic = '';
    $img = '';
}

// редактирование записи

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $post = selectOne('posts', ['id' => $id]);
    //tt($post);

    $id = $post['id'];
    $title = $post['title'];
    $content = $post['content'];
    $status = $post['status'];
    $topic = $post['id_topic'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-post'])) {

//    tt($_POST);
//    exit();
    $id = $_POST['id'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);
    $img = trim($_POST['img']);
    $status = isset($_POST['status']) ? 1 : 0;

    $id_user = $_SESSION['id'];

//    tt($_POST);
//    exit();

    if(!empty($_FILES['img']['name'])) {
        $imgName = time() . '_' . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\assets\images\posts\\" . $imgName;

        if(strpos($fileType, 'image') === false) {
            array_push($msg, "Загружать можно только изображения");
        }else{
            $result = move_uploaded_file($fileTmpName, $destination);

            if($result) {
                $_POST['img'] = $imgName;
            }else{
                array_push($msg, "Ошибка загрузки изображения на сервер!");
            }
        }
    }else{
        array_push($msg, "При желании вы можете добавить изображение к статье!");
    }

    if($title === '' || $content === '' || $topic === '') {
        array_push($msg, "Не все поля заполнены!");
    }elseif(mb_strlen($title, 'UTF-8') < 3 ){
        array_push($msg, "Название должно содержать 3 или более символов!");
    }elseif($topic === 'Выберите категорию'){
        array_push($msg, "Выберите категорию!");
    }else{
        $post = [
            'id_user' => $id_user,
            'title' => $title,
            'content' => $content,
            'img' => $img,
            'status' => $status,
            'id_topic' => $topic
        ];

        $post = update('posts', $id, $post);
        $successMsg = "Статья $title успешно изменена!";

        header('location: ' . BASE_URL . 'admin/posts/index.php');

        //tt($post);
    }
    //$lastRow = selectOne('users', ['id' => $id]);
}


// удаление записи

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    delete('posts', $id);
    header('location: ' . BASE_URL . 'admin/posts/index.php');
}

// публикация записи

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['publish_id'])) {
    $id = $_GET['publish_id'];

    $status = $_GET['status'];

    $publish = [
        'status' => $status
    ];

    $post = update('posts', $id, $publish);

    header('location: ' . BASE_URL . 'admin/posts/index.php');

}
