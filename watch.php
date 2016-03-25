<?php
use infrajs\nostore\Nostore;
use infrajs\ans\Ans;

Nostore::pubStat();
$text = file_get_contents('https://mc.yandex.ru/metrika/watch.js');
return Ans::js($text);