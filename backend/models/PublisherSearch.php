<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Publisher;

/**
* PublisherSearch represents the model behind the search form about `app\models\Publisher`.
*/
class PublisherSearch extends Publisher
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id_publisher', 'id_user'], 'integer'],
            [['name', 'phone'], 'safe'],
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
$query = Publisher::find();

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
            'id_publisher' => $this->id_publisher,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone', $this->phone]);

return $dataProvider;
}
}