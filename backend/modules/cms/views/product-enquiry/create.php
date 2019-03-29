<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProductEnquiry */

$this->title = 'Create Product Enquiry';
$this->params['breadcrumbs'][] = ['label' => 'Product Enquiries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>

            </div>
            <div class="panel-body">
                <?=  Html::a('<i class="fa fa-list"></i><span> Manage Product Enquiry</span>', ['index'], ['class' => 'btn btn-block btn-info btn-sm']) ?>
                <div class="product-enquiry-create">
                    <?= $this->render('_form', [
                    'model' => $model,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>

