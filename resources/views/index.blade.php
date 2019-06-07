<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Парковка</title>

    <!--css-->
    <link rel="stylesheet" href={{URL::asset('public/css/uikit.min.css')}}>
    <script src={{URL::asset('public/js/uikit.min.js')}}></script>


    {{--UIKIT--}}
    <link rel="stylesheet" href={{URL::asset('public/css/reset.css')}}>
    <link rel="stylesheet" href={{URL::asset('public/css/index.css')}}>
    <!---->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,700&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>

<button uk-toggle="target: #auth" type="button">Авторизация</button>

<!-- This is the modal -->
<div id="auth" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close" type="button"></button>
        <div class="form form_autho">
            <h3 class="form__title">Авторизация</h3>
            <form action="auth" method="POST">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                <div class="form__input">
                    <label for="" class="form__label">Логин:</label><input type="text" name="email">
                </div>

                <div class="form__input">
                    <label for="" class="form__label">Пароль:</label><input type="password" name="password">
                </div>

                <input type="submit" value="Войти" class="form__button">
                <a href="#" class="form_autho__registr">Зарегистрироваться</a>
            </form>
        </div>
    </div>
</div>

<button uk-toggle="target: #registr" type="button">Регистрация</button>

<!-- This is the modal -->
<div id="registr" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close" type="button"></button>
        <div class="form form_regisrt">
            <h3 class="form__title">Регистрация</h3>
            <form action="" method="POST">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <div class="form__input">
                    <label for="" class="form__label">Имя:</label><input type="text" name="firstName">
                </div>

                <div class="form__input">
                    <label for="" class="form__label">Фамилия:</label><input type="text" name="lastName">
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
    </div>
</div>





    <div class="container">
        <div class="parking"></div>
        <div class="info">
            <div class="info__timer"><time>00:00</time></div>
            <div class="info__profile">
                <div class="info__bg">
                    <div class="info__name"><img src="img/user.svg" alt=""> <span class="info__param">Имя</span> </div>
                    <div class="info__hours"><img src="img/clock.svg" alt=""> <span class="info__param">Часы</span> </div>
                    <div class="info__discount"><img src="img/discount.svg" alt=""> <span class="info__param">Скидка</span> </div>
                </div>
                <div class="info__buttons">
                    <a href=""><img src="img/conversation.svg" alt=""></a>
                    <a href="logout"><img src="img/logout.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>



</body>
</html>