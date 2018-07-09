<!-- Слайдер -->
<div class="container-fluid" style="background: #333333">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <iframe class="video-film" width="100%" height="500" src="https://www.youtube.com/embed/<? echo $filmItem['video']?>?rel=0&amp;modestbranding=1&amp;showinfo=0&amp;iv_load_policy=3&amp;color=white&amp;controls=2" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- Слайдер -->
<!-- Контент -->
<div itemscope itemtype="http://schema.org/VideoObject" class="container description">
   <link itemprop="url" href="http://luafilm.ru<? echo $filmItem['video']?>">
   <meta itemprop="inLanguage" content="ru">
   <meta itemprop="isFamilyFriendly" content="True">
   <meta itemprop="duration" content="<? echo TransponireISO8601($filmItem['duration']); ?>">
   <meta itemprop="uploadDate" content="<? echo $filmItem['date']; ?>">
   <meta itemprop="video" content="http://luafilm.ru<? echo $filmItem['video']?>" />
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        <div itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject" class="thumbnail"> <a href="<?=$filmItem['id']?>"><img itemprop="contentUrl" src="http://luafilm.ru/<?=$filmItem['image']?>" alt="Смотреть онлайн <? echo $filmItem['name']?>" title="<? echo $filmItem['name']?>"></a>
            <!-- Set Firefox as main brouser -->
            <div style="text-align: center;" class="caption">
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
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-sm-8 col-md-9 col-lg-10">
        <h3 itemprop="name" class="name_decription"><? echo $filmItem['name']?></h3>
        <p>
            <a itemprop="genre" id="caption-genre" href="/movies/genre/<? echo TranslateGenreOnEng($filmItem['genre']); ?>">
                <?=$filmItem['genre']?></a>,
            <a id="caption-genre" href="/movies/country/<? echo TranslateCountryOnEng($filmItem['country']); ?>">
                <?=$filmItem['country']?></a>,
            <a id="caption-genre" href="/movies/year/<?=$filmItem['year']?>">
                <?=$filmItem['year']?></a>
        </p>
        <p itemprop="description" class="description_text">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
            <? echo $filmItem['description']?>
        </p>
    </div>
    <div class="row"> </div>
</div>
<!-- Контент -->