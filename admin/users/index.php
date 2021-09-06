<?php include('../../app/database/db.php'); ?>
<?php include('../../path.php'); ?>

<?php session_start(); ?>
<?php include('../../app/include/header-admin.php'); ?>

<div class="container">
    <div class="row">
        <?php include('../../app/include/sidebar-admin.php'); ?>

        <div class="posts posts-admin col-9">
            <div class="row title-post">
                <h3>Управление пользователями</h3>
            </div>
            <div class="row button">
                <a href="<?=BASE_URL . "admin/users/create.php";?>" class="col-3 btn btn-primary">Add user</a>
                <a href="<?=BASE_URL . "admin/posts/index.php";?>" class="col-3 btn btn-warning">Manage users</a>
            </div>
            <div class="row title-table">
                <div class="id col-1">id</div>
                <div class="col-4">login</div>
                <div class="col-1">admin</div>
                <div class="col-4">email</div>
                <div class="col-1">edit</div>
                <div class="col-1">delete</div>
            </div>
            <div class="row post">
                <div class="id col-1">1</div>
                <div class="title col-4">Evgen-tabboo</div>
                <div class="author col-1">admin</div>
                <div class="col-4">taboo@gmail.com</div>
                <div class="edit col-1"><a href="#">edit</a></div>
                <div class="delete col-1"><a href="#">delete</a></div>
            </div>
            <div class="row post">
                <div class="id col-1">1</div>
                <div class="title col-4">Evgen-1</div>
                <div class="author col-1">user</div>
                <div class="col-4">taboo1@gmail.com</div>
                <div class="edit col-1"><a href="#">edit</a></div>
                <div class="delete col-1"><a href="#">delete</a></div>
            </div>
            <div class="row post">
                <div class="id col-1">1</div>
                <div class="title col-4">Evgen-2</div>
                <div class="author col-1">user</div>
                <div class="col-4">taboo2@gmail.com</div>
                <div class="edit col-1"><a href="#">edit</a></div>
                <div class="delete col-1"><a href="#">delete</a></div>
            </div>
        </div>
    </div>
</div>

<?php include('../../app/include/footer.php'); ?>



