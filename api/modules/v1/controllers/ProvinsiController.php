<?php

namespace api\modules\v1\controllers;

use api\modules\v1\models\Provinsi;
use Yii;
use yii\helpers\Json;
use yii\rest\ActiveController;
use yii\rest\Controller;
use yii\web\Response;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class ProvinsiController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Provinsi';

    public function actions() {
        $actions = parent::actions();

        unset(
            $actions[ 'index' ],
            $actions[ 'view' ],
            $actions[ 'create' ],
            $actions[ 'update' ],
            $actions[ 'delete' ],
            $actions[ 'options' ]
        );


        return $actions;
    }

    protected function verbs() {
        return [
            'status' => [ 'GET' ],
        ];
    }

    public function actionStatus( $id ) {
        $provinsi = Provinsi::findOne($id);
        if ($provinsi)
            return Json::encode(['success'=>true, 'data'=>$provinsi]);
        else
            return Json::encode(['success'=>false, 'message'=>"Can't find user"]);
    }
}

