<?php

use miloschuman\highcharts\Highcharts;

use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\rooms;
?>
<a class="btn btn-info"  id="one" href="<?= Url::to(['api/index']) ?>" role="button">ALL room appartments</a>
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
            ['name' => 'm2 appartments', 'data' => array_values($price1)],
        ]
    ]
]);
?>


