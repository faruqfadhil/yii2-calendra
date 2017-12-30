<?php

namespace api\modules\v1\controllers;

use yii\filters\VerbFilter;
use yii\rest\ActiveController;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class TicketController extends ActiveController
{
 public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post', 'delete'],
                ],
            ]
        ];
    }

  public function actionDetails($id){
}
public function actionCreatenew()
  {
      $model = new \api\modules\v1\models\Ticket();
      $model->load(\Yii::$app->request->post(), '');
    // return $model;
 
      if ($model->save()) {
        return [
            "status"=>"sukses",
            "data" =>array_filter($model->attributes)
        ];
      } 
      else
      {
        return [
            "status"=>"gagal",
            "error_code"=>400,
            "errors"=>$model->errors,
            "data" =>null
        ];
      }
 
  }

    public $modelClass = 'api\modules\v1\models\Ticket';
}
