<!DOCTYPE html>
<html>
    <head><meta charset="utf-8">
    <title>Авторизация</title>
	<link href="style.css" rel="stylesheet"
	</head>
    <body>
        <form class="login" method="post" action="">
            <label for="login">Логин</label>
            <input type="text" id="login" name="login" class="field" pattern="^[a-zA-Z]+$-@-^[a-zA-Z]+$-.-^[a-zA-Z]+$">
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" class="field" >
            <input type="submit" value="Войти" class="button">
        </form>
    </body>
</html>