<head>
    <title>Смотреть онлайн "
        <?=$filmItem['name']?>"</title>
</head>
<!--Панель навигации --------------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid" style="height: 51px;">
    <div class="row">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu"> <span class="sr-only">Открыть навигацию</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a href="#" class="navbar-brand">Логотип</a> </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Новинки</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Пункт 1</a></li>
                                <li><a href="#">Пункт 2</a></li>
                                <li><a href="#">Пункт 3</a></li>
                                <li><a href="#">Пункт 4</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Кино</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Пункт 1</a></li>
                                <li><a href="#">Пункт 2</a></li>
                                <li><a href="#">Пункт 3</a></li>
                                <li><a href="#">Пункт 4</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Сериалы</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Пункт 1</a></li>
                                <li><a href="#">Пункт 2</a></li>
                                <li><a href="#">Пункт 3</a></li>
                                <li><a href="#">Пункт 4</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Мултфильмы</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Пункт 1</a></li>
                                <li><a href="#">Пункт 2</a></li>
                                <li><a href="#">Пункт 3</a></li>
                                <li><a href="#">Пункт 4</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" action="">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="E-mail" value=""> </div>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Пароль" value=""> </div>
                        <button type="submit" class="btn btn-primary">
                            <h5><i class="fa fa-sign-in"></i> Войти</h5> </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Панель навигации ------------------------------------------------------------------------------------------------------------------------->
<!--Слайдер----------------------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid" style="background: #333333">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <video class="video-film" controls width="100%" height="100%">
                <source src="<?echo $filmItem['video']?>" type="video/mp4">
                <!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
                <source src="video.webm" type="video/webm">
                <!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
                <source src="video.ogv" type="video/ogg">
                <!-- Ogg/Vorbis для старых версий браузеров Firefox и Opera -->
                <object data="video.swf" type="application/x-shockwave-flash">
                    <!-- добавляем видеоконтент для устаревших браузеров, в которых нет поддержки элемента video -->
                    <param name="movie" value="video.swf"> </object>
            </video>
        </div>
    </div>
</div>
<!--Слайдер------------------------------------------------------------------------------------------------------------------------------------>
<!--Контент------------------------------------------------------------------------------------------------------------------------------------>
<div class="container description">
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        <div class="thumbnail"> <a href="<?=$filmItem['id']?>"><img src="<?=$filmItem['image']?>" alt=""></a>
            <!-- Set Firefox as main brouser -->
            <div class="caption"> <span>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star" ></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star-half-o"></i>
                               <i class="fa fa-star-o"></i>
                               <span class="badge">3.5</span> </span>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-sm-8 col-md-9 col-lg-10">
        <h3 class="name_decription"><?echo $filmItem['name']?></h3>
        <p>
            <a id="caption-genre" href="#">
                <?=$filmItem['genre']?>
            </a>,
            <a id="caption-genre" href="#">
                <?=$filmItem['country']?>
            </a>,
            <a id="caption-genre" href="#">
                <?=$filmItem['year']?>
            </a>
        </p>
        <p class="description_text">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
            <?echo $filmItem['description']?>
        </p>
    </div>
    <div class="row"> </div>
</div>
<!--Контент------------------------------------------------------------------------------------------------------------------------------------>
<!--Футер------------------------------------------------------------------------------------------------------------------------------------>
<div class="contauner-fluid footer">
    <div class="row">
        <div class="container text-center">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer_container"> <a class="footer_word" href="#"><h5>О нас</h5></a> </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer_container"> <a class="footer_word" href="#"><h5>Правообладателям</h5></a> </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer_container"> <a class="footer_word" href="#"><h5>Контакты</h5></a> </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer_social">
                <a class="btn btn-social-icon btn-sm btn-vk"> <span class="fa fa-vk"></span> </a>
                <a class="btn btn-social-icon btn-sm btn-twitter"> <span class="fa fa-twitter"></span> </a>
                <a class="btn btn-social-icon btn-sm btn-facebook"> <span class="fa fa-facebook"></span> </a>
                <a class="btn btn-social-icon btn-sm btn-odnoklassniki"> <span class="fa fa-odnoklassniki"></span> </a>
            </div>
        </div>
    </div>
</div>
<!--Футер------------------------------------------------------------------------------------------------------------------------------------>