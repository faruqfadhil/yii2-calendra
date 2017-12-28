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
class PasienController extends Controller
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
        $id_dokter = \api\modules\v1\models\Riwayat::find()
            ->select('id_dokter')
            ->where(['id_pasien' => $id_pasien])
            ->all();
        $nama_dokter = \api\modules\v1\models\Dokter::find()
            ->select(['nama_dokter', 'id_dokter'])
            ->where(['id_dokter' => $id_dokter])
            ->distinct()
            ->all();
        $no_telp_dokter = \api\modules\v1\models\Dokter::find()
            ->select(['no_telp','id_dokter'])
            ->where(['id_dokter' => $id_dokter])
            ->all();
        $alamat_praktik = \api\modules\v1\models\Dokter::find()
            ->select(['alamat_praktik','id_dokter'])
            ->where(['id_dokter' => $id_dokter])
            ->all();
        $alamat_rumah = \api\modules\v1\models\Dokter::find()
            ->select(['alamat_rumah','id_dokter'])
            ->where(['id_dokter' => $id_dokter])
            ->all();
        $emails = \api\modules\v1\models\Dokter::find()
            ->select(['email','id_dokter'])
            ->where(['id_dokter' => $id_dokter])
            ->all();
        $umur = \api\modules\v1\models\Riwayat::find()
            ->select(['umur','id_pasien'])
            ->where(['id_pasien' => $id_pasien])
            ->all();
        $berat_badan= \api\modules\v1\models\Riwayat::find()
            ->select(['berat_badan','id_pasien'])
            ->where(['id_pasien' => $id_pasien])
            ->all();
        $id_diagnosa = '';
        $diagnosa='';
        $larangan = \api\modules\v1\models\Riwayat::find()
            ->select(['larangan', 'id_pasien'])
            ->where(['id_pasien' => $id_pasien])
            ->all();
        $pasien = \api\modules\v1\models\Pasien::find()
            ->where(['id_pasien'=> $id_pasien])->all();


        $data = [];
        $datadokter = [];
        $riwayat = \api\modules\v1\models\Riwayat::find()
            ->select('*')
            ->limit(1)
            ->orderBy(['id_pasien' => SORT_DESC])
            ->all();
        $user = \api\modules\v1\models\User::find()
            ->where(['id'=>$id_user])
            ->all();
        $daftar_penyakit = \api\modules\v1\models\DaftarPenyakit::find()
            ->all();
        foreach ($riwayat as $model) {

            $id_riwayat= $model->id_riwayat;
            $id_diagnosa = $model->diagnosa;
            $tingban = $model->tinggi_badan;
            $berat_badan = $model->berat_badan;
            $umur = $model->umur;
            $larangan = $model->larangan;

            $nmdokter = '';
            foreach ($nama_dokter as $dok) {
                if($dok->id_dokter == $model->id_dokter){
                    $nmdokter = $dok->nama_dokter;
                }
            }


            $notelpdokter = '';
            foreach ($no_telp_dokter as $telp) {
                if($telp->id_dokter == $model->id_dokter){
                    $notelpdokter = $telp->no_telp;
                }
            }

            $alamatpraktik = '';
            foreach ($alamat_praktik as $almt) {
                if($almt->id_dokter == $model->id_dokter){
                    $alamatpraktik = $almt->alamat_praktik;
                }
            }
            $alamatrumah = '';
            foreach ($alamat_rumah as $almt_rumah) {
                if($almt_rumah->id_dokter == $model->id_dokter){
                    $alamatrumah = $almt_rumah->alamat_rumah;
                }
            }

            $email = '';
            foreach ($emails as $em) {
                if($em->id_dokter == $model->id_dokter){
                    $email = $em->email;
                }
            }

            $datadokter[] = [
                'nama_dokter' => $nmdokter,
                'no_telp_dokter' => $notelpdokter,
                'alamat_praktik' => $alamatpraktik,
                'alamat_rumah' => $alamatrumah,
                'email' => $email
            ];
        }

