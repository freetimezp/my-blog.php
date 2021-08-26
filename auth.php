<?php include('path.php'); ?>

<?php include('app/include/header.php'); ?>

<div class="container">
    <div class="form-title">
        <h2>Авторизация доступа</h2>
    </div>
    <form class="reg-form justify-content-center row" method="post" action="auth.php">
        <div class="mb-3 col-12 col-md-6">
            <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите логин..">
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль..">
        </div>
        <div class="mb-3 col-12 col-md-6 reg-auth-button">
            <button type="submit" class="btn btn-primary">Войти</button>
            <button type="submit" class="btn btn-primary">Регистрация</button>
        </div>
    </form>
</div>

<?php include('app/include/footer.php'); ?>
