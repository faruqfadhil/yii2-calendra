<?php

namespace app\models;

use Yii;
use \app\models\base\HistoryTicket as BaseHistoryTicket;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "history_ticket".
 */
class HistoryTicket extends BaseHistoryTicket
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
