yii2-widget-datepicker
==========================
The DatePicker widget Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist alex290/yii2-datepicker "*"
```

or add

```
"alex290/yii2-datepicker": "*"
```

to the require section of your `composer.json` file.


Использование
-----

поле $datetime должен быть формата intiger

```php
<?= $form->field($model, 'datetime')->widget(alex290\datepicker\Datepicker::className(),[]) ?>```

