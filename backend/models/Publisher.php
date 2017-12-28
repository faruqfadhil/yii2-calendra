<?php

namespace app\models;

use Yii;
use \app\models\base\Publisher as BasePublisher;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "publisher".
 */
class Publisher extends BasePublisher
{

public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
             parent::rules(),
             [
                  # custom validation rules
             ]
        );
    }
}
