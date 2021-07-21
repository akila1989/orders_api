<?php

namespace app\controllers;

use yii\rest\ActiveController;

/**
 * Class OrdersController
 * 
 * @author Akila Wickramasekara
 * @package app\controllers
 */
class MySqlOrdersController extends ActiveController
{
    public $modelClass = 'app\models\MySqlOrder';
}