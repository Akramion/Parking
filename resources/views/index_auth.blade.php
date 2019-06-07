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
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,700&amp;subset=cyrillic" rel="stylesheet">
    {{--JQUERY--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <style>
        .place_0{
            fill: green;
        }

        .place_1{
            fill: red;
        }
    </style>
</head>
<body>



<button uk-toggle="target: #bron" type="button" id="button-bron" style="display: none">Бронивароние</button>

<!-- This is the modal -->
<div id="bron" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close" type="button"></button>
        <div class="form form_bron">
            <h3 class="form__title">Бронирование</h3>
            <form action="leave" method="POST">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <input type="number" name="place-id" id="place-id" value="" style="display: none" />

                <div class="form__input">
                    <label for="" class="form__label">Забронирова место на </label>
                    <div class="form__input_time">
                         <input type="number" class="form__input_time" name="hours"> ч.
                    </div>
                </div>

                <div class="form__input">
                    <label for="" class="form__label" >Номер автомобиля:</label><input type="text" name="car-number">
                </div>

                <input type="submit" value="Забронировать" class="form__button">
                <p>1 час = 100р</p>
            </form>
        </div>
    </div>
</div>

<div id="take-wallet" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close" type="button"></button>
        <div class="form form_bron">
            <form action="money" method="POST">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />



                <div class="form__input">
                    <label for="" class="form__label" >Деньги:</label><input type="text" name="money">
                </div>

                <input type="submit" value="Внести" class="form__button">
            </form>
        </div>
    </div>
</div>


{{--MAIN--}}
    <div class="container">
        <div class="parking">




            <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 566.9 566.9" style="enable-background:new 0 0 566.9 566.9;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#BCBBBB;stroke:#FFFFFF;stroke-miterlimit:10;}

    .st2{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;}
    .st3{fill:#EADA4E;stroke:#000000;stroke-width:0.5;stroke-miterlimit:10;}
    .st4{fill:#5A9ABA;}
    .st5{fill:#30B753;stroke:#000000;stroke-width:0.5;stroke-miterlimit:10;}
    .st6{fill:#30B753;stroke:#050505;stroke-width:0.5;stroke-miterlimit:10;}
    .st7{fill:#D62921;stroke:#000000;stroke-width:0.5;stroke-miterlimit:10;}
    .st8{fill:#FFFFFF;}
    .st9{fill:#192FB2;stroke:#FFFFFF;stroke-width:0.5;}
    .st10{font-family:'MyriadPro-Regular';}
    .st11{font-size:49.7935px;}
</style>
                <path class="st0" d="M456.3,490H99.8c-7.4,0-13.3-6-13.3-13.3V60c0-7.4,6-13.3,13.3-13.3h356.5c7.4,0,13.3,6,13.3,13.3v416.7
	C469.7,484,463.7,490,456.3,490z"/>
                <rect id="place-1" x="176.3" y="75.7" class="place_{{$places[0]->busy}}" width="45.4" height="64" data-id="1"/>
                <rect id="place-2" x="226.7" y="75.7" class="place_{{$places[1]->busy}}" width="47.2" height="64" data-id="2"/>
                <rect id="place-3" x="279.6" y="75.2" class="place_{{$places[2]->busy}}" width="43.4" height="64" data-id="3"/>
                <rect id="place-4" x="328" y="75.7" class="place_{{$places[3]->busy}}" width="48" height="64" data-id="4"/>
                <rect id="place-5" x="381" y="75.7" class="place_{{$places[4]->busy}}" width="45.4" height="64" data-id="5"/>
                <rect id="place-6" x="176.3" y="191.5" class="place_{{$places[5]->busy}}" width="45.4" height="64" data-id="6"/>
                <rect id="place-7" x="227.7" y="191.8" class="place_{{$places[6]->busy}}" width="46.4" height="64" data-id="7"/>
                <rect id="place-8" x="279.6" y="191.8" class="place_{{$places[7]->busy}}" width="43.7" height="64" data-id="8"/>
                <rect id="place-9" x="329.5" y="191.8" class="place_{{$places[8]->busy}}" width="46.5" height="64" data-id="9"/>
                <rect id="place-10" x="381" y="191.5" class="place_{{$places[9]->busy}}" width="45.4" height="64" data-id="10"/>
                <rect id="place-11" x="176.3" y="261.8" class="place_{{$places[10]->busy}}" width="45.4" height="64" data-id="11"/>
                <rect id="place-12" x="226.7" y="261.8" class="place_{{$places[11]->busy}}" width="47.5" height="64" data-id="12"/>
                <rect id="place-13" x="278.6" y="261.8" class="place_{{$places[12]->busy}}" width="45.4" height="64" data-id="13"/>
                <rect id="place-14" x="328.4" y="261.8" class="place_{{$places[13]->busy}}" width="47.6" height="64" data-id="14"/>
                <rect id="place-15" x="381" y="261.8" class="place_{{$places[14]->busy}}" width="45.4" height="64" data-id="15"/>
                <rect id="place-16" x="176.3" y="385.6" class="place_{{$places[15]->busy}}" width="45.4" height="64" data-id="16"/>
                <rect id="place-17" x="225.4" y="385.6" class="place_{{$places[16]->busy}}" width="48.7" height="64" data-id="17"/>
                <rect id="place-18" x="278.7" y="385.6" class="place_{{$places[17]->busy}}" width="45.4" height="64" data-id="18"/>
                <rect id="place-19" x="328.4" y="385.6" class="place_{{$places[18]->busy}}" width="47" height="64" data-id="19"/>
                <rect id="place-20" x="381" y="385.6" class="place_{{$places[19]->busy}}" width="45.4" height="64" data-id="20"/>
                <rect x="171.3" y="70" class="st2" width="260" height="5.7"/>
                <rect x="171.3" y="70" class="st2" width="5" height="69.7"/>
                <rect x="221.7" y="70" class="st2" width="5" height="69.7"/>
                <rect x="274.3" y="70" class="st2" width="5" height="69.7"/>
                <rect x="323" y="70" class="st2" width="5" height="69.7"/>
                <rect x="376" y="70" class="st2" width="5" height="69.7"/>
                <rect x="426.3" y="70" class="st2" width="5" height="69.7"/>
                <rect x="171.4" y="255.8" class="st2" width="260" height="5.7"/>
                <rect x="426.4" y="191.8" class="st2" width="5" height="69.7"/>
                <rect x="376" y="191.8" class="st2" width="5" height="69.7"/>
                <rect x="323.4" y="191.8" class="st2" width="5" height="69.7"/>
                <rect x="274.6" y="191.8" class="st2" width="5" height="69.7"/>
                <rect x="221.7" y="191.8" class="st2" width="5" height="69.7"/>
                <rect x="171.4" y="191.8" class="st2" width="5" height="69.7"/>
                <rect x="171.3" y="255.5" class="st2" width="5" height="69.7"/>
                <rect x="221.7" y="255.5" class="st2" width="5" height="69.7"/>
                <rect x="274.3" y="255.5" class="st2" width="5" height="69.7"/>
                <rect x="323" y="255.5" class="st2" width="5" height="69.7"/>
                <rect x="376" y="255.5" class="st2" width="5" height="69.7"/>
                <rect x="426.3" y="255.5" class="st2" width="5" height="69.7"/>
                <rect x="171.4" y="449.4" class="st2" width="260" height="5.7"/>
                <rect x="426.4" y="385.5" class="st2" width="5" height="69.7"/>
                <rect x="376" y="385.5" class="st2" width="5" height="69.7"/>
                <rect x="323.4" y="385.5" class="st2" width="5" height="69.7"/>
                <rect x="274.6" y="385.5" class="st2" width="5" height="69.7"/>
                <rect x="221.7" y="385.5" class="st2" width="5" height="69.7"/>
                <rect x="171.4" y="385.5" class="st2" width="5" height="69.7"/>
                <rect x="171.3" y="255.5" class="st2" width="260" height="5.7"/>
                <rect x="233.5" y="234.8" class="st3" width="35.5" height="1.8"/>
                <path class="st3" d="M237,236.5v-22c0-4.8,2.5-9.1,6.2-11.7c2.3-1.6,12.8-2.4,16.5,0.3c0.5,0.4,1,0.8,1.6,1.3
	c4.1,4.1,4.2,9.1,4.2,10v22c0,7.8-6.4,14.2-14.2,14.2l0,0C243.4,250.7,237,244.3,237,236.5z"/>
                <path class="st4" d="M261.2,234.9c-6.6,0-13.3-0.1-19.9-0.1c0.3-0.8,2-4.5,6.1-6.1c0.5-0.2,2.7-1,5.5-0.5
	C258.2,229.2,260.8,234.1,261.2,234.9z"/>
                <path class="st4" d="M241.3,228.7c0-4.1,0.1-8.3,0.1-12.4c0.5,0.2,2.8,1.3,3.8,3.9c0.1,0.3,0.6,1.7,0.3,3.4
	C244.8,226.9,241.7,228.5,241.3,228.7z"/>
                <path class="st4" d="M261.5,216.2c0,4.1-0.1,8.3-0.1,12.4c-0.5-0.2-2.8-1.3-3.8-3.9c-0.1-0.3-0.6-1.7-0.3-3.4
	C257.9,218.1,261,216.5,261.5,216.2z"/>
                <path class="st4" d="M241.3,209.4c6.6,0,13.3,0.1,19.9,0.1c-0.3,0.8-2,4.5-6.1,6.1c-0.5,0.2-2.7,1-5.5,0.5
	C244.3,215.1,241.7,210.2,241.3,209.4z"/>
                <path class="st4" d="M251.7,202.7"/>
                <rect x="180.6" y="96" class="st5" width="36.9" height="1.9"/>
                <path class="st6" d="M213.8,96.3v22.9c0,5-2.6,9.5-6.4,12.2c-2.4,1.6-13.3,2.5-17.2-0.3c-0.5-0.4-1.1-0.9-1.6-1.4
	c-4.2-4.2-4.3-9.4-4.3-10.4v-23c0-8.1,6.6-14.8,14.8-14.8l0,0C207.1,81.5,213.8,88.2,213.8,96.3z"/>
                <path class="st4" d="M188.7,98c6.9,0,13.8,0.1,20.7,0.1c-0.3,0.8-2.1,4.7-6.4,6.3c-0.6,0.2-2.8,1-5.7,0.5
	C191.7,103.8,189,98.7,188.7,98z"/>
                <path class="st4" d="M209.5,104.4c0,4.3-0.1,8.6-0.1,13c-0.5-0.2-2.9-1.3-3.9-4c-0.1-0.3-0.6-1.8-0.3-3.6
	C205.8,106.3,209,104.6,209.5,104.4z"/>
                <path class="st4" d="M188.3,117.3c0-4.3,0.1-8.6,0.1-13c0.5,0.2,2.9,1.3,3.9,4c0.1,0.3,0.6,1.8,0.3,3.6
	C192,115.4,188.8,117.1,188.3,117.3z"/>
                <path class="st4" d="M209.3,124.4c-6.9,0-13.8-0.1-20.7-0.1c0.3-0.8,2.1-4.7,6.4-6.3c0.6-0.2,2.8-1,5.7-0.5
	C206.3,118.5,209,123.7,209.3,124.4z"/>
                <path class="st4" d="M198.5,131.4"/>
                <rect x="334.5" y="426.5" class="st7" width="35.5" height="1.8"/>
                <path class="st7" d="M338,428.1v-22c0-4.8,2.5-9.1,6.2-11.7c2.3-1.6,12.8-2.4,16.5,0.3c0.5,0.4,1,0.8,1.6,1.3
	c4.1,4.1,4.2,9.1,4.2,10v22c0,7.8-6.4,14.2-14.2,14.2l0,0C344.4,442.3,338,435.9,338,428.1z"/>
                <path class="st4" d="M362.1,426.5c-6.6,0-13.3-0.1-19.9-0.1c0.3-0.8,2-4.5,6.1-6.1c0.5-0.2,2.7-1,5.5-0.5
	C359.2,420.8,361.8,425.8,362.1,426.5z"/>
                <path class="st4" d="M343.1,420.3c0-4.1,0.1-8.3,0.1-12.4c0.5,0.2,2.8,1.3,3.8,3.9c0.1,0.3,0.6,1.7,0.3,3.4
	C346.7,418.5,343.6,420.1,343.1,420.3z"/>
                <path class="st4" d="M362.1,407.9c0,4.1-0.1,8.3-0.1,12.4c-0.5-0.2-2.8-1.3-3.8-3.9c-0.1-0.3-0.6-1.7-0.3-3.4
	C358.6,409.7,361.7,408.1,362.1,407.9z"/>
                <path class="st4" d="M342.2,401.1c6.6,0,13.3,0.1,19.9,0.1c-0.3,0.8-2,4.5-6.1,6.1c-0.5,0.2-2.7,1-5.5,0.5
	C345.2,406.7,342.6,401.8,342.2,401.1z"/>
                <path class="st4" d="M352.7,394.4"/>
                <rect x="125.6" y="416" class="st8" width="3.8" height="19.2"/>
                <path class="st8" d="M128.7,400.5l9.7,17.3c0.4,0.7-0.1,1.6-1,1.6l-19.8-0.3c-0.8,0-1.3-0.9-0.9-1.6l10.1-17
	C127.3,399.8,128.3,399.8,128.7,400.5z"/>
                <rect x="181.4" y="355.7" class="st8" width="19.2" height="3.8"/>
                <path class="st8" d="M216.1,356.4l-17.3-9.7c-0.7-0.4-1.6,0.1-1.6,1l0.3,19.8c0,0.8,0.9,1.3,1.6,0.9l17-10.1
	C216.8,357.9,216.8,356.8,216.1,356.4z"/>
                <rect x="181.7" y="166.9" class="st8" width="19.2" height="3.8"/>
                <path class="st8" d="M215.8,167.5l-17.3-9.7c-0.7-0.4-1.6,0.1-1.6,1l0.3,19.8c0,0.8,0.9,1.3,1.6,0.9l17-10.1
	C216.5,169,216.5,167.9,215.8,167.5z"/>
                <rect x="127.7" y="89.6" class="st8" width="3.8" height="19.2"/>
                <path class="st8" d="M128.5,124.3l-9.7-17.3c-0.4-0.7,0.1-1.6,1-1.6l19.8,0.3c0.8,0,1.3,0.9,0.9,1.6l-10.1,17
	C129.9,125,128.9,125,128.5,124.3z"/>
                <path class="st9" d="M145.1,283.5h-32.4c-3,0-5.4-2.4-5.4-5.4v-33.9c0-3,2.4-5.4,5.4-5.4h32.4c3,0,5.4,2.4,5.4,5.4v33.9
	C150.5,281.1,148.1,283.5,145.1,283.5z"/>
                <text transform="matrix(1.0905 0 0 1 112.8623 277.8802)" class="st8 st10 st11">P</text>
</svg>








        </div>
        <div class="info">
            <div class="info__timer"><time><span id="hours">00</span>:<span id="minutes">00</span></time></div>
            <a href="take" class="info__take">Забрать машину</a>
            <div class="info__profile">
                <div class="info__bg">
                    <div class="info__name"><img src="img/user.svg" alt=""> <span class="info__param">{{ $name }}</span> </div>
                    <div class="info__hours"><img src="img/clock.svg" alt=""> <span class="info__param">{{ $hours }} ч.</span> </div>
                    <div class="info__discount"><img src="img/discount.svg" alt=""> <span class="info__param">{{ $discount }}%</span> </div>
                    <div class="info__wallet"><img src="img/wallet.svg" alt=""> <span class="info__param">{{ $money }}р.</span> </div>
                </div>
                <div class="info__buttons">
                    <a href="" uk-toggle="target:#take-wallet" type="button" id="button-bron"><img src="img/conversation.svg" alt=""></a>
                    <a href="exit"><img src="img/logout.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>


<script>
    $('.place_0').click(function (e) {
        $('#button-bron').trigger('click');
        $('#place-id').val($(this).data('id'));
    });

    var time = {{$minutes}};

    var hours = 0;
    var minutes = 0;

    hours = Math.floor(time / 60);
    minutes = time - hours * 60;
    if(minutes < 10) {
        minutes = '0' + minutes;
    }
    $('#hours').html(hours);
    $('#minutes').html(minutes);
    time -= 1;

    setInterval(function() {

        if(time <= 0) {
            return;
        }
        hours = Math.floor(time / 60);
        minutes = time - hours * 60;
        if(minutes < 10) {
            minutes = '0' + minutes;
        }
        $('#hours').html(hours);
        $('#minutes').html(minutes);
        time -= 1;
    }, 60000);
</script>



</body>
</html>