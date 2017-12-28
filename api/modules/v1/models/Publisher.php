<?php

namespace api\modules\v1\models {

    use \yii\db\ActiveRecord;
    /**
     * Country Model
     *
     * @author Budi Irawan <deerawan@gmail.com>
     */
    class Publisher extends ActiveRecord
    {
        /**
         * @inheritdoc
         */
        public static function tableName()
        {
            return 'publisher';
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
                [['name', 'phone', 'email','description','alamat'], 'required']
            ];
        }

//
    }
}
