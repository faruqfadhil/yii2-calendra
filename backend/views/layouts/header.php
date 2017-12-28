<?php
use yii\helpers\Html;
use app\models\Pasien;
use app\models\Dokter;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i>
                        <span class="hidden-xs"><?=Yii::$app->user->identity->username?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                           

                            <?php
                                  if(\Yii::$app->user->identity->role == 7){
                                     $id_user =Yii::$app->user->identity->id;
                                    $id_logon= Pasien::find()->andWhere('id_user = '.$id_user)->one();
                                }else if(\Yii::$app->user->identity->role == 8){
                                     $id_user =Yii::$app->user->identity->id;
                                    $id_logon= Dokter::find()->andWhere('id_user = '.$id_user)->one();
                                }
                                
                                ?>
                                 <?php     if(\Yii::$app->user->identity->role == 7 || \Yii::$app->user->identity->role == 8 ){?>
                            <img src="<?php echo Yii::$app->urlManager->createUrl('../../backend/web/'.$id_logon->image); ?>" width="20px" height="auto" class="img-circle" alt="User Image"/>
                            <?php }?>
                            <p>
                                <?=Yii::$app->user->identity->username?>
                               <!--  <small>Member since Nov. 2012</small>
 -->                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <?php  if(\Yii::$app->user->identity->role == 7){?>
                                <?php
                                     $id_user =Yii::$app->user->identity->id;
                                    $id_pasien= Pasien::find()->andWhere('id_user = '.$id_user)->one();
                                ?>
                                 <?= Html::a(
                                    'Profile',
                                    ['/pasien/update','id_pasien'=>$id_pasien->id_pasien],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                                <?php }else if (\Yii::$app->user->identity->role == 8) {?>

                                 <?php
                                     $id_user =Yii::$app->user->identity->id;
                                    $id_dokter= Dokter::find()->andWhere('id_user = '.$id_user)->one();
                                ?>
                                 <?= Html::a(
                                    'Profile',
                                    ['/dokter/update','id_dokter'=>$id_dokter->id_dokter],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>

                                <?php } ?>

                                <!-- <a href="" class="btn btn-default btn-flat">Profile</a> -->
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
