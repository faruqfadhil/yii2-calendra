<?php

namespace frontend\controllers\api;

/**
* This is the class for REST controller "PublisherController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class PublisherController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Publisher';
}
