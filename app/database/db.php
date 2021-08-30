<?php

require('connect.php');

function tt($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function dbCheckError($query) {
    $errInfo = $query->errorInfo();

    if($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }

    return true;
}

function selectAll($table, $params = []) {
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if(!is_numeric($value)) {
                $value = "'" . $value . "'";
            }

            if($i === 0) {
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    $data = $query->fetchAll();

    return $data;
}

function selectOne($table, $params = []) {
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if(!is_numeric($value)) {
                $value = "'" . $value . "'";
            }

            if($i === 0) {
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }

    $sql .= " LIMIT 1";

    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    $data = $query->fetch();

    return $data;
}

function insert($table, $params) {
    global $pdo;

    $i = 0;
    $col = '';
    $mask = '';
    foreach ($params as $key => $value) {
        if($i === 0) {
            $col = $col . "$key";
            $mask = $mask . "'" . $value . "'";
        }else{
            $col = $col . ", $key";
            $mask = $mask . ", '" . $value . "'";
        }

        $i++;
    }

    $sql = "INSERT INTO $table ($col) VALUES($mask)";

    $query = $pdo->prepare($sql);
    $query->execute($params);

    dbCheckError($query);
}

$arrData = [
    'admin' => '0',
    'username' => 'test_user_3',
    'email' => 'test3@test.com',
    'password' => '444'
];

insert('users', $arrData);







