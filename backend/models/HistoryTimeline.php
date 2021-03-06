<?php

namespace app\models;

use Yii;
use \app\models\base\HistoryTimeline as BaseHistoryTimeline;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "history_timeline".
 */
class HistoryTimeline extends BaseHistoryTimeline
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
