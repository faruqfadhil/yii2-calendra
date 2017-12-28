<?php
namespace api\modules\v1\models;

use \yii\db\ActiveRecord;
/**
 * Created by PhpStorm.
 * User: aal
 * Date: 6/19/17
 * Time: 11:45 PM
 */



class Pasien extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id_pasien'];
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['id_kota', 'id_provinsi', 'password'], 'required'],
            [['nik', 'id_kota', 'id_provinsi'], 'integer'],
            [['nama_pasien', 'alamat'], 'string', 'max' => 255],
            [['no_telp_pasien'], 'string', 'max' => 15],
            [['gol_darah'], 'string', 'max' => 2],
            [['jenis_kelamin'], 'string', 'max' => 10],
            ['nik', 'trim'],
            ['nik', 'required'],
            [['nik'], 'unique', 'skipOnError' => true, 'targetClass' => Pasien::className(), 'targetAttribute' => ['nik' => 'nik']],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => 'frontend\models\Pasien', 'message' => 'This email address has already been taken.'],

            [['password'], 'string', 'max' => 25]
        ];
    }
}
