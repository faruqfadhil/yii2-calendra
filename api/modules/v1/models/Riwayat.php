<?php

namespace api\modules\v1\models {

    use \yii\db\ActiveRecord;
    /**
     * Country Model
     *
     * @author Budi Irawan <deerawan@gmail.com>
     */
    class Riwayat extends ActiveRecord
    {
        /**
         * @inheritdoc
         */
        public static function tableName()
        {
            return 'riwayat';
        }

        /**
         * @inheritdoc
         */
        public static function primaryKey()
        {
            return ['id_riwayat'];
        }

        /**
         * Define rules for validation
         */
        public function rules()
        {
            return [
                [['id_riwayat', 'id_pasien', 'id_dokter'], 'required']
            ];
        }

//
    }
}
