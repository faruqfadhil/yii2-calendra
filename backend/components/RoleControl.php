<?php
/**
 * Created by PhpStorm.
 * User: Irfan
 * Date: 11/16/16
 * Time: 15:27
 */

namespace backend\components;


use app\models\Action;
use app\models\Role;
use ReflectionClass;
use yii\filters\AccessControl;
use yii\helpers\Inflector;

class RoleControl
{
    static function getAllowedAction()
    {
        //return parent::beforeAction($action); // TODO: Change the autogenerated stub

        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => RoleControl::getAction(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => RoleControl::getRoleAction(),
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    static function getAction(){

        $arrAction[]=null;

        $namespace ="backend\\controllers\\base\\".\ucfirst(\Yii::$app->controller->id)."Controller";
        if(class_exists($namespace)) {
            $ref = new ReflectionClass($namespace);
            $method = $ref->getMethods();

            foreach ($method as $func){

                $funcName =  Inflector::camel2words($func->getName());
                $sub =  substr($funcName,0,6);

                if($sub=="Action" && $func->getName()!=="actions"){
                    // echo $func->getName();
                    array_push($arrAction,strtolower(str_replace("action","",$func->getName())));

                }
            }
        }

        return $arrAction;

    }

    static function getRoleAction(){
        $iduser = \Yii::$app->user->id;
        $contoller = ucfirst(\Yii::$app->controller->id);

        $actions = Action::find()
            ->leftJoin('menu', 'menu.id = action.menu')
            ->where([
                'menu.controller'=>$contoller,
                'action.role'=>$iduser
            ])
            ->all();

        $role_action[]=null;
        foreach ($actions as $action){
            array_push($role_action,$action->action);
        }

        return $role_action;
    }
}