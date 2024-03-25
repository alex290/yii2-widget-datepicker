<?php

namespace alex290\datepicker;

use Yii;
use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * This is just an example.
 */
class Datepicker extends InputWidget
{

    private $_assetBundle;

    public function init()
    {
        parent::init();
        $this->registerAssetBundle();
    }

    public function run()
    {
        $html = '<div class="date_time_pick_wrap">';

        // debug($this->value);

        if ($this->value == null) {
            $this->value = Yii::$app->formatter->asTimestamp(date('U'));
        }

        $dateValue = Yii::$app->formatter->asDate($this->value, 'php:Y-m-d');
        // debug($this->field->name);

        $inputOption = $this->options;
        $outOption = $this->options;
        $inputOption['class'] .= ' inputDatePic';
        $inputOption['type'] = 'hidden';
        $outOption['type'] = 'date';
        $outOption['class'] .= ' outDatePic';

        if ($this->hasModel()) {
            // return Html::activeInput($this->model, $this->attribute, $this->options);
            $html .= Html::activeInput($this->name, $this->model, $this->attribute, $inputOption);
        } else {
            $html .= Html::input($this->name, $this->value, $inputOption);
        }
        
        $html .= Html::textInput('datepicker', $dateValue, $outOption);
        $html .= '</div>';
        return $html;
    }

    public function registerAssetBundle()
    {
        $this->_assetBundle = DatePickAsset::register($this->getView());
    }
}
