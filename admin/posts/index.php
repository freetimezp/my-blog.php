<?php
include('../../path.php');
include('../../app/controllers/posts.php');
include('../../app/include/header-admin.php');
?>

<div class="container">
    <div class="row">
        <?php include('../../app/include/sidebar-admin.php'); ?>

        <div class="posts posts-admin col-9">
            <div class="row title-post">
                <h3>Управление записями</h3>
            </div>
            <div class="row button">
                <a href="<?=BASE_URL . "admin/posts/create.php";?>" class="col-3 btn btn-primary">Add post</a>
                <a href="<?=BASE_URL . "admin/posts/index.php";?>" class="col-3 btn btn-warning">Manage posts</a>
            </div>
            <div class="row title-table">
                <div class="id col-1">id</div>
                <div class="col-2">title</div>
                <div class="col-2">author</div>
                <div class="col-1">topic</div>
                <div class="col-2">date</div>
                <div class="col-1">edit</div>
                <div class="col-1">delete</div>
                <div class="topic col-2">status</div>
            </div>
            <?php foreach ($postsAdm as $key => $post): ?>
                <?php $topic = $topics[$post['id_topic'] - 1]['name'];?>
                <div class="row post">
                    <div class="id col-1"><?=$key + 1;?></div>
                    <div class="title col-2">
                        <?php if(strlen($post['title']) > 20): ?>
                            <?=mb_substr($post['title'], 0, 20, "UTF-8") . '...';?>
                        <?php else: ?>
                            <?=$post['title'];?>
                        <? endif; ?>
                    </div>
                    <div class="author col-2"><?=$post['username'];?></div>
                    <div class="topic col-1"><?=$topic;?></div>
                    <div class="date col-2"><?=$post['created_date'];?></div>
                    <div class="edit col-1"><a href="edit.php?id=<?=$post['id'];?>">edit</a></div>
                    <div class="delete col-1"><a href="edit.php?del_id=<?=$post['id'];?>">delete</a></div>

                    <?php if($post['status']): ?>
                        <div class="status col-2"><a href="edit.php?status=0&publish_id=<?=$post['id'];?>">unpublish</a></div>
                    <?php else: ?>
                        <div class="status col-2"><a href="edit.php?status=1&publish_id=<?=$post['id'];?>">publish</a></div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include('../../app/include/footer.php'); ?>



