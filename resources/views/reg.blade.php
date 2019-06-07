<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>parking</title>
    <link rel="stylesheet" href={{URL::asset('public/css/reset.css')}}>
    <link rel="stylesheet" href={{URL::asset('public/css/index.css')}}>
    <!---->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,700&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
	<div class="form form_regisrt">
            <h3 class="form__title">Регистрация</h3>
            <form action="" method="POST">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <div class="form__input">
                    <label for="" class="form__label">Имя:</label><input type="text" name="name">
                </div>


                <div class="form__input">
                    <label for="" class="form__label">Email:</label><input type="text" name="email">
                </div>

                <div class="form__input">
                    <label for="" class="form__label">Пароль:</label><input type="password" name="password">
                </div>

                <div class="form__input">
                    <label for="" class="form__label">Повторите пароль:</label><input type="password" name="rePassword">
                </div>

                <input type="submit" value="Зарегистрироваться" class="form__button form__button_registr" name="submit">
            </form>
        </div>
</body>
</html>