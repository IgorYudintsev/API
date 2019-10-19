<?php
use miloschuman\highcharts\Highcharts;

use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\rooms;
?>
<a class="btn btn-success" href="<?= Url::to(['api/one','param' => 'value2']) ?>" role="button">ONLY ONE room appartments</a>
<a class="btn btn-success" style="background-color: #0f0f0f" href="<?= Url::to(['api/one','param' => 'value1']) ?>" role="button">ONLY TWO rooms appartments</a>
<a class="btn btn-primary" href="<?= Url::to(['api/one','param' => 'value3']) ?>" role="button">ONLY THREE rooms appartments</a>
<p></p>
realt.by

<?= Highcharts::widget([
    'options' => [
        'title' => ['text' => 'm2 PRICE'],
        'xAxis' => [
            'categories' => []
        ],
        'yAxis' => [
            'title' => ['text' => '$-price']
        ],
        'series' => [
            ['name' => 'three rooms appartments', 'data' => array_values($price33)],
            ['name' => 'two rooms appartments', 'data' => array_values($price22)],
            ['name' => 'one room appartments', 'data' => array_values($price1)],
        ]
    ]
]);
?>


