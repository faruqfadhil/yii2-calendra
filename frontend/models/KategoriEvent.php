<?php

namespace frontend\models;

use Yii;
use \frontend\models\base\KategoriEvent as BaseKategoriEvent;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kategori_event".
 */
class KategoriEvent extends BaseKategoriEvent
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
