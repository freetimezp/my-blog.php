<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Fonts CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>My blog</title>
</head>
<body>

<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="<?php echo BASE_URL; ?>" class="logo-image">My blog</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL; ?>">Главная</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="<?php echo BASE_URL . 'about.php'; ?>">О нас</a></li>
                    <li><a href="#"><i class="fas fa-user"></i>Кабинет</a>
                        <ul>
                            <li><a href="<?php echo BASE_URL . 'auth.php'; ?>">Админ панель</a></li>
                            <li><a href="#">Выход</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

