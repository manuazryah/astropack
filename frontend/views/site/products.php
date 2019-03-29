
<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Astropack Products';
}
?>

<div id="products_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/baner_images/products.<?= $baner_image->products ?>')">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Products</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Services">Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="products">
        <div class="self_container container">
            <!-- <div class="main_head">
              <div class="sub-head">Astropackgulf</div>
              <div class="head">Our Products</div>
            </div> -->

            <div class="row">
                <div class="col-lg-3">
                    <?= \common\components\BrandtLinksWidget::widget(['brand' => $brand]) ?>
                </div>
                <div class="col-lg-9 right-sec">
                    <div class="row">
                        <?php
                        if (!empty($products)) {
                            foreach ($products as $product) {
                                ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="pro-box">
                                        <div class="img-box">
                                            <a href="#!"><img src="<?= Yii::$app->homeUrl; ?>uploads/products/<?= $product->id ?>/image.<?= $product->image ?>" alt="<?= $product->product_title ?>" class="img-fluid"/></a>
                                            <div class="box-foot">
                                                <h4 class="pro-title"><?= $product->product_title ?></h4>
                                                <h5 class="pro-sub"><?= $product->sub_title ?></h5>
                                            </div>
                                            <div class="pro-info">
                                                <div class="title">
                                                    <h5 class="head"><?= $product->product_title ?></h5>
                                                    <p class="sub"><?= $product->sub_title ?></p>
                                                </div>
                                                <p><?= $product->description ?></p>
                                                <?= Html::a('Read More', ['/site/product-details', 'product' => $product->canonical_name], ['class' => 'btn-border']) ?>
                                                <?= Html::a('Enquire Now', ['/site/product-enquiry', 'product' => $product->canonical_name], ['class' => 'btn-border']) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>


        </div>
    </section>

</div>
