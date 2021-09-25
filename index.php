<?php

include('path.php');
include('app/controllers/topics.php');
include('app/include/header.php');

$posts = selectAll('posts', ['status' => 1]);

?>

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

            <?php foreach ($posts as $key => $post): ?>
                <?php $user = selectOne('users', ['id' => $post['id_user']]); ?>
                <?php $topic = selectOne('topics', ['id' => $post['id_topic']]); ?>
                <div class="post row">
                    <div class="img col-12 col-md-3">
                        <img src="assets/images/posts/<?=$post['img'];?>" alt="<?=$post['img'];?>" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-9">
                        <h3>
                            <a href="<?=BASE_URL . 'single.php?post_id=' . $post['id']; ?>">
                                <?php if(strlen($post['title']) > 30): ?>
                                    <?=mb_substr($post['title'], 0, 30, "UTF-8") . '...';?>
                                <?php else: ?>
                                    <?=$post['title'];?>
                                <? endif; ?>
                            </a>
                        </h3>
                        <i class="far fa-user">
                            <span>
                                <?=$user['username'];?>
                            </span>
                        </i>
                        <i class="far fa-calendar">
                            <span>
                                <?=$post['created_date'];?>
                            </span>
                        </i>
                        <i class="post-topic">
                            <?=$topic['name'];?>
                        </i>
                        <p class="preview-text">
                            <?php if(strlen($post['content']) > 300): ?>
                                <?=mb_substr($post['content'], 0, 300, "UTF-8") . '...';?>
                            <?php else: ?>
                                <?=$post['content'];?>
                            <? endif; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="sidebar sidebar-main col-12 col-md-3">
            <div class="section search">
                <h3 class="sidebar-title">Поиск</h3>
                <form action="/" method="post">
                    <input type="text" name="search-form" class="text-input" placeholder="Поиск...">
                </form>
            </div>

            <div class="section topics">
                <h3>Категории:</h3>
                <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                        <li><a href="#"><?=$topic['name'];?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include('app/include/footer.php'); ?>

