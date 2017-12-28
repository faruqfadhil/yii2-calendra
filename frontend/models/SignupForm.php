<?php
namespace frontend\models;

use frontend\components\NodeLogger;
use frontend\models\Publisher;
use common\models\User;
use yii\base\Model;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $name;
    public $phone;
    public $email;
    public $password;
    public $description;
    public $alamat;
    public $flag;
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
            ['email', 'unique', 'targetClass' => 'frontend\models\Publisher', 'message' => 'This email address has already been taken.'],

            ['name', 'required'],
            ['name','string'],

            ['phone', 'required'],
            ['phone','string'],

            ['description', 'required'],
            ['description','string'],

            ['alamat', 'required'],
            ['alamat','string'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

           
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
         $user->role = 9;
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

            $publisher = new Publisher();

            $publisher->email = $this->email;
            $publisher->name = $this->name;
            $publisher->phone = $this->phone;
            $publisher->description = $this->description;
            $publisher->alamat = $this->alamat;
            $publisher->flag = 1;
            $publisher->password = $this->password;
            $publisher->id_user = $this->id_user;


             return $publisher->save() ? $publisher : null;

        }  
    }
}
