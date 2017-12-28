<?php

namespace api\modules\v1\controllers;

use yii\filters\VerbFilter;
use yii\rest\ActiveController;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class TimelineController extends ActiveController
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
        $data = [];
        $cek_timeline = \api\modules\v1\models\Timeline::find()->andWhere('flag = 1')->andWhere('id_event = '.$id)->all();
        if($cek_timeline!=null){
            foreach($cek_timeline as $event){
                $data[] = [
                    'tanggal' => $event['tanggal'],
                    'name' => $event['name'],
                    'description' => $event['description'],
                ];
            }
            return [
                "status" => "sukses",
                "data" => $data
            ];

        }else{
           return [
            "status" => "sukses",
            "data" => null
        ];

    }

}

    public $modelClass = 'api\modules\v1\models\Timeline';
}
