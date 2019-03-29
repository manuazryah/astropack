<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Astropack Brands';
}
?>

<div id="brand_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/baner_images/brands.<?= $baner_image->brands ?>')">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Brand</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Services">Brand</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="brands">
        <div class="container">
            <?php
            if (!empty($brands)) {
                foreach ($brands as $brand) {
                    ?>
                    <div class="box">
                        <img src="<?= Yii::$app->homeUrl; ?>uploads/brands/<?= $brand->id ?>/image.<?= $brand->image ?>" alt="<?= $brand->brand_name ?>" class="img-fluid"/>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <section>

            </div>

