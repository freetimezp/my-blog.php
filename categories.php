<?php

include('path.php');
include('app/controllers/topics.php');
include('app/include/header.php');

//$posts = selectAll('posts', [
//        'id_topic' => $_GET['topic_id'],
//        'status' => 1
//]);

$topic = selectOne('topics', ['id' => $_GET['topic_id']]);

$topic_id = $topic['id'];

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 2;
$offset = $limit * ($page - 1);
//tt($_GET);
$total_pages = round(countRowWithCategories('posts', $topic_id) / $limit, 0);

$postsLimit = selectAllPostsCategoriesWithLimit('posts', 'users', $limit, $offset, $topic_id);

?>

<div class="container">
    <div class="content row">
        <div class="main-content col-12 col-md-9">
            <h2 class="main-content-title">Последние публикации категории - <?=$topic['name'];?></h2>
            <?php if(empty($postsLimit)): ?>
                <div class="col-12">
                    В данной категории еще нет статей или они еще не готовы к публикации.
                </div>
            <? else: ?>
                <?php foreach ($postsLimit as $key => $post): ?>
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
                <?php include(SITE_ROOT . '/app/include/paginationCategories.php'); ?>
            <? endif; ?>
        </div>
        <div class="sidebar sidebar-main col-12 col-md-3">
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

