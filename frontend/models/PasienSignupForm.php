<?php
namespace frontend\models;

use frontend\components\NodeLogger;
use frontend\models\Customer;
use frontend\models\KategoriEvent;
use common\models\User;
use yii\base\Model;

/**
 * Signup form
 */
class PasienSignupForm extends Model
{

    public $name;
    public $phone;
    public $email;
    public $password;
    public $id_user;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => 'frontend\models\Customer', 'message' => 'This email address has already been taken.'],

            ['name', 'required'],
            ['name','string'],

            ['phone', 'required'],
            ['phone','string'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6]
 
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
         $user = new User();
         $user->username = $this->name;
         $user->setPassword($this->password);
         $user->generateAuthKey();
         $user->email = $this->email;
         $user->role = 10;
        if ($user->save()) {
             $query = new \yii\db\Query();
                    $showId = $query->select(['id'])
                        ->from('user')
                        ->orderBy(['id' => SORT_DESC])
                        ->limit(1)
                        ->all();
            foreach ($showId as $key => $value) {
                        $this->id_user = $value['id'];
                    }

            $customer = new Customer();

            $customer->email = $this->email;
            $customer->name = $this->name;
            $customer->phone = $this->phone;
            $customer->password = $this->password;
            $customer->id_user = $this->id_user;
             return $customer->save() ? $customer : null;

        }        
       
    }
}
