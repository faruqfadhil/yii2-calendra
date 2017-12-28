<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;
use yii\filters\VerbFilter;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class KategoriController extends ActiveController
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
  public function actionList(){
        $data = [];
        $cek_kategori = \api\modules\v1\models\KategoriEvent::find()->all();
        if($cek_kategori!=null){
            foreach($cek_kategori as $event){
                $data[] = [
                    'id' => $event['id'],
                    'nama_event' => $event['nama_event'],
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
    public $modelClass = 'api\modules\v1\models\KategoriEvent';
}
