<?php
include('../../path.php');
include('../../app/controllers/commentaries.php');
include('../../app/include/header-admin.php');
?>

<div class="container">
    <div class="row">
        <?php include('../../app/include/sidebar-admin.php'); ?>

        <div class="posts posts-admin col-9">
            <div class="row title-post">
                <h3>Управление комментариями</h3>
            </div>
            <div class="row title-table">
                <div class="id col-1">id</div>
                <div class="col-3">comment</div>
                <div class="col-3">email</div>
                <div class="col-2">date</div>
                <div class="col-1">edit</div>
                <div class="col-1">delete</div>
                <div class="topic col-1">status</div>
            </div>
            <?php foreach ($commentsForAdm as $key => $comment): ?>
                <div class="row post">
                    <div class="id col-1"><?=$comment['id'];?></div>
                    <div class="comment col-3">
                        <?php if(strlen($comment['comment']) > 20): ?>
                            <?=mb_substr($comment['comment'], 0, 20, "UTF-8") . '...';?>
                        <?php else: ?>
                            <?=$comment['comment'];?>
                        <? endif; ?>
                    </div>
                    <div class="email col-3"><?=$comment['email'];?></div>
                    <div class="date col-2"><?=$comment['created_date'];?></div>
                    <div class="edit col-1"><a href="edit.php?id=<?=$comment['id'];?>">edit</a></div>
                    <div class="delete col-1"><a href="edit.php?del_id=<?=$comment['id'];?>">delete</a></div>

                    <?php if($comment['status']): ?>
                        <div class="status col-1"><a href="edit.php?status=0&publish_id=<?=$comment['id'];?>">unpublish</a></div>
                    <?php else: ?>
                        <div class="status col-1"><a href="edit.php?status=1&publish_id=<?=$comment['id'];?>">publish</a></div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include('../../app/include/footer.php'); ?>



