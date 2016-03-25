# Кэширование Яндекс.Метрики для прохождения Google PageSpeed Insights
**Disclaimer:** Module is not complete and not ready for use yet.

В асинхронном коде метрики надо сделать вот так
```
//s.src = "https://mc.yandex.ru/metrika/watch.js";
s.src = "/-metrika/watch.php";
```

Должно быть настроено расширение [infrajs/path](https://github.com/infrajs/path) для работы адресов начинающихся с "/-"