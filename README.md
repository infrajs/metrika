# Кэширование Яндекс.Метрики для прохождения Google PageSpeed Insights
**Disclaimer:** Module is not complete and not ready for use yet.

К скрипту метрики [watch.js](https://mc.yandex.ru/metrika/watch.js) добавляются нужные заголовки для прохождения теста [Google PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/).
Нужно скорректировав код метрики. Путь до watch.js заменить на /vendor/akiyatkin/metrika/watch.php 

В асинхронном коде метрики надо сделать вот так
```
//s.src = "https://mc.yandex.ru/metrika/watch.js";
s.src = "/vendor/infrajs/metrika/watch.php";
```

# Infrajs
Поддерживаются короткие адреса ```/-plugin/file.php``` с [infrajs/path](https://github.com/infrajs/path)

