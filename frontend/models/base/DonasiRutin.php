<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace frontend\models\base;

use Yii;

/**
 * This is the base-model class for table "donasi_rutin".
 *
 * @property integer $id
 * @property integer $id_mahasiswa
 * @property integer $jumlah
 * @property string $bulan
 * @property integer $tahun
 * @property string $tanggal
 * @property string $aliasModel
 */
abstract class DonasiRutin extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'donasi_rutin';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'jumlah', 'bulan', 'tahun', 'tanggal'], 'required'],
            [['id_mahasiswa', 'jumlah', 'tahun'], 'integer'],
            [['bulan'], 'string', 'max' => 100],
            [['tanggal'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'jumlah' => 'Jumlah',
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
            'tanggal' => 'Tanggal',
        ];
    }




}
