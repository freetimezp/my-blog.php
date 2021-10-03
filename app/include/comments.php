<?php

include (SITE_ROOT . "/app/controllers/commentaries.php");

?>

<div class="col-md-12 col-12 comments">
    <h3>Оставить комментарий</h3>
    <div class="row error">
        <?php include (SITE_ROOT . "/app/helps/errorInfo.php"); ?>
    </div>
    <form action="<?=BASE_URL . "single.php?post_id=$page"; ?>" method="post">
        <input name="page" value="<?=$page;?>" type="hidden">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Напишите ваш комментарий</label>
            <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" name="goComment" class="btn btn-primary">Отправить</button>
        </div>
    </form>
    <h3>Комментарии к статье</h3>
    <div>
        <ul>
            <?php foreach ($comments as $key => $comment): ?>
                <span>Автор: <?=$comment['email']?></span>
                <li><?=$comment['comment'];?></li>
                <p><hr></p>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

