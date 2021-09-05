<?php include('../../app/database/db.php'); ?>
<?php include('../../path.php'); ?>

<?php session_start(); ?>
<?php include('../../app/include/header-admin.php'); ?>

<div class="container">
    <div class="row">
        <div class="sidebar sidebar-admin  col-3">
            <ul>
                <li><a href="../posts/index.php">Записи</a></li>
                <li><a href="index.php">Пользователи</a></li>
                <li><a href="../topics/index.php">Категории</a></li>
            </ul>
        </div>
        <div class="posts posts-admin col-9">
            <div class="row title-post">
                <h3>Управление пользователями</h3>
            </div>
            <div class="row button">
                <a href="create.php" class="col-3 btn btn-primary">Add user</a>
                <a href="index.php" class="col-3 btn btn-warning">Manage users</a>
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



