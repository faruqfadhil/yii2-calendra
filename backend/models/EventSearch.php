<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Event;

/**
* EventSearch represents the model behind the search form about `app\models\Event`.
*/
class EventSearch extends Event
{
/**
* @inheritdoc
*/ 
public function rules()
{
return [
            [['tittle'], 'safe'],
];
}



/**
* Creates data provider instance with search query applied
*
* @param array $params
*
* @return ActiveDataProvider
*/
public function search($params)
{
$query = Event::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
'pagination' =>['pageSize' => 5],
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'tittle' => $this->tittle,
        ]);

      

return $dataProvider;
}

//function for publisher role 9 search their events 
public function search_publisher($params)
{
	 $id_usr = \Yii::$app->user->identity->id;
     $id_pub = Publisher::find()->andWhere('id_user= '.$id_usr)->One();
     $query =  Event::find()->andWhere('id_publisher= '.$id_pub->id)->andWhere('flag = 1');

$dataProvider = new ActiveDataProvider([
'query' => $query,
'pagination' =>['pageSize' => 5],
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'tittle' => $this->tittle,
        ]);
return $dataProvider;
}
}