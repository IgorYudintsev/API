<?php
use miloschuman\highcharts\Highcharts;

echo Highcharts::widget([
    'options' => [
        'title' => ['text' => 'm2 PRICE'],
        'xAxis' => [
            'categories' => []
        ],
        'yAxis' => [
            'title' => ['text' => '$-price']
        ],
        'series' => [
            ['name' => 'price', 'data' =>array_values($price1)],
        ]
    ]
]);
