<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Timeline;

/**
* TimelineSearch represents the model behind the search form about `app\models\Timeline`.
*/
class TimelineSearch extends Timeline
{
/**
* @inheritdoc
*/
public function rules()
{
return [
            [['tanggal'], 'safe'],
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
$query = Timeline::find()->andWhere('id_event = '.$id_eventparams)->andWhere('flag=1');

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
            'tanggal' => $this->tanggal,
        ]);
return $dataProvider;
}
}