<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;


/**
 * This is the base-model class for table "master_kegiatan".
 *
 * @property integer $id
 * @property integer $id_mitra
 * @property integer $id_jenis
 * @property integer $id_kontrak
 * @property integer $id_tahun_ajar
 * @property string $deskripsi_kegiatan
 * @property string $nominal
 * @property string $tanggal_mulai
 * @property string $tanggal_selesai
 * @property integer $status
 * @property integer $flag
 * @property integer $id_jurusan
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property \app\models\JenisKegiatan $idJenis
 * @property \app\models\MasterKontrak $idKontrak
 * @property \app\models\MasterTahunAjar $idTahunAjar
 * @property \app\models\MasterMitra $idMitra
 * @property \app\models\Jurusan $idJurusan
 * @property string $aliasModel
 */
abstract class MasterKegiatan extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'master_kegiatan';
    }


    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => BlameableBehavior::className(),
            ],
            [
                'class' => TimestampBehavior::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mitra', 'id_jenis', 'id_kontrak', 'id_tahun_ajar', 'nominal', 'tanggal_mulai', 'tanggal_selesai', 'status', 'flag', 'id_jurusan'], 'required'],
            [['id_mitra', 'id_jenis', 'id_kontrak', 'id_tahun_ajar', 'nominal', 'status', 'flag', 'id_jurusan'], 'integer'],
            [['tanggal_mulai', 'tanggal_selesai'], 'safe'],
            [['deskripsi_kegiatan'], 'string', 'max' => 255],
            [['id_tahun_ajar'], 'validateDate'],
            [['id_jenis'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\JenisKegiatan::className(), 'targetAttribute' => ['id_jenis' => 'id']],
            [['id_jurusan'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\Jurusan::className(), 'targetAttribute' => ['id_jurusan' => 'id']],
            [['id_kontrak'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\MasterKontrak::className(), 'targetAttribute' => ['id_kontrak' => 'id']],
            [['id_tahun_ajar'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\MasterTahunAjar::className(), 'targetAttribute' => ['id_tahun_ajar' => 'id']],
            [['id_mitra'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\MasterMitra::className(), 'targetAttribute' => ['id_mitra' => 'id']],
            ['tanggal_mulai', 'compare', 'compareAttribute' => 'tanggal_selesai', 'operator' => '<', 'enableClientValidation' => false],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mitra' => 'Mitra',
            'id_jenis' => 'Jenis Kegiatan',
            'id_kontrak' => 'Kontrak',
            'id_tahun_ajar' => 'Tahun Ajar',
            'deskripsi_kegiatan' => 'Deskripsi Kegiatan',
            'nominal' => 'Nominal',
            'tanggal_mulai' => 'Tanggal Mulai',
            'tanggal_selesai' => 'Tanggal Selesai',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'flag' => 'Flag',
            'id_jurusan' => 'Jurusan',
        ];
    }

    public function validateDate($attribute, $params, $validator) {
        $tahunAjar = \app\models\MasterTahunAjar::find()->where(['id' => $this->$attribute])->one();

        $now = date('Y-m-d');

        if ($tahunAjar->jeda_akhir == 1) {
            $pause = date('Y-m-d', strtotime($tahunAjar->akhir));

            if($now == $pause) {
                if(Yii::$app->language == 'en-US') {
                    $this->addError($attribute, 'The years has entered an input time of Skenario1 quota.');
                }
                else if(Yii::$app->language == 'id-ID') {
                    $this->addError($attribute, 'Tahun ajaran sudah memasuki masa input kuota Skenario1.');
                }
            }
        } else {
            $startPause = date('Y-m-d', strtotime('-'.($tahunAjar->jeda_akhir - 1).'days', strtotime($tahunAjar->akhir)));
            $endPause = date('Y-m-d', strtotime($tahunAjar->akhir));

            if($now >= $startPause && $now <= $endPause) {
                if(Yii::$app->language == 'en-US') {
                    $this->addError($attribute, 'The years has entered an input time of Skenario1 quota.');
                }
                else if(Yii::$app->language == 'id-ID') {
                    $this->addError($attribute, 'Tahun ajaran sudah memasuki masa input kuota Skenario1.');
                }
            }
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJenis()
    {
        return $this->hasOne(\app\models\JenisKegiatan::className(), ['id' => 'id_jenis']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJurusan()
    {
        return $this->hasOne(\app\models\Jurusan::className(), ['id' => 'id_jurusan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKontrak()
    {
        return $this->hasOne(\app\models\MasterKontrak::className(), ['id' => 'id_kontrak']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTahunAjar()
    {
        return $this->hasOne(\app\models\MasterTahunAjar::className(), ['id' => 'id_tahun_ajar']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMitra()
    {
        return $this->hasOne(\app\models\MasterMitra::className(), ['id' => 'id_mitra']);
    }

    //  public function getPercent($idKontrak)
    // {
    //      $jumlahKegiatan=0;
    //      $jumlahNominal=0;
    //     $kontrak = MasterKontrak::findOne($idKontrak);
    //     foreach ($kontrak as $key => $dataKontrak) {
    //         $nilaiKontrak = $dataKontrak['nilai_kontrak'];
    //     }
    //     $kegiatan = $kontrak-> getMasterKegiatans()->all(); 
    //     foreach ($kegiatan as $key => $dataKegiatan) {
    //          $jumlahKegiatan++;
    //          $jumlahNominal += $dataKegiatan['nominal'];
    //      } 
    //      $persent = ($jumlahNominal/$nilaiKontrak)*100;
    //      return $persent;
    // }





}
