<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace frontend\models\base;

use Yii;

/**
 * This is the base-model class for table "ticket".
 *
 * @property integer $id_ticket
 * @property integer $id_event
 * @property string $name
 * @property string $description
 * @property string $price
 * @property string $jumlah
 *
 * @property \frontend\models\Event $event
 * @property string $aliasModel
 */
abstract class Ticket extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ticket';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_event', 'name', 'description', 'price', 'jumlah'], 'required'],
            [['id_event', 'price', 'jumlah'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ticket' => 'Id Ticket',
            'id_event' => 'Id Event',
            'name' => 'Name',
            'description' => 'Description',
            'price' => 'Price',
            'jumlah' => 'Jumlah',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvent()
    {
        return $this->hasOne(\frontend\models\Event::className(), ['id' => 'id_event']);
    }




}
