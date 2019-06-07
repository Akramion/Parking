<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" href={{URL::asset('public/css/reset.css')}}>
    <link rel="stylesheet" href={{URL::asset('public/css/index.css')}}>
    <!---->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,700&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
	<div class="form form_autho">
            <h3 class="form__title">Авторизация</h3>
            <form action="" method="POST">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                <div class="form__input">
                    <label for="" class="form__label">Email:</label><input type="text" name="email">
                </div>

                <div class="form__input">
                    <label for="" class="form__label">Пароль:</label><input type="password" name="password">
                </div>

                <input type="submit" value="Войти" class="form__button">
                <a href="reg" class="form_autho__registr">Зарегистрироваться</a>
            </form>
        </div>
</body>
</html>