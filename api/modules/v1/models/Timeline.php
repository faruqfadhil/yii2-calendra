<?php

namespace api\modules\v1\models {

    use \yii\db\ActiveRecord;
    /**
     * Country Model
     *
     * @author Budi Irawan <deerawan@gmail.com>
     */
    class Timeline extends ActiveRecord
    {
        /**
         * @inheritdoc
         */
        public static function tableName()
        {
            return 'timeline';
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
                [['id_event','name', 'description', 'tanggal'], 'required']
            ];
        }
        public function beforeSave($insert)
        {
            if (!parent::beforeSave($insert)) {
                return false;
            }else{
                $this->flag=1;
                return true;
            }
            return true;
        }

//
    }
}
