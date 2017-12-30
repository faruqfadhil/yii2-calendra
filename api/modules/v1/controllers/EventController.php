<?php

namespace api\modules\v1\controllers;

use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use yii\web\UploadedFile;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class EventController extends ActiveController
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
        $cek_event = \api\modules\v1\models\Event::find()->andWhere('flag = 1')
        ->orderBy(['id' => SORT_DESC])
        ->all();

        if($cek_event!=null){
            foreach($cek_event as $event){
               $objlocation = \api\modules\v1\models\Kabupaten::find()->where(['id_kab' => $event['id_location']])->one();
               $objkategori = \api\modules\v1\models\KategoriEvent::find()->where(['id' => $event['id_kategori']])->one();
                $objpublisher = \api\modules\v1\models\Publisher::find()->where(['id' => $event['id_publisher']])->one();
                $data[] = [
                    'id' => $event['id'],
                    'tittle' => $event['tittle'],
                    'description' => $event['description'],
                    'location' => $objlocation->nama,
                    'image' => $event['image'],
                    'publisher' => $objpublisher->name,
                    'alamat' => $event['alamat'],
                    'kategori' => $objkategori->nama_event,
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

  public function actionDetails($id){
        $data = [];
        $cek_event = \api\modules\v1\models\Event::find()->andWhere('flag = 1')->andWhere('id = '.$id)->all();
        if($cek_event!=null){
            foreach($cek_event as $event){
               $objlocation = \api\modules\v1\models\Kabupaten::find()->where(['id_kab' => $event['id_location']])->one();
               $objkategori = \api\modules\v1\models\KategoriEvent::find()->where(['id' => $event['id_kategori']])->one();
                $objpublisher = \api\modules\v1\models\Publisher::find()->where(['id' => $event['id_publisher']])->one();
                $data[] = [
                    'id' => $event['id'],
                    'tittle' => $event['tittle'],
                    'description' => $event['description'],
                    'location' => $objlocation->nama,
                    'image' => $event['image'],
                    'publisher' => $objpublisher->name,
                    'alamat' => $event['alamat'],
                    'kategori' => $objkategori->nama_event,
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

public function actionGetticket($id){
        $data = [];
        $cek_ticket = \api\modules\v1\models\Ticket::find()->andWhere('id_event = '.$id)->all();
        if($cek_ticket!=null){
            foreach($cek_ticket as $event){
                $data[] = [
                    'name' => $event['name'],
                    'description' => $event['description'],
                    'price' => $event['price'],
                    'jumlah' => $event['jumlah'],
                    'kategori' => $event['kategori'],
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
public function actionCreatenew()
  {
      $model = new \api\modules\v1\models\Event();
      $model->load(\Yii::$app->request->post(), '');
     
      $model->upload = UploadedFile::getInstanceByName('upload');
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

    public $modelClass = 'api\modules\v1\models\Event';
}
