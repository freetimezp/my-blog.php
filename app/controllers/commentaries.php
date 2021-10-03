<?php

$page = $_GET['post_id'];
$email = '';
$comment = '';
$msg = [];
$status = 0;

$comments = [];

//создание комментария

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


