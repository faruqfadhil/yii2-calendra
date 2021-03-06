<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "history_event".
 *
 * @property integer $id_event
 * @property string $title
 * @property string $description
 * @property integer $id_location
 * @property integer $id_timeline
 * @property string $poster_path
 * @property integer $id_publisher
 *
 * @property \app\models\HistoryTimeline[] $historyTimelines
 * @property string $aliasModel
 */
abstract class HistoryEvent extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'history_event';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_location', 'id_timeline', 'id_publisher'], 'integer'],
            [['title', 'description', 'poster_path'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_event' => 'Id Event',
            'title' => 'Title',
            'description' => 'Description',
            'id_location' => 'Id Location',
            'id_timeline' => 'Id Timeline',
            'poster_path' => 'Poster Path',
            'id_publisher' => 'Id Publisher',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoryTimelines()
    {
        return $this->hasMany(\app\models\HistoryTimeline::className(), ['id_event' => 'id_event']);
    }




}
