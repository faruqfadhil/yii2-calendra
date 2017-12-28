<?php

namespace frontend\models;

use Yii;
use \frontend\models\base\KategoriForum as BaseKategoriForum;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kategori_forum".
 */
class KategoriForum extends BaseKategoriForum
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
