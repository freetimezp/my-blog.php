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
                    <a href="index.php" class="logo-image">My blog</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li>
                        <a href="index.php">Главная</a>
                    </li>
                    <li>
                        <a href="#">Услуги</a>
                    </li>
                    <li>
                        <a href="about.php">О нас</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-user"></i>
                            Кабинет
                        </a>
                        <ul>
                            <li>
                                <a href="#">Админ панель</a>
                            </li>
                            <li>
                                <a href="#">Выход</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="container">
    <div class="content row">
        <div class="main-content col-12 col-md-9">
            <h2 class="main-content-title">О нас</h2>
            <div class="single_post row">
                <div class="info">
                    <i class="far fa-user">
                        <span>Автор блога</span>
                    </i>
                    <i class="far fa-calendar">
                        <span>21.08.2021</span>
                    </i>
                </div>
                <div>
                    <h3>Заголовок</h3>
                </div>
                <div class="single_post_text col-12">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in <a href="#">incidunt</a> iste iure nam odio pariatur quae quidem quis similique!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in incidunt iste iure nam odio pariatur quae quidem quis similique!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in incidunt iste iure nam odio pariatur quae quidem quis similique!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in incidunt iste iure nam odio pariatur quae quidem quis similique!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in <a href="#">incidunt</a>  iste iure nam odio pariatur quae quidem quis similique!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in incidunt iste iure nam odio pariatur quae quidem quis similique!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in incidunt iste iure nam odio pariatur quae quidem quis similique!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in incidunt iste iure nam odio pariatur quae quidem quis similique!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in <a href="#">incidunt</a>  iste iure nam odio pariatur quae quidem quis similique!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in incidunt iste iure nam odio pariatur quae quidem quis similique!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in incidunt iste iure nam odio pariatur quae quidem quis similique!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in incidunt iste iure nam odio pariatur quae quidem quis similique!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in incidunt iste iure nam odio <a href="#">incidunt</a>  quae quidem quis similique!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in incidunt iste iure nam odio pariatur quae quidem quis similique!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aut in incidunt iste iure nam odio pariatur quae quidem quis similique!
                    </p>

                </div>
            </div>

            <h3 class="main-content-title">Видео</h3>
            <div class="about-video">
                <video src="assets/video/video-1.mp4" controls></video>
            </div>

            <h3 class="main-content-title">Музыка</h3>
            <div class="about-music">
                <div>
                    <p>Елена Ваенга "Твои руки не меня обнимут..."</p>
                    <audio controls>
                        <source src="assets/music/music-1.mp3" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div>
                    <p>Сергей Скрябин "Говорили и курили..."</p>
                    <audio controls>
                        <source src="assets/music/music-2.mp3" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>
        <div class="sidebar col-12 col-md-3">
            <div class="section search">
                <h3 class="sidebar-title">Поиск</h3>
                <form action="/" method="post">
                    <input type="text" name="search-form" class="text-input" placeholder="Поиск...">
                </form>
            </div>

            <div class="section topics">
                <h3>Категории:</h3>
                <ul>
                    <li><a href="#">Мотивация</a></li>
                    <li><a href="#">Персоны</a></li>
                    <li><a href="#">Уроки жизни</a></li>
                    <li><a href="#">Смешно</a></li>
                    <li><a href="#">Интересно</a></li>
                    <li><a href="#">Музыка</a></li>
                    <li><a href="#">Фильмы</a></li>
                    <li><a href="#">Игры</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="footer container-fluid">
    <div class="footer-content container">
        <div class="row">
            <div class="footer-section about col-12 col-md-4">
                <h3 class="logo-text">Мой блог</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab eligendi eveniet harum modi non. Corporis ea expedita magnam quis recusandae!
                </p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i>&nbsp; 123-456-789</span>
                    <span><i class="fas fa-envelope"></i>&nbsp; info@exemple.com.ua</span>
                </div>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-section links col-12 - col-md-4">
                <h3>Прямые ссылки</h3>
                <ul>
                    <a href="#"><li>События</li></a>
                    <a href="#"><li>Команда</li></a>
                    <a href="#"><li>Галлерея</li></a>
                    <a href="#"><li>Турнир</li></a>
                    <a href="#"><li>Контакты</li></a>
                </ul>
            </div>

            <div class="footer-section contact-form col-12 col-md-4">
                <h3>Контакты</h3>
                <form action="/" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Введите электронный адрес..">
                    <textarea name="message" rows="4" class="text-input contact-input" placeholder="Введите ваше сообщение..."></textarea>
                    <button class="btn btn-big contact-btn" type="submit">
                        <i class="fas fa-envelope"></i>
                        Отправить
                    </button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; example.com | Developed by ME
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!-- font Awesome -->
<script src="https://kit.fontawesome.com/3f6b0a3f37.js" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
-->
</body>
</html>