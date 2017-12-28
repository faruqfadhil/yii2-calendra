<?php

namespace frontend\models;

use Yii;
use \frontend\models\base\Ticket as BaseTicket;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "ticket".
 */
class Ticket extends BaseTicket
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
