<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BanerImages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baner-images-form form-inline">
    <?= \common\components\AlertMessageWidget::widget() ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'about')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->about)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/about.<?= $model->about; ?>?<?= rand() ?>" width="100%" height="100"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'products')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->products)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/products.<?= $model->products; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'brands')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->brands)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/brands.<?= $model->brands; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'services')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->services)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/services.<?= $model->services; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'events')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->events)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/events.<?= $model->events; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'contact_us')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->contact_us)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/contact_us.<?= $model->contact_us; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <br/>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-block btn-success btn-sm', 'style' => 'float:right;']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
