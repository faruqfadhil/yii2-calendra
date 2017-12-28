<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "module".
 *
 * @property integer $id
 * @property string $module
 * @property string $aliasModel
 */
abstract class Module extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'module';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['module'], 'required'],
            [['module'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'module' => 'Module',
        ];
    }




}
