<?php include('../../app/database/db.php'); ?>
<?php include('../../path.php'); ?>

<?php session_start(); ?>
<?php include('../../app/include/header-admin.php'); ?>

<div class="container">
    <div class="row">
        <div class="sidebar sidebar-admin  col-3">
            <ul>
                <li><a href="#">Записи</a></li>
                <li><a href="#">Пользователи</a></li>
                <li><a href="#">Категории</a></li>
            </ul>
        </div>
        <div class="posts posts-admin col-9">
            <div class="row title-post">
                <h3>Управление записями</h3>
            </div>
            <div class="row button">
                <a href="#" class="col-3 btn btn-primary">Add post</a>
                <a href="#" class="col-3 btn btn-warning">Manage posts</a>
            </div>
            <div class="row title-table">
                <div class="id col-1">id</div>
                <div class="col-5">title</div>
                <div class="col-2">author</div>
                <div class="col-2">date</div>
                <div class="col-1">edit</div>
                <div class="col-1">delete</div>
            </div>
            <div class="row post">
                <div class="id col-1">1</div>
                <div class="title col-5">Название статьи</div>
                <div class="author col-2">Глебов</div>
                <div class="date col-2">21.01.2021</div>
                <div class="edit col-1"><a href="#">edit</a></div>
                <div class="delete col-1"><a href="#">delete</a></div>
            </div>
            <div class="row post">
                <div class="id col-1">2</div>
                <div class="title col-5">Название статьи</div>
                <div class="author col-2">Глебов</div>
                <div class="date col-2">21.01.2021</div>
                <div class="edit col-1"><a href="#">edit</a></div>
                <div class="delete col-1"><a href="#">delete</a></div>
            </div>
            <div class="row post">
                <div class="id col-1">3</div>
                <div class="title col-5">Название статьи</div>
                <div class="author col-2">Глебов</div>
                <div class="date col-2">21.01.2021</div>
                <div class="edit col-1"><a href="#">edit</a></div>
                <div class="delete col-1"><a href="#">delete</a></div>
            </div>
        </div>
    </div>
</div>

<?php include('../../app/include/footer.php'); ?>



