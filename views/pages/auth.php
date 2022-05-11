<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="/css/auth_css.css">
</head>
<body>
    <div class="auth__form">

        <div class="div__logo">
                <img width="100" height="100" src="img/logo-blue.svg" alt="Логотип">
        </div>
        
        <form class="form" action="handlers/handler_auth.php" method="post" name="fauth" onsubmit="return validateFormAuth()">
                <h1 class="auth__lab">Вход в ИС:Склад</h1>
                <div class="input__auth">
                    <input class="login" name="login" type="text" placeholder="Логин">
                </div>
                <div class="input__auth">
                    <input class="password" name="password" type="password" placeholder="Пароль" >
                </div>
                <div class="input__auth">
                    <input type="submit" name="btn_auth" value="Войти">
                </div>
        </form>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/jscript.js"></script>
</body>
</html>







