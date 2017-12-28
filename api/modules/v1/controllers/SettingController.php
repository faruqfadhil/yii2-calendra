<?php

namespace api\modules\v1\controllers;

use api\modules\v1\models\Riwayat;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use yii\rest\Controller;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class SettingController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post', 'delete'],
                ],
            ],
        ];
    }

    public function actionView($id_user){
        $id_pasien = \api\modules\v1\models\Pasien::find()
            ->select('id_pasien')
            ->where(['id_user' => $id_user])
            ->one();
        $pasien = \api\modules\v1\models\Pasien::find()
            ->where(['id_pasien'=> $id_pasien])->all();

        foreach ($pasien as $model) {
            $data[] = [
                'id_pasien' => $model->id_pasien,
                'nik' => $model->nik,
                'email' => $model->email,
                'password' => $model->password,
                'nama_pasien' => $model->nama_pasien,
                'no_telp' => $model->no_telp_pasien,
                'alamat' => $model->alamat,
                'image' => $model->image,
            ];
        }


        return [
            "status" => "sukses",
            "data" => $data
        ];
    }
    public $modelClass = 'api\modules\v1\models\Pasien';
}
