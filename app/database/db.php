<?php

session_start();

require('connect.php');

function tt($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    exit();
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

    return $pdo->lastInsertId();
}

function update($table, $id, $params = []) {
    global $pdo;

    $i = 0;
    $str = '';

    foreach ($params as $key => $value) {
        if($i === 0) {
            $str = $str . $key . " = '" . $value . "'";
        }else{
            $str = $str . ", " . $key . " = '" . $value . "'";
        }
        $i++;
    }

    $sql = "UPDATE $table SET $str WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute($params);

    dbCheckError($query);
}

function delete($table, $id) {
    global $pdo;

    $sql = "DELETE FROM $table WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);
}

function selectAllFromPostsWithUsers($table1, $table2) {
    global $pdo;

    $sql = "SELECT t1.*, t2.username FROM $table1 AS t1 JOIN $table2 AS t2 ON t1.id_user = t2.id";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

    return $query->fetchAll();
}

function selectPostWithUser($table1, $table2, $id) {
    global $pdo;

    $sql = "SELECT p.*, u.username FROM $table1 AS p JOIN $table2 AS u ON p.id_user = u.id WHERE p.id = $id";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

    return $query->fetchAll();
}

function selectTopicsToSlider($table) {
    global $pdo;

    $sql = "SELECT * FROM $table WHERE id_topic = 5";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

    return $query->fetchAll();
}

// поиск по заголовкам и содержимому

function searchInTitleAndContent($text, $table1, $table2) {
    global $pdo;

    $text = trim(strip_tags(stripcslashes(htmlspecialchars($text))));

    $sql = "
        SELECT p.*, u.username FROM $table1 AS p JOIN $table2 AS u ON p.id_user = u.id 
        WHERE p.status = 1 AND p.title LIKE '%$text%' OR p.content LIKE '%$text%'       
        ";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}

function countRow($table) {
    global $pdo;

    $sql = "SELECT COUNT(*) FROM $table WHERE status = 1";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

    return $query->fetchColumn();
}

function selectAllWithLimit($table1, $table2, $limit, $offset) {
    global $pdo;

    $sql = "SELECT p.*, u.username FROM $table1 AS p JOIN $table2 AS u ON p.id_user = u.id WHERE p.status = 1 LIMIT $limit OFFSET $offset";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

    return $query->fetchAll();
}

function countRowWithCategories($table, $topic_id) {
    global $pdo;

    $sql = "SELECT COUNT(*) FROM $table WHERE status = 1 AND id_topic = $topic_id";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

    return $query->fetchColumn();
}

function selectAllPostsCategoriesWithLimit($table1, $table2, $limit, $offset, $topic_id) {
    global $pdo;

    $sql = "SELECT p.*, u.username FROM $table1 AS p JOIN $table2 AS u ON p.id_user = u.id WHERE p.status = 1 AND p.id_topic = $topic_id LIMIT $limit OFFSET $offset";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

    return $query->fetchAll();
}

