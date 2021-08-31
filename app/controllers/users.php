<?php

include('app/database/db.php');

if(isset($_POST['login'])) {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['pass-first'], PASSWORD_DEFAULT);
    $admin = 0;

    $post = [
        'admin' => $admin,
        'username' => $login,
        'email' => $email,
        'password' => $pass
    ];

    $id = insert('users', $post);
    $lastRow = selectOne('users', ['id' => $id]);
    tt($lastRow);
}
