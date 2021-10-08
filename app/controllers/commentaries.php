<?php

include_once(SITE_ROOT . '/app/database/db.php');

$commentsForAdm = selectAll('comments');


$page = $_GET['post_id'];
$email = '';
$comment = '';
$msg = [];
$status = 0;
$content = '';

$comments = [];

//создание

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['goComment'])) {

    $email = trim($_POST['email']);
    $comment = trim($_POST['comment']);

    if($email === '' || $comment === '') {
        array_push($msg, "Не все поля заполнены!");
    }elseif(mb_strlen($comment, 'UTF-8') < 50 ){
        array_push($msg, "Комментарии можно оставлять более 50 символов!");
    }else{
        $user = selectOne('users', ['email' => $email]);

        if($user['email'] == $email) {
            $status = 1;
        }

        $comment = [
            'id_post' => $page,
            'email' => $email,
            'comment' => $comment,
            'status' => $status
        ];

        $comment = insert('comments', $comment);

        $comments = selectAll('comments', ['id_post' => $page, 'status' => 1]);
    }
}else{
    $email = '';
    $comment = '';

    $comments = selectAll('comments', ['id_post' => $page, 'status' => 1]);
}

// редактирование

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $commentOne = selectOne('comments', ['id' => $id]);
    //tt($commentOne);
    $id = $commentOne['id'];
    $email = trim($commentOne['email']);
    $content = trim($commentOne['comment']);
    $status = $commentOne['status'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-comment'])) {
    //tt($_POST);
    $id = $_POST['id'];
    $content = trim($_POST['content']);
    $status = isset($_POST['status']) ? 1 : 0;

    if($content === '') {
        array_push($msg, "Не все поля заполнены!");
    }else{
        $com = [
            'comment' => $content,
            'status' => $status
        ];

        $comment = update('comments', $id, $com);

        header('location: ' . BASE_URL . 'admin/comments/index.php');
    }
}else{
//    $content = trim($_POST['comment']);
//    $status = isset($_POST['status']) ? 1 : 0;
}

// удаление

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    delete('comments', $id);
    header('location: ' . BASE_URL . 'admin/comments/index.php');
}

// публикация

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['publish_id'])) {
    $id = $_GET['publish_id'];

    $status = $_GET['status'];

    $publish = [
        'status' => $status
    ];

    $comment = update('comments', $id, $publish);

    header('location: ' . BASE_URL . 'admin/comments/index.php');

}