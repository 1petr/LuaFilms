<head>
    <title>Смотреть онлайн "
        <?=$filmItem['name']?>"</title>
</head>
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
            <a id="caption-genre" href="/movies/genre/<? echo TranslateGenreOnEng($filmItem['genre']); ?>">
                <?=$filmItem['genre']?></a>,
            <a id="caption-genre" href="/movies/country/<? echo TranslateCountryOnEng($filmItem['country']); ?>">
                <?=$filmItem['country']?></a>,
            <a id="caption-genre" href="/movies/year/<?=$filmItem['year']?>">
                <?=$filmItem['year']?></a>
        </p>
        <p class="description_text">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
            <?echo $filmItem['description']?>
        </p>
    </div>
    <div class="row"> </div>
</div>
<!--Контент------------------------------------------------------------------------------------------------------------------------------------>