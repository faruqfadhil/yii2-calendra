<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Event;

/**
* EventSearch represents the model behind the search form about `frontend\models\Event`.
*/
class EventSearch extends Event
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id_event', 'id_location', 'id_timeline', 'id_publisher'], 'integer'],
            [['title', 'description', 'poster_path'], 'safe'],
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
public function search($params)
{
$query = Event::find();

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
            'id_event' => $this->id_event,
            'id_location' => $this->id_location,
            'id_timeline' => $this->id_timeline,
            'id_publisher' => $this->id_publisher,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'poster_path', $this->poster_path]);

return $dataProvider;
}
}