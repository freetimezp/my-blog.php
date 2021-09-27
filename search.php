<?php

include('path.php');
include(SITE_ROOT . '/app/database/db.php');
include('app/include/header.php');

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-form'])) {
    $posts = searchInTitleAndContent($_POST['search-form'], 'posts', 'users');
}

?>

<div class="container">
    <div class="content row">
        <div class="sidebar sidebar-main col-12">
            <div class="section search">
                <h3 class="sidebar-title">Поиск</h3>
                <form action="search.php" method="post">
                    <input type="text" name="search-form" class="text-input" value="<?=$_POST['search-form'];?>">
                </form>
            </div>
        </div>
        <div class="main-content col-12">
            <?php if($posts == []): ?>
                <div class="post row">
                    <div class="post_text col-12">
                        <h3>
                            По вашему запросу ничего не найдено. Попробуйте другой поисковый запрос!
                        </h3>
                    </div>
                </div>
            <?php else: ?>
                <h2 class="main-content-title">По вашему запросу найдены следующие публикации:</h2>
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
            <?php endif; ?>
        </div>

    </div>
</div>

<?php include('app/include/footer.php'); ?>

