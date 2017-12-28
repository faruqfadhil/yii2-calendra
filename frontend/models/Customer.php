<?php

namespace frontend\models;

use Yii;
use \frontend\models\base\Customer as BaseCustomer;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "customer".
 */
class Customer extends BaseCustomer
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
