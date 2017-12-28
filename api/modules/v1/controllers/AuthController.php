<?php

namespace api\modules\v1\controllers;

use frontend\models\PasienSignupForm;
use frontend\models\SignupForm;
use yii\rest\ActiveController;
use common\models\User;
use yii;
/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
 class AuthController extends \yii\rest\Controller
 {
     public function actionLogin(){
         // Tangkap data login dari client (username & password)
         $username = !empty($_POST['username'])?$_POST['username']:'';
         $password = !empty($_POST['password'])?$_POST['password']:'';
         $response = [];
         // validasi jika kosong
         if(empty($username) || empty($password)){
             $response = [
                 'status' => 'error',
                 'message' => 'username & password tidak boleh kosong!',
                 'data' => '',
             ];
         }
         else{
             // cari di database, ada nggak username dimaksud
             $user = \common\models\User::findByUsername($username);
             // jika username ada maka
             if(!empty($user)){
                 // check, valid nggak passwordnya, jika valid maka bikin response success
                 if($user->validatePassword($password)){
                     $response = [
                         'status' => 'success',
                         'message' => 'login berhasil!',
                         'data' => [
                             'id' => $user->id,
                             'username' => $user->username,
                             // token diambil dari field auth_key
                             'token' => $user->auth_key,
                             'role' => $user->role,
                         ]
                     ];
                 }
                 // Jika password salah maka bikin response seperti ini
                 else{
                     $response = [
                         'status' => 'error',
                         'message' => 'password salah!',
                         'data' => '',
                     ];
                 }
             }
             // Jika username tidak ditemukan bikin response kek gini
             else{
                 $response = [
                     'status' => 'error',
                     'message' => 'username tidak ditemukan dalam database!',
                     'data' => '',
                 ];
             }
         }

         return $response;
     }

     public function actionPsignup(){
         $model = new SignupForm();
         $response = [];
         // load data dari POST request
         $model->load(Yii::$app->getRequest()->getBodyParams(), '');

         if($user = $model->signup()){
             $response = [
                 'status' => 'success',
                 'message' => 'Register berhasil!',
                 'data' => $user
             ];
             return $response;
         }else{
             $response = [
                 'status' => 'failed',
                 'message' => 'Register gagal!',
             ];
             return $response;
         }

     }

      public function actionCsignup(){
         $model = new PasienSignupForm();
         $response = [];
         // load data dari POST request
         $model->load(Yii::$app->getRequest()->getBodyParams(), '');

         if($user = $model->signup()){
             $response = [
                 'status' => 'success',
                 'message' => 'Register berhasil!',
                 'data' => $user
             ];
             return $response;
         }else{
             $response = [
                 'status' => 'failed',
                 'message' => 'Register gagal!',
             ];
             return $response;
         }

     }

     protected function verbs()
     {
         return [
             'login' => ['POST'],
         ];
     }
 }
