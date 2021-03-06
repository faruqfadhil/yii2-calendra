<?php
//created by faruq
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\controllers\base;

use app\models\Ticket;
    use backend\models\TicketSearch;
use yii\web\Controller;
use yii\web\HttpException;
use yii\helpers\Url;
use yii\filters\AccessControl;
use dmstr\bootstrap\Tabs;

/**
* TicketController implements the CRUD actions for Ticket model.
*/
class TicketController extends Controller
{


/**
* @var boolean whether to enable CSRF validation for the actions in this controller.
* CSRF validation is enabled only when both this property and [[Request::enableCsrfValidation]] are true.
*/
public $enableCsrfValidation = false;


/**
* Lists all Ticket models.
* @return mixed
*/
public function actionIndex($id_eventparams)
{
    $searchModel  = new TicketSearch;
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
* Displays a single Ticket model.
* @param integer $id_ticket
*
* @return mixed
*/
public function actionView($id_ticket)
{
\Yii::$app->session['__crudReturnUrl'] = Url::previous();
Url::remember();
Tabs::rememberActiveState();

return $this->render('view', [
'model' => $this->findModel($id_ticket),
]);
}

/**
* Creates a new Ticket model.
* If creation is successful, the browser will be redirected to the 'view' page.
* @return mixed
*/
public function actionCreate($id_eventparams)
{
$model = new Ticket;

try {
if ($model->load($_POST) && $model->save()) {
return $this->redirect(['view', 'id_ticket' => $model->id_ticket]);
} elseif (!\Yii::$app->request->isPost) {
$model->load($_GET);
}
} catch (\Exception $e) {
$msg = (isset($e->errorInfo[2]))?$e->errorInfo[2]:$e->getMessage();
$model->addError('_exception', $msg);
}
return $this->render('create', ['model' => $model,'id_eventparams' => $id_eventparams]);
}

/**
* Updates an existing Ticket model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id_ticket
* @return mixed
*/
public function actionUpdate($id_ticket)
{
$model = $this->findModel($id_ticket);

if ($model->load($_POST) && $model->save()) {
return $this->redirect(Url::previous());
} else {
return $this->render('update', [
'model' => $model,
]);
}
}

/**
* Deletes an existing Ticket model.
* If deletion is successful, the browser will be redirected to the 'index' page.
* @param integer $id_ticket
* @return mixed
*/
public function actionDelete($id_ticket)
{
try {
$this->findModel($id_ticket)->delete();
} catch (\Exception $e) {
$msg = (isset($e->errorInfo[2]))?$e->errorInfo[2]:$e->getMessage();
\Yii::$app->getSession()->addFlash('error', $msg);
return $this->redirect(Url::previous());
}

// TODO: improve detection
$isPivot = strstr('$id_ticket',',');
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
* Finds the Ticket model based on its primary key value.
* If the model is not found, a 404 HTTP exception will be thrown.
* @param integer $id_ticket
* @return Ticket the loaded model
* @throws HttpException if the model cannot be found
*/
protected function findModel($id_ticket)
{
if (($model = Ticket::findOne($id_ticket)) !== null) {
return $model;
} else {
throw new HttpException(404, 'The requested page does not exist.');
}
}
}
