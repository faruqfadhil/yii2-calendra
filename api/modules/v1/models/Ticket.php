<?php

namespace api\modules\v1\models {

    use \yii\db\ActiveRecord;
    /**
     * Country Model
     *
     * @author Budi Irawan <deerawan@gmail.com>
     */
    class Ticket extends ActiveRecord
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
        public static function primaryKey()
        {
            return ['id_ticket'];
        }

        /**
         * Define rules for validation
         */
        public function rules()
        {
            return [
                [['name', 'description', 'price','jumlah','kategori','id_event'], 'required']
            ];
        }

//
    }
}
