<?php


namespace alex290\datepicker;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DatePickAsset extends AssetBundle
{
    public $sourcePath = '@alex290/datepicker/scr';
    public $css = [];
    public $js = [
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

}
