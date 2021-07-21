<?php

namespace app\models;

use yii\elasticsearch\ActiveRecord;

class Order extends ActiveRecord
{

    public function attributes(){
        return[
            'order_id',
            'order_date'
        ];
    }

    // public function search()
    // {
    //     $esearch = new Order();
    // }

} 