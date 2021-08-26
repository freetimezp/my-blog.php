<?php include('path.php'); ?>

<?php include('app/include/header.php'); ?>

<div class="container">
    <div class="form-title">
        <h2>Форма регистрации</h2>
    </div>
    <form class="reg-form justify-content-center row" method="post" action="reg.php">
        <div class="mb-3 col-12 col-md-6">
            <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите логин..">
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="exampleInputEmail1" class="form-label">Ваш электронный ящик</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email..">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль..">
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="exampleInputPassword2" class="form-label">Подтвердите пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Введите пароль повторно..">
        </div>
        <div class="mb-3 col-12 col-md-6 reg-auth-button">
            <button type="submit" class="btn btn-primary">Регистрация</button>
            <button type="submit" class="btn btn-primary">Войти</button>
        </div>
    </form>
</div>

<?php include('app/include/footer.php'); ?>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!-- font Awesome -->
<script src="https://kit.fontawesome.com/3f6b0a3f37.js" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
-->
</body>
</html>