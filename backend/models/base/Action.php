<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "action".
 *
 * @property integer $id
 * @property integer $menu
 * @property string $action
 * @property integer $role
 * @property string $aliasModel
 */
abstract class Action extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'action';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu', 'action', 'role'], 'required'],
            [['menu', 'role'], 'integer'],
            [['action'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu' => 'Menu',
            'action' => 'Action',
            'role' => 'Role',
        ];
    }




}
