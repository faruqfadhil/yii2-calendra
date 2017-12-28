<?php

namespace common\models;

use Yii;
use \common\models\base\Kabupaten as BaseKabupaten;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kabupaten".
 */
class Kabupaten extends BaseKabupaten
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
