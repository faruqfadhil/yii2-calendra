<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "TicketController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class TicketController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Ticket';
}
