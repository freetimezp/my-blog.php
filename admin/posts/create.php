<?php include('../../app/database/db.php'); ?>
<?php include('../../path.php'); ?>

<?php session_start(); ?>
<?php include('../../app/include/header-admin.php'); ?>

<div class="container">
    <div class="row">
        <div class="sidebar sidebar-admin  col-3">
            <ul>
                <li><a href="index.php">Записи</a></li>
                <li><a href="../users/index.php">Пользователи</a></li>
                <li><a href="../topics/index.php">Категории</a></li>
            </ul>
        </div>
        <div class="posts posts-admin col-9">
            <div class="row title-post">
                <h3>Добавление записи</h3>
            </div>
            <div class="row button">
                <a href="create.php" class="col-3 btn btn-primary">Add post</a>
                <a href="index.php" class="col-3 btn btn-warning">Manage posts</a>
            </div>
            <div class="row add-post">
                <form action="create.php" method="post">
                    <div class="col">
                        <label for="content" class="form-label">Название статьи:</label>
                        <input type="text" class="form-control" placeholder="Введите название статьи" aria-label="Название статьи">
                    </div>
                    <div class="col">
                        <label for="editor" class="form-label">Содержание статьи:</label>
                        <textarea class="form-control" id="editor" rows="6"></textarea>
                    </div>
                    <div class="input-group col">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <select class="form-select col" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="col">
                        <a href="#" class="col-3 btn btn-primary" type="submit">Сохранить</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('../../app/include/footer.php'); ?>



