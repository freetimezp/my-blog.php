<?php

include('../../path.php');

include('../../app/controllers/posts.php');

include('../../app/include/header-admin.php');
?>

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
                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div class="col">
                        <label for="content" class="form-label">Название статьи:</label>
                        <input name="title" type="text" class="form-control" placeholder="Введите название статьи" aria-label="Название статьи">
                    </div>
                    <div class="col">
                        <label for="editor" class="form-label">Содержание статьи:</label>
                        <textarea name="content" class="form-control" id="editor" rows="6"></textarea>
                    </div>
                    <div class="input-group col">
                        <input name="img" type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <select name="topic" class="form-select col" aria-label="Default select example">
                        <option selected>Выберите категорию</option>
                        <?php foreach ($topics as $key => $topic): ?>
                            <option value="<?=$topic['id'];?>"><?=$topic['name'];?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="row publish form-check">
                        <input class="col-1 form-check-input" type="checkbox" name="publish" id="publish" value="1" checked>
                        <label class="col-2 form-check-label" for="publish">publish</label>
                    </div>
                    <div class="col">
                        <button name="add-post" class="col-3 btn btn-primary" type="submit">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('../../app/include/footer.php'); ?>



