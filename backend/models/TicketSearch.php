<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ticket;

/**
* TicketSearch represents the model behind the search form about `app\models\Ticket`.
*/
class TicketSearch extends Ticket
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id_ticket', 'id_event', 'price'], 'integer'],
            [['name', 'description'], 'safe'],
];
}

/** 
* @inheritdoc
*/
public function scenarios()
{
// bypass scenarios() implementation in the parent class
return Model::scenarios();
}

/**
* Creates data provider instance with search query applied
*
* @param array $params
*
* @return ActiveDataProvider
*/
public function search($params,$id_eventparams)
{
$query = Ticket::find()->andWhere('id_event = '.$id_eventparams);

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id_ticket' => $this->id_ticket,
            'id_event' => $this->id_event,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description]);

return $dataProvider;
}
}