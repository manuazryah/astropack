
<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($meta_title) && $meta_title != '') {
    $this->title = $meta_title;
} else {
    $this->title = 'Astropack Products';
}
?>
<script type="text/javascript">
    $(document).ready(function () {
        var enq = '<?php echo $enquiry; ?>';
        if (enq == 1) {
            $(document).scrollTop($(".enquiry-form").offset().top + (-90));
        }
    });
</script>
<style>
    .form-control:disabled, .form-control[readonly] {
        background-color: #ffffff;
        opacity: 1;
    }
</style>
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
            <div class="row">
                <div class="col-lg-3">
                    <?= \common\components\ProductLinksWidget::widget(['id' => $product_details->id]) ?>
                </div>
                <div class="col-lg-9 right-sec">
                    <div class="service-content">
                        <?php
                        if (!empty($product_details)) {
                            ?>
                            <div class="common-title">About Products</div>

                            <h2 class="service-title"><?= $product_details->product_title ?></h2>

                            <div id="img-box"><img src="<?= Yii::$app->homeUrl; ?>uploads/products/<?= $product_details->id ?>/image.<?= $product_details->image ?>" class="img-fluid" alt="<?= $product_details->product_title ?>"/></div>
                            <?= $product_details->detailed_description ?>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="enquiry-form">
                        <form action="" method="post" class="product-enquiry">
                            <div class="form-head prod-success">Quick Contact</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control" required="" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control" required="" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="phone" id="phone" name="phone" class="form-control" required="" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="product" name="product" class="form-control" required="" placeholder="Company" value="<?= $product_details->product_title ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="message" required="" placeholder="Message" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </section>

</div>
