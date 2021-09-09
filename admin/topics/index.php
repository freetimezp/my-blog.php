<?php

include('../../path.php');
include('../../app/controllers/topics.php');

session_start();
include('../../app/include/header-admin.php');

?>

<div class="container">
    <div class="row">
        <?php include('../../app/include/sidebar-admin.php'); ?>

        <div class="posts posts-admin col-9">
            <div class="row title-post">
                <h3>Управление категориями</h3>
            </div>
            <div class="row button">
                <a href="<?=BASE_URL . "admin/topics/create.php";?>" class="col-3 btn btn-primary">Add topic</a>
                <a href="<?=BASE_URL . "admin/topics/index.php";?>" class="col-3 btn btn-warning">Manage topics</a>
            </div>
            <div class="row title-table">
                <div class="id col-1">id</div>
                <div class="col-4">Название</div>
                <div class="col-5">Описание</div>
                <div class="col-1">edit</div>
                <div class="col-1">delete</div>
            </div>
            <?php foreach ($topics as $key => $topic): ?>
            <div class="row post">
                <div class="id col-1"><?=$key + 1;?></div>
                <div class="title col-4"><?=$topic['name'];?></div>
                <div class="title col-5"><?=$topic['description'];?></div>
                <div class="edit col-1"><a href="edit.php?id=<?=$topic['id'];?>">edit</a></div>
                <div class="delete col-1"><a href="edit.php?delete_id=<?=$topic['id'];?>">delete</a></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include('../../app/include/footer.php'); ?>




