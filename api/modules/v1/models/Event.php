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
                [['title', 'description', 'id_location','image'], 'required']
            ];
        }

//
    }
}
