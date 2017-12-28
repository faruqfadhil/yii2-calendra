<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "TimelineController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class TimelineController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Timeline';
}
