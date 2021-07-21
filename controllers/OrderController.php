<?php
namespace app\controllers;

use yii\rest\ActiveController;
use app\models\Order;

class OrderController extends ActiveController
{
    public $modelClass = 'app\models\Order';


    public function acitionFind()
    {
        $order = new Order();
        $data = $order::findAll([1, 2, 3]);
        var_dump($order);exit; 
    }
}