//        foreach($user as $model){
//            $username = $model->username;
//            $password_hash = $model->password_hash;
//        }
        foreach($daftar_penyakit as $model){
                if($model->id == $id_diagnosa){
                    $diagnosa = $model->nama_penyakit;
                }
        }
        foreach ($pasien as $model) {
            $data[] = [
//                data dari tabel pasien
                'id_pasien' => $model->id_pasien,
                'id_riwayat' => $id_riwayat,
                'nama_pasien' => $model->nama_pasien,
                'umur' => $umur,
                'jenis_kelamin' => $model->jenis_kelamin,
                'email' => $model->email,
                'golongan_darah' => $model->gol_darah,
                'tinggi_badan' => $tingban,
                'berat_badan' => $berat_badan,
                'no_telp' => $model->no_telp_pasien,
                'alamat' => $model->alamat,
////                data dari  riwayat
                'larangan' => $larangan,
//                'id_diagnosa' => $id_diagnosa,
                'diagnosa' => $diagnosa,
                'image' => $model->image,                
////                dokter
                'dokter' => $datadokter,
//                username dan password
//                'username' => $username,
//                'password' => $password_hash

            ];
        }


        return [
            "status" => "sukses",
            "data" => $data
        ];
    }
    public function actionDokter($id_user){
        $id_pasien = \api\modules\v1\models\Pasien::find()
            ->select('id_pasien')
            ->where(['id_user' => $id_user])
            ->one();
        $id_dokter = \api\modules\v1\models\Riwayat::find()
            ->select('id_dokter')
            ->where(['id_pasien' => $id_pasien])
            ->all();
        $nama_dokter = \api\modules\v1\models\Dokter::find()
            ->select(['nama_dokter', 'id_dokter'])
            ->where(['id_dokter' => $id_dokter])
            ->distinct()
            ->all();
        $no_telp_dokter = \api\modules\v1\models\Dokter::find()
            ->select(['no_telp','id_dokter'])
            ->where(['id_dokter' => $id_dokter])
            ->all();
        $alamat_praktik = \api\modules\v1\models\Dokter::find()
            ->select(['alamat_praktik','id_dokter'])
            ->where(['id_dokter' => $id_dokter])
            ->all();
        $alamat_rumah = \api\modules\v1\models\Dokter::find()
            ->select(['alamat_rumah','id_dokter'])
            ->where(['id_dokter' => $id_dokter])
            ->all();
        $emails = \api\modules\v1\models\Dokter::find()
            ->select(['email','id_dokter'])
            ->where(['id_dokter' => $id_dokter])
            ->all();
        $umur = \api\modules\v1\models\Riwayat::find()
            ->select(['umur','id_pasien'])
            ->where(['id_pasien' => $id_pasien])
            ->all();
        $berat_badan= \api\modules\v1\models\Riwayat::find()
            ->select(['berat_badan','id_pasien'])
            ->where(['id_pasien' => $id_pasien])
            ->all();
        $id_diagnosa = '';
        $diagnosa='';
        $larangan = \api\modules\v1\models\Riwayat::find()
            ->select(['larangan', 'id_pasien'])
            ->where(['id_pasien' => $id_pasien])
            ->all();
        $pasien = \api\modules\v1\models\Pasien::find()
            ->where(['id_pasien'=> $id_pasien])->all();


        $data = [];
        $datadokter = [];
        $riwayat = \api\modules\v1\models\Riwayat::find()
            ->select('*')
            ->limit(1)
            ->orderBy(['id_pasien' => SORT_DESC])
            ->all();
        $user = \api\modules\v1\models\User::find()
            ->where(['id'=>$id_user])
            ->all();
        $daftar_penyakit = \api\modules\v1\models\DaftarPenyakit::find()
            ->all();
        foreach ($riwayat as $model) {

            $id_riwayat= $model->id_riwayat;
            $id_diagnosa = $model->diagnosa;
            $tingban = $model->tinggi_badan;
            $berat_badan = $model->berat_badan;
            $umur = $model->umur;
            $larangan = $model->larangan;

            $nmdokter = '';
            foreach ($nama_dokter as $dok) {
                if($dok->id_dokter == $model->id_dokter){
                    $nmdokter = $dok->nama_dokter;
                }
            }


            $notelpdokter = '';
            foreach ($no_telp_dokter as $telp) {
                if($telp->id_dokter == $model->id_dokter){
                    $notelpdokter = $telp->no_telp;
                }
            }

            $alamatpraktik = '';
            foreach ($alamat_praktik as $almt) {
                if($almt->id_dokter == $model->id_dokter){
                    $alamatpraktik = $almt->alamat_praktik;
                }
            }
            $alamatrumah = '';
            foreach ($alamat_rumah as $almt_rumah) {
                if($almt_rumah->id_dokter == $model->id_dokter){
                    $alamatrumah = $almt_rumah->alamat_rumah;
                }
            }

            $email = '';
            foreach ($emails as $em) {
                if($em->id_dokter == $model->id_dokter){
                    $email = $em->email;
                }
            }

            $datadokter[] = [
                'nama_dokter' => $nmdokter,
                'no_telp_dokter' => $notelpdokter,
                'alamat_praktik' => $alamatpraktik,
                'alamat_rumah' => $alamatrumah,
                'email' => $email
            ];
        }

//        foreach($user as $model){
//            $username = $model->username;
//            $password_hash = $model->password_hash;
//        }
        foreach($daftar_penyakit as $model){
            if($model->id == $id_diagnosa){
                $diagnosa = $model->nama_penyakit;
            }
        }
        foreach ($pasien as $model) {
                $datadokter;
        }


        return [
            "status" => "sukses",
            "data" => $datadokter
        ];
    }
    public function actionIndex(){
        return "hello";
    }
    public $modelClass = 'api\modules\v1\models\Pasien';
}
