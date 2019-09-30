yii2 load-more-pagination widget
===========================
Это виджет пагинации для Yii2 версии.

## Установка

```
php composer require la5erdance/yii2-load-more-pager "*"
```

или

```json
"la5erdance/yii2-load-more-pager": "*"
```

## Пример
```php 
ListView::widget([
  'dataProvider' => $portfolios,
  'layout' => '{items}{pager}',
  'itemView' => '_list',
  'options' => [
      'class' => 'portfolio-page-wrap',
      'data-anim' => 'false'
  ],
  'itemOptions' => [
      'tag' => 'div',
      'class' => 'portfolio-item',
  ],
  'pager' => [
      'class' => LoadMorePager::class,
      'id' => 'portfolio-pagination',
      'buttonText' => 'Load more',
      'template' => '<div class="portfolio-page-bottom" data-anim="false">{button}</div>',
      'options' => [
          'class' => 'more-projects'
      ],
      'includeCssStyles' => false,
      'contentSelector' => '.portfolio-page-wrap',
      'contentItemSelector' => '.portfolio-item:not(.even)',
  ],
]) 
```

## Использование

```php
ListView::widget([
  'id' => 'comment-list',
  'dataProvider' => $dataProvider,
  'options' => [
    'tag' => 'ol',
    'class' => 'blocklist',
  ],
  'itemOptions' => [
    'tag' => 'li',
  ],
  'pager' => [
    'class' => 'la5erdance\loadmore\LoadMorePager',
    'id' => 'block-list-pagination',
    'contentSelector' => '#block-list',
    'contentItemSelector' => '.block-item:not(.even)',
  ],
])
```
Следует заметить, что обязательно нужно указать уникальный id пагинатора, так как иначе правильная работа не гарантируется.


## Настройки

```php
'pager' => [
  'class'               => 'la5erdance\loadmore\LoadMorePager',
  'id'                  => 'block-list-pagination',
  'buttonText'          => 'Больше комментариев', // Текст на кнопке пагинации
  'template'            => '<div class="text-center">{button}</div>', // Шаблон вывода кнопки пагинации
  'contentSelector'     => '#block-list', // Селектор контента
  'contentItemSelector' => '.block-item:not(.even)', // Селектор эллементов контента
  'includeCssStyles'    => true, // Подключать ли CSS стили виджета, или вы оформите пагинацию сами
  'loaderShow'          => true, // Отображать ли индикатор загрузки
  'loaderAppendType'    => LoadMorePager::LOADER_APPEND_TYPE_BUTTON, // Тот эллемент, к которому будет прикреплен индикатор загрузки. Варианты: тег body, после контента, перед кнопкой пагинации, внутри кнопки пагинации
  'loaderTemplate'      => '<i class="load-more-loader"></i>', // Шаблон индикатора загрузки
  'options'             => [], // Массив опций кнопки паганации
  'onLoad'              => null, // Событие javascript которое будет вызываться в момент начала загрузки новых эллементов, обработчик должен быть описан через JsExpression, в функцию будет передаваться объект с настройками пагинатора, которые вы указали при инициализации
  'onAfterLoad'         => null, // Событие javascript которое будет вызываться в момент окончания загрузки новых эллементов
  'onFinished'          => null, // Событие javascript которое будет вызываться в момент, когда все страницы паганации були загружены
  'onError'             => null, // Событие javascript которое будет вызываться в момент, когда произошла ошибка при загрузке новых эллементов
],
```
