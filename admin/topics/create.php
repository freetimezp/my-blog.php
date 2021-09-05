<?php include('../../app/database/db.php'); ?>
<?php include('../../path.php'); ?>

<?php session_start(); ?>
<?php include('../../app/include/header-admin.php'); ?>

<div class="container">
    <div class="row">
        <div class="sidebar sidebar-admin  col-3">
            <ul>
                <li><a href="../posts/index.php">Записи</a></li>
                <li><a href="../users/index.php">Пользователи</a></li>
                <li><a href="index.php">Категории</a></li>
            </ul>
        </div>
        <div class="posts posts-admin col-9">
            <div class="row title-post">
                <h3>Добавление категории</h3>
            </div>
            <div class="row button">
                <a href="create.php" class="col-3 btn btn-primary">Add topics</a>
                <a href="index.php" class="col-3 btn btn-warning">Manage topics</a>
            </div>
            <div class="row add-topics">
                <form action="create.php" method="post">
                    <div class="col">
                        <label for="content" class="form-label">Название категории:</label>
                        <input type="text" class="form-control" placeholder="Введите название категории" aria-label="Название категории">
                    </div>
                    <div class="col">
                        <label for="content" class="form-label">Описание категории:</label>
                        <textarea class="form-control" id="content" rows="6"></textarea>
                    </div>
                    <div class="col">
                        <a href="#" class="col-3 btn btn-primary" type="submit">Сохранить</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('../../app/include/footer.php'); ?>




