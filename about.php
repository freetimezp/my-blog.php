<?php include('path.php'); ?>

<?php include('app/include/header.php'); ?>

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

<?php include('app/include/footer.php'); ?>
