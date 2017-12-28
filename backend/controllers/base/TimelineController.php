<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\controllers\base;

use app\models\Timeline;
    use backend\models\TimelineSearch;
use yii\web\Controller;
use yii\web\HttpException;
use yii\helpers\Url;
use yii\filters\AccessControl;
use dmstr\bootstrap\Tabs;

/**
* TimelineController implements the CRUD actions for Timeline model.
*/
class TimelineController extends Controller
{


/**
* @var boolean whether to enable CSRF validation for the actions in this controller.
* CSRF validation is enabled only when both this property and [[Request::enableCsrfValidation]] are true.
*/
public $enableCsrfValidation = false;


/**
* Lists all Timeline models.
* @return mixed
*/ 
public function actionIndex($id_eventparams)
{
    $searchModel  = new TimelineSearch;
    $dataProvider = $searchModel->search($_GET,$id_eventparams);

Tabs::clearLocalStorage();

Url::remember();
\Yii::$app->session['__crudReturnUrl'] = null;

return $this->render('index', [
'dataProvider' => $dataProvider,
    'searchModel' => $searchModel,
    'id_eventparams' => $id_eventparams,
]);
}

/**
* Displays a single Timeline model.
* @param integer $id_timeline
*
* @return mixed
*/
public function actionView($id_timeline)
{
\Yii::$app->session['__crudReturnUrl'] = Url::previous();
Url::remember();
Tabs::rememberActiveState();

return $this->render('view', [
'model' => $this->findModel($id_timeline),
]);
}

/**
* Creates a new Timeline model.
* If creation is successful, the browser will be redirected to the 'view' page.
* @return mixed
*/
public function actionCreate($id_eventparams)
{
$model = new Timeline;

try {
if ($model->load($_POST) && $model->save()) {
return $this->redirect(['view', 'id_timeline' => $model->id]);
} elseif (!\Yii::$app->request->isPost) {
$model->load($_GET);
}
} catch (\Exception $e) {
$msg = (isset($e->errorInfo[2]))?$e->errorInfo[2]:$e->getMessage();
$model->addError('_exception', $msg);
}
return $this->render('create', ['model' => $model,'id_event' => $id_eventparams]);
}

/**
* Updates an existing Timeline model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id_timeline
* @return mixed
*/
public function actionUpdate($id_timeline)
{
$model = $this->findModel($id_timeline);

if ($model->load($_POST) && $model->save()) {
return $this->redirect(Url::previous());
} else {
return $this->render('update', [
'model' => $model,
]);
}
}

/**
* Deletes an existing Timeline model.
* If deletion is successful, the browser will be redirected to the 'index' page.
* @param integer $id_timeline
* @return mixed
*/
public function actionDelete($id_timeline)
{
try {
$this->findModel($id_timeline)->delete();
} catch (\Exception $e) {
$msg = (isset($e->errorInfo[2]))?$e->errorInfo[2]:$e->getMessage();
\Yii::$app->getSession()->addFlash('error', $msg);
return $this->redirect(Url::previous());
}

// TODO: improve detection
$isPivot = strstr('$id_timeline',',');
if ($isPivot == true) {
return $this->redirect(Url::previous());
} elseif (isset(\Yii::$app->session['__crudReturnUrl']) && \Yii::$app->session['__crudReturnUrl'] != '/') {
Url::remember(null);
$url = \Yii::$app->session['__crudReturnUrl'];
\Yii::$app->session['__crudReturnUrl'] = null;

return $this->redirect($url);
} else {
return $this->redirect(['index']);
}
}

/**
* Finds the Timeline model based on its primary key value.
* If the model is not found, a 404 HTTP exception will be thrown.
* @param integer $id_timeline
* @return Timeline the loaded model
* @throws HttpException if the model cannot be found
*/
protected function findModel($id_timeline)
{
if (($model = Timeline::findOne($id_timeline)) !== null) {
return $model;
} else {
throw new HttpException(404, 'The requested page does not exist.');
}
}
}
