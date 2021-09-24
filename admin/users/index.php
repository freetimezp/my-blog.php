<?php
include('../../path.php');
session_start();
include('../../app/controllers/users.php');

include('../../app/include/header-admin.php');
?>

<div class="container">
    <div class="row">
        <?php include('../../app/include/sidebar-admin.php'); ?>

        <div class="posts posts-admin col-9">
            <div class="row title-post">
                <h3>Управление пользователями</h3>
            </div>
            <div class="row button">
                <a href="<?=BASE_URL . "admin/users/create.php";?>" class="col-3 btn btn-primary">Add user</a>
                <a href="<?=BASE_URL . "admin/users/index.php";?>" class="col-3 btn btn-warning">Manage users</a>
            </div>
            <div class="row title-table">
                <div class="id col-1">id</div>
                <div class="col-4">login</div>
                <div class="col-1">admin</div>
                <div class="col-4">email</div>
                <div class="col-1">edit</div>
                <div class="col-1">delete</div>
            </div>

            <?php foreach ($users as $key => $user): ?>
                <div class="row post">
                    <div class="id col-1"><?=$user['id'];?></div>
                    <div class="title col-4"><?=$user['username'];?></div>
                    <div class="author col-1">
                        <?php if($user['admin']): ?>
                        Yes
                        <?php else: ?>
                        no
                        <?php endif; ?>
                    </div>
                    <div class="col-4"><?=$user['email'];?></div>
                    <div class="edit col-1"><a href="edit.php?edit_id=<?=$user['id'];?>">edit</a></div>
                    <div class="delete col-1"><a href="edit.php?delete_id=<?=$user['id'];?>">delete</a></div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>

<?php include('../../app/include/footer.php'); ?>



