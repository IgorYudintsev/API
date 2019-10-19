<?php

namespace app\controllers;

use app\models\model;
use app\models\rooms;
use app\models\SelectForm;
use yii\base\Controller;

class ApiController extends Controller
{

    public function actionIndex()
    {
        $result = simplexml_load_file("https://realt.by/typo3conf/ext/uedb_core/getrecords.php?login[user]=test&login[pass]=test&config[tableid]=1&config[type]=1&config[page]=1&config[records-per-page]=20&select[rooms][e]=1");
        $result2 = simplexml_load_file("https://realt.by/typo3conf/ext/uedb_core/getrecords.php?login[user]=test&login[pass]=test&config[tableid]=1&config[type]=1&config[page]=1&config[records-per-page]=20&select[rooms][e]=2");
        $result3 = simplexml_load_file("https://realt.by/typo3conf/ext/uedb_core/getrecords.php?login[user]=test&login[pass]=test&config[tableid]=1&config[type]=1&config[page]=1&config[records-per-page]=20&select[rooms][e]=3");

        $unid = $result->records->record;
        $unid2 = $result2->records->record;
        $unid3 = $result3->records->record;
//        echo '<pre>';
//        var_dump($model->$res);
//        die();
//        echo $unid[0]->unid;
//        echo '<pre>';
//        var_dump($unid[0]->price_m2);
//        die();
        $price = [];
        for ($i = 0; $i < 20; $i++) {
            array_push($price, $unid[$i]->price_m2);
        }
        $price1 = array_map('intval', $price);

        $price2 = [];
        for ($i = 0; $i < 20; $i++) {
            array_push($price2, $unid2[$i]->price_m2);
        }
        $price22 = array_map('intval', $price2);

        $price3 = [];
        for ($i = 0; $i < 20; $i++) {
            array_push($price3, $unid3[$i]->price_m2);
        }
        $price33 = array_map('intval', $price3);

        return $this->render('index', [
            'price1' => $price1,
            'price22' => $price22,
            'price33' => $price33,
        ]);
    }

    public function actionOne()
    {
        $One=\Yii::$app->request->get()["param"];
//        echo $One;
        if($One=='value1'){
            $result = simplexml_load_file("https://realt.by/typo3conf/ext/uedb_core/getrecords.php?login[user]=test&login[pass]=test&config[tableid]=1&config[type]=1&config[page]=1&config[records-per-page]=20&select[rooms][e]=1");
        }elseif ($One=='value2')
            $result = simplexml_load_file("https://realt.by/typo3conf/ext/uedb_core/getrecords.php?login[user]=test&login[pass]=test&config[tableid]=1&config[type]=1&config[page]=1&config[records-per-page]=20&select[rooms][e]=2");
        else{
            $result = simplexml_load_file("https://realt.by/typo3conf/ext/uedb_core/getrecords.php?login[user]=test&login[pass]=test&config[tableid]=1&config[type]=1&config[page]=1&config[records-per-page]=20&select[rooms][e]=3");
        }
//         echo '<pre>';
//        var_dump(\Yii::$app->request->get()["param1"]);
//        die();
//        if(isset(\Yii::$app->request->post[("myActionName")])){
//          echo '1';
//        }
        $unid = $result->records->record;
        $price = [];
        for ($i = 0; $i < 20; $i++) {
            array_push($price, $unid[$i]->price_m2);
        }
        $price1 = array_map('intval', $price);

        return $this->render('one', [
            'price1' => $price1,
        ]);
    }
}