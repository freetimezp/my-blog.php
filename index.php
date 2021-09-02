<?php include('app/database/db.php'); ?>
<?php include('path.php'); ?>

<?php include('app/include/header.php'); ?>

<div class="container">
    <div class="row">
        <h2 class="slider-title">Топ публикации</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/slide-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a href="#">First slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slide-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a href="#">Second slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slide-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a href="#">Third slide label</a></h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container">
    <div class="content row">
        <div class="main-content col-12 col-md-9">
            <h2 class="main-content-title">Последние публикации</h2>
            <div class="post row">
                <div class="img col-12 col-md-3">
                    <img src="assets/images/post-1.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-9">
                    <h3>
                        <a href="single.php">Статья на тему создания динамического сайта...</a>
                    </h3>
                    <i class="far fa-user">
                        <span>
                            Имя автора
                        </span>
                    </i>
                    <i class="far fa-calendar">
                        <span>
                            21.08.2021
                        </span>
                    </i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Ad aliquam dolores impedit incidunt perferendis quisquam vero.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Ad aliquam dolores impedit incidunt perferendis quisquam vero.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-3">
                    <img src="assets/images/post-1.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-9">
                    <h3>
                        <a href="#">Статья на тему создания динамического сайта...</a>
                    </h3>
                    <i class="far fa-user">
                        <span>
                            Имя автора
                        </span>
                    </i>
                    <i class="far fa-calendar">
                        <span>
                            21.08.2021
                        </span>
                    </i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Ad aliquam dolores impedit incidunt perferendis quisquam vero.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Ad aliquam dolores impedit incidunt perferendis quisquam vero.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-3">
                    <img src="assets/images/post-1.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-9">
                    <h3>
                        <a href="#">Статья на тему создания динамического сайта...</a>
                    </h3>
                    <i class="far fa-user">
                        <span>
                            Имя автора
                        </span>
                    </i>
                    <i class="far fa-calendar">
                        <span>
                            21.08.2021
                        </span>
                    </i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Ad aliquam dolores impedit incidunt perferendis quisquam vero.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Ad aliquam dolores impedit incidunt perferendis quisquam vero.
                    </p>
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

