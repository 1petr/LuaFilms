<?php

//В массиве располагать пути в порядке от сложного к простому для корректной загрузки из бд

return array(
    'review/([0-9]+)' => 'review/view/$1',
    '([0-8])' => 'film/range/$1',
    '' => 'film/index',      // actionIndex в SiteController
);
