<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 15.10.2019
 * Time: 12:11
 */
namespace app\controllers;
use yii\base\Controller;
class ApiController extends Controller
{
    public function actionIndex()
    {
        $result = simplexml_load_file("https://realt.by/typo3conf/ext/uedb_core/getrecords.php?login[user]=test&login[pass]=test&config[tableid]=1&config[type]=1&config[page]=1&config[records-per-page]=20&select[rooms][e]=1");
        $unid = $result->records->record;
//        echo '<pre>';
//        var_dump($unid[0]);
//        die();
//        echo $unid[0]->unid;
        $price = [];
        for ($i = 0; $i < 20; $i++) {
            array_push($price, $unid[$i]->price_m2);
        }
        $price1 = array_map('intval', $price);

//        foreach ($price as $value){
//            echo $value. '<pre>';;
//        }

        return $this->render('index',['price1'=>$price1]);

    }
}