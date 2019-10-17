<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectShearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>

<!--/ News Grid Star /-->
<div class="col-md-4">
    <div class="card-box-a " style="height: 330px; width: 330px">
        <div class="img-box-a" >
            <?=Html::img("@web/uploads/{$model->image}",['width' => '100%','height' => '100%'])?>
        </div>
        <div class="card-overlay">
            <div class="card-overlay-a-content">
                <div class="card-body-a">
                    <a href="<?= Url::toRoute('project/'. $model->id)?>" class="link-a">Click here to view
                        <span class="ion-ios-arrow-forward"></span>
                    </a>
                </div>
                <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                        <li>
                            <a href="<?= Url::toRoute('project/'. $model->id)?>"><h3 class="card-info-title"><?=$model->title?></h3></a>
                            <span><?=$model->name ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
