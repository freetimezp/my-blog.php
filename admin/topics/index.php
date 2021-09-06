<?php include('../../app/database/db.php'); ?>
<?php include('../../path.php'); ?>

<?php session_start(); ?>
<?php include('../../app/include/header-admin.php'); ?>

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
                <div class="col-9">Название</div>
                <div class="col-1">edit</div>
                <div class="col-1">delete</div>
            </div>
            <div class="row post">
                <div class="id col-1">1</div>
                <div class="title col-9">Путешествия</div>
                <div class="edit col-1"><a href="#">edit</a></div>
                <div class="delete col-1"><a href="#">delete</a></div>
            </div>
            <div class="row post">
                <div class="id col-1">2</div>
                <div class="title col-9">Изображения</div>
                <div class="edit col-1"><a href="#">edit</a></div>
                <div class="delete col-1"><a href="#">delete</a></div>
            </div>
            <div class="row post">
                <div class="id col-1">2</div>
                <div class="title col-9">Музыка</div>
                <div class="edit col-1"><a href="#">edit</a></div>
                <div class="delete col-1"><a href="#">delete</a></div>
            </div>
            <div class="row post">
                <div class="id col-1">2</div>
                <div class="title col-9">Фильмы</div>
                <div class="edit col-1"><a href="#">edit</a></div>
                <div class="delete col-1"><a href="#">delete</a></div>
            </div>
        </div>
    </div>
</div>

<?php include('../../app/include/footer.php'); ?>




