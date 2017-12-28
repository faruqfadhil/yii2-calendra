<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/**
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
    * @var backend\models\EventSearch $searchModel
*/

$this->title =  'Events';
$this->params['breadcrumbs'][] = $this->title;

if (isset($actionColumnTemplates)) {
$actionColumnTemplate = implode(' ', $actionColumnTemplates);
    $actionColumnTemplateString = $actionColumnTemplate;
} else {
Yii::$app->view->params['pageButtons'] = Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']);
    $actionColumnTemplateString = "{view} {update} {delete}";
}
$actionColumnTemplateString = '<div class="action-buttons">'.$actionColumnTemplateString.'</div>';
?>
<div class="giiant-crud event-index">

    <?php
//             echo $this->render('_search', ['model' =>$searchModel]);
        ?>

    
    <?php \yii\widgets\Pjax::begin(['id'=>'pjax-main', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>

    <h1>
      
        <small>
            List
        </small>
    </h1>
    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']) ?>
        </div>

        <div class="pull-right">

                                                                                                                                                                    
            <?= 
            \yii\bootstrap\ButtonDropdown::widget(
            [
            'id' => 'giiant-relations',
            'encodeLabel' => false,
            'label' => '<span class="glyphicon glyphicon-paperclip"></span> ' . 'Relations',
            'dropdown' => [
            'options' => [
            'class' => 'dropdown-menu-right'
            ],
            'encodeLabels' => false,
            'items' => [
            [
                'url' => ['kabupaten/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' .  'Kabupaten',
            ],
                                [
                'url' => ['publisher/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' .  'Publisher',
            ],
                                [
                'url' => ['ticket/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' .  'Ticket',
            ],
                                [
                'url' => ['kategori-event/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . 'Kategori Event',
            ],
                                [
                'url' => ['timeline/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-right"></i> ' .  'Timeline',
            ],
                    
]
            ],
            'options' => [
            'class' => 'btn-default'
            ]
            ]
            );
            ?>
        </div>
    </div>

    <hr />
<div class="box box-warning">
   <div class="box-body">
    <div class="table-responsive">
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'pager' => [
        'class' => yii\widgets\LinkPager::className(),
        'firstPageLabel' => 'First',
        'lastPageLabel' => 'Last',
        ],
                    'filterModel' => $searchModel,
                'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
        'headerRowOptions' => ['class'=>'x'],
        'columns' => [
                [
            'class' => 'yii\grid\ActionColumn',
            'template' => $actionColumnTemplateString,
            'buttons' => [
                'view' => function ($url, $model, $key) {
                    $options = [
                        'title' => 'View',
                        'aria-label' =>  'View',
                        'data-pjax' => '0',
                    ];
                    return Html::a('<span class="glyphicon glyphicon-file"></span>', $url, $options);
                }
            ],
            'urlCreator' => function($action, $model, $key, $index) {
                // using the column name as key, not mapping to 'id' like the standard generator
                $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
                $params[0] = \Yii::$app->controller->id ? \Yii::$app->controller->id . '/' . $action : $action;
                return Url::toRoute($params);
            },
            'contentOptions' => ['nowrap'=>'nowrap']
        ],
         array(
                'attribute' => 'image',
                'format' => 'html',
                 'label' => 'Poster',
                'value'=>function($data) { 
                     return Html::img($data->image,
                    ['width' => '80px']);

                     },
            ),
            'tittle',
            'description:ntext',
            'alamat',
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
			    'class' => yii\grid\DataColumn::className(),
			    'attribute' => 'id_location',
                'label' => 'Kota',
			    'value' => function ($model) {
			        if ($rel = $model->getIdLocation()->one()) {
			            return Html::a($rel->nama, ['kabupaten/view', 'id_kab' => $rel->id_kab,], ['data-pjax' => 0]);
			        } else {
			            return '';
			        }
			    },
			    'format' => 'raw',
			],
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
			    'class' => yii\grid\DataColumn::className(),
			    'attribute' => 'id_publisher',
                'label' => 'Publisher',
			    'value' => function ($model) {
			        if ($rel = $model->getIdPublisher()->one()) {
			            return Html::a($rel->name, ['publisher/view', 'id' => $rel->id,], ['data-pjax' => 0]);
			        } else {
			            return '';
			        }
			    },
			    'format' => 'raw',
			],
			

			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
			    'class' => yii\grid\DataColumn::className(),
			    'attribute' => 'id_kategori',
                'label' => 'kategori event',
			    'value' => function ($model) {
			        if ($rel = $model->getIdKategori()->one()) {
			            return Html::a($rel->nama_event, ['kategori-event/view', 'id' => $rel->id,], ['data-pjax' => 0]);
			        } else {
			            return '';
			        }
			    },
			    'format' => 'raw',
			],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{detail}',
                'buttons' => [
                    'detail' => function ($url, $model) {
                        return Html::a("Atur Jadwal", ['/timeline/index', 'id_eventparams' => $model->id], ["class" => "btn btn-sm btn-danger"]);
                    }

                ]
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{detail}',
                'buttons' => [
                    'detail' => function ($url, $model) {
                        return Html::a("Atur Ticket", ['/ticket/index', 'id_eventparams' => $model->id], ["class" => "btn btn-sm btn-warning"]);
                    }

                ]
            ],
			
        ],
        ]); ?>
    </div>
</div>
</div>

</div>


<?php \yii\widgets\Pjax::end() ?>


