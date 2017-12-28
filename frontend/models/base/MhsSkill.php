<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace frontend\models\base;

use dosamigos\taggable\Taggable;
use PhpCsFixer\DocBlock\Tag;
use Yii;

/**
 * This is the base-model class for table "mhs_skill".
 *
 * @property integer $id
 * @property integer $skill_id
 *
 * @property \frontend\models\MasterSkill $skill
 * @property string $aliasModel
 */
abstract class MhsSkill extends \yii\db\ActiveRecord
{


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mhs_skill';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['skill_id'], 'required'],
            [['skill_id'], 'safe'],
            [['skill_id'], 'exist', 'skipOnError' => true, 'targetClass' => MasterSkill::className(), 'targetAttribute' => ['skill_id' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'skill_id' => 'Skill ID',
        ];
    }

    public function behaviors()
    {
        return [
            Taggable::className(),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSkill()
    {
        return $this->hasOne(\frontend\models\MasterSkill::className(), ['id' => 'skill_id']);
    }

    public function getTags()
    {
        return $this->hasMany(\frontend\models\MasterSkill::className(), ['id' => 'skill_id'])->viaTable('mhs_skill', ['skill_id' => 'id']);
    }

}