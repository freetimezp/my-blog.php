<?php

include('path.php');

include(SITE_ROOT . '/app/database/db.php');

$post = selectPostWithUser('posts', 'users', $_GET['post_id'])[0];
$topics = selectAll('topics');

//tt($post);

include('app/include/header.php');

?>

<div class="container">
    <div class="content row">
        <div class="main-content col-12 col-md-9">
            <h2 class="main-content-title"><?=$post['title'];?></h2>
            <div class="single_post row">
                <div class="img col-12">
                    <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'];?>" alt="<?=$post['img']?>" class="img-thumbnail">
                </div>
                <div class="info">
                    <i class="far fa-user">
                        <span><?=$post['username'];?></span>
                    </i>
                    <i class="far fa-calendar">
                        <span><?=$post['created_date'];?></span>
                    </i>
                </div>
                <div>
                    <h3><?=$post['title'];?></h3>
                </div>
                <div class="single_post_text col-12">
                    <?=$post['content'];?>
                </div>
            </div>
        </div>
        <div class="sidebar col-12 col-md-3">
            <div class="section search">
                <h3 class="sidebar-title">Поиск</h3>
                <form action="search.php" method="post">
                    <input type="text" name="search-form" class="text-input" placeholder="Поиск...">
                </form>
            </div>

            <div class="section topics">
                <h3>Категории:</h3>
                <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                        <li><a href="<?=BASE_URL . 'categories.php?topic_id=' . $topic['id'];?>"><?=$topic['name'];?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include('app/include/footer.php'); ?>