<?php
session_start();
include('../../path.php');
include('../../app/controllers/users.php');
include('../../app/include/header-admin.php');
?>

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
                <h3>Редактирование пользователя</h3>
            </div>
            <div class="row button">
                <a href="create.php" class="col-3 btn btn-primary">Add user</a>
                <a href="index.php" class="col-3 btn btn-warning">Manage users</a>
            </div>
            <div class="row add-user">
                <div class="col-12 col-md=12 err">
                    <?php include("../../app/helps/errorInfo.php");?>
                </div>
                <form action="edit.php" method="post">
                    <input name="id" value="<?=$id;?>" type="hidden">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                        <input name="login" value="<?=$login;?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите логин..">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Ваш электронный ящик</label>
                        <input readonly name="email" value="<?=$email;?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email..">
                    </div>
                    <label>Выберите роль</label>
                    <div class="row publish form-check">
                        <?php if($admin): ?>
                            <input class="col-1 form-check-input" type="checkbox" value="1" name="admin" id="admin" checked>
                        <?php else: ?>
                            <input class="col-1 form-check-input" type="checkbox" value="1" name="admin" id="admin">
                        <?php endif; ?>
                            <label class="col-2 form-check-label" for="admin">admin</label>
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль..">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword2" class="form-label">Подтвердите пароль</label>
                        <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="Введите пароль повторно..">
                    </div>
                    <div class="col">
                        <button name="edit-user" class="col-3 btn btn-primary" type="submit">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('../../app/include/footer.php'); ?>





