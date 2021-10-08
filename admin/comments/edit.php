<?php

include('../../path.php');

include('../../app/controllers/commentaries.php');

include('../../app/include/header-admin.php');
?>

<div class="container">
    <div class="row">
        <div class="sidebar sidebar-admin  col-3">
            <ul>
                <li><a href="index.php">Записи</a></li>
                <li><a href="../users/index.php">Пользователи</a></li>
                <li><a href="../topics/index.php">Категории</a></li>
                <li><a href="../comments/index.php">Комментарии</a></li>
            </ul>
        </div>
        <div class="posts posts-admin col-9">
            <div class="row title-post">
                <h3>Редактирование комментария</h3>
            </div>
            <div class="row add-post">
                <div class="col-12 col-md=12 err">
                    <?php include("../../app/helps/errorInfo.php");?>
                </div>
                <form action="edit.php" method="post">
                    <input name="id" value="<?=$id;?>" type="hidden">
                    <div class="col">
                        <label for="email" class="form-label">Автор комментария:</label>
                        <input value="<?=$email;?>" name="email" type="email" readonly disabled>
                    </div>
                    <div class="col">
                        <label for="editor" class="form-label">Содержание комментария:</label>
                        <textarea name="content" class="form-control" id="editor" rows="6"><?=$content;?></textarea>
                    </div>
                    <div class="row status form-check">
                        <?php if(empty($status) && $status == 0): ?>
                            <input class="col-1 form-check-input" type="checkbox" name="status" id="status">
                            <label class="col-2 form-check-label" for="status">publish</label>
                        <?php else: ?>
                            <input class="col-1 form-check-input" type="checkbox" name="status" id="status" checked>
                            <label class="col-2 form-check-label" for="status">publish</label>
                        <?php endif; ?>
                    </div>
                    <div class="col">
                        <button name="edit-comment" class="col-3 btn btn-primary" type="submit">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('../../app/include/footer.php'); ?>




