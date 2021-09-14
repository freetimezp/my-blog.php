<?php

include(SITE_ROOT . '/app/database/db.php');

$msg = '';
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

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);
    $img = trim($_POST['img']);
    $status = isset($_POST['publish']) ? 1 : 0;

    $id_user = trim($_SESSION['id']);

//    tt($_POST);
//    exit();

    if($title === '' || $content === '' || $topic === '') {
        $msg = "Не все поля заполнены!";
    }elseif(mb_strlen($title, 'UTF-8') < 3 ){
        $msg = "Категория должна содержать 3 или более символов!";
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
    $title = '';
    $content = '';
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
