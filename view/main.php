<head>
    <title>Фильмы</title>
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
                                <li><a href="#">Скоро в кинотеатрах</a></li>
                                <li><a href="#">Фильмы-новинки</a></li>
                                <li><a href="#">Новые трейлеры</a></li>
                                <li><a href="#">Сейчас в кино</a></li>
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
<!--Слайдер----------------------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid">
    <div class="row">
        <div id="carousel" class="carousel slide">
            <!--Индикаторы слайдов-->
            <ol class="carousel-indicators">
                <li class="active" data-target="#carousel" data-slide-to="0"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
                <li data-target="#carousel" data-slide-to="4"></li>
            </ol>
            <!--Слайды-->
            <div class="carousel-inner">
                <div class="item active"> <img src="images/i1.jpg" alt="">
                    <div class="carousel-caption">
                        <h3>Первый слайд</h3>
                        <p>Описание первого слайда</p>
                    </div>
                </div>
                <div class="item"> <img src="images/i2.jpg" alt="">
                    <div class="carousel-caption">
                        <h3>Второй слайд</h3>
                        <p>Описание второго слайда</p>
                    </div>
                </div>
                <div class="item"> <img src="images/i3.jpg" alt="">
                    <div class="carousel-caption">
                        <h3>Третий слайд</h3>
                        <p>Описание третьего слайда</p>
                    </div>
                </div>
                <div class="item"> <img src="images/i4.jpg" alt="">
                    <div class="carousel-caption">
                        <h3>Четвертый слайд</h3>
                        <p>Описание четвертого слайда</p>
                    </div>
                </div>
                <div class="item"> <img src="images/i5.jpg" alt="">
                    <div class="carousel-caption">
                        <h3>Пятый слайд</h3>
                        <p>Описание пятого слайда</p>
                    </div>
                </div>
            </div>
            <!-- Стрелки переключения слайдов-->
            <a href="#carousel" class="left carousel-control" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
            <a href="#carousel" class="right carousel-control" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
        </div>
    </div>
</div>
<!--Слайдер------------------------------------------------------------------------------------------------------------------------------------>
<!--Контент------------------------------------------------------------------------------------------------------------------------------------>
<div class="container">
    <h3 class="maim_name">Фильмы</h3>
    <div class="row">
        <?php foreach($filmList as $filmItem):?>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 container_film">
                <div class="thumbnail"> <a href="review/<?=$filmItem['id']?>"><img src="<?=$filmItem['image']?>" alt=""></a>
                    <!-- Set Firefox as main brouser -->
                    <div class="caption"> <a id="film-name" href="review/<?=$filmItem['id']?>"><strong><?=$filmItem['name']?></strong></a>
                        <br> <span>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star" ></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star-half-o"></i>
                               <i class="fa fa-star-o"></i>
                               <span class="badge">3.5</span> </span>
                        <h6><a id="caption-genre" href="#"><?=$filmItem['genre']?></a>, <a id="caption-genre" href="#"><?=$filmItem['country']?></a>, <a id="caption-genre" href="#"><?=$filmItem['year']?></a></h6> </div>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
    <!-- <video src="video.ogv" controls></video> -->
    <!--Постраничная навигация------------------------------------------------------------------------------------------------------------------------------------>
    <!--Принцип работы: Преход на предыдущую страницу фильмов при условии, что верхняя часть url не равна 1, переход
                на следующую страницу при условии, что верхняя часть url не равна 8 -->
    <div class="container text-center-nav">
        <a class="footer_word" href="<? if(trim($_SERVER['REQUEST_URI'], '/')-1){echo (int)(trim($_SERVER['REQUEST_URI'], '/')-1);} ?>">
            <button class="btn btn-default btn_nav"><i class="fa fa-caret-left" aria-hidden="true"></i></button>
        </a>
        <a class="footer_word" href="1">
            <button class="btn btn-default btn_nav">1</button>
        </a>
        <a class="footer_word" href="2">
            <button class="btn btn-default btn_nav">2</button>
        </a>
        <a class="footer_word" href="3">
            <button class="btn btn-default btn_nav">3</button>
        </a>
        <a class="footer_word" href="4">
            <button class="btn btn-default btn_nav">4</button>
        </a>
        <a class="footer_word" href="5">
            <button class="btn btn-default btn_nav">5</button>
        </a>
        <a class="footer_word" href="6">
            <button class="btn btn-default btn_nav">6</button>
        </a>
        <a class="footer_word" href="7">
            <button class="btn btn-default btn_nav">7</button>
        </a>
        <a class="footer_word" href="8">
            <button class="btn btn-default btn_nav">8</button>
        </a>
        <a class="footer_word" href="<? if(trim($_SERVER['REQUEST_URI'], '/')!=8){echo (int)(trim($_SERVER['REQUEST_URI'], '/')+1);} ?>">
            <button class="btn btn-default btn_nav"><i class="fa fa-caret-right" aria-hidden="true"></i></button>
        </a>
    </div>
</div>
<!--Постраничная навигация------------------------------------------------------------------------------------------------------------------------------------>
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