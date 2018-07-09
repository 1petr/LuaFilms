<!-- Слайдер -->
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
                <li data-target="#carousel" data-slide-to="4"></li>
            </ol>
            <!-- Слайды -->
            <div class="carousel-inner">
                <div class="item active"> <img src="/images/slides/1.jpg" alt="Сериал Склифосовский Реанимация 5 сезон" title="Склифосовский Реанимация">
                    <div class="carousel-caption">
                        <h3>Склифосовский Реанимация</h3>
                        <p>Сериал</p>
                    </div>
                </div>
                
                <div class="item"> <img src="/images/slides/2.jpg" alt="Фильм Бэтмен против Супермена смотреть онлайн" title="Бэтмен против Супермена">
                    <div class="carousel-caption">
                        <h3>Бэтмен против Супермена</h3>
                        <p>Фильм</p>
                    </div>
                </div>
                <div class="item"> <img src="/images/slides/3.jpg" alt="Фильм Виноваты звезды смотреть онлайн" title="Виноваты звезды">
                    <div class="carousel-caption">
                        <h3>Виноваты звезды</h3>
                        <p>Фильм</p>
                    </div>
                </div>
                <div class="item"> <img src="/images/slides/4.jpg" alt="Фильм Грань будущего смотреть онлайн" title="Грань будущего">
                    <div class="carousel-caption">
                        <h3>Грань будущего</h3>
                        <p>Фильм</p>
                    </div>
                </div>
                <div class="item"> <img src="/images/slides/5.jpg" alt="Фильм Элитный убийца смотреть онлайн" title="Элитный убийца">
                    <div class="carousel-caption">
                        <h3>Элитный убийца</h3>
                        <p>Фильм</p>
                    </div>
                </div>
                <div class="item"> <img src="/images/slides/6.jpg" alt="Сериал Ходячие мертвецы смотреть онлайн" title="Ходячие мертвецы">
                    <div class="carousel-caption">
                        <h3>Ходячие мертвецы</h3>
                        <p>Сериал</p>
                    </div>
                </div>
            </div>
            <!-- Стрелки переключения слайдов -->
            <a href="#carousel" class="left carousel-control" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
            <a href="#carousel" class="right carousel-control" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
        </div>
    </div>
</div>
<!-- Слайдер -->
<!-- Контент -->
<div class="container">
    <h3 class="maim_name">Фильмы</h3>
    <div class="row container_matrix">
        <?php foreach($filmList as $filmItem):?>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 container_film" >
                <div class="thumbnail"> <a href="/review/<?=$filmItem['id']?>"><img src="<?=$filmItem['image']?>" alt="Смотреть онлайн <?=$filmItem['name']?>" title="<?=$filmItem['name']?>" ></a>
                    <div class="caption"> <a id="film-name" href="/review/<?=$filmItem['id']?>"><strong><?=$filmItem['name']?></strong></a>
                        <br>
                             <span>
								   <div style="width: 117px; padding: 0px; margin: auto;">
										<ul class="rating clearfix" style="padding: 0px;">
											<li class="current" style="width: 40%;"><span class="star1"  title="Рейтинг плохо"></span></li>
											<li><span class="star2" title="Рейтинг норм"></span></li>
											<li><span class="star3" title="Рейтинг среднее"></span></li>
											<li><span class="star4" title="Рейтинг хорошо"></span></li>
											<li><span class="star5" title="Рейтинг очень хорошо"></span></li>
											<li><span class="badge badge-style">3.5</span></li>	
										</ul>
									</div>
                             </span>
                        <h6><a id="caption-genre" href="/movies/genre/<? echo TranslateGenreOnEng($filmItem['genre']); ?>"><? echo $filmItem['genre']?></a>, <a id="caption-genre" href="/movies/country/<? echo TranslateCountryOnEng($filmItem['country']); ?>"><?=$filmItem['country']?></a>, <a id="caption-genre" href="/movies/year/<?=$filmItem['year']?>"><?=$filmItem['year']?></a></h6>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>