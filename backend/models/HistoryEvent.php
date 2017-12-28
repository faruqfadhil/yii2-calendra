<?php

namespace app\models;

use Yii;
use \app\models\base\HistoryEvent as BaseHistoryEvent;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "history_event".
 */
class HistoryEvent extends BaseHistoryEvent
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
