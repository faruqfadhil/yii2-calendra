<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace frontend\models\base;

use Yii;

/**
 * This is the base-model class for table "berita".
 *
 * @property integer $id
 * @property string $judul
 * @property string $isi
 * @property string $gambar
 * @property string $tanggal
 * @property string $aliasModel
 */
abstract class Berita extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'berita';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'isi', 'gambar', 'tanggal'], 'required'],
            [['isi'], 'string'],
            [['judul'], 'string', 'max' => 500],
            [['gambar', 'tanggal'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'gambar' => 'Gambar',
            'tanggal' => 'Tanggal',
        ];
    }




}
