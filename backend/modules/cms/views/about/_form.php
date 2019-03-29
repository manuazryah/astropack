<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form form-inline">
    <?= \common\components\AlertMessageWidget::widget() ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'sub_title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?=
            $form->field($model, 'about_company', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'our_vision')->textarea(['rows' => 5]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'our_mission')->textarea(['rows' => 5]) ?>
        </div>
        <div class='col-md-6 col-sm-12 col-xs-12 left_padd'>
            <?=
            $form->field($model, 'our_dealership_companies', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'preset',
            ])->label('Our Dealership Companies(Section1)')
            ?>
        </div>
        <div class='col-md-6 col-sm-12 col-xs-12 left_padd'>
            <?=
            $form->field($model, 'section2', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'preset',
            ])->label('Our Dealership Companies(Section2)')
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 540x360 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->image)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/about/about_image.<?= $model->image; ?>?<?= rand() ?>" width="150"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'video')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->video)) {
                    ?>
                    <video id="my-video" class="video-js" controls preload="auto" width="150"
                           poster="<?= Yii::$app->homeUrl ?>../uploads/about/about_image.<?= $model->image; ?>" data-setup="{}">
                        <source src="<?= Yii::$app->homeUrl ?>../uploads/about/about_video.<?= $model->image; ?>" type='video/mp4'>

                    </video>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-block btn-success btn-sm', 'style' => 'float:right;']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
