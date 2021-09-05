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
                <h3>Добавление пользователя</h3>
            </div>
            <div class="row button">
                <a href="create.php" class="col-3 btn btn-primary">Add user</a>
                <a href="index.php" class="col-3 btn btn-warning">Manage users</a>
            </div>
            <div class="row add-user">
                <form action="create.php" method="post">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                        <input name="login" value="<?=$login;?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите логин..">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Ваш электронный ящик</label>
                        <input name="email" value="<?=$email;?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email..">
                    </div>
                    <select class="form-select col" aria-label="Default select example">
                        <option selected>Выберите роль</option>
                        <option value="1">user</option>
                        <option value="2">admin</option>
                    </select>
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль..">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword2" class="form-label">Подтвердите пароль</label>
                        <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="Введите пароль повторно..">
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




