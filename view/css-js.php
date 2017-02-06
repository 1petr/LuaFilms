<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/images/fav.ico" type="image/x-icon">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap-social.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/flowplayer.css"> 
    <link href="/css/st.css" rel="stylesheet">
</head>

<body>
    <!--Панель навигации --------------------------------------------------------------------------------------------------------------------------->
    <div class="container-fluid navigations">
        <div class="row">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu"> <span class="sr-only">Открыть навигацию</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a href="/" class="navbar-brand"><img src="/images/LUA_15.png" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="responsive-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="/movies/new">Новинки</a>
                            </li>
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Кино</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/movies/genre/actions">Боевики</a></li>
                                    <li><a href="/movies/genre/drama">Драмы</a></li>
                                    <li><a href="/movies/genre/comedy">Комедии</a></li>
                                    <li><a href="/movies/genre/romance">Мелодрамы</a></li>
                                    <li><a href="/movies/genre/adventure">Приключения</a></li>
                                    <li><a href="/movies/genre/sport">Спорт</a></li>
                                    <li><a href="/movies/genre/thriller">Триллеры</a></li>
                                    <li><a href="/movies/genre/horror">Ужасы</a></li>
                                    <li><a href="/movies/genre/fantasy">Фэнтези</a></li>
                                    <li><a href="/movies/genre/fiction">Фантастика</a></li>
                                </ul>
                            </li>
                            <li> <a href="/movies/genre/series">Сериалы</a> </li>
                            <li> <a href="/movies/genre/cartoon">Мултфильмы</a> </li>
                        </ul>
                        <form class="navbar-form navbar-right hidden-sm hidden-xs hidden-md hidden-lg" action="">
                            <div class="form-group ">
                                <input class="form-control" type="text" placeholder="E-mail" value=""> </div>
                            <div class="form-group ">
                                <input class="form-control" type="password" placeholder="Пароль" value=""> </div>
                            <button type="submit" class="btn btn-primary ">
                                <h5><i class="fa fa-sign-in"></i> Войти</h5> </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Панель навигации ------------------------------------------------------------------------------------------------------------------------->
    <? include $inc; ?>
        <!--Футер------------------------------------------------------------------------------------------------------------------------------------>
        <div class="contauner-fluid footer">
            <div class="row">
                <div class="container text-center">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer_container"> <a class="footer_word" href="/about"><h5>О нас</h5></a> </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer_container"> <a class="footer_word" href="/copyright"><h5>Правообладателям</h5></a> </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer_container"> <a class="footer_word" href="/contacts"><h5>Контакты</h5></a> </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer_social">
                        <a class="btn btn-social-icon btn-sm btn-vk" href="https://vk.com/luafilm"> <span class="fa fa-vk"></span> </a>
                        <a class="btn btn-social-icon btn-sm btn-facebook" href="https://www.facebook.com/Luafilm-1851757458429786/"> <span class="fa fa-facebook"></span> </a>
                        <a class="btn btn-social-icon btn-sm btn-odnoklassniki"> <span class="fa fa-odnoklassniki"></span> </a>
                    </div>
                </div>
            </div>
        </div>
        <!--Футер------------------------------------------------------------------------------------------------------------------------------------>
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <!-- Сначала jquery.js, затем bootsrap.js подключаем! -->
        <script type="text/javascript" src="/js/bootstrap.js"></script>
        <script type="text/javascript" src="/js/flowplayer.min.js"></script>
</body>

</html>