<?php

namespace api\modules\v1\models {

    use \yii\db\ActiveRecord;
    /**
     * Country Model
     *
     * @author Budi Irawan <deerawan@gmail.com>
     */
    class Event extends ActiveRecord
    {
        public $upload;
        /**
         * @inheritdoc
         */
        public static function tableName()
        {
            return 'event';
        }

        /**
         * @inheritdoc
         */
        public static function primaryKey()
        {
            return ['id'];
        }

        /**
         * Define rules for validation
         */
        public function rules()
        {
            return [
                [['tittle', 'description', 'id_location','id_publisher','alamat','id_kategori'], 'required'],
                ['image', 'string'],
                [['id_publisher','alamat','id_kategori'],'safe'],
                [['upload'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            ];
        }

        public function beforeSave($insert)
        {
            if (!parent::beforeSave($insert)) {
                return false;
            }
            if($this->upload != null) {
                $this->upload->saveAs(\Yii::getAlias('@backend/web/uploads/event/' . $this->upload->baseName . '.' . $this->upload->extension));
                $this->image = 'uploads/event/'. $this->upload->baseName . '.' . $this->upload->extension;
                $this->flag = 1;
                return true;
            }else {
                $this->image = "";
            }
            return true;
        }


//
    }
}
