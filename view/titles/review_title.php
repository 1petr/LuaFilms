<title>Смотреть онлайн "<?=$filmItem['name']?>"</title>
    <meta property="og:title" content="<? echo $filmItem['name']; ?>(<? echo $filmItem['year']; ?>) смотреть онлайн бесплатно, в хорошем качестве" />
    <meta property="og:site_name" content="Luafilm | Онлайн-кинотеатр" />
    <meta property="og:type" content="video.movie"/>
    <meta property="og:url" content= "https://luafilm.ru<? echo $filmItem['video']; ?>" />
    <meta property="og:image" content="https://luafilm.ru<? echo $filmItem['image']; ?>">    
    <meta property="og:video:type" content="MPEG-4"/>
    <meta property="video:duration" content="<? echo TransponireInSeconds($filmItem['duration']); ?>"/>
    <meta property="og:video" content="https://luafilm.ru<? echo $filmItem['video']; ?>"/>
    <meta property="og:description" content="<? echo $filmItem['description']; ?>"/>
    <meta property="ya:ovs:upload_date" content="<? echo $filmItem['date']; ?>"/>
    <meta property="ya:ovs:adult" content="false"/>
    
    