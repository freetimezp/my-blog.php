<?php

include('app/database/db.php');

$errMsg = '';
$successMsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login === '' || $email === '' || $passF === '') {
        $errMsg = "Не все поля заполнены!";
    }elseif(mb_strlen($login, 'UTF-8') < 5 ){
        $errMsg = "Логин должен содержать 5 или более символов!";
    }elseif($passF !== $passS){
        $errMsg = "Введенные пароли отличаются! Введите их еще раз.";
    }elseif(mb_strlen($passF, 'UTF-8') < 6 ){
        $errMsg = "Введите пароль больше 5 символов!";
    }else{
        $existance = selectOne('users', [
            'email' => $email
        ]);
        //tt($existance);

        if($existance['email'] === $email) {
            $errMsg = "Пользователь с такой электронной почтой уже существует!";
        }else{
            $passHash = password_hash($passF, PASSWORD_DEFAULT);

            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $passHash
            ];

            $id = insert('users', $post);
            $successMsg = "Пользователь $login успешно зарегистрирован!";
        }

        //tt($post);
    }

    //$lastRow = selectOne('users', ['id' => $id]);
}else{
    $login = '';
    $email = '';
}